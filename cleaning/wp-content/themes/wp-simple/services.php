<?php
/* Template Name:services */

get_header(); ?>

 <!-- Page Banner -->
	<div id="page-banner" class="page-banner">
		<img src="http://localhost/cleaning/wp-content/uploads/2019/07/ghghjbjhbj.jpg" alt="page-banner" />
		<!-- container -->
		<div class="page-detail">
			<div class="container">
				<h3 class="page-title">services</h3>
				<div class="page-breadcrumb pull-right">	
					<ol class="breadcrumb">
						<li><a title="Home" href="<?php echo get_home_url();?>">Home</a></li>
						<li>Services</li>
					</ol>
				</div>
			</div>
		</div>
		<!-- container /- -->
	</div><!-- Page Banner /- -->
	
	<!-- Service Section -->
	<section id="service-section" class="service-section ow-section services-style2">
		<!-- container -->
		<div class="container">
			<!-- Section Header -->
			<div class="section-header">
				<h3><img src="<?php the_field('sep-img');?>" alt="sep-icon" /><?php the_field('service_we_offer');?></h3>
			</div><!-- Section Header /- -->
		
			<div class="service-box col-md-4 col-sm-6">
				<img src="<?php the_field('carpet_cleaning_heading_img');?>" alt="services" />
				<div class="service-box-inner">
					<h4><?php the_field('carpet_cleaning_heading');?></h4>
					<p><?php the_field('carpet_cleaning_text');?></p>
					<a title="View Details" href="carpet">view details</a>
				</div>
			</div>
			<div class="service-box col-md-4 col-sm-6">
				<img src="<?php the_field('industrial_cleaning_heading_img');?>" alt="services" />
				<div class="service-box-inner">
					<h4><?php the_field('industrial_cleaning_heading_heading');?></h4>
					<p><?php the_field('industrial_cleaning_heading_text');?></p>
					<a title="View Details" href="industrial">view details</a>
				</div>
			</div>
			<div class="service-box col-md-4 col-sm-6">
				<img src="<?php the_field('office_cleaning_heading_img');?>" alt="services" />
				<div class="service-box-inner">
					<h4><?php the_field('office_cleaning_heading_heading');?></h4>
					<p><?php the_field('office_cleaning_heading_text');?></p>
					<a title="View Details" href="office">view details</a>
				</div>
			</div>
			<div class="service-box col-md-4 col-sm-6">
				<img src="<?php the_field('school_cleaning_heading_img');?>" alt="services" />
				<div class="service-box-inner">
					<h4><?php the_field('school_cleaning_heading_heading');?></h4>
					<p><?php the_field('school_cleaning_heading_text');?></p>
					<a title="View Details" href="school">view details</a>
				</div>
			</div>
			<div class="service-box col-md-4 col-sm-6">
				<img src="<?php the_field('window_cleaning_heading_img');?>" alt="services" />
				<div class="service-box-inner">
					<h4><?php the_field('window_cleaning_heading_heading');?></h4>
					<p><?php the_field('window_cleaning_heading_text');?></p>
					<a title="View Details" href="window">view details</a>
				</div>
			</div>
			<div class="service-box col-md-4 col-sm-6">
				<img src="<?php the_field('car_cleaning_heading_img');?>" alt="services" />
				<div class="service-box-inner">
					<h4><?php the_field('car_cleaning_heading_heading');?></h4>
					<p><?php the_field('car_cleaning_heading_text');?> </p>
					<a title="View Details" href="car">view details</a>
				</div>
			</div>
			<div class="service-box col-md-4 col-sm-6">
				<img src="<?php the_field('end_cleaning_heading_img');?>" alt="services" />
				<div class="service-box-inner">
					<h4><?php the_field('end_cleaning_heading_heading');?></h4>
					<p><?php the_field('end_cleaning_heading_text');?></p>
					<a title="View Details" href="lease">view details</a>
				</div>
			</div>
			
			<div class="service-box col-md-4 col-sm-6">
				<img src="<?php the_field('steam_cleaning_heading_img');?>" alt="services" />
				<div class="service-box-inner">
					<h4><?php the_field('steam_cleaning_heading');?></h4>
					<p><?php the_field('steam_cleaning_heading_text');?> </p>
					<a title="View Details" href="steam">view details</a>
				</div>
			</div>
			
			<div class="service-box col-md-4 col-sm-6">
				<img src="<?php the_field('domestic_cleaning_heading_img');?>" alt="services" />
				<div class="service-box-inner">
					<h4><?php the_field('domestic_cleaning_heading');?></h4>
					<p><?php the_field('domestic_cleaning_heading_text');?></p>
					<a title="View Details" href="domestic">view details</a>
				</div>
			</div>
			
		</div><!-- container /- -->
	</section><!-- Service Section /- -->
	
	

<?php get_footer(); ?>