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

		<h2>Secaderos convectivos</h2>

		<table>
			<tr>
				<td><img src="img/spiral_flash_135x135_i.jpg"><br><input type="checkbox" name="flash" value="1">Flash</br></td>
				<td><img src="img/lecho_fluido_135x135_i.jpg"><br><input type="checkbox" name="lecho" value="1">Lecho fluído</br></td>
				<td><img src="img/tambor_135x135_i.jpg"><br><input type="checkbox" name="tambor" value="1">Tambores rotativos</br></td>
			</tr>
		</table>
	</body>
</HTML>