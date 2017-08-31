<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "secret";
$dbname = "thaparfoodies";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(mysqli_connect_errno()) {
	die("Could not connect database").mysqli_connect_errno()."(".($mysqli_connect_errno(). ")");
}
ob_start();
session_start();	
?>
<html>
<head>
<title>LOGIN</title>
</head>
<body>
<?php
if(isset($_POST['login'])){
$roll = $_POST['roll'];
$pass = $_POST['pass'];
$query ="SELECT * FROM customer WHERE roll='$roll' AND pass='$pass'";
$result=mysqli_query($connection,$query);

$row=mysqli_fetch_assoc($result);

$_SESSION["name"]=$row['name'];
$_SESSION["roll"]=$row['roll'];
exit(header("Location: thaparfoodies2.php"));
}
?>

<?php
mysqli_free_result($result);
?>
</body>
</html>
<?php
mysqli_close($connection);
?>