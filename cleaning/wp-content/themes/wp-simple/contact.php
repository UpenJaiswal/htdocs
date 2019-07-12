<?php
/* Template Name:contact */

get_header(); ?>

 <div id="page-banner" class="page-banner">
		<img src="http://localhost/cleaning/wp-content/uploads/2019/07/ghghjbjhbj.jpg" alt="page-banner" />
		<!-- container -->
		<div class="page-detail">
			<div class="container">
				<h3 class="page-title">Contact Us</h3>
				<div class="page-breadcrumb pull-right">	
					<ol class="breadcrumb">
						<li><a title="Home" href="<?php echo get_home_url();?>">Home</a></li>
						
						<li>Contact</li>
					</ol>
				</div>
			</div>
		</div><!-- container /- -->
	</div><!-- Page Banner /- -->
		
	<!-- contact Details -->
	<div id="contact-detail" class="contact-detail">
		<!-- container -->
		<div class="container">
			<div class="col-md-4 col-sm-4 col-xs-4 contact-detail-box">
				<img src="<?php the_field('contact_address_image');?>" alt="Address" />
				<h3><?php the_field('contact_address_heading');?></h3>
				
				<p><?php the_field('contact_address_text');?></p>
				<p><?php the_field('contact_phone');?></p>
				
			</div>
			
			<div class="col-md-4 col-sm-4 col-xs-4 contact-detail-box">
				<img src="<?php the_field('247_customer_service_image');?>" alt="Address" />
				<h3><?php the_field('247_customer_service_heading');?></h3>
				
				<p><a title="Mail Title" href="mailto:Makeclean@Example.com"><?php the_field('247_customer_service_text');?></a></p>
			</div>
			
			<div class="col-md-4 col-sm-4 col-xs-4 contact-detail-box">
				<img src="<?php the_field('area_we_serve_image');?>" alt="Address" />
				<h3><?php the_field('area_we_serve_heading');?></h3>
				<p><?php the_field('area_we_serve_text');?></p>
				
			</div>
		</div>
		<!-- container /- -->
	</div><!-- contact Details -->
	
	<!-- Contact Form -->
	<div id="contact" class="contact-form-section ow-section">
		<!-- container -->
		<div class="container">
			<div class="row">
				<h3>Request Service or Estimate </h3>
				<p>Feel free to call us directly or simply complete our form below and we will follow up with you.</p>
				<?php
					echo do_shortcode('[contact-form-7 id="497" title="Contact form 1"]');
				?>
			</div>
		</div><!-- container /- -->
	</div><!-- Contact Form /- -->
	
	

<?php get_footer(); ?>