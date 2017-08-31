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
$email=mysqli_real_escape_string($connection,$_POST['email']);

if($email<>""){
$check_user_data = mysqli_query($connection,"SELECT * FROM customer WHERE email = '$email'") or die(mysql_error());
if(mysqli_num_rows($check_user_data) == 0)
{echo '<script language="javascript">alert("This email address does not exist. Please try again.")</script>;';unset($email);}
else {$row = mysqli_fetch_array($connection,$check_user_data);$email=$row['email'];

$to = $email;
$subject = "Here are your login details . . . ";
$message = "This is in response to your request for login details as administrator of your PSB™.\n\nYour User Name is ".$row['username']."\n\nYour User Password is ".$row['pass']."";
$headers = "From: ".$psbhostemailaddress."\r\nReply-To: ".$email;

if(mail($to, $subject, $message, $headers))
{echo "<center><font face='Verdana' size='2'><b><br><br><br><br><br>THANK YOU</b> <br>Your passwords are posted to your email address. Please check your mail soon.</center>";}

else{echo "<center><font face='Verdana' size='2' color=red>There is some system problem in sending login details to your address. <br><br><input type='button' value='Retry' onClick='history.go(-1)'></center></font>";} 

}}

?>