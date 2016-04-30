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

		<h2>Secado y enfriamiento</h2>

		<table> 	
			<tr><td><a href="secconv.php">Secaderos Convectivos</a></td></tr>
			<tr><td><a href="seccont.php">Secaderos de Contacto</a></td></tr>
			<tr><td><a href="enfconv.php">Enfriadores Convectivos</a></td></tr>
			<tr><td><a href="enfcont.php">Enfriadores de Contacto</a></td><tr>
			</tr>
		</table>
	</body>
</HTML>