<?php
session_start();
if(!$_SESSION['UserLoggedIn'])
{
	header('location: userLogin.php');
}

include_once('includes/functions.php');
echo "<div class = 'menu' id='menu'>";
echo "<a href='inventario/index.html'>Catalogo</a>";
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
?>