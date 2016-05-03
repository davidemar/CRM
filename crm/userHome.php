<?php
session_start();
if(!$_SESSION['UserLoggedIn'])
{
	header('location: userLogin.php');
}
/*
include_once('includes/functions.php');

echo "<div class = 'menu' id='menu'>";
echo "<a href='inventario/index.php'>Catalogo</a>";
echo " | ";
echo "<a href='facturacion.php'>Facturacion Electronica</a>";
echo " | ";
echo "<a href='userComplains.php' class='logout'>Quejas </a>";
echo " | ";
echo "<a href='equipoVendido.php' class='logout'>Registro de equipo vendido </a>";
echo " | ";
echo $_SESSION['username'];
echo " | ";
echo "<a href='userLogout.php' class='logout'>Logout </a>";


echo "</div>";
*/
?>
<head>
<meta charset="UTF-8" />
<title>Facturacion</title>
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
<center>
</body>
