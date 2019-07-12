<?php
/* Template Name:industrial */

get_header(); ?>

 <!-- Page Banner -->
	<div id="page-banner" class="page-banner">
		<img src="http://localhost/cleaning/wp-content/uploads/2019/07/ghghjbjhbj.jpg" alt="page-banner" />
		<!-- container -->
		<div class="page-detail">
			<div class="container">
				<h3 class="page-title">Industrial Cleaning</h3>
				<div class="page-breadcrumb pull-right">	
					<ol class="breadcrumb">
						<li><a title="Home" href="<?php echo get_home_url();?>">Services</a></li>
						<li>Industrial Cleaning</li>
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
				    <img src="<?php the_field('geelong_commercial_cleaning__image'); ?>"/>
				 </div>
			 </div>
			  <div class="col-md-6">
			     <div class="content">
				    <h2><?php the_field('geelong_commercial_cleaning_heading'); ?></h2>
					<p class="carpet-para"><?php the_field('geelong_commercial_cleaning__text'); ?></p>
				</div>
			 </div>
		  </div>
	   </div>
	 </div>
  </div>

<?php get_footer(); ?>