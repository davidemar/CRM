<?php
session_start();


if(!$_SESSION['UserLoggedIn'])
{
	include_once("includes/userForms.php");
	include_once('includes/functions.php');
	
	if($_POST['submitted'])
	{
		if(ProcessUserLogin($_POST))
		{
			header('location: UserHome.php');
		}else{	
			include_once("includes/header.php");
			DisplayErrorMessage('Login credentials incorrect!');
			echo "<div class='formDiv'>";
			
			UserDisplayLoginForm();
			echo "</div>";
		}
	}else{
		include_once("includes/header.php");
		echo "<div class='formDiv'>";
		UserDisplayLoginForm();
		echo "</div>";
	}
}else{
	header("location: userHome.php");
}


include_once("includes/footer.php");
?>
