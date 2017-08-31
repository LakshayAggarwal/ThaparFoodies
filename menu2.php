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
						<li><a href="#"><i class="fa fa-2x fa-shopping-cart"></i><sup> CART</sup></a></li>

		            </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->

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
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Channa Bhatura</h2>
                                            <span>&#8377; 40.00
									
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty(-1)">-</button>0
											<button id="up" onclick="modify_qty(1)">+</button>
											<form action="cb.php" method="post">
											<input name="cb" id="cb" value="0" />
											<input type="submit" value="Add to Cart"></form>
</span>
											
                                        </div>
                                       
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Paav Bhaji</h2>
                                            <span>&#8377; 30.00
											&nbsp;&nbsp;&nbsp;
										<button id="down" onclick="modify_qty1(-1)">-</button>
										<button id="up" onclick="modify_qty1(1)">+</button>
 
</span>
                                        </div>
                                       
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Sambar Vada Single(Dip)</h2>
                                            <span>&#8377; 30.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty2(-1)">-</button>
											<button id="up" onclick="modify_qty2(1)">+</button></span>
                                        </div>
                                        
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="600ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Idli Sambar Single(Dip)</h2>
                                            <span>&#8377; 30.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty3(-1)">-</button>
											<button id="up" onclick="modify_qty3(1)">+</button></span>
											
                                        </div>
                                        
                                    </div>
                               </li>
							   
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="700ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Plain Dosa</h2>
                                            <span>&#8377; 50.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty4(-1)">-</button>
											<button id="up" onclick="modify_qty4(1)">+</button></span>
                                        </div>
                                        
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Samosa 1Pc.</h2>
                                            <span>&#8377; 7.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty5(-1)">-</button>
											<button id="up" onclick="modify_qty5(1)">+</button></span>
                                        </div>
                                        
                                    </div>
                                </li>
<li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Bread Pakoda 3Pc.</h2>
                                            <span>&#8377; 20.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty6(-1)">-</button>
											<button id="up" onclick="modify_qty6(1)">+</button></span>
                                        </div>
                                       
                                    </div>
                                </li><li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Veg Sandwich</h2>
                                            <span>&#8377; 20.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty7(-1)">-</button>
											<button id="up" onclick="modify_qty7(1)">+</button></span>
                                        </div>
                                       
                                    </div>
                                </li><li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Grilled Sandwich</h2>
                                            <span>&#8377; 25.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty8(-1)">-</button>
											<button id="up" onclick="modify_qty8(1)">+</button></span>
                                        
										</div>
                                       
                                    </div>
                                </li><li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Macroni Sandwich</h2>
                                            <span>&#8377; 25.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty9(-1)">-</button>
											<button id="up" onclick="modify_qty9(1)">+</button></span>
                                        </div>
                                        
                                    </div>
                                </li>

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
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Veg Chowmein</h2>
                                            <span>&#8377; 30.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty(-1)">-</button>
											<button id="up" onclick="modify_qty(1)">+</button></span>	
                                        </div>
                                        
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Hakka Noodles</h2>
                                            <span>&#8377; 50.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty(-1)">-</button>
											<button id="up" onclick="modify_qty(1)">+</button></span>
                                        </div>
                                        
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Crispy Noodles</h2>
                                            <span>&#8377; 45.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty(-1)">-</button>
											<button id="up" onclick="modify_qty(1)">+</button></span>
                                        </div>
                                      
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="600ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Shree Rathnam Special</h2>
                                            <span>&#8377; 55.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty(-1)">-</button>
											<button id="up" onclick="modify_qty(1)">+</button></span>
                                        </div>
                                        
                                    </div>
                               </li>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="700ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Shezwan Noodles</h2>
                                            <span>&#8377; 75.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty(-1)">-</button>
											<button id="up" onclick="modify_qty(1)">+</button></span>
                                        </div>
                                       
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Veg Fried Rice</h2>
                                            <span>&#8377; 60.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty(-1)">-</button>
											<button id="up" onclick="modify_qty(1)">+</button></span>
                                        </div>
                                        
                                    </div>
                                </li>
