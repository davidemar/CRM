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
	echo "<table class = 'table'>";
	echo "<tr class = 'table row'><td>Mes</td><td>Usuarios</td></tr>";
	
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
	echo "<table class = 'table'>";
	echo '<link href="css/estilo.css" rel="stylesheet" type="text/css" />';
	echo "<tr class = 'table row'><td>Mes</td><td>Compras</td></tr>";
	


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
	echo "<Table><tr>";
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

?>