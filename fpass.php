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

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
<HEAD>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1252">
<TITLE>Password Recoveryâ€”Forgotten Password</TITLE>
<meta name="description" content="Password Recoveryâ€”Forgotten Password">
<meta name="keywords" content="Password Recovery,forgot password,forgotten password,php,javascript, dhtml, DHTML">
<style type="text/css">
BODY {margin-left:0; margin-right:0; margin-top:0;text-align:left;background-color:#bbb}
p, li {font:13px Verdana; color:black;text-align:left}
h1 {font:bold 28px Verdana; color:black;text-align:center}
h2 {font:bold 24px Verdana;text-align:center}
h3 {font:bold 15px Verdana;}
.main {position:absolute;width:700px;top:150px;left:150px;padding:30px;text-align:left;border:8px groove blue;background-color:#ddd}
</style>

<div class='main'>

<p><center><B><h2>Password Recovery</h2></B></center></p>

<form name="MyForm" method="POST" onsubmit="return validateemail()" action="fp.php">
<label for='email'><b>Email address: </b><input type="text" name="email" id='email' value="" size="30" maxlength='30'></label><br><br>
<center><input type="submit" value="Recover my Password"><br><br></center>
<center><input type="reset" value="Reset"><br><br></center>
</form>
</div>

<script language="javascript">

function validateemail(){

var ck_email = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/; 
if (document.MyForm.email.value.search(ck_email)==-1)
{alert("That email address is not valid.");
return false}

return true}

</script>

</body></html>
