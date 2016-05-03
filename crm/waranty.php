<?php
session_start();
if(!$_SESSION['UserLoggedIn'])
{
	header('location: userLogin.php');
}
?>
<head>
<meta charset="UTF-8" />
<title>Garantia</title>
<link rel="stylesheet" type="text/css" href="css/stilo.css">
</head>
<body>
<h1>Bienvenid@ <?php  echo "  ".$_SESSION['username']; ?>  </h1>
		<div id="menuheader">
		<ul>
			<li><a href='inventario/index.php'>Catalogo</a></li>
			<li><a href='facturacion.php'>Facturacion Electronica</a></li>
			<li><a href='userComplains.php'>Quejas </a></li>
			<li><a href='waranty.php'>Garantia </a></li>
			<li><a href='userLogout.php' class='logout'>Logout  <?php  echo "  ".$_SESSION['username']; ?> </a></li>
		</ul>
		</div>

		<form method="post">
		<table align="center" width="30%" border="0">
		
		<tr>Porfavor Introduce el nombre del proveedor que le vendío el producto para que pueda contactarlo
		<td><input type = "text" name = "proveedor" ></td>
		</tr>

		<tr>
		<td><button type="submit" name="btn">Obtener datos del proveedor</button></td>
		</tr>
		</table>
		</form>


<center>
</body>

<?php

	if(isset($_POST['btn']))
{	
	include_once("includes/functions.php");
	$x = getSuplier($_POST['proveedor']);
	echo '<table align="center" width="30%" border="0">';
	echo "<tr><td><b>Proveedor</b></td><td><b>e-mail</b></td><td><b>horario</b></td></tr>";
		while($row = mysqli_fetch_assoc($x))
		{
			echo "<tr><td>".$row['proveedor_id']."</td><td>".$row['email']."</td><td>".$row['horario']."</td></tr>";		
		}
		echo "</table>";


}	
	
	

?>