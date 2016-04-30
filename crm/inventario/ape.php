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

		<h2>Aparatos térmicos especiales</h2>

		<table> 	
			<tr>
				<td>
					<img src="img/peladora_135x135_g.jpg"><br><input type="checkbox" name="pela" value="1">Peladora por vapor</br>
				</td>
				<td>
					<img src="img/cepillado_135x135_g.jpg"><br><input type="checkbox" name="cep" value="1">Banda de cepillado</br>
				</td>
				<td>
					<img src="img/jet_cooler_135x135_g.jpg"><br><input type="checkbox" name="jet" value="1">Cocedor de inyección</br>
				</td>
			</tr>
			
		</table>
	</body>
</HTML>