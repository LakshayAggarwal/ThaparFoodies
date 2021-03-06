<html>
<head>
<meta charset="utf-8">
<title>Login Page</title>
<style type="text/css">
body {
background-color: #f4f4f4;
color: #000000;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 16px;
line-height: 1.5em;
}
body {
background: url("Food-Cups.jpg") no-repeat fixed;
-webkit-background-size:cover;
-moz-background-size:cover;
-o-background-size:cover;
background-size:cover;
}
a { text-decoration: none; }
h1 { font-size: 1.2em; }
h1 {font-family: Courier; }
h1, p {
margin-bottom: 10px;
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
form fieldset input[type="text"], input[type="password"] {
background-color: #e5e5e5;
border: none;
border-radius: 5px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 14px;
height: 50px;
outline: none;
padding: 0px 10px;
margin: -3px 5px;
width: 300px;
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
width: 300px;
margin: -3px 5px;
-webkit-appearance:none;
}
form fieldset a {
color: #000000 ;
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
.ffg {
font-family: "Open Sans",Arial,Helvetica,sans-serif;
font-size: 16px;
line-height: 1.5em;
float:right;
}
.panel-footer {
padding:10px;
font-size: 12px;
}
</style>
</head>
<body>
<div id="login">
<h1><strong>&nbsp;&nbsp;&nbsp;Welcome!</strong> Please login.</h1>
<form action="login_processing.php" method="post">
<fieldset>
<p><input type="text" id="roll" name='roll' placeholder="Rollno." required></p>
<p><input type="password" id='pass' name='pass' placeholder="Password" required></p>
<p display:inline;>
<label class="checkbox pull-left">
<input type="checkbox" value="remember-me">Remember me
<a href="#" class="ffg">Forgot Password?</a></p>
</label>
<p><input type="submit" name='login' value="Login"></p>
<a class="panel-footer">Not Registered?</a> <a href="signup.php" >Register here</a>
</fieldset>
</form> 
</div>
<!-- end login -->
</body>
</html>
