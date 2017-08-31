<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "secret";
$dbname = "thaparfoodies";
$prefix = "";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(mysqli_connect_errno()) {
	die("Could not connect database").mysqli_connect_errno()."(".($mysqli_connect_errno(). ")");
}
ob_start();	
?>
<html>
<head>
<title>SignUp</title>
</head>
<body>
<?php
if(isset($_POST['signup'])){
$name = $_POST['name'];
$roll = $_POST['roll'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];

$query ="INSERT INTO customer(name,roll,email,pass)VALUES('{$name}','{$roll}','{$mail}','{$pass}')";
$result=mysqli_query($connection,$query);
if($result)
	header ("Location: login1.php");
else
	die("Database query falied." . mysqli_error($connection));
}

?>
</body>
</html>
<?php
mysqli_close($connection);
?>