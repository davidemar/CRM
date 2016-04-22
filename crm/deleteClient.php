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
 $usuario_id = mysqli_real_escape_string($conn,$_POST['usuario_id']);
 $email = mysqli_real_escape_string($conn,$_POST['email']);



$Squery = "DELETE FROM usuario where usuario_id = '$usuario_id' and email = '$email'";
 

 
deleteClientData($Squery);

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


<a href='contact.php'>New Client</a>


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
<td><input type="email" name="email" placeholder="User's Email" maxlength = '20'  required /></td>
</tr>



<tr>
<td><button type="submit" name="btn-signup">Delete the Client</button></td>
</tr>




</table>
</form>
</div>
</center>
</body>
</html>