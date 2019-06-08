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

<!--  wrapper -->
<div id="wrapper">
	
	<!--  layout -->
	<div id="layout">

		<!--  header -->
		<div id="header">

			<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
			
            <div class="description"><?php bloginfo('description'); ?></div>
            
			<!--  nav -->
			<div class="navBar">
				<?php wp_nav_menu( array( 'container' => '', 'theme_location' => 'primary' ) ); ?>	
			</div>
			<!--  nav -->

		</div>
		<!--  header --> 

		<!--  content -->
		<div id="content">