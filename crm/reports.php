<?php
session_start();

if(!$_SESSION['AdminLoggedIn'])
{
	header('location: index.php');
}

include_once("includes/functions.php");
include_once("includes/views.php");
include_once("includes/header.php");

echo "<div id='menu'>";
echo "<a href='contact.php'>Nuevo  Cliente</a>";
echo " | ";
echo "<a href='deleteClient.php'>Eliminar Cliente</a>";
echo " | ";
echo "<a href='lists.php'>Home</a>";
echo " | ";
echo "<a href='logout.php' class='logout'>Logout</a>";
echo "</div>";
$fecha = date('y-m-d');

//<-----------------------------USUARIOS POR MES-------------------------------------->
$results1 = getUsersPerMonth();
if(mysqli_num_rows($results1) > 0){
	
	echo "<div id = reporte1>";
	echo "<h1> Reportes de los nuevos usuarios por mes</h1>";
	echo '<link href="css/estilo.css" rel="stylesheet" type="text/css" />';
	echo "<h2> Dia del Reporte: ".$fecha."</h2>";
	echo "<h2> Made By: ".$_SESSION['username']."</h2>";
	echo"</div>";
	echo '<table align="center" width="30%" border="0">';
	echo "<tr class = 'table row'><td><b>Mes</b></td><td><b>Usuarios</b></td></tr>";
	
	while($row = mysqli_fetch_assoc($results1)){
		
		$month = date("m",strtotime($row['dia']));
		
		$mes = getMonthText($month);

		
		
		echo "<tr class = 'table row'><td>".$mes."</td><td>".$row['users']."</td></tr>";
		

	}	

}else{
		echo "0 results";
	}
	echo"</table>";	
	unset($mes,$row,$month,$results1);


//<------------------------------------------------------------------------------------------------------------------->

	//el cliente que mas ha comprado en el mes es el cliente del mes  y su total de compra 

//<------------------------------------------------------------------------------------------------------------------->
// Annual Sales 		
	echo "<div id = reporte2>";
	echo "<h1> Reportes de Compras Anuales</h1>";
	$results2 = getAnualSales();
	$firstResults = getAnualSales();
	$ventaMayor = 0.0;
	$primero = mysqli_fetch_assoc($firstResults);
	$fechaMayor = $primero['fecha'];
	$fechaMenor = $primero['fecha'];
	$ventaMenor = $primero['ventas'];
	$primerComprador = $primero['usuario'];	
	echo '<table align="center" width="30%" border="0">';
	echo '<link href="css/estilo.css" rel="stylesheet" type="text/css" />';
	echo "<tr class = 'table row'><td><b>Mes</b></td><td><b>Compras</b></td></tr>";
	


	while($row2 = mysqli_fetch_assoc($results2)){
		$monthh = date("m",strtotime($row2['fecha']));
		$ventaMayor = bigger($ventaMayor,$row2['ventas']);
		$ventaMenor = smaller($ventaMenor,$row2['ventas']);
		if($ventaMayor == $row2['ventas'])
		{	
			$fechaMayor = $row2['fecha'];
		}else if($ventaMayor == ''){
			$fechaMayor = 'no hay fecha mayor';
		}

		if($ventaMenor == $row2['ventas'])
		{
			$fechaMenor = $row2['fecha'];
		}else if($ventaMenor == ''){
			$fechaMenor = 'no hay fecha menor';
		}


		
		echo "<tr class = 'table row'><td>".getMonthText($monthh)."</td><td>".$row2['ventas']."</td></tr>";
		
	}
	echo"</table>";
	echo "</div>";

	
	$mesMayor = date("m",strtotime($fechaMayor));
	$mesMenor = date("m",strtotime($fechaMenor));
	$usuarioMayor = bestClient();
	echo "<p>Mejor mes en compras: ".getMonthText($mesMayor);
	echo "<p>Peor mes en compras: ".getMonthText($mesMenor);
	echo "<p>El cliente que mas compras hizo es: ". $usuarioMayor;
	unset($mesMayor,$mesMenor,$usuarioMayor);
	unset($results2,$firstResults,$monthh,$row2,$ventaMenor,$ventaMayor,$fechaMenor,$fechaMayor,$primero,$fechaMenor,$primerComprador);
	///---------------------------------------VIP COSTUMBERS ////////////////////////////////////////////////////////
	echo "<div id = reporte3>";
	
	echo "<h1> Reportes de Clientes VIP</h1>";
	$usuarios = getAllUsers();
	$total = 0.0;
	echo '<table align="center" width="30%" border="0"><tr>';
	while($users = mysqli_fetch_assoc($usuarios)){
		echo"<td>";
		echo "<table class = 'table'>";
		echo "<p>".$users['usuario']."</p>";
		echo "<tr class = 'table row'><td><b>Mes</b></td><td><b>Ventas</b>	</td></tr>";
	$ventas = getSalesByMonthForUser($users['usuario']);
	while ($row = mysqli_fetch_assoc($ventas)){
		$mes = date("m",strtotime($row['fecha']));
		echo "<tr class = 'table row'><td>".getMonthText($mes)."</td><td>".$row['ventas']."</td></tr>";
		$total += $row['ventas']; 
		

		
	}
	echo "<tr class = 'table row'><td><b>Total</b></td><td>".$total."</td></tr>";
	if($total>100000.0){
		setVipUser($users['usuario']);
		echo "VIPCostumer";
	}
	$total = 0.0;
	echo"</table>";
	echo "</td>";
}	
	echo "</tr></table>";

	echo"</div>";
	unset($usuarios,$total,$users,$ventas,$total,$row);

	//--------------------------------Facturacion----------------------//

