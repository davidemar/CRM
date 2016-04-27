<?php
session_start();
unset($_SESSION['AdminLoggedIn']);
//session_destroy();
header('location: index.php');
?>