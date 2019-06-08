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
 
 
		<!-- HEADER-->
        <header id="header">
            <div class="header header-2 header-2--dark d-none d-lg-block">
                <div class="header__bar">
                    <div class="container">
                        <div class="header__content">
						    <div class="header__content-right">
							    <ul class="atlier-menu" >
								    <li><a href="dekoration" class="active">Dekoration</a></li>
									<li><a href="display">Display</a></li>
									<li><a href="drucksachen">Drucksachen</a></li>
									<li><a href="three-dimensional">3Dimensional</a></li>
								</ul>
								<div class="atlier-address12">
								
								
								<?php the_field('header_address')?>
								
								   
								</div>
                                
                            </div>
                            <div class="logo" style="float:right;">
                                <a href="home">
                                    <?php dynamic_sidebar( 'logo_top' ); ?>
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
           <!-- <aside class="menu-sidebar js-menusb" id="sidebar">
                <a class="btn-close" href="#" id="js-close-btn">
                    <span class="ti-close"></span>
                </a>
                <div class="menu-sidebar__content">
                    <nav class="menu-sidebar-nav-menu">
                        <ul class="menu nav-menu" id="nav-menu-sidebar">
                            
                            <li class="menu-item">
                                <a href="dekoration">Dekoration</a>
                            </li>
							<li class="menu-item">
                                <a href="display">Displays</a>
                            </li>
							<li class="menu-item">
                                <a href="drucksachen">Drucksachen</a>
                            </li>
							<li class="menu-item">
                                <a href="three-dimensional">3Dimensional</a>
                            </li>
							<li class="menu-item">
								<a href="about-us">About Us</a>
							</li>
							<li class="menu-item">
								<a href="contact">Contact Us</a>
							</li>
                        </ul>
                    </nav>
                    <ul class="list-social list-social--big">
                        
                        <li class="list-social__item">
                            <a class="ic-pinterest" href="#">
                                <i class="zmdi zmdi-pinterest"></i>
                            </a>
                        </li>
                        <li class="list-social__item">
                            <a class="ic-google" href="#">
                                <i class="zmdi zmdi-google"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="menu-sidebar__footer">
                    <div class="copyright">
                        <p>© 2019 atlier visual communication . Designed by <a href="http://www.ranksdigitalmedia.com/" class="ranks-digital" target="_blank"> Ranks Digital Media </a></p>
                    </div>
                </div>
            </aside>
            <div id="menu-sidebar-overlay"></div>
            <div class="header-mobile d-block d-lg-none">
                <div class="header-mobile__bar">
                    <div class="container-fluid">
                        <div class="header-mobile__bar-inner">
                            <a class="logo" href="#">
                                 <img src="<?php bloginfo ('template_url'); ?>/images/atlier/logo1.png" alt="atlier" />
                            </a>
                            <button class="hamburger hamburger--slider float-right" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <nav class="header-nav-menu-mobile">
                    <div class="container-fluid">
                        <ul class="menu nav-menu menu-mobile">
                            
                            <li class="menu-item">
                                <a href="dekoration">Dekoration</a>
                            </li>
							<li class="menu-item">
                                <a href="display">Displays</a>
                            </li>
							<li class="menu-item">
                                <a href="drucksachen">Drucksachen</a>
                            </li>
							<li class="menu-item">
                                <a href="three-dimensional">3Dimensional</a>
                            </li>
                        </ul>
                    </div>
                </nav>-->
            </div>
        </header>
        <!-- END HEADER-->

		