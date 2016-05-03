<?php
if(isset($_POST["submit"]))
{
	
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
	$query;
	setOrden($query);

}
?>