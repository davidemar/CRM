<?php
if(isset($_POST['btn-signup']))
{

include_once('functions.php');
 $conn = GetConnection();
 $fechaActual = date("y-m-d");
 $usuario_id = mysqli_real_escape_string($conn,$_POST['usuario_id']);
 $ncompania = mysqli_real_escape_string($conn,$_POST['ncompania']);
 $contrasena = mysqli_real_escape_string($conn,$_POST['contrasena']);
 $email = mysqli_real_escape_string($conn,$_POST['email']);
 $pnombre = mysqli_real_escape_string($conn,$_POST['pnombre']);
 $papellido = mysqli_real_escape_string($conn,$_POST['papellido']);
 $sapellido = mysqli_real_escape_string($conn,$_POST['sapellido']);
 $calle = mysqli_real_escape_string($conn,$_POST['calle']);
 $numero = mysqli_real_escape_string($conn,$_POST['numero']);
 $colonia = mysqli_real_escape_string($conn,$_POST['colonia']);
 $ciudad = mysqli_real_escape_string($conn,$_POST['ciudad']);


 
$Squery = "INSERT INTO usuario(usuario_id,ncompania,contrasena,email,pnombre,papellido,sapellido,calle,numero,colonia,ciudad,dia) VALUES('$usuario_id','$ncompania','$contrasena','$email','$pnombre','$papellido','$sapellido','$calle','$numero','$colonia','$ciudad','$fechaActual')";
 
   
if(setClientData($Squery) === true){
	header('location: /./userLogin.php');
}


}	
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Login & Registration System</title>





</head>
<body>



<center>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="usuario_id" maxlength = '6'  placeholder="Nombre de Usuario" required /></td>
</tr>

<tr>
<td><input type="text" name="ncompania" maxlength = '15'  placeholder="Nombre de la compañía " required /></td>
</tr>

<tr>
<td><input type="password" name="contrasena" placeholder="Contraseña" maxlength = '14'  required /></td>
</tr>



<tr>
<td><input type="email" name="email" placeholder="Correo electronico" maxlength = '20'  required /></td>
</tr>

<tr>
<td><input type="text" name="pnombre" placeholder="Nombre" maxlength = '15'  required /></td>
</tr>

<tr>
<td><input type="text" name="papellido" placeholder="Apellido paterno" maxlength = '15'  required /></td>
</tr>

 <tr>
<td><input type="text" name="sapellido" placeholder="Apellido Materno" maxlength = '15'  required /></td>
</tr>

<tr>
<td><input type="text" name="calle" placeholder="calle" maxlength = '10'  required /></td>
</tr>

<tr>
<td><input type="number" maxlength = '11'  step = '1' name="numero" placeholder="User's address number"  required /></td>
</tr>

<tr>
<td><input type="text" name="colonia" placeholder="Colonia" maxlength = '10'  required /></td>
</tr>

<tr>
<td><input type="text" name="ciudad" placeholder="Ciudad" maxlength = '15'  required /></td>
</tr>

<tr>
<td><button type="submit" name="btn-signup">Registrarse</button></td>
</tr>




</table>
</form>
</div>
</center>
</body>