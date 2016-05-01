<?php
session_start();
if(!$_SESSION['UserLoggedIn'])
{
	header('location: userLogin.php');
}

?>

<head>
<meta charset="UTF-8" />
<title>Facturacion</title>
<link rel="stylesheet" type="text/css" href="css/stilo.css">
</head>
<body>
<h1>Factura</h1>
		<div id="menuheader">
		<ul>
			<li><a href='inventario/index.php'>Catalogo</a></li>
			<li><a href='facturacion.php'>Facturacion Electronica</a></li>
			<li><a href='userComplains.php'>Quejas </a></li>
			<li><a href='userLogout.php' class='logout'>Logout  <?php  echo "  ".$_SESSION['username']; ?> </a></li>
		</ul>
		</div>
<center>
<p>Introduce la Fecha de tu compra que deseas facturar</p>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type = "date" name = "dia"></td>
</tr>
<tr>
<td><button type="submit" name="btn">Facturar</button></td>
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
 $usuario_id = mysqli_real_escape_string($conn,$_SESSION['username']);

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
?>
