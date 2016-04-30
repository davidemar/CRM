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

		<h2>Secaderos de contacto</h2>

		
		<table>
			<tr>
				<td><img src="img/haz_tubular_135x135_i.jpg"><br><input type="checkbox" name="hazTubular" value="1">Secadero de haz tubular</br></td>
				<td><img src="img/rodillo_135x135_g.jpg"><br><input type="checkbox" name="rodillo" value="1">Secadero de rodillo</br></td>
				<td><img src="img/paddle_135x135_g.jpg"><br><input type="checkbox" name="secEndDob" value="1">Secadero/Enfriador de doble eje de palas GPD</br></td>
			</tr>
		</table>
	</body>
</HTML>