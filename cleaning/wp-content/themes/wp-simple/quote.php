<?php
/* Template Name: quote */

get_header(); ?>

 <!-- Page Banner -->
	<div id="page-banner" class="page-banner">
		<img src="http://localhost/cleaning/wp-content/uploads/2019/07/ghghjbjhbj.jpg" alt="page-banner" />
		<!-- container -->
		<div class="page-detail">
			<div class="container">
				<h3 class="page-title">Book A Free Quote</h3>
				<div class="page-breadcrumb pull-right">	
					<ol class="breadcrumb">
						<li><a title="Home" href="home#">Home</a></li>
						<li>Book A Free Quote</li>
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
		     <h3>Book A Free Quote</h3>
			  <?php echo do_shortcode('[contact-form-7 id="497" title="Contact form 1"]'); ?>
		  </div>
	   </div>
	 </div>
  </div>

<?php get_footer(); ?>