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
			<li><a href="sye.php">Secado y enfriamiento</a></li>
			<li><a href="manejo.php">Manejo de sólidos y tratamientos térmicos especiales</a></li>
			<li><a href="depuracion.php">Depuración de gases</a></li>
			<li><a href='../userLogout.php' class='logout'>Logout  <?php  echo "  ".$_SESSION['username']; ?> </a></li>
		</ul>
		</div>

		<h2>Manejo de sólidos</h2>

		<table> 
			<form method = "post" action = 'ape.php'>	
			<tr>
				<td>
					<img src="img/mezclador_135x135_i.jpg"><br><input type="radio" name="producto" value="Mezclador_de_doble_Eje"/>Mezclador/Granulador de doble eje DWG</br>
				</td>
				<td>
					<img src="img/alveolar_135x135_i.jpg"><br><input type="radio" name="producto" value="Valvulas_rotativas_autolimpiantes"/>Válvulas rotativas autolimpiantes</br>
				</td>
				<td>
					<img src="img/vises_135x135_i.jpg"><br><input type="radio" name="producto" value="Vises_"/>Vises de transporte especiales</br>
				</td>
			<tr>
				<td>
					<img src="img/mill_sifter_135x135_g.jpg"><br><input type="radio" name="producto" value="Molino"/>Molino tamizador</br>
				</td>
				<td>
					<img src="img/bunker_135x135_i.jpg"><br><input type="radio" name="producto" value="Silo_d"/>Silo dosificador</br>
				</td>
				<td>
					<img src="img/desterronador_135x135_i.jpg"><br><input type="radio" name="producto" value="Dester"/>Desterrador</br>
				</td>
			</tr>
			<tr>
				<td><button type="submit" name ="submit">Comprar</button></td>
			</tr>
			<form>
		</table>
	</body>
</HTML>