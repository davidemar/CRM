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
	echo "<h2> Dia del Reporte: ".$fecha."</h2>";
	echo "<h2> Made By: ".$_SESSION['username']."</h2>";
	echo"</div>";
	while($row = mysqli_fetch_assoc($results1)){
		
		$month = date("m",strtotime($row['dia']));
		
		$mes = getMonthText($month);

		echo "<table class = 'table'>";
		echo '<link href="css/estilo.css" rel="stylesheet" type="text/css" />';
		echo "<tr class = 'table row'><td>Mes</td><td>Usuarios</td></tr>";
		echo "<tr class = 'table row'><td>".$mes."</td><td>".$row['users']."</td></tr>";

		//echo"<tr class = 'tableRow'><td>Usuario</td><td>Compania</td><td>Contraseña</td><td>email</td><td>Nombre</td><td>Apellido  Paterno</td><td>Apellido materno</td><td>calle</td><td>Numero</td><td>Colonia</td><td>Ciudad</td></tr>";
		//echo "<tr class = 'tableRow'> <td>".$row['usuario_id']."</td><td>".$row['ncompania']."</td><td>".$row['contrasena']."</td><td>".$row['email']."</td><td>".$row['pnombre']."</td><td>".$row['papellido']."</td><td>".$row['sapellido']."</td><td>".$row['calle']."</td><td>".$row['numero']."</td><td>".$row['colonia']."</td><td>".$row['ciudad']."</td></tr>";
		echo"</table>";

	}

}else{
		echo "0 results";
	}

//<------------------------------------------------------------------------------------------------------------------->

	//el cliente que mas ha comprado en el mes es el cliente del mes  y su total de compra 

?>