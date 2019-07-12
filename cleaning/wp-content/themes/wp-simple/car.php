<?php
/* Template Name:car */

get_header(); ?>

 
<!-- Page Banner -->
	<div id="page-banner" class="page-banner">
		<img src="http://localhost/cleaning/wp-content/uploads/2019/07/ghghjbjhbj.jpg" alt="page-banner" />
		<!-- container -->
		<div class="page-detail">
			<div class="container">
				<h3 class="page-title">Car Detailing</h3>
				<div class="page-breadcrumb pull-right">	
					<ol class="breadcrumb">
						<li><a title="Home" href="<?php echo get_home_url(); ?>">Services</a></li>
						<li>Car Detailing</li>
					</ol>
				</div>
			</div>
		</div>
		<!-- container /- -->
	</div><!-- Page Banner /- -->
	
	<div class="container">
	  <div class="carpet">
	   <div class="row">
	      <div class="col-lg-12 carpet-cleanig">
		     <div class="col-md-6">
			     <div class="img">
				    <img src="<?php the_field('professional_car_detailing_image'); ?>"/>
				 </div>
			 </div>
			  <div class="col-md-6">
			     <div class="content">
				    <h2><?php the_field('professional_car_detailing_heading'); ?></h2>
					<p class="carpet-para"><?php the_field('professional_car_detailing_text'); ?></p>
				     <h4 class="office-heading"><?php the_field('our_standard_car__heading'); ?></h4>
					 <?php the_field('our_standard_car__text1'); ?>
					 <p class="carpet-para1"><?php the_field('our_standard_car_2'); ?></p>
				   </div>
				</div>
			 </div>
		  </div>	
	 </div>
  </div>
<?php get_footer(); ?>