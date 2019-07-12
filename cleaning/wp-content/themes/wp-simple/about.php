<?php
/* Template Name: about */

get_header(); ?>

 <!-- Page Banner -->
	<div id="page-banner" class="page-banner">
		<img src="<?php the_field('banner')?>" alt="page-banner" />
		<!-- container -->
		<div class="page-detail">
			<div class="container">
				<h3 class="page-title"><?php the_field('banner-h')?></h3>
				<div class="page-breadcrumb pull-right">	
					<ol class="breadcrumb">
						<li><a title="Home" href="<?php echo get_home_url();?>"><?php the_field('banner-h1')?></a></li>
						<li><?php the_field('banner-h2')?></li>
					</ol>
				</div>
			</div>
		</div><!-- container /- -->
	</div><!-- Page Banner /- -->
		
	<!-- Welcome Section -->
	<Section id="welcome-section" class="welcome-section ow-section">
		<!-- container -->
		<div class="container">
			<div class="col-md-4 col-sm-5">
				<img src="<?php the_field('welcome-img')?>" alt="welcome" />
			</div>
			<div class="col-md-8 col-sm-7 welcome-content">
				<!-- Section Header -->
				<div class="section-header">
					<h3><?php the_field('banner-h3')?></h3>
				</div><!-- Section Header /- -->
				<p><?php the_field('banner-h4')?></p>
				<a href="about"><?php the_field('banner-h5')?></a>
				<a href="contact"><?php the_field('banner-h6')?></a>
				<div class="welcome-content-box row">
					<div class="col-md-4 col-sm-6 welcome-box">
						<img src="<?php the_field('welcome-img1')?>" alt="high trained staff" />
						<h4><?php the_field('banner-h7')?></h4>
						<p><?php the_field('banner-h8')?></p>
					</div>
					<div class="col-md-4 col-sm-6 welcome-box">
						<img src="<?php the_field('welcome-img2')?>" alt="quality-cleaning-staff" />
						<h4><?php the_field('banner-h9')?></h4>
						<p><?php the_field('banner-h10')?></p>
					</div>
					<div class="col-md-4 col-sm-6 welcome-box">
						<img src="<?php the_field('welcome-img3')?>" alt="fast-service" />
						<h4><?php the_field('banner-h11')?></h4>
						<p><?php the_field('banner-h12')?></p>
					</div>
				</div>
			</div>
		</div><!-- container /- -->
	</section><!-- Welcome Section /- -->
	
	<!-- Team Section -->
	<section id="team-section" class="team-section ow-section">
		<!-- container -->
		<div class="container">
			<!-- col-md-3 -->
			<div class="col-md-3 col-sm-4">
				<!-- Section Header -->
				<div class="section-header">
					<h3><img src="<?php the_field('about-img')?>" alt="sep-icon" /><?php the_field('about-h')?> </h3>
				</div><!-- Section Header /- -->
				<p><?php the_field('about-h1')?></p>
			</div><!-- col-md-3 /- -->
			
			<!-- col-md-9 -->
			<div class="col-md-9 col-sm-8">
				<div id="make-clean-team" class="owl-carousel owl-theme team-style1">
					<div class="item">
						<div class="team-box">
							<img src="<?php the_field('about-img1')?>" alt="team" />
							<div class="team-box-inner">
								<img src="<?php the_field('about-img2')?>" alt="team icon" />
								<h4><?php the_field('about-h2')?></h4>
								<hr>
								<p><?php the_field('about-h3')?></p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="team-box">
							<img src="<?php the_field('about-img3')?>" alt="team" />
							<div class="team-box-inner">
								<img src="<?php the_field('about-img4')?>" alt="team icon" />
								<h4><?php the_field('about-h4')?></h4>
								<hr>
								<p><?php the_field('about-h5')?></p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="team-box">
							<img src="<?php the_field('about-img5')?>" alt="team" />
							<div class="team-box-inner">
								<img src="<?php the_field('about-img6')?>" alt="team icon" />
								<h4><?php the_field('about-h6')?></h4>
								<hr>
								<p><?php the_field('about-h7')?></p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="team-box">
							<img src="<?php the_field('about-img7')?>" alt="team" />
							<div class="team-box-inner">
								<img src="<?php the_field('about-img77')?>" alt="team icon" />
								<h4><?php the_field('about-h8')?></h4>
								<hr>
								<p><?php the_field('about-h9')?></p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="team-box">
							<img src="<?php the_field('about-images')?>" alt="team" />
							<div class="team-box-inner">
								<img src="<?php the_field('about-images1')?>" alt="team icon" />
								<h4><?php the_field('about-h10')?></h4>
								<hr>
								<p><?php the_field('about-h11')?></p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="team-box">
							<img src="<?php the_field('about-img10')?>" alt="team" />
							<div class="team-box-inner">
								<img src="<?php the_field('about-img11')?>" alt="team icon" />
								<h4><?php the_field('about-h12')?></h4>
								<hr>
								<p><?php the_field('about-h13')?></p>
							</div>
						</div>
					</div>
				</div>
			</div><!-- col-md-9 /- -->
		</div><!-- container /- -->
	</section><!-- Team Section /- -->
	
	<!-- Statistics Section -->
	<div id="statistics-section" class="statistics-section ow-background">
		<!-- container -->
		<div class="container">
			<!-- col-md-3 -->
			<div class="col-md-3 col-sm-3 col-xs-6">
				<div class="statistics-box">
					<h3>
						<img src="<?php the_field('statistics-img')?>" alt="satisfied-customer" />
						<span class="count" id="statistics_1_count-1" data-statistics_percent="3540"></span>
					</h3>
					<img src="<?php the_field('statistics-img1')?>" alt="brush" />
					<h4><?php the_field('statistics-h')?></h4>
				</div>
			</div><!-- col-md-3 /- -->
			<!-- col-md-3 -->
			<div class="col-md-3 col-sm-3 col-xs-6">
				<div class="statistics-box">
					<h3>
						<img src="<?php the_field('statistics-img2')?>" alt="building" />
						<span class="count" id="statistics_1_count-2" data-statistics_percent="1237"></span>
					</h3>
					<img src="<?php the_field('statistics-img3')?>" alt="brush" />
					<h4><?php the_field('statistics-h2')?></h4>
				</div>
			</div><!-- col-md-3 /- -->
			<!-- col-md-3 -->
			<div class="col-md-3 col-sm-3 col-xs-6">
				<div class="statistics-box">
					<h3>
						<img src="<?php the_field('statistics-img4')?>" alt="clever-employee" />
						<span class="count" id="statistics_1_count-3" data-statistics_percent="2500"></span>
					</h3>
					<img src="<?php the_field('statistics-img5')?>" alt="brush" />
					<h4><?php the_field('statistics-h3')?></h4>
				</div>
			</div><!-- col-md-3 /- -->
			<!-- col-md-3 -->
			<div class="col-md-3 col-sm-3 col-xs-6">
				<div class="statistics-box">
					<h3>
						<img src="<?php the_field('statistics-img6')?>" alt="office" />
						<span id="statistics_1_count-4" data-statistics_percent="025"></span>
					</h3>
					<img src="<?php the_field('statistics-img7')?>" alt="brush" />
					<h4><?php the_field('statistics-h4')?></h4>
				</div>
			</div><!-- col-md-3 /- -->
		</div><!-- container /- -->
	</div><!-- Statistics Section /- -->
	
	<!-- Testimonial -->
	<div id="testimonial-section" class="testimonial-section ow-section">
		<!-- container -->
		<div class="container">
			<div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
			
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<div class="testimonial-box">
							<img src="<?php the_field('testimonial_image1'); ?>" alt="comment" />
							<h3><?php the_field('clients_say_about_us_heading'); ?></h3>
							<hr>
							<p><?php the_field('clients_say_about_us_text'); ?></p>
							<img src="<?php the_field('image2'); ?>" alt="testi" class="author-testi" />
							<h4><?php the_field('author_name'); ?></h4>
						</div>
					</div>
					<?php 
       $args = array ( 'post_type' => 'TESTIMONAL', 'posts_per_page' => -1);
       $myposts = get_posts( $args );
	     foreach( $myposts as $post ) : setup_postdata($post);
          ?>
					<div class="item">
						<div class="testimonial-box">
							<img src="<?php the_field('image'); ?>" alt="comment">
							<h3><?php the_title();?></h3>
							<hr>
							<p><?php echo wp_trim_words( get_the_content()); ?></p><br>
							<?php echo get_the_post_thumbnail( $page->ID, 'medium' ); ?>
							<h4><?php the_field('author_name');?></h4>
						</div>
					</div>
<?php 
endforeach; 
wp_reset_postdata();
?>
					
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#testimonial-carousel" role="button" data-slide="prev">
					<span class="fa fa-long-arrow-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#testimonial-carousel" role="button" data-slide="next">
					<span class="fa fa-long-arrow-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div><!-- container /- -->
	</div><!-- Testimonial -->
	
	<!-- Partners Section -->
	<div id="partner-section" class="partner-section ow-section partners-background">
		<!-- container -->
		<div class="container">
			<!-- Section Header -->
			<div class="section-header">
				<h3><img src="<?php the_field('sep-iconclients_&_partners_image');?>" alt="sep-icon" />clients & partners</h3>
			</div><!-- Section Header /- -->
			<div >
				
					<?php echo do_shortcode('[wpaft_logo_slider]'); ?>
			
				
			</div>
		</div><!-- container /- -->
	</div><!-- Partners Section /- -->

<?php get_footer(); ?>