<li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Veg Chopsey</h2>
                                            <span>&#8377; 60.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty(-1)">-</button>
											<button id="up" onclick="modify_qty(1)">+</button></span>
                                        </div>
                                       
                                    </div>
                                </li><li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Veg Manchurian</h2>
                                            <span>&#8377; 50.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty(-1)">-</button>
											<button id="up" onclick="modify_qty(1)">+</button></span>
                                        </div>
                                        
                                    </div>
                                </li><li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Paneer Tikka</h2>
                                            <span>&#8377; 100.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty(-1)">-</button>
											<button id="up" onclick="modify_qty(1)">+</button></span>
                                        </div>
                                        
                                    </div>
                                </li><li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Veg Spring Roll</h2>
                                            <span>&#8377; 40.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty(-1)">-</button>
											<button id="up" onclick="modify_qty(1)">+</button></span>
                                        </div>
                                        
                                    </div>
                                </li>

                            </ul>
                            
<div class="pricing-list">
                            <div id="south" class="title">
                                <h3><span style="font-family: 'Kaushan Script', cursive;">South Indian</span></h3>
                            </div>
                            <ul>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Dahi Vada Single</h2>
                                            <span>&#8377; 35.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty(-1)">-</button>
											<button id="up" onclick="modify_qty(1)">+</button></span>
                                        </div>
                                        
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Dahi Vada 2Pc.</h2>
                                            <span>&#8377; 65.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty(-1)">-</button>
											<button id="up" onclick="modify_qty(1)">+</button></span>
                                        </div>
                                      
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Rice Idli 2Pc.</h2>
                                            <span>&#8377; 50.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty(-1)">-</button>
											<button id="up" onclick="modify_qty(1)">+</button></span>
                                        </div>
                                        
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="600ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Rice Idli Single</h2>
                                            <span>&#8377; 30.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty(-1)">-</button>
											<button id="up" onclick="modify_qty(1)">+</button></span>
                                        </div>
                                        
                                    </div>
                               </li>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="700ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Plain Dosa</h2>
                                            <span>&#8377; 50.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty(-1)">-</button>
											<button id="up" onclick="modify_qty(1)">+</button></span>
                                        </div>
                                       
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Masala Dosa</h2>
                                            <span>&#8377; 60.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty(-1)">-</button>
											<button id="up" onclick="modify_qty(1)">+</button></span>
                                        </div>
                                        
                                    </div>
                                </li>
<li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Paneer Dosa</h2>
                                            <span>&#8377; 80.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty(-1)">-</button>
											<button id="up" onclick="modify_qty(1)">+</button></span>
                                        </div>
                                        
                                    </div>
                                </li><li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Rava Plain</h2>
                                            <span>&#8377; 75.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty(-1)">-</button>
											<button id="up" onclick="modify_qty(1)">+</button></span>
                                        </div>
                                        
                                    </div>
                                </li><li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Rava Masala</h2>
                                            <span>&#8377; 85.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty(-1)">-</button>
											<button id="up" onclick="modify_qty(1)">+</button></span>
                                        </div>
                                        
                                    </div>
                                </li><li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Rava Paneer</h2>
                                            <span>&#8377; 95.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty(-1)">-</button>
											<button id="up" onclick="modify_qty(1)">+</button></span>
                                        </div>
                                        
                                    </div>
                                </li>
<li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Shree Rathnam Star Dosa</h2>
                                            <span>&#8377; 100.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty(-1)">-</button>
											<button id="up" onclick="modify_qty(1)">+</button></span>
                                        </div>
                                        
                                    </div>
                                </li>
<li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Onion Uttapam</h2>
                                            <span>&#8377; 90.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty(-1)">-</button>
											<button id="up" onclick="modify_qty(1)">+</button></span>
                                        </div>
                                        
                                    </div>
                                </li>
<li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Mix Uttapam</h2>
                                            <span>&#8377; 100.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty(-1)">-</button>
											<button id="up" onclick="modify_qty(1)">+</button></span>
                                        </div>
                                        
                                    </div>
                                </li>
                            </ul>
