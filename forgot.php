<?php 
error_reporting(0);
$email=$_POST['email'];
if($_POST['submit']=='Send')
{
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "secret";
$dbname = "thaparfoodies";
$prefix = "";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(mysqli_connect_errno()) {
	die("Could not connect database").mysqli_connect_errno()."(".($mysqli_connect_errno(). ")");
}
$query="select * from customer where user_email='$email'";
$result=mysqli_query($connection,$query) or die(error);
if(mysqli_num_rows(connection,$result))
{
echo "User exist";
}
else
{
echo "No user exist with this email id";
}
}
?>
<form action="forgot.php" method="post">
Enter you email ID: <input type="text" name="email">
<input type="submit" name="submit" value="Send">
</form>