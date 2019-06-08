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



</head>
<body <?php body_class(); ?>>

<div class="images-preloader">
	    <div id="preloader_1" class="rectangle-bounce">
	        <span></span>
	        <span></span>
	        <span></span>
	        <span></span>
	        <span></span>
	    </div>
	</div>
	<header class="header">
		<!-- Show Desktop Header -->
		<div class="show-desktop-header header-hp-1 header-hp-2 header-hp-3">
			<div class="top-header">
				<div class="container">
					<div class="top-header-inner">
						<span><?php dynamic_sidebar( 'header_text' ); ?></span>
						<div class="header-socials">
						<?php dynamic_sidebar( 'follow_us' ); ?>
						
						</div>
					</div>
				</div>
			</div>
			<div id="js-navbar-fixed" class="menu-desktop">
				<div class="container menu-desktop-inner">
					<!-- Logo -->
					<div class="logo">
					<?php dynamic_sidebar( 'logo' ); ?>
						
					</div>
					<!-- Main Menu -->
					<nav class="main-menu">
						<ul>
						<?php wp_nav_menu( array( 'auto-container-fluid' => '', 'theme_location' => 'primary', 'container_class' => 'main-menu' ) ); ?>
							
							<!--<li class="menu-item">
								<a href="index.html">
								HOME
								<span class="icon-down"><i class="la la-angle-down"></i></span>
								</a> 
								<ul class="menu-dropdown">
									<li><a href="index.html">Homepages 1</a></li>
									<li><a href="index2.html">Homepages 2</a></li>
									<li><a href="index3.html">Homepages 3</a></li>
									<li><a href="index4.html">Homepages 4</a></li>
									<li><a href="index5.html">Homepages 5</a></li>
									<li><a href="index6.html">Homepages 6</a></li>
								</ul>
							</li>
							<li class="menu-item">
								<a href="clean-service.html">
								Our Services
								<span class="icon-down"><i class="la la-angle-down"></i></span>
								</a> 
								<ul class="menu-dropdown">
									<li><a href="clean-service.html">Clean Service</a></li>
									<li><a href="repair-part-service.html">Repair Part Service</a></li>
									<li><a href="engine-repair-service.html">Engine Repair Service</a></li>
									<li><a href="painting-service.html">Painting Service</a></li>
									<li><a href="tire-service.html">Tire Service</a></li>
									<li><a href="oil-change-service.html">Oil Change Service</a></li>
									<li><a href="battery-car-service.html">Battery Car Service</a></li>
								</ul>
							</li>
							<li class="menu-item">
								<a href="gallery-v1.html">
								PAGE
								<span class="icon-down"><i class="la la-angle-down"></i></span>
								</a>
								<ul class="menu-dropdown">
									<li>
										<a href="gallery-v1.html">Gallery</a>
										<ul class="menu-dropdown menu-levels">
											<li><a href="gallery-v1.html">Gallery v1</a></li>
											<li><a href="gallery-v2.html">Gallery v2</a></li>
											<li><a href="gallery-v3.html">Gallery v3</a></li>
										</ul>
									</li>
									<li><a href="about-us.html">About Us</a></li>
									<li>
										<a href="our-team-v1.html">Our Team</a>
										<ul class="menu-dropdown menu-levels">
											<li><a href="our-team-v1.html">Our Team v1</a></li>
											<li><a href="our-team-v2.html">Our Team v2</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="menu-item">
								<a href="shop-products.html">
								SHOP
								<span class="icon-down"><i class="la la-angle-down"></i></span>
								</a> 
								<ul class="menu-dropdown">
									<li><a href="shop-products.html">Shop Products</a></li>
									<li><a href="shopping-cart.html">Shopping Cart</a></li>
								</ul>
							</li>
							<li class="menu-item">
								<a href="blog-v1-columns.html">
								BLOG
								<span class="icon-down"><i class="la la-angle-down"></i></span>
								</a> 
								<ul class="menu-dropdown">
									<li><a href="blog-v1-columns.html">Blog v1 Columns</a></li>
									<li><a href="blog-v2-columns.html">Blog v2 Columns</a></li>
									<li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
									<li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
									<li><a href="blog-masonry.html">Blog Masonry</a></li>
									<li><a href="blog-detail.html">Blog Detail</a></li>
								</ul>
							</li>
							<li class="menu-item">
								<a href="contact-v1.html">
								CONTACT
								<span class="icon-down"><i class="la la-angle-down"></i></span>
								</a>
								<ul class="menu-dropdown">
									<li><a href="contact-v1.html">Contact v1</a></li>
									<li><a href="contact-v2.html">Contact v2</a></li>
									<li><a href="contact-v3.html">Contact v3</a></li>
								</ul>
							</li>-->
						</ul>
					</nav>
					<div class="header-appointment">
						<?php dynamic_sidebar( 'an_appointment' ); ?>
					</div>
				</div>
			</div>
		</div>
		<!-- Show Mobile Header -->
		<div class="show-mobile-header">
			<!-- Logo And Hamburger Button -->
			<div class="mobile-top-header">
				<div class="logo-mobile">
					<a href="index.html"><img src="<?php bloginfo ('template_url'); ?>/images/icons/logo-black.png" alt="logo"></a>
				</div>
				<button class="hamburger hamburger--spin hidden-tablet-landscape-up" id="toggle-icon">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
			</div>
			<!-- Au Navbar Menu -->
			<div class="au-navbar-mobile navbar-mobile-1">
				<div class="au-navbar-menu">
					<ul>
						<li class="drop">							
							<a class="drop-link" href="#">
							HOME
								<span class="arrow">
									<i class="la la-angle-down"></i>
								</span>
							</a>							
							<ul class="drop-menu bottom-right">
								<li><a href="index.html">Home Page 1</a></li>
								<li><a href="index2.html">Home Page 2</a></li>
								<li><a href="index3.html">Home Page 3</a></li>
								<li><a href="index4.html">Home Page 4</a></li>
								<li><a href="index5.html">Home Page 5</a></li>
								<li><a href="index6.html">Home Page 6</a></li>
							</ul>
						</li>
						<li class="drop">
							<a class="drop-link" href="#">
							Our Services
								<span class="arrow">
									<i class="la la-angle-down"></i>
								</span>
							</a>							
							<ul class="drop-menu bottom-right">
								<li><a href="clean-service.html">Clean Service</a></li>
								<li><a href="repair-part-service.html">Repair Part Service</a></li>
								<li><a href="engine-repair-service.html">Engine Repair Service</a></li>
								<li><a href="painting-service.html">Painting Service</a></li>
								<li><a href="tire-service.html">Tire Service</a></li>
								<li><a href="oil-change-service.html">Oil Change Service</a></li>
								<li><a href="battery-car-service.html">Battery Car Service</a></li>
							</ul>
						</li>
						<li class="drop">							
							<a class="drop-link" href="#">
							PAGE
								<span class="arrow">
									<i class="la la-angle-down"></i>
								</span>
							</a>							
							<ul class="drop-menu bottom-right">
								<li class="drop">
									<a class="drop-link" href="#">
									Gallery
									<span class="arrow">
										<i class="la la-angle-down"></i>
									</span>
									</a>
									<ul class="drop-menu bottom-right">
										<li><a class="drop-menu-inner" href="gallery-v1.html">Gallery v1</a></li>
										<li><a class="drop-menu-inner" href="gallery-v2.html">Gallery v2</a></li>
										<li><a class="drop-menu-inner" href="gallery-v3.html">Gallery v3</a></li>
									</ul>
								</li>
								<li><a href="about-us.html">About Us</a></li>
								<li class="drop">
									<a class="drop-link" href="#">
									Our Team
									<span class="arrow">
										<i class="la la-angle-down"></i>
									</span>
									</a>
									<ul class="drop-menu bottom-right">
										<li><a class="drop-menu-inner" href="our-team-v1.html">Our Team v1</a></li>
										<li><a class="drop-menu-inner" href="our-team-v2.html">Our Team v2</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="drop">							
							<a class="drop-link" href="#">
							SHOP
								<span class="arrow">
									<i class="la la-angle-down"></i>
								</span>
							</a>							
							<ul class="drop-menu bottom-right">
								<li><a href="shop-products.html">Shop Products</a></li>
								<li><a href="shopping-cart.html">Shopping Cart</a></li>
							</ul>
						</li>
						<li class="drop">							
							<a class="drop-link" href="#">
							BLOG
								<span class="arrow">
									<i class="la la-angle-down"></i>
								</span>
							</a>							
							<ul class="drop-menu bottom-right">
								<li><a href="blog-v1-columns.html">Blog v1 Columns</a></li>
								<li><a href="blog-v2-columns.html">Blog v2 Columns</a></li>
								<li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
								<li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
								<li><a href="blog-masonry.html">Blog Masonry</a></li>
								<li><a href="blog-detail.html">Blog Detail</a></li>
							</ul>
						</li>
						<li class="drop">							
							<a class="drop-link" href="#">
							CONTACT
								<span class="arrow">
									<i class="la la-angle-down"></i>
								</span>
							</a>							
							<ul class="drop-menu bottom-right">
								<li><a href="contact-v1.html">Contact v1</a></li>
								<li><a href="contact-v2.html">Contact v2</a></li>
								<li><a href="contact-v3.html">Contact v3</a></li>
							</ul>
						</li>
					</ul>
				</div>				
			</div>
		</div>
	</header>