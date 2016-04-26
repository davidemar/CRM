<?php
session_start();
if(!$_SESSION['AdminLoggedIn'])
{
	header('location: index.php');
}



if(isset($_POST['btn-signup']))
{

include_once('includes/functions.php');
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
 
setClientData($Squery);
/*
 ?>
        <script>alert('successfully registered ');</script>
        <?php
 
 */
}	
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Login & Registration System</title>





</head>
<body>

<div id='menu'>


<a href='deleteClient.php'>Eliminar el cliente</a>


<a href="lists.php">Repoortes</a>
    
<a href='logout.php' class='logout'>Logout</a>
</div>

<center>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="usuario_id" maxlength = '6'  placeholder="User Name" required /></td>
</tr>

<tr>
<td><input type="text" name="ncompania" maxlength = '15'  placeholder="User's company name " required /></td>
</tr>

<tr>
<td><input type="password" name="contrasena" placeholder="User's Password" maxlength = '14'  required /></td>
</tr>



<tr>
<td><input type="email" name="email" placeholder="User's Email" maxlength = '20'  required /></td>
</tr>

<tr>
<td><input type="text" name="pnombre" placeholder="User's name" maxlength = '15'  required /></td>
</tr>

<tr>
<td><input type="text" name="papellido" placeholder="User's Last Name" maxlength = '15'  required /></td>
</tr>

 <tr>
<td><input type="text" name="sapellido" placeholder="User's second Last Name" maxlength = '15'  required /></td>
</tr>

<tr>
<td><input type="text" name="calle" placeholder="User's street name" maxlength = '10'  required /></td>
</tr>

<tr>
<td><input type="number" maxlength = '11'  step = '1' name="numero" placeholder="User's address number"  required /></td>
</tr>

<tr>
<td><input type="text" name="colonia" placeholder="User's neighborhood name" maxlength = '10'  required /></td>
</tr>

<tr>
<td><input type="text" name="ciudad" placeholder="User's city" maxlength = '15'  required /></td>
</tr>

<tr>
<td><button type="submit" name="btn-signup">Registrar el cliente</button></td>
</tr>




</table>
</form>
</div>
</center>
</body>
</html>