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

		<h2>Elementos especiales</h2>

		<table> 	
			<tr>
				<td>
					<img src="img/kit-portacuchillas10-cuchillas.jpg" width=135px height=135px><br><input type="checkbox" name="cuch" value="1">Cuchillas rascadoras</br>
				</td>
				<td>
					<img src="img/4977-2811207.jpg" width=135px height=135px><br><input type="checkbox" name="lf" value="1">Compensadores de dilatación</br>
				</td>
			</tr>
		</table>
	</body>
</HTML>