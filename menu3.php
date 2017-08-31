<?php include 'addcart.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Menu</title>
		<meta name="description" content="Menu">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!-- CSS
        ================================================ -->
        <!-- Owl Carousel -->
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
	<!-- 
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar navbar-fixed-top navbar-inverse ">
            <div class="container-fluid">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
					<!-- logo -->
                    <a class="navbar-brand" href="#">
	  <a href="Thaparfoodies1.html" />
	  <img class="img-responsive" style="max-width:210px; margin-top: 0px;" alt="Thaparfoodies" src="title.png" width="580px" height="160px"/>
	  </a>
	  </a>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="Navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li class="current"><a href="#breakfast">Breakfast</a></li>
                        <li><a href="#chinese">Chinese Snacks</a></li>
                        <li><a href="#south">South Indian</a></li>
                        <li><a href="#beverages">Beverages</a></li>
						<li><a href="login1.php"><i class="fa fa-2x fa-sign-in"></i><sup> SIGN IN</sup></a></li>
						<li><a href="cart.php"><i class="fa fa-2x fa-shopping-cart"></i><sup> CART</sup></a></li>

		            </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
<h6 align="right"><a href="cart.php">cart</a></h6>
		<?php cart(); ?>

 <section id="price">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="heading wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">our <span>MENU</span> your <span>PRICE</span></h1>
                        <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms" style="font-family: 'Shadows Into Light', cursive; font-size:22px;">Good Friends, Good Food, Good Times!! </p>
<div class="pricing-list">
                            <div id="breakfast" class="title">
                                <h3><span style="font-family: 'Kaushan Script', cursive;">Breakfast</span></h3>
                            </div>
							<ul>
                                <?php getpro(1); ?>
							</ul>
							<span id="top-link-block" class="hidden">
    <a href="#top" class="well well-sm" onclick="$('html,body').animate({scrollTop:0},'slow');return false;">
        <i class="glyphicon glyphicon-menu-up"></i> 
    </a>
</span>
                        <div class="pricing-list">
                            <div id="chinese" class="title">
                                <h3><span style="font-family: 'Kaushan Script', cursive;">Chinese Snacks</span></h3>
                            </div>
                            <ul>
								<?php getpro(2); ?>
                            </ul>
                            
<div class="pricing-list">
                            <div id="south" class="title">
                                <h3><span style="font-family: 'Kaushan Script', cursive;">South Indian</span></h3>
                            </div>
                            <ul>
								<?php getpro(3); ?>
                            </ul>
<div class="pricing-list">
                            <div id="beverages" class="title">
                                <h3><span style="font-family: 'Kaushan Script', cursive;">Beverages</span></h3>
                            </div>
                            <ul>
							    <?php getpro(4); ?>
                            </ul>
                        </div>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #price close -->
	<!-- child of the body tag -->
<span id="top-link-block" class="hidden">
    <a href="#top" class="well well-sm" onclick=$('html,body').animate({scrollTop:0},'slow');return false;">
        <i class="glyphicon glyphicon-menu-up"></i> 
    </a>
</span><!-- /top-link-block -->

	<!-- Js -->
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
	<script src="addcart.js"></script>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/bootstrap1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main1.js"></script>
</body>
</html>
