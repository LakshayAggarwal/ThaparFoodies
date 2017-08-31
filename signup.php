 <html>
<head>
<meta charset="utf-8">
<title>Signup Page</title>
<style type="text/css">
body {
background-color: #f4f4f4;
color: #000000;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 16px;
line-height: 1.5em;
}
body  {
background: url("signup.jpg") no-repeat fixed;

-webkit-background-size:cover;
-moz-background-size:cover;
-o-background-size:cover;
background-size:cover;

 
}
a { text-decoration: none; }
h1 { font-size: 1.2em; }
h1 {font-family: Courier; }
h1, p {
margin-bottom: 15px;
}
strong {
font-weight: bold;
}
.uppercase { text-transform: uppercase; }

/* ---------- LOGIN ---------- */
#login {
margin: 50px auto;
width: 300px;
}
form fieldset input[type="text"], input[type="password"], input[type="email"], input[type="number"] {
background-color: #e5e5e5;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 14px;
height: 50px;
outline: none;
padding: 0px 10px ;
margin:-3px;
width: 280px;
-webkit-appearance:none;
}
form fieldset input[type="submit"] {
background-color: #008dde;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #f4f4f4;
cursor: pointer;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
height: 50px;
text-transform: uppercase;
padding: 0px 10px ;
margin:-3px;
width: 280px;
-webkit-appearance:none;
}
form fieldset a {
color: #5a5656;
font-size: 10px;
}
form fieldset a:hover { text-decoration: underline; }
.btn-round {
background-color: #5a5656;
border-radius: 50%;
-moz-border-radius: 50%;
-webkit-border-radius: 50%;
color: #f4f4f4;
display: block;
font-size: 12px;
height: 50px;
line-height: 50px;
margin: 30px 125px;
text-align: center;
text-transform: uppercase;
width: 50px;
}
.facebook-before {
background-color: #0064ab;
border-radius: 3px 0px 0px 3px;
-moz-border-radius: 3px 0px 0px 3px;
-webkit-border-radius: 3px 0px 0px 3px;
color: #f4f4f4;
display: block;
float: left;
height: 50px;
line-height: 50px;
text-align: center;
width: 50px;
}
.facebook {
background-color: #0079ce;
border: none;
border-radius: 0px 3px 3px 0px;
-moz-border-radius: 0px 3px 3px 0px;
-webkit-border-radius: 0px 3px 3px 0px;
color: #f4f4f4;
cursor: pointer;
height: 50px;
text-transform: uppercase;
width: 250px;
}
.twitter-before {
background-color: #189bcb;
border-radius: 3px 0px 0px 3px;
-moz-border-radius: 3px 0px 0px 3px;
-webkit-border-radius: 3px 0px 0px 3px;
color: #f4f4f4;
display: block;
float: left;
height: 50px;
line-height: 50px;
text-align: center;
width: 50px;
}
.twitter {
background-color: #1bb2e9;
border: none;
border-radius: 0px 3px 3px 0px;
-moz-border-radius: 0px 3px 3px 0px;
-webkit-border-radius: 0px 3px 3px 0px;
color: #f4f4f4;
cursor: pointer;
height: 50px;
text-transform: uppercase;
width: 250px;
}

.ffg {
font-family: "Open Sans",Arial,Helvetica,sans-serif;
font-size: 16px;
line-height: 1.5em;
float:right;
}
</style>
</head>
<body>
<div id="login">
<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Register Yourself!</h1>
<form action="signup_processing.php" method="post" onsubmit="return validation();">
<fieldset>
	<p><input type="text" id="name" name="name" placeholder="Name" required /></p>
	<p><input type="number" id="roll" name="roll" placeholder="Rollno." required /></p>
	<p><input type='email' id='mail' name='mail' placeholder='Email' required /></p>
	<p><input type="password" id="pass" name="pass" placeholder="Password" required /></p>
	<p><input type="password" id="cpass" name="cpass" placeholder="Confirm Password" required /></p>
	<input type="submit" name="signup" value="signup"/>
</fieldset>
</form> 
</div>
<script>
function validation() {
    var n=document.getElementById("name").value;
    var r=document.getElementById("roll").value;
    var p=document.getElementById("pass").value;
    var cp=document.getElementById("cpass").value;
    var em = document.getElementById("mail");
    var letters = /^[a-zA-Z/ ]+$/;
    var filter = /^([a-zA-Z0-9])+\@(([a-zA-Z0-9])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(!n.match(letters))
	{
		alert("Name should contain only alphabets!");
		return false;
	}
    else if(isNaN(r))
	{
		alert("Roll Number must be a numeric value!");
		return false;
	}
    if(p!=cp)
    alert("Passwords do not match");
    if (!filter.test(em.value)) {
    alert('Please provide a valid email address');
    email.focus;
    return false;
 }
 else
 {
	alert("You registered successfully.");
 }
	 
}
</script>
</body>
</html>
