<?php
/* Template Name:office */

get_header(); ?>

 <div id="page-banner" class="page-banner">
		<img src="http://localhost/cleaning/wp-content/uploads/2019/07/ghghjbjhbj.jpg" alt="page-banner" />
		<!-- container -->
		<div class="page-detail">
			<div class="container">
				<h3 class="page-title">Office Cleaning</h3>
				<div class="page-breadcrumb pull-right">	
					<ol class="breadcrumb">
						<li><a title="Home" href="<?php echo get_home_url();?>">Services</a></li>
						<li>Office Cleaning</li>
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
				    <img src="<?php the_field('office_cleaning_services_in_geelong_image'); ?>"/>
				 </div>
			 </div>
			  <div class="col-md-6">
			     <div class="content">
				    <h2><?php the_field('office_cleaning_services_in_geelong heading'); ?></h2>
					<p class="carpet-para"><?php the_field('office_cleaning_services_in_geelong_text'); ?></p>
					 <h4 class="office-heading"><?php the_field('our_office_cleaning_heading'); ?></h4>
					 <?php the_field('our_office_cleaning_text'); ?>
					 <p class="carpet-para1"><?php the_field('in_fact_every_text'); ?></p>
				</div>
			 </div>
		  </div>
	   </div>
	 </div>
  </div>

<?php get_footer(); ?>