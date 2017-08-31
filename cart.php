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
session_start();
include("addcart.php");
?>
<html>
<head>
<title>Cart</title>
<link rel="stylesheet" href="css/style.css" media="all"/>
<link rel="stylesheet" href="cart.css" />
</head>
<body>
<!--main container starts-->
<div class="main_wrapper">
<!--header starts-->  
<!--content_wrapper starts-->
    <h1 align="center">Food Court</h1>
	<h2 align="center">shop healthy, eat healthy</h2>
      <div id="products_box"> 
		
         <form action="" method="post" enctype="multipart/form-data">
	     <table class="table table-striped" >
 	
		 <tr>
		 <th>Remove</th>
		 <th>Products</th>
		 <th>Rate</th>
		 </tr>
		 <?php  
		 global $connection;
		$total=0;
		$ip=getip();
		$sel_price="select * from cart where ip='$ip'";
		$run_price=mysqli_query($connection,$sel_price);
		while($p_price=mysqli_fetch_array($run_price)){
		$pro_id=$p_price['cid'];
		$pro_price="select * from cart where cid='$pro_id'";
		$run_pro_price=mysqli_query($connection,$pro_price);
		while($pp_price= mysqli_fetch_array($run_pro_price)){
		$product_price=array($pp_price['rate']);
		$product_name=$pp_price['mname'];
		
		$single_price=$pp_price['rate'];
			
		$values=array_sum($product_price);
		$total+=$values;  
	
		 
		 
		 
	?>
		 
		 <tr>
		 <td><input type="checkbox" name="remove[]" value="<?php echo $pro_id;?>"/></td>
		 <td><?php echo $product_name;?><br>
		 </td>
	     <td colspan="2"><?php echo "&#8377;".$single_price;?></td>
		 </tr>
	 
		 <?php }}?> 
         <tr >
		 <td colspan="2"><b>Total amount:</b></td>
		 <td colspan="2"><?php echo "&#8377;".$total;?></td>
		 </tr>
		 <tr>
		 </tr>
		 <tr>
		 <td><input class="btn btn-default"type="submit" name="update_cart" value="Update cart"/></td>
	     <td><input class="btn btn-default"type="submit" name="continue" value="Continue shopping"/></td>
		 <td><button class="btn btn-default"><a href="checkout.php" style="text-decoration:none ;color:black;">Checkout</a></button/></td>
		 </tr>
         </table>
		 </form>
<?php 

if(isset($_POST['remove'])){
	
	$ip=getip();
	if(isset($_POST['update_cart'])){
	foreach($_POST['remove'] as $remove_id){
	$delete_product="delete from cart where cid='$remove_id' AND ip='$ip'";
    $run_delete=mysqli_query($connection,$delete_product);
	if($run_delete){
			echo"<script>window.open('cart.php','_self')</script>";	
			}
		}
		}	}
	?>
	<?php
	 if(isset($_POST['continue'])){
		echo"<script>window.open('menu3.php','_self')</script>";	 
	}	
	 ?>
         </div>
     
    <!--content wrapper  ends-->

    <div id="footer"><h2 style="text-align:center;padding-top:30px;"></h2></div>
</div>
    <!--main container ends-->
  
</body>
</html>