?>
<head>
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="css/stilo.css">
</head>
<body>
<h1>E-Ticket</h1>
<center>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type = "date" name = "dia"></td>
</tr>

<tr>Ingresa el dia y el usuario
<td><input type = "text" name = "usuario" ></td>
</tr>

<tr>
<td><button type="submit" name="btn">Obtener el E-Ticket</button></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>
<?php
if(isset($_POST['btn']))
{
	include_once('includes/functions.php');

$fecha = $_POST['dia'];
 $conn = GetConnection();
 $usuario_id = $_POST['usuario'];

	 $ticket = rand (0 , 20000);
	
$query = "select orden.producto,producto.descripcion,orden.cant,orden.impuesto, orden.total from orden,producto where orden.idproduct = producto.producto_id and orden.fecha = '$fecha' and orden.usuario = '$usuario_id'";

$results = getTicketInfo($query);
$total = o;
$cantidad = 0;

 if(mysqli_num_rows($results)>0){
 	echo "<head>";
	echo' <meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/>';
	echo "</head>";
 	echo "<div id = factura>";
	echo "<h1> E-Ticket</h1>";
	echo "<table class = 'table'>";
	echo '<link href="css/style.css" rel="stylesheet" type="text/css" />';
	echo "<tr><h2> Fecha de la factura: ".$fecha."</h2></tr>";

	echo "<tr>Nombre del comprador:  ".$usuario_id."</tr></br>";
	echo "<tr>Direccion: Puerto Industrial #107, Colonia Jardin del Eden carretera mante-tampico</br></tr>";
	echo "<tr>Telefono: 83310008272</tr>";
	echo "<tr>";

	echo"<tr><td>Cantidad</td><td>Producto</td><td>Descripcion del producto</td><td>Total</td></tr>";
	while($row = mysqli_fetch_assoc($results)){
		
 		echo"<tr><td>".$row['cant']."</td><td>".$row['producto']."</td><td>".$row['descripcion']."</td><td>".$row['total']."</td></tr>";	
 		$total += $row['total'] ;
 		$cantidad ++;

 	}
 	echo "</tr>";
	echo "<tr class = 'father'>";
	echo "<tr><td>Cantidad De objetos Comprados</td><td>IVA</td><td>Total</td></tr>";
	echo "<tr><td>".$cantidad."</td><td>10%</td><td>".$total."</td></tr>";
	echo "</tr>";
	echo "</table>";

}
echo "</div>";
}

unset($fecha,$conn,$usuario_id,$ticket,$total,$cantidad,$results,$query,$row);

//-------------------------------------------Description of a producto--------------------------//

	echo "<div id = reporte4>";
	?>
	<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="css/stilo.css">
	</head>
	<body>
	<h1>Descripcion de un producto</h1>
	<center>
	<div id="login-form">
	<form method="post">
	<table align="center" width="30%" border="0">
	
	<tr>Ingresa el id del producto
	<td><input type = "text" name = "product_id" ></td>
	</tr>

	<tr>
	<td><button type="submit" name="btn">Obtener Informacion del producto</button></td>
	</tr>
	</table>
	</form>
	</div>
	</center>
	</body>
	</html>
	
	<?php
	if(isset($_POST['btn']))
{
	$producto = getProductData($_POST['product_id']);

	echo '<table align="center" width="30%" border="0">';
	echo "<tr class = 'table row'><td><b>IdProduct</b></td><td><b>Precio</b></td><td><b>Compañia</td></b><td><b>Cantidad en stock</td></b><td><b>Descripcion</td></b></tr>";
	
	while($products = mysqli_fetch_assoc($producto)){
	echo "<tr><td>".$products['producto_id']."</td><td>".$products['precio']."</td><td>".$products['ncompania']."</td><td>".$products['enstock']."</td><td>".$products['descripcion']."</td></tr>";

}	
	echo "</table>";

	
}
unset($producto,$products);

//-----------------------------------------------Suppliers--------------//
?>
<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="css/stilo.css">
	</head>
	<body>
	<h1>Lista de Proveedores</h1>
	<center>
	</div>
	</center>
	</body>
	</html>
	<?php 
	$supliers = getAllSupliers();
	echo '<table align="center" width="30%" border="0">';
	echo "<tr><td><b>Proveedor</b></td><td><b>e-mail</b></td><td><b>horario</b></td></tr>";
	while($row = mysqli_fetch_assoc($supliers))
		{
			echo "<tr><td>".$row['proveedor_id']."</td><td>".$row['email']."</td><td>".$row['horario']."</td></tr>";		

		}
		echo "</table>";
?>