<div class="pricing-list">
                            <div id="beverages" class="title">
                                <h3><span style="font-family: 'Kaushan Script', cursive;">Beverages</span></h3>
                            </div>
                            <ul>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Coca Cola (As MRP)</h2>
                                            <span>&#8377; 35.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty(-1)">-</button>
											<button id="up" onclick="modify_qty(1)">+</button></span>
                                        </div>
                                        
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Sprite (As MRP)</h2>
                                            <span>&#8377; 35.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty(-1)">-</button>
											<button id="up" onclick="modify_qty(1)">+</button></span>
                                        </div>
                                        
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Mountain Dew (As MRP)</h2>
                                            <span>&#8377; 35.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty(-1)">-</button>
											<button id="up" onclick="modify_qty(1)">+</button></span>
                                        </div>
                                       
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="600ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Miranda (As MRP)</h2>
                                            <span>&#8377; 35.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty(-1)">-</button>
											<button id="up" onclick="modify_qty(1)">+</button></span>
                                        </div>
                                       
                                    </div>
                               </li>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="700ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Slice</h2>
                                            <span>&#8377; 35.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty(-1)">-</button>
											<button id="up" onclick="modify_qty(1)">+</button></span>
                                        </div>
                                       
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Maaza</h2>
                                            <span>&#8377; 35.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty(-1)">-</button>
											<button id="up" onclick="modify_qty(1)">+</button></span>
                                        </div>
                                       
                                    </div>
                                </li>
<li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Pepsi (As MRP)</h2>
                                            <span>&#8377; 35.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty(-1)">-</button>
											<button id="up" onclick="modify_qty(1)">+</button></span>
                                        </div>
                                        
                                    </div>
                                </li><li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Thumbs Up</h2>
                                            <span>&#8377; 35.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty(-1)">-</button>
											<button id="up" onclick="modify_qty(1)">+</button></span>
                                        </div>
                                        
                                    </div>
                                </li><li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Ice Cream With Cone</h2>
                                            <span>&#8377; 30.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty(-1)">-</button>
											<button id="up" onclick="modify_qty(1)">+</button></span>
                                        </div>
                                        <p>(Vanilla/Strawberry/Chocalate)</p>
                                    </div>
                                </li><li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Mineral Water</h2>
                                            <span>&#8377; 20.00
											&nbsp;&nbsp;&nbsp;
											<button id="down" onclick="modify_qty(-1)">-</button>
											<button id="up" onclick="modify_qty(1)">+</button></span>
                                        </div>
                                        
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #price close -->
	<!-- child of the body tag -->
<span id="top-link-block" class="hidden">
    <a href="#top" class="well well-sm" onclick="$('html,body').animate({scrollTop:0},'slow');return false;">
        <i class="glyphicon glyphicon-menu-up"></i> 
    </a>
</span><!-- /top-link-block -->
	<!-- Js -->
	<script>

function modify_qty(val) {
    var qty = document.getElementById('cb').value;
    var new_qty = parseInt(qty,10) + val;
    
    if (new_qty < 0) {
        new_qty = 0;
    }
    
    document.getElementById('cb').value = new_qty;
    return new_qty;
}

function modify_qty1(val) {
    var qty = document.getElementById('o').value;
    var new_qty = parseInt(qty,10) + val;
    
    if (new_qty < 0) {
        new_qty = 0;
		
    }
    
    document.getElementById('o').value = new_qty;
    return new_qty;
	
}
function modify_qty2(val) {
    var qty = document.getElementById('b').value;
    var new_qty = parseInt(qty,10) + val;
    
    if (new_qty < 0) {
        new_qty = 0;
    }
    
    document.getElementById('b').value = new_qty;
    return new_qty;
}
function modify_qty3(val) {
    var qty = document.getElementById('p').value;
    var new_qty = parseInt(qty,10) + val;
    
    if (new_qty < 0) {
        new_qty = 0;
    }
    
    document.getElementById('p').value = new_qty;
    return new_qty;
}
function modify_qty5(val) {
    var qty = document.getElementById('w').value;
    var new_qty = parseInt(qty,10) + val;
    
    if (new_qty < 0) {
        new_qty = 0;
    }
    
    document.getElementById('w').value = new_qty;
    return new_qty;
}
function modify_qty6(val) {
    var qty = document.getElementById('g').value;
    var new_qty = parseInt(qty,10) + val;
    
    if (new_qty < 0) {
        new_qty = 0;
    }
    
    document.getElementById('g').value = new_qty;
    return new_qty;
}
function modify_qty7(val) {
    var qty = document.getElementById('s').value;
    var new_qty = parseInt(qty,10) + val;
    
    if (new_qty < 0) {
        new_qty = 0;
    }
    
    document.getElementById('s').value = new_qty;
    return new_qty;
}</script>
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/bootstrap1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main1.js"></script>
</body>
</html>
