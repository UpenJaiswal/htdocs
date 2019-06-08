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
	<style>
	.about-us-into h3 span {
    color: #0d588b;
}
	
	.header-2 .mainmenu-area .navbar-nav .active .nav-link {
    background: #0b79bd;
    color: #fff !important;
}
	.header-2 .mainmenu-area .navbar-nav .nav-link {
    color: black;
	font-size: 12px;
	padding: 8px 25px 8px 15px;
}
	.menu-header a:hover, .menu-header a:active, .current_page_item a, #home .on, .menu-footer a:hover {
	color: #fff !important;
    background-color:#0b79bd;

}
    .dropdown-menu:before {
    position: absolute;
    content: "\eb28";
    font-family: 'IcoFont' !important;
    color: #fff;
    font-size: 40px;
    top: -20px;
    left: 20%;
    z-index: 1;
}

*, ::after, ::before {
    box-sizing: inherit;
}
.header-2 .dropdown-menu:before {
    color: #eee;
}
	</style>
	
	
</head>
<body <?php body_class(); ?>>
<!-- START PRELOADER -->
	<div id="page-preloader">
		<div class="preloader-wrench"></div>
	</div>
	<!-- END PRELOADER --> 

		<!--  header -->
		<!-- START HEADER SECTION -->
    <header class="main-header header-2">
		<!-- START TOP AREA -->
		<div class="top-area">
			<div class="auto-container">
				<div class="row">
					<div class="col-lg-4 col-12">
						<div class="header-social">
							<ul>
							   <li><a href="https://www.facebook.com/peakperformanceemployees/" target="_blank"><i class="icofont icofont-social-facebook"></i></a></li>
							   <li><a href="https://www.linkedin.com/in/lindabenn" target="_blank"><i class="icofont icofont-social-linkedin"></i></a></li>
							   <li><a href="https://www.youtube.com/channel/UCBN5gmikYLp38VCcMRUDqsw?disable_polymer=true" target="_blank"><i class="icofont icofont-social-youtube-play"></i></a></li>
							   <li><a href="https://twitter.com/siliconwellness" target="_blank"><i class="icofont icofont-social-twitter"></i></a></li>
							   
							</ul>
						</div>
					</div> 
					<!-- end col -->
					<div class="col-lg-4 col-12 mb-lg-0 mb-md-0 mb-3">
						<div class="header-info-box">
                            <form class="navbar-form">
								<div class="form-group form-search">
									<input class="form-control" name="search" placeholder="Search..." type="text">
									<button type="submit" class="btn"><i class="icofont icofont-search"></i></button>
								</div>
							</form>
                        </div>
					</div>
					<!-- end col -->
					<div class="col-lg-4 col-12">
						<div class="header-quote float-right">
							<a class="header-quote-btn" href="#">Login <i class="icofont icofont-caret-right"></i></a>
						</div>
						<div class="header-quote float-right">
							<a class="header-quote-btn" href="#">Register <i class="icofont icofont-caret-right"></i></a>
						</div>
					</div>
					<!-- end col -->
				</div>
			</div>
		</div>
		<!-- END TOP AREA -->
        
		<!-- START LOGO AREA -->
		<div class="logo-area" id="myHeader">
			<div class="auto-container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-6 col-7">
						<div class="logo">
							<a href="index">
							   <?php dynamic_sidebar( 'logo' ); ?>
							</a>
						</div>
					</div>
					<!-- end col -->
					
					<!-- end col -->
					<div class="col-lg-9 col-md-12 col-sm-12 col-12">
						<div class="mainmenu-area">
							<div class="auto-container">
								<div class="d-lg-block d-md-none d-sm-none d-none ">
							<nav class="navbar navbar-expand-lg justify-content-left">
							
							
								
							<?php wp_nav_menu( array( 'auto-container-fluid' => '', 'theme_location' => 'primary', 'container_class' => 'menu-header' ) ); ?>
								
							</nav>		
								</div>
							</div>
							<!--- END CONTAINER -->
						</div>
						<!-- END NAVIGATION AREA -->

						<!-- MOBILE-MENU-AREA START -->
						<div class="mobile-menu-area d-lg-none d-md-block d-sm-block d-block">
							<div class="col-md-9">
								<div class="mobile-menu">
									<nav id="dropdown">
										<ul class="navbar-nav">
											<li><a href="index.html">Home</a>												
											</li>
											<li><a href="about.html">About Us</a>
												
											</li>	
											<li><a href="#">Services</a>
												<ul>
													<li><a href="jet-log-recovery.html">Jet Lag Recovery</a></li>
													<li><a href="restore-realignmind-bodypackages.html">Restore & Realign Mind & Body Packages</a></li>
													<li><a href="benn-technique.html">Benn Method Program</a></li>
													<li><a href="facial-hormony.html">Facial Harmony</a></li>
													<li><a href="pellowah-healing.html">Pellowah Healing</a></li>
												</ul>
											</li>	
											<li><a href="benn-technique-course.html">Benn Method Course</a>
												<ul>
													<li><a href="upcomingevents.html">Upcoming Events</a></li>
												</ul>
											</li>	
											<li><a href="testimonial.html">Testimonial</a>
												
											</li>	
											<li><a href="blog.html">Blog/Podcast</a>
												
											</li>	
											<li><a href="contact.html">Contact</a></li>
											
										</ul>
									</nav>
								</div>
							</div>
						</div>
						<!-- MOBILE-MENU-AREA END -->
					</div>
					<!-- end col -->
				</div>
			</div>
		</div>
		<!-- END LOGO AREA -->	
	</header>
	<!-- END HEADER SECTION -->
		


		