<html>
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
<html>
<head>
<link rel="stylesheet" href="css/owl.carousel.css">
        <!-- bootstrap.min css -->
		<link rel="stylesheet" href="css/bootstrap1.min.css">
        <!-- Font-awesome.min css -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/animate1.min.css">
		<link rel="stylesheet" href="css/main1.css">
        <!-- Responsive Stylesheet -->
		<link rel="stylesheet" href="css/responsive.css">
		<link href='https://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
</head>
<body>
<?php
		function getip(){
	$ip=$_SERVER['REMOTE_ADDR'];
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} 
return $ip;
}
function getpro($i){
global $connection;	
$get_pro="select* from menu where mid like '$i%'";
$run_pro=mysqli_query($connection,$get_pro);
while($row_pro=mysqli_fetch_array($run_pro)){
$pro_id=$row_pro['mid'];
$pro_name=$row_pro['mname'];
$pro_rate=$row_pro['rate'];
?>
<li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
         <div class='item'>
            <div class='item-title'>
                                            <h2><?php echo $pro_name ?></h2>
                                            <span>
											&#8377;
											<?php echo $pro_rate ?> &nbsp;&nbsp;<?php
											echo "<a href='menu3.php?addtocart=$pro_id'>
											<button>Add to Cart</button></a>";
											?>
											</span>
										</div>
                                       
                                    </div>
</li>

<?php
	
 }
}
function cart(){
if(isset($_GET['addtocart'])){
global $connection;
$ip=getip();
$cid=$_GET['addtocart'];
$get_pro="select* from menu where mid=$cid";
$run_pro=mysqli_query($connection,$get_pro);
$row_pro=mysqli_fetch_array($run_pro);
$pro_name=$row_pro['mname'];
$pro_rate=$row_pro['rate'];
$check_pro="select* from cart where ip='$ip' AND cid='$cid'";
$run_check=mysqli_query($connection,$check_pro);
if(mysqli_num_rows($run_check)>0){
	echo"";
echo "<script>alert('This product is already in the cart')</script>";
			echo "<script>window.open('menu3.php','_self')</script>";
	}
else{
	$insert_pro="insert into cart(ip,cid,mname,rate,qty) values('$ip','$cid','$pro_name',$pro_rate,1)";
$run_pro=mysqli_query($connection,$insert_pro);
echo "<script>alert('Product added')</script>";
		
echo "<script>window.open('menu3.php','_self')</script>";
    }

	}
}
?>
</body>
</html>