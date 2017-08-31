function cart(){
	if(isset($_GET['add_cart'])){
		global $con;
		$ip=getip();
$pro_id=$_GET['add_cart'];
$check_pro="select* from cart where ip_add='$ip' AND p_id='$pro_id'";
$run_check=mysqli_query($con,$check_pro);
if(mysqli_num_rows($run_check)>0){
	echo"";
echo "<script>alert('This product is already in the cart')</script>";
			echo "<script>window.open('index.php','_self')</script>";



	}
else{
	$insert_pro="insert into cart(p_id,ip_add,qty) values('$pro_id','$ip',1)";
$run_pro=mysqli_query($con,$insert_pro);
echo "<script>alert('Product added')</script>";
		
echo "<script>window.open('index.php','_self')</script>";
    }

	}
}

