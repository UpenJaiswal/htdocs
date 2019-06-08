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

 <style>
/*****************************************
Style declarations for Top Menu
*****************************************/
.menu {
    position: absolute;
    top: 41px;
    left: 680px;
    width: 100%;
    height: 20px;
}

#header {
	
	height: 115px;
	position: relative;
    width: 100%;
}

.header-2--dark, .header-2--static {
    position: fixed;
}


.menu-item a {
    padding: 2px 11px;
}

.menu-header {
margin-right: auto;
margin-left: auto;
z-index: 10;
}
.sub-menu{
	z-index:999;
}

.menu-header li {
display: inline;
list-style: url(none) none;
float: right;
}
.menu-header ul {
line-height: 31px;
list-style-image:none;
list-style-position:outside;
list-style-type:none;
}

.menu-header a:active, .current_page_item a,  .menu-footer a:hover {

border-bottom: 2px solid #ff9601;
    border-top: 2px solid #ff9601;
}


.menu-header li li {
-moz-background-clip:border;
-moz-background-inline-policy:continuous;
-moz-background-origin:padding;
width:220px;
font-size:20px;

}



.menu-header li li a:hover, .menu-header li li a:active {
-moz-background-clip:border;
-moz-background-inline-policy:continuous;
-moz-background-origin:padding;
color:red;
text-decoration: none;

}


#header.sticky {
    position: fixed;
    width: 100%;
    z-index: 111111;
    background: #fffffff2;
    top: 0;
}

#main, .section, .section-content, .video {
    position: relative;
}
main, nav, section {
    display: block;
}


</style>

		<!-- HEADER-->
        <header id="header">
            <div class="header header-1 d-none d-lg-block js-header-1">
                <div class="header__bar">
                    <div class="wrap wrap--w1790">
                        <div class="container-fluid">
                            <div class="header__content" >
                                <div class="logo">
                                    <a href="home">
                                        <?php dynamic_sidebar( 'logo_top' ); ?>
                                    </a>
                                </div>
								
								
                                <div class="header__content-right" >
							     
								<?php wp_nav_menu( array( 'auto-container-fluid' => '', 'theme_location' => 'primary', 'container_class' => 'menu-header' ) ); ?>
								
								<!--
                                    <nav class="header-nav-menu">
                                        <ul class="menu nav-menu">
                                            <li class="menu-item">
												<a href="dekoration" class="active">Dekoration</a>								
											</li>
											<li class="menu-item">
												<a href="display">Display</a>
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
                                    </nav>      -->
									
									
									
                                    <div class="header-social">
                                        <ul class="list-social footer-social-link-size">
                                            
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
                                </div>
								
								
								
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-mobile d-block d-lg-none">
                <div class="header-mobile__bar">
                    <div class="container-fluid">
                        <div class="header-mobile__bar-inner" >
                            <a class="logo" href="home">
                                <img src="<?php bloginfo ('template_url'); ?>/images/atlier/logo.png" alt="Logo" />
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
								<a href="dekoration" class="active">Dekoration</a>								
							</li>
							<li class="menu-item">
								<a href="display">Display</a>
							</li>
							<li class="menu-item">
								<a href="drucksachen">Drucksachen</a>                                  
							</li>
							<li class="menu-item">
								<a href="three-dimensional">3Dimensional </a>
							</li> 
							<li class="menu-item">
								<a href="about-us">About Us</a>
							</li>
							<li class="menu-item">
								<a href="contact">Contact Us</a>
							</li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- END HEADER-->

		