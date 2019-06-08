<?php 
/* Template Name: contact */
get_header(); ?>

	<!-- START PAGE BANNER AND BREADCRUMBS -->
	<section class="single-page-title-area" data-background="<?php the_field('contact')?>">
		<div class="auto-container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-12">
					<div class="single-page-title">
						<h2><?php the_field('contact_us')?></h2>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-12">
					<ol class="breadcrumb">
					  <li class="breadcrumb-item"><a href="#"><span class="lnr lnr-home"></span></a></li>
					  <li class="breadcrumb-item"><?php the_field('pages')?></li>
					  <li class="breadcrumb-item active"><?php the_field('contacts')?></li>
					</ol>
				</div>
			</div>
			<!-- end row-->
		</div>
	</section>
	<!-- END PAGE BANNER AND BREADCRUMBS -->
	
	<!-- GOOGLE MAP -->
	<div class="gmap_canvas">
		<iframe id="gmap_canvas" src="<?php the_field('google_map')?>"></iframe>
	
	</div>
	<!-- END GOOGLE MAP -->
	
	<!-- START CONTACT SECTION -->
    <section id="contact" class="section-padding">
        <div class="auto-container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-12">
					<div class="contact-title">
						<h4><?php the_field('get_a_quote')?></h4>
						<p><?php the_field('content')?></p>
						<hr>
					</div>
					<div class="contact-form mt-4">
						<form id="contact-form" class="form" name="enq" method="POST" action="#">
							
							<?php echo do_shortcode('[contact-form-7 id="421" title="contact form"]'); ?>
							
						</form>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-12 pl-lg-5 pl-md-5 pl-sm-2 pl-2 mt-lg-0 mt-md-0 mt-sm-3 mt-3">
					<div class="contact-title">
						<h4><?php the_field('get_in_touch')?></h4>
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, na aliqua.</p> -->
						<hr>
					</div>
					<div class="address-box mt-4">
						<div class="single-address-box mb-3">
							<span><?php the_field('address')?></span>
							<p><?php the_field('address_line1')?><br/><?php the_field('address_line2')?></p>
						</div>
						<div class="single-address-box mb-3">
							<span><?php the_field('phone')?></span>
							<p><?php the_field('phone_nom')?></p>
							
						</div>
						<div class="single-address-box">
							<span><?php the_field('inquires')?></span>
							<p><?php the_field('website')?></p>
						</div>
					</div>
					<div class="free-quote-box mt-4">
						<h6><?php the_field('ask_a_question')?></h6>
						<h3><?php the_field('ask_a_question_heading')?></h3>
						<p><?php the_field('ask_a_question_content')?></p>
						<a href="#"><?php the_field('free_quote')?><i class="icofont icofont-simple-right"></i></a>
					</div>
				</div>
			</div>
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END CONTACT SECTION -->
    
	
	
    

<?php get_footer(); ?>