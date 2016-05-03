<?php
session_start();
if(!$_SESSION['UserLoggedIn'])
{
	header('location: /./userLogin.php');
}
include_once('../dbCatalog.php');
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
			<li><a href="../userHome.php">Menu</a></li>
			<li><a href="sye.php">Secado y enfriamiento</a></li>
			<li><a href="manejo.php">Manejo de sólidos y tratamientos térmicos especiales</a></li>
			<li><a href="depuracion.php">Depuración de gases</a></li>
			<li><a href='../userLogout.php' class='logout'>Logout  <?php  echo "  ".$_SESSION['username']; ?> </a></li>
		</ul>
		</div>

		<h2>Aparatos térmicos especiales</h2>

		<table> 
			<form method = "post" action = 'ape.php'>	
			<tr>
				<td>
					<img src="img/peladora_135x135_g.jpg"><br><input type="radio" name="producto" value="Peladora_De_Vapor"/>Peladora por vapor</br>
				</td>
				<td>
					<img src="img/cepillado_135x135_g.jpg"><br><input type="radio" name="producto" value="Banda_De_Cepillado"/>Banda de cepillado</br>
				</td>
				<td>
					<img src="img/jet_cooler_135x135_g.jpg"><br><input type="radio" name="producto" value="Cocedor_De_Inyeccion"/>Cocedor de inyección</br>
				</td>
			</tr>
			<tr>
				<td><button type="submit" name ="submit">Comprar</button></td>
			</tr>
		</form>
			
		</table>
	</body>
</HTML>