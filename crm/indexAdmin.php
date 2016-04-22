<?php
session_start();


if(!$_SESSION['AdminLoggedIn'])
{
	include_once("includes/forms.php");
	include_once('includes/functions.php');
	
	if($_POST['submitted'])
	{
		if(ProcessLogin($_POST))
		{
			
			
			header('location: lists.php');
		}else{
			include_once("includes/header.php");
			DisplayErrorMessage('Login credentials incorrect!');
			echo "<div class='formDiv'>";
			
			DisplayLoginForm();
			echo "</div>";
		}
	}else{
		include_once("includes/header.php");
		echo "<div class='formDiv'>";
		DisplayLoginForm();
		echo "</div>";
	}
}else{
	header("location:lists.php");
}

