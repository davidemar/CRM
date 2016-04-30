<DOCTYPE! HTML>
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
		</ul>
		</div>

		<h2>Manejo de sólidos</h2>

		<table> 	
			<tr>
				<td>
					<img src="img/mezclador_135x135_i.jpg"><br><input type="checkbox" name="lf" value="1">Mezclador/Granulador de doble eje DWG</br>
				</td>
				<td>
					<img src="img/alveolar_135x135_i.jpg"><br><input type="checkbox" name="lf" value="1">Válvulas rotativas autolimpiantes</br>
				</td>
				<td>
					<img src="img/vises_135x135_i.jpg"><br><input type="checkbox" name="lf" value="1">Vises de transporte especiales</br>
				</td>
			<tr>
				<td>
					<img src="img/mill_sifter_135x135_g.jpg"><br><input type="checkbox" name="lf" value="1">Molino tamizador</br>
				</td>
				<td>
					<img src="img/bunker_135x135_i.jpg"><br><input type="checkbox" name="lf" value="1">Silo dosificador</br>
				</td>
				<td>
					<img src="img/desterronador_135x135_i.jpg"><br><input type="checkbox" name="lf" value="1">Desterrador</br>
				</td>
			</tr>
		</table>
	</body>
</HTML>