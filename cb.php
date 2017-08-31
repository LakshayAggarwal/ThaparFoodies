<?php
session_start();
if(!isset($_SESSION['name']))
{
	header('location:login1.php');
	die('<a href="login1.php">Login Again</a>');
}
$_SESSION['channabhatura']=$_POST['cb'];
//header('location:cart.php');


?>