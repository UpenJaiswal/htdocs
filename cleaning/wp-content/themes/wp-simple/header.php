<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link href='http://fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
</head>
<body data-offset="200" data-spy="scroll" data-target=".primary-navigation">
	<a id="top"></a>
	
	<!-- Header Section -->
	<header id="header-section" class="header-section">

		<!-- Top Header -->
		<div class="top-header">
			<!-- container -->
			<div class="container">
				<div class="row">
					<!-- col-md-6 -->
					<div class="col-md-6 col-sm-6">
						<p><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>best cleaning company website forever!</p>
					</div><!-- col-md-6 /- -->
					<!-- col-md-6 -->
					<div class="col-md-6 col-sm-6 text-right">
						<p><i class="fa fa-clock-o" aria-hidden="true"></i>working hours : Mon-sat (8.00am - 6.00PM)</p>
					</div><!-- col-md-6 /- -->
				</div>
			</div><!-- container /- -->
		</div><!-- Top Header /- -->
		
		<!-- Logo Block -->
		<div class="logo-block">
			<!-- container -->
			<div class="container">
				<div class="row">
					<!-- col-md-2 -->
					<div class="col-md-3 col-sm-4">
						<a title="Logo" href="<?php echo get_site_url(); ?>"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/07/logo.png" alt="logo" /></a>
					</div><!-- col-md-2 /- -->
					<!-- col-md-4 -->
					<div class="col-md-6 col-sm-8 pull-right row">
						<!-- col-md-7 -->
						<div class="col-md-6 col-sm-6 col-sm-offset-2 col-md-offset-2 call-us">
							<img src="http://localhost/cleaning/wp-content/uploads/2019/07/mobile-icon-1.png" alt="mobile-icon" />
							<p>Call to schedule your FREE !<span>+0415555734</span></p>
						</div><!-- col-md-7 /- -->
						<!-- col-md-5 -->
						<div class="cart col-md-4 col-sm-4 text-right ow-padding-left">
							
								
								<a title="Button" href="about">Get In Touch</a>
							
							
						</div><!-- col-md-5 /- -->
					</div><!-- col-md-4 /- -->
				</div>
			</div>
		</div><!-- Logo Block /- -->
		
		<!-- Menu Block -->
		<div class="menu-block">
			<div class="container">
				<div class="row">
					<!-- col-md-8 -->
					<nav class="navbar navbar-default col-md-8">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a title="Logo" href="index.html"><img alt="logo" src="images/responsive-logo.png"></a>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<?php wp_nav_menu( array( 'container' => '', 'theme_location' => 'primary' ) ); ?>
							
							
						</div><!-- /.navbar-collapse -->
						
					</nav><!-- col-md-8 /- -->
					
					<div class="col-md-4 quote">
						<a  title="Free Quote" href="#">free instant quote</a>
					</div>
				</div>
			</div><!-- /.container -->
		</div><!-- Menu Block /- -->
	</header><!-- Header Section /- -->