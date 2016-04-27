<?php
session_start();
unset($_SESSION['UserLoggedIn']);
//session_destroy();
header('location: userlogin.php');
?>