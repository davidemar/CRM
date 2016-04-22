<?php
session_start();
if(!$_SESSION['UserLoggedIn'])
{
	header('location: userLogin.php');
}



if(isset($_POST['btn-signup']))
{

include_once('includes/functions.php');

 $conn = GetConnection();
 $usuario_id = mysqli_real_escape_string($conn,$_POST['usuario_id']);
 $fecha = mysqli_real_escape_string($conn,$_POST['fecha']);
 $queja = mysqli_real_escape_string($conn,$_POST['queja']);

 $valor = 'SELECT queja_id from queja';
 $queja_id = getSizeOfColumn($valor);
 echo $queja_id;

$Squery = "INSERT INTO queja(queja_id,usuario_id,fecha,queja) VALUES('$queja_id',$usuario_id','$fecha,'$queja')";
 
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


<a href='deleteClient.php'>Delete A Client</a>


<a href="lists.php">Reports</a>
    
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
<td><input type="date" name="fecha" maxlength = '15'  placeholder="Insert the day of your complain" required /></td>
</tr>

<tr>
<td><textarea rows = "4" name = "queja"cols = "50" placeholder ="Insert the complain"></textarea>
</tr>






<tr>
<td><button type="submit" name="btn-signup">Register the Client</button></td>
</tr>




</table>
</form>
</div>
</center>
</body>
</html>