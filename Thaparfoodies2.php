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
if(isset($_SESSION["roll"])){			
}	
else{
	exit(header('Location: login1.php'));
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
<link href='https://fonts.googleapis.com/css?family=Damion' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
  <meta charset="utf-8" />
  <meta name="author" content="Thaparfoodies" />
  <title>Thaparfoodies</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
 <!-- Owl Carousel -->
		<link rel="stylesheet" href="css/owl.carousel.css">
 <!-- Responsive Stylesheet -->
		<link rel="stylesheet1" href="css/responsive.css">
 <!-- Font-awesome.min css -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

</head>
<body>


  <!--  BODY PAGE CONTENT -->
  <!-- navigation panel -->
  
<!-- 
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar navbar-inverse  navbar-fixed-top">
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
	  <a href="Thaparfoodies1.html">
	  <img class="img-responsive" style="max-width:210px; margin-top: 0px;" alt="Thaparfoodies" src="title.png" width="580px" height="160px"/>
	  </a>
	  </a>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="Navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li class="current"><a href="#home">Home</a></li>
                        <li><a href="#cuisines">Cuisines</a></li>
                        <li><a href="menu3.php">Menu</a></li>
                        <li><a href="#cuisines1">Location</a></li>
                        <li><a href="#cuisines2">Contact</a></li>
							<li><a href="logout.php">
          <i class="fa fa-2x fa-sign-out"></i><sup> Sign Out</sup></a>
        </li>
		
                   
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header> 
        <!--
        End Fixed Navigation
        ==================================== -->

<div id="home" class="home">
<?php
echo "<br><br><br><br>Hi, " . $_SESSION["name"] ;
?>
</div>
<!-- /second section -->
<!-- third section - Services -->
<div id="cuisines" class="pad-section">
  <div class="container">
    <h2 class="text-center" style="font-family: 'Damion', cursive; font-size:40px;">Cuisines</h2> <hr />
    <div class="row text-center">
      <div class="col-sm-3 col-xs-6">
        <i class="glyphicon glyphicon-apple"> </i>
        <h4 style="font-family: 'Damion', cursive; font-size:30px;">Breakfast</h4>
      
      </div>
      <div class="col-sm-3 col-xs-6">
        <i class="glyphicon glyphicon-flash"> </i>
        <h4 style="font-family: 'Damion', cursive; font-size:30px;">Chinese Snacks</h4>
      
      </div>
      <div class="col-sm-3 col-xs-6">
        <i class="glyphicon glyphicon-cutlery"> </i>
        <h4 style="font-family: 'Damion', cursive; font-size:30px;">South Indian</h4>
        
      </div>
      <div class="col-sm-3 col-xs-6">
        <i class="glyphicon glyphicon-glass"> </i>
        <h4 style="font-family: 'Damion', cursive; font-size:30px;">Beverages</h4>
       
      </div>
    </div>
  </div>
</div>
<div id="information" class="parallax-section">

  
</div>


<div id="cuisines1" class="pad-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h3 style="font-family: 'Damion', cursive; font-size:40px;">Our Location</h3>

        
      </div>
    </div>
  </div>
</div>
<!-- child of the body tag -->
<span id="top-link-block" class="hidden">
    <a href="#top" class="well well-sm" onclick="$('html,body').animate({scrollTop:0},'slow');return false;">
        <i class="glyphicon glyphicon-menu-up"></i> 
    </a>
</span><!-- /top-link-block -->
<div id="google_map"></div>



  <section id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h3 class="title wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">Feedback</h3>
                        <form>
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Write your full name here...">
                            </div>
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="800ms">
                                <input type="text" class="form-control" placeholder="Write your email address here...">
                            </div>
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1000ms">
                                <textarea class="form-control" rows="3" placeholder="Write your feedback here..."></textarea>
                            </div>
                        </form>
                        <a class="btn btn-default wow bounceIn" data-wow-duration="500ms" data-wow-delay="1300ms" href="#" role="button">send your feedback</a>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
    </section><!-- #contact-us close -->
<br><br><br>
<div id="cuisines2" class="pad-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h3 style="font-family: 'Damion', cursive; font-size:40px;">Contact  Us</h3>
		
        
      </div>
    </div>
  </div>
</div>
    <!--
    footer  start
    ============================= -->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="block wow fadeInLeft"  data-wow-delay="200ms">
                        <h3>CONTACT <span>INFO</span></h3>
                        <div class="info">
                            <ul>
                                <li>
                                  <h4><i class="fa fa-phone"></i>Contact no.</h4>
                                  <p>+91-8725960954</p>
                                    
                                </li>
                                <li>
                                  <h4><i class="fa fa-map-marker"></i>Address</h4>
                                  <p>Thapar University,Patiala-147001</p>
                                </li>
                                <li>
                                  <h4><i class="fa fa-envelope"></i>E mail</h4>
                                  <p>thaparfoodies@gmail.com</p>
                                  
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
               
                <!-- .col-md-4 close -->
                <div class="col-md-4">
                    <div class="block wow fadeInLeft"  data-wow-delay="1100ms">
                        <div class="gallary">
                            
                        </div>
                        <div class="social-media-link">
                            <h3>Follow <span>US</span></h3>
                            <ul>
                                <li>
                                    <a href="https://twitter.com/ThaparFoodies">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://instagram.com/thaparfoodies/">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- .col-md-4 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #footer close -->
<footer id="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="block">
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Design And Developed by Thaparfoodies Team.Copyright &copy; 2015 - All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script src="js/main.js"></script>
</body>
</html>

