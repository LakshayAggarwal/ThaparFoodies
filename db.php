<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "secret";
$dbname = "thaparfoodies";
$prefix = "";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(mysqli_connect_errno()) {
	die("Could not connect database").mysqli_connect_errno()."(".($mysqli_connect_errno(). ")"
	);
}	
?>
<html>
<head>
<title>Databases</title>
</head>
<body>
</body>
</html>
<?php
mysqli_close($connection);
?>