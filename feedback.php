<?php
 
$to='thaparfoodies@gmail.com';
$subject='this the feedback of thaparfoodies';
  
$name   = $_POST['fname'];
$email  = $_POST['femail']; 
$message= $_POST['message'];
  
$message = <<<EMAIL

Hi!  My name is $name.

$message

from $name
Oh ya, my email is $email

EMAIL;

$header = '$email';
   
   if($_POST){
	   mail($to,$subject,$message,$header);
	   $feedback='Thanks for your feedback..';
	   echo $feedback;
	   }

  
?>