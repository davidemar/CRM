<?php
session_start();
if(!$_SESSION['UserLoggedIn'])
{
	header('location: /./userLogin.php');
}
if(isset($_POST["submit"]))
{
	//include_once('./includes/functions.php');
	if(!@file_exists('../includes/functions.php') ) {
    	echo 'can not include';
	} else {
   			include('../includes/functions.php');
		}

	


	$conn = GetConnection();
	$orden_id = (intval(getSizeOfRowOrden_id()) + 1);
	$string = mysqli_real_escape_string($conn,$_POST['producto']);
	$idproduct = substr($string,0,6);
	$product = mysqli_real_escape_string($conn,$_POST['producto']);
	$usuario = mysqli_real_escape_string($conn,$_SESSION['username']);
	$impuesto = .10;
	//GET THE PRODUCT INFO FROM THE DATABSE 
			$results = getInfoProduct($idproduct);
			$row = mysqli_fetch_assoc($results);
	//GET THE PRECIO	
	$precio = $row['precio']."</br>";	
	$subtotal = (($precio * $impuesto) + $precio);
	$fecha = getTodaysDate();
	$cant  = 1; 
	$costo_envio = 1000;
	$total = ($costo_envio + $subtotal);


	






	$query = "INSERT into orden(orden_id,idproduct,producto,usuario,impuesto,precio,subtotal,fecha,cant,costo_envio,total) values('$orden_id','$idproduct','$product','$usuario',
		'$impuesto','$precio','$subtotal','$fecha','$cant','$costo_envio','$total');";
	echo $query;
	setOrden($query);

}

?>
<!DOCTYPE HTML>
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
			<form method = "post" action = "seccont.php">
			<tr>
				
				<td><img src="img/haz_tubular_135x135_i.jpg"><br><input type="radio" name="producto" value="hazTubular"/>Secadero de haz tubular</br></td>
				<td><img src="img/rodillo_135x135_g.jpg"><br><input type="radio" name="producto" value="rodillo"/>Secadero de rodillo</br></td>
				<td><img src="img/paddle_135x135_g.jpg"><br><input type="radio" name="producto" value="secEndDob"/>Secadero/Enfriador de doble eje de palas GPD</br></td>
			</tr>
			<tr>
				<td><button type="submit" name ="submit">Comprar</button></td>
			</tr>
			</form>	
		</table>
	</body>
</HTML>