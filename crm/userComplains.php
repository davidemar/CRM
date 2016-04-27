<?php
session_start();
if(!$_SESSION['UserLoggedIn'])
{
	header('location: userLogin.php');
}



if(isset($_POST['btn-signup']))
{

include_once('includes/functions.php');
$fechaActual = date("y-m-d");	
 $conn = GetConnection();
 $usuario_id = mysqli_real_escape_string($conn,$_SESSION['username']);
 $fecha = mysqli_real_escape_string($conn,$fechaActual);
 $queja = mysqli_real_escape_string($conn,$_POST['queja']);



	$queja_id = (intval(getSizeOfRow()) + 1);
	echo $queja_id;	



$Squery = "INSERT INTO queja(queja_id,usuario_id,fecha,queja) VALUES('$queja_id','$usuario_id','$fecha','$queja')";
 
setComplain($Squery);
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
<title>Centro de quejas</title>





</head>
<body>

<div id='menu'>






<a href='userLogout.php' class='logout'>Logout</a>
</div>

<center>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">




<tr>
<td><textarea rows = "4" name = "queja"cols = "50" placeholder ="Escribe tu queja"></textarea>
</tr>






<tr>
<td><button type="submit" name="btn-signup">Mandar queja</button></td>
</tr>




</table>
</form>
</div>
</center>
</body>
</html>