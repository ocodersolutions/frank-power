<?php
define("URL", 'http://localhost/frank-power/');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="shortcut icon" href="images/icon-round.png"> -->
	
    <title>GENERAC</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo URL; ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo URL; ?>css/owl.carousel.css" rel="stylesheet">
	
    <link href="<?php echo URL; ?>css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo URL; ?>css/custom.css" rel="stylesheet">
	<link href="<?php echo URL; ?>css/responsive.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="<?php echo URL; ?>../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo URL; ?>https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="<?php echo URL; ?>https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
  </head>

<body>

<!----------------------------------- start navigation bar ----------------------------------------->
<div class="ds-header visible-md-* hidden-xs visible-sm-* visible-lg-*">
	<div class="container-fluid main-nav-outter">
		<!-- Fixed navbar -->
		<div class="container-fuild">
			<div class="row">
				<div class="col-md-3 col-sm-3 pr0 pl0 mt2 text-right logo-custom">
					<img src="<?php echo URL; ?>images/logo.png">				
				</div>
				<div class="col-md-2 col-sm-2 login-custom">
					<ul class="nav-login">
						<li><a href="#">SIGN UP</a></li>
						<li><a href="#">SIGN IN</a></li>
					</ul>
				</div>
				<div class="col-md-7 col-sm-7">
					<div class="mynavigation">
					<ul class="main-nav">
						
						<li class="active"><a href="<?php echo URL; ?>about.php">About Us</a></li>
						<li><a href="<?php echo URL; ?>news-article.php">news</a></li>
						<li><a href="<?php echo URL; ?>beprepared.php">Be prepared</a></li>
						<li><a href="<?php echo URL; ?>media.php">media</a></li>
						<li><a href="#">Where to buy</a></li>											
						<li><a href="<?php echo URL; ?>contact.php">Contact</a></li>
						<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
					</ul>
					</div>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>
	<!----------------------------------- end navigation bar ----------------------------------------->

	<div class="second-menu-outter">
		<div class="second-menu ">
		<div class="container-fuild">
			
				<div class="col-md-12">
					<div class="mynavigation-2">
						<ul class="second-menu-ul">
							<li class="active"><a href="<?php echo URL; ?>index.php">Home</a></li>
							<li><a href="<?php echo URL; ?>product.php">All Products</a></li>
							<li><a href="<?php echo URL; ?>homeowners.php">For home owners</a></li>
							<li><a href="#">mobile product</a></li>
							<li><a href="<?php echo URL; ?>resources.php">Resources & tools</a></li>
							<li><a href="<?php echo URL; ?>energy-star.php">energy star</a></li>				<li><a href="<?php echo URL; ?>supports.php">Services & support</a></li>		
						</ul>
					</div>
				</div>
				
			
		</div>
		</div>
	</div>
</div>

<div class="navigation visible-xs-* hidden-sm hidden-md hidden-lg">
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-static-top" role="navigation">
	<div class="container">
	<div class="row">
        <div class="navbar-header">
		<div class="pr0 pl0 mt1" style="float:left;">
			<img src="<?php echo URL; ?>images/logo.png">				
		</div>
				
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
        <div class="navbar-collapse collapse">
			<div class="mobile-menu">
			 <ul class="nav navbar-nav navbar-right">
				<li class="signup-custom"><a href="#">SIGN UP</a></li>
				<li class="signup-custom"><a href="#">SIGN IN</a></li>
				<li class="active"><a href="<?php echo URL; ?>about.php">About Us</a></li>
				<li><a href="<?php echo URL; ?>news-article.php">news</a></li>
				<li><a href="<?php echo URL; ?>beprepared.php">Be prepared</a></li>
				<li><a href="<?php echo URL; ?>media.php">media</a></li>
				<li><a href="#">Where to buy</a></li>											
				<li><a href="<?php echo URL; ?>contact.php">Contact</a></li>
				<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
				<li><hr/></li>
				<li class="active"><a href="<?php echo URL; ?>index.php">Home</a></li>
				<li><a href="<?php echo URL; ?>product.php">All Products</a></li>
				<li><a href="<?php echo URL; ?>homeowners.php">For home owners</a></li>
				<li><a href="<?php echo URL; ?>resources.php">Resources & tools</a></li>
				<li><a href="<?php echo URL; ?>energy-star.php">energy star</a></li>							
				<li><a href="<?php echo URL; ?>supports.php">Services & support</a></li>
			  </ul>
			 </div>
        </div><!--/.nav-collapse -->
    </div>
    </div>
    </div>
</div>


