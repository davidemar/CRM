<?php
session_start();
if(!$_SESSION['UserLoggedIn'])
{
	header('location: /./userLogin.php');
	include_once('../dbCatalog.php');
}

?>
	<head>
		<meta charset=utf-8>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Inventario</title>
		<script src="javascript/jquery.js"></script>
		<script>
			$(document).ready(function(){
  			$('nav ul li').mouseover(function()
   			$(this).find('.submenu').css('display','block');
			);
  			$('nav ul li').mouseout;
   			$(this).find('.submenu').hide();
			});
		</script>
	</head>

	<body>
		<h1>Maquinaria</h1>
		<div id="menuheader">
		<ul>
			<li><a href="sye.php">Secado y enfriamiento</a></li>
			<li><a href="manejo.php">Manejo de sólidos y tratamientos térmicos especiales</a></li>
			<li><a href="depuracion.php">Depuración de gases</a></li>
			<li><a href="../userHome.php">Menu</a></li>
			<li><a href='../userLogout.php' class='logout'>Logout  <?php  echo "  ".$_SESSION['username']; ?> </a></li>
		</ul>
		</div>

		<h2>Tratamiento de gases escape</h2>

		<table>
			<form action = 'secconv.php' method = 'post'>
			<tr>
				<td>
					<img src="img/venturi_135x135_i.jpg"><br><input type="radio" name="producto" value="Lavado"/>Lavador de Gases Venturi</br>
				</td>
			</tr>
			<tr>
				<td><button type="submit" name ="submit">Comprar</button></td>
			</tr>
		</form>
		</table>
	</body>
</HTML>