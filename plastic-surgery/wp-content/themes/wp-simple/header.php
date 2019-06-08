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
<!-- Page Loader -->        
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <!-- End Page Loader -->
        
            <!-- Navigation panel -->
			
            <nav class="main-nav dark transparent stick-fixed">
                <div class="full-wrapper relative clearfix">
				<div class="container-fluid">
			
                    <!-- Main Menu -->
                    <div class="inner-nav desktop-nav">
					<?php wp_nav_menu( array( 'auto-container-fluid' => '', 'theme_location' => 'primary' ) ); ?>
                        
                </div>
				</div>
				
            </nav>
                   
            <!-- End Navigation panel -->
