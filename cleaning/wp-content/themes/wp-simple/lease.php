<?php
/* Template Name:lease */

get_header(); ?>

 <!-- Page Banner -->
	<div id="page-banner" class="page-banner">
		<img src="http://localhost/cleaning/wp-content/uploads/2019/07/ghghjbjhbj.jpg" alt="page-banner" />
		<!-- container -->
		<div class="page-detail">
			<div class="container">
				<h3 class="page-title">End of lease Cleaning</h3>
				<div class="page-breadcrumb pull-right">	
					<ol class="breadcrumb">
						<li><a title="Home" href="<?php echo get_home_url();?>">Services</a></li>
						<li>End of lease Cleaning</li>
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
				    <img src="<?php the_field('end_of_lease_cleaning_image'); ?>"/>
				 </div>
			 </div>
			  <div class="col-md-6">
			     <div class="content">
				    <h2><?php the_field('end_of_lease_cleaning_heading'); ?></h2>
					<p class="carpet-para"><?php the_field('end_of_lease_cleaning_text'); ?></p>
				   
				</div>
				
				</div>
			 </div>
		  </div>
		  
				 <div class="row">
				   <div class="col-lg-12 lease-cleaning">
				     <div class="col-md-3 lease">
						<h4 class="office-heading"><?php the_field('all_rooms_heading'); ?></h4>
						<?php the_field('all_rooms_text'); ?>
					</div>
					<div class="col-md-3 lease">
						<h4 class="office-heading"><?php the_field('kitchen_heading'); ?></h4>
						<?php the_field('kitchen_text'); ?>
					</div>
					 <div class="col-md-3 lease">
						<h4 class="office-heading"><?php the_field('bathrooms_heading'); ?></h4>
						<?php the_field('bathrooms_text'); ?>
					</div>
					<div class="col-md-3 lease">
						<h4 class="office-heading"><?php the_field('laundry_area_heading'); ?></h4>
						<?php the_field('laundry_area_text'); ?>
					</div>
				 </div>
	       </div>
	 </div>
  </div>

<?php get_footer(); ?>