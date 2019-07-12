<?php
/* Template Name: homepage */

get_header(); ?>

 
<!-- Slider Section -->
	<div id="slider-section" class="slider-section">
		<div id="make-clean-slider" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			<li data-target="#make-clean-slider" data-slide-to="0" class="active"></li>
			<li data-target="#make-clean-slider" data-slide-to="1"></li>
			
			</ol>
			
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="<?php the_field('image'); ?>" alt="slide">
					<div class="carousel-caption">
						<div class="container">
							<div class="col-md-6">
								<h3><?php the_field('slide'); ?></h3>								
							</div>
						</div>
					</div>
				</div>
				
				<div class="item">
					<img src="<?php the_field('image1'); ?>" alt="slide">
					<div class="carousel-caption">
						<div class="container">
							<div class="col-md-6">
								<h3><?php the_field('slide1'); ?></h3>								
							</div>
						</div>
					</div>
				</div>
				
				
			</div>

			<!-- Controls -->
			<a title="Slider Control" class="left carousel-control" href="#make-clean-slider" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a title="Slider Control" class="right carousel-control" href="#make-clean-slider" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<div class="container">
			<div id="quick-contact" class="contact-form col-md-4">
				<h3>quick contact form <span>call us anytime !</span></h3>
				<div class="form-control">
					<?php echo do_shortcode('[contact-form-7 id="498" title="apply"]'); ?>
				</div>
				<div id="alert-msg" class="alert-msg"></div>
			</div>
		</div>
	</div><!-- Slider Section /- -->
	
	<!-- Service Section -->
	<section id="service-section" class="service-section ow-section">
		<!-- container -->
		<div class="container">

			<!-- Section Header -->
			<div class="section-header">
				<h3><img src="<?php the_field('image2'); ?>" alt="sep-icon" /> <?php the_field('section-header'); ?></h3>
			</div><!-- Section Header /- -->
			
			<div id="make-clean-service" class="owl-carousel owl-theme services-style1">
				<div class="item">
					<div class="service-box">
						<img src="<?php the_field('image3'); ?>" alt="services"/>
						<div class="service-box-inner">
						
							<h4><?php the_field('service-heading'); ?></h4>
							<a title="View Details" href="industrial">view details</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="service-box">
						<img src="<?php the_field('image4'); ?>" alt="services"/>
						<div class="service-box-inner">
							<h4><?php the_field('service-heading1'); ?></h4>
							<a title="View Details" href="office">view details</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="service-box">
						<img src="<?php the_field('image5'); ?>" alt="services"/>
						<div class="service-box-inner">
							<h4><?php the_field('service-heading2'); ?></h4>
							<a title="View Details" href="school">view details</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="service-box">
						<img src="<?php the_field('image6'); ?>" alt="services"/>
						<div class="service-box-inner">
							<h4><?php the_field('service-heading3'); ?></h4>
							<a title="View Details" href="window">view details</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="service-box">
						<img src="<?php the_field('image7'); ?>" alt="services"/>
						<div class="service-box-inner">
							<h4><?php the_field('service-heading4'); ?></h4>
							<a title="View Details" href="domestic">view details</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="service-box">
						<img src="<?php the_field('image8'); ?>" alt="services"/>
						<div class="service-box-inner">
							<h4><?php the_field('service-heading5'); ?></h4>
							<a title="View Details" href="steam">view details</a>
						</div>
					</div>
				</div>
			</div>
		</div><!-- container /- -->
	</section><!-- Service Section /- -->
	
	<!-- Welcome Section -->
	<Section id="welcome-section" class="welcome-section ow-section">
		<!-- container -->
		<div class="container">
			<div class="col-md-4 col-sm-5">
				<img src="<?php the_field('image9'); ?>" alt="welcome" />
			</div>
			<div class="col-md-8 col-sm-7 welcome-content">
				<!-- Section Header -->
				<div class="section-header">
					<h3><?php the_field('service-heading6'); ?></h3>
				</div><!-- Section Header /- -->
				<p><?php the_field('service-para'); ?></p>
				<a title="Button" href="about">About More</a>
				<a title="Button" href="services">Services</a>
				<div class="welcome-content-box row">
					<div class="col-md-4 col-sm-6 welcome-box">
						<img src="<?php the_field('image10'); ?>" alt="high trained staff" />
						<h4><?php the_field('service-heading7'); ?></h4>
						<p><?php the_field('service-para1'); ?></p>
					</div>
					<div class="col-md-4 col-sm-6 welcome-box">
						<img src="<?php the_field('image11'); ?>" alt="quality-cleaning-staff" />
						<h4><?php the_field('welcome'); ?></h4>
						<p><?php the_field('welcome1'); ?></p>
					</div>
					<div class="col-md-4 col-sm-6 welcome-box">
						<img src="<?php the_field('image12'); ?>" alt="fast-service" />
						<h4><?php the_field('service-heading8'); ?></h4>
						<p><?php the_field('service-para2'); ?></p>
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
					<h3><img src="<?php the_field('image13'); ?>" alt="sep-icon" /><?php the_field('section-header1'); ?></h3>
				</div><!-- Section Header /- -->
				<p><?php the_field('service-para3'); ?></p>
			</div><!-- col-md-3 /- -->
			
			<!-- col-md-9 -->
			<div class="col-md-9 col-sm-8">
				<div id="make-clean-team" class="owl-carousel owl-theme team-style1">
					<div class="item">
						<div class="team-box">
							<img src="<?php the_field('image14'); ?>" alt="team" />
							<div class="team-box-inner">
								<img src="<?php the_field('image15'); ?>" alt="team icon" />
								<h4><?php the_field('service-heading9'); ?></h4>
								<hr>
								<p><?php the_field('service-para4'); ?></p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="team-box">
							<img src="<?php the_field('image-team'); ?>" alt="team" />
							<div class="team-box-inner">
								<img src="<?php the_field('image-team1'); ?>" alt="team icon" />
								<h4><?php the_field('service-heading10'); ?></h4>
								<hr>
								<p><?php the_field('service-para5'); ?></p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="team-box">
							<img src="<?php the_field('image16'); ?>" alt="team" />
							<div class="team-box-inner">
								<img src="<?php the_field('image17'); ?>" alt="team icon" />
								<h4><?php the_field('service-heading11'); ?></h4>
								<hr>
								<p><?php the_field('service-para6'); ?></p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="team-box">
							<img src="<?php the_field('image18'); ?>" alt="team" />
							<div class="team-box-inner">
								<img src="<?php the_field('image19'); ?>" alt="team icon" />
								<h4><?php the_field('service-heading12'); ?></h4>
								<hr>
								<p><?php the_field('service-para7'); ?></p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="team-box">
							<img src="<?php the_field('image20'); ?>" alt="team" />
							<div class="team-box-inner">
								<img src="<?php the_field('image21'); ?>" alt="team icon" />
								<h4><?php the_field('service-heading13'); ?></h4>
								<hr>
								<p><?php the_field('service-para8'); ?></p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="team-box">
							<img src="<?php the_field('image22'); ?>" alt="team" />
							<div class="team-box-inner">
								<img src="<?php the_field('image23'); ?>" alt="team icon" />
								<h4><?php the_field('service-heading14'); ?></h4>
								<hr>
								<p><?php the_field('service-para9'); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div><!-- col-md-9 /- -->
		</div><!-- container /- -->
	</section><!-- Team Section /- -->
	
	<!-- Industry Serve -->
	<section id="industry-serve-section" class="industry-serve-section ow-section">
		<!-- container -->
		<div class="container">
			<!-- col-md-6 -->
			<div class="col-md-6">
				<!-- Section Header -->
				<div class="section-header">
					<h3><img src="<?php the_field('image24'); ?>" alt="sep-icon" /><?php the_field('section1'); ?></h3>
				</div><!-- Section Header /- -->
				<!-- industry-serve -->
				<div class="industry-serve">
					<p><?php the_field('service-para10'); ?></p>
					<div class="row">
						<p class="col-md-6 col-sm-6"><img src="<?php the_field('image25'); ?>" alt="airline" /><?php the_field('section2'); ?> </p>
						<p class="col-md-6 col-sm-6"><img src="<?php the_field('image26'); ?>" alt="school" /><?php the_field('section3'); ?></p>
						<p class="col-md-6 col-sm-6"><img src="<?php the_field('image27'); ?>" alt="auto-mobile" /><?php the_field('section4'); ?></p>
						<p class="col-md-6 col-sm-6"><img src="<?php the_field('image28'); ?>" alt="medical" /><?php the_field('section5'); ?> </p>
						<p class="col-md-6 col-sm-6"><img src="<?php the_field('image29'); ?>" alt="fitness" /><?php the_field('section6'); ?></p>
						<p class="col-md-6 col-sm-6"><img src="<?php the_field('image30'); ?>" alt="airline" /><?php the_field('section7'); ?></p>
						<a title="View More" href="#">View More</a>
					</div>
				</div><!-- industry-serve -->
			</div><!-- col-md-6 /- -->
			
			
			<!-- col-md-6 -->
			<div class="col-md-6">
				<!-- Section Header -->
				<div class="section-header">
					<h3><img src="<?php the_field('image31'); ?>" alt="sep-icon" /><?php the_field('heading'); ?></h3>
				</div><!-- Section Header /- -->
					<!-- industry-serve -->
					<div class="industry-serve">
						<div id="testimonial" class="carousel slide testimonial" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#testimonial" data-slide-to="0" class="active"></li>
							<li data-target="#testimonial" data-slide-to="1"></li>
							<li data-target="#testimonial" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="http://localhost/cleaning/wp-content/uploads/2019/07/testimonial-1-1.png" alt="testimonial" />
								<div class="carousel-caption">									
									<p>magine going to your office one morning and you find stains of coffee on your desk, waste paper bin is overflowing, the carpet is with bits of paper all around! How would you feel?</p>
									<h3>- Caz McNamara <span>FOUNDER OF Cleaning Contractors Geelong COMPANY</span></h3>
								</div>
							</div>
							
							<div class="item">
								<img src="http://localhost/cleaning/wp-content/uploads/2019/07/testimonial-1-1.png" alt="testimonial" />
								<div class="carousel-caption">									
									<p>Besides this there are many more benefits of a clean office that include a better impression among the clients as the physical appearance of the workplace entails a lot about the work ,</p>
									<h3>-Caz McNamara <span>FOUNDER OF Cleaning Contractors Geelong COMPANY</span></h3>
								</div>
							</div>
							
							<div class="item">
								<img src="http://localhost/cleaning/wp-content/uploads/2019/07/testimonial-1-1.png" alt="testimonial" />
								<div class="carousel-caption">
									<p>And at Cleaning Contractors Geelong we understand the importance of a clean and tidy office hence provide the best daily office cleaning Geelong services to our clients. </p>
									<h3>- Caz McNamara <span>FOUNDER OF Cleaning Contractors Geelong COMPANY</span></h3>
								</div>
							</div>
						</div>
					</div>
					
				</div><!-- industry-serve -->
			</div><!-- col-md-6 /- -->
		</div><!-- container /- -->
	</section><!-- Industry Serve /- -->
	
	<!-- Statistics Section -->
	<div id="statistics-section" class="statistics-section ow-background">
		<!-- container -->
		<div class="container">
			<!-- col-md-3 -->
			<div class="col-md-3 col-sm-3 col-xs-6">
				<div class="statistics-box">
					<h3>
						<img src="<?php the_field('image32'); ?>" alt="satisfied-customer" />
						<span class="count" id="statistics_1_count-1" data-statistics_percent="3540"></span>
					</h3>
					<img src="<?php the_field('image33'); ?>" alt="brush" />
					<h4><?php the_field('service-heading18'); ?></h4>
				</div>
			</div><!-- col-md-3 /- -->
			<!-- col-md-3 -->
			<div class="col-md-3 col-sm-3 col-xs-6">
				<div class="statistics-box">
					<h3>
						<img src="<?php the_field('image34'); ?>" alt="building" />
						<span class="count" id="statistics_1_count-2" data-statistics_percent="1237"></span>
					</h3>
					<img src="<?php the_field('image35'); ?>" alt="brush" />
					<h4><?php the_field('service-heading19'); ?></h4>
				</div>
			</div><!-- col-md-3 /- -->
			<!-- col-md-3 -->
			<div class="col-md-3 col-sm-3 col-xs-6">
				<div class="statistics-box">
					<h3>
						<img src="<?php the_field('image36'); ?>" alt="clever-employee" />
						<span class="count" id="statistics_1_count-3" data-statistics_percent="2500"></span>
					</h3>
					<img src="<?php the_field('image37'); ?>" alt="brush" />
					<h4><?php the_field('service-heading20'); ?></h4>
				</div>
			</div><!-- col-md-3 /- -->
			<!-- col-md-3 -->
			<div class="col-md-3 col-sm-3 col-xs-6">
				<div class="statistics-box">
					<h3>
						<img src="<?php the_field('image38'); ?>" alt="office" />
						<span id="statistics_1_count-4" data-statistics_percent="025"></span>
					</h3>
					<img src="<?php the_field('image39'); ?>" alt="brush" />
					<h4><?php the_field('service-heading21'); ?></h4>
				</div>
			</div><!-- col-md-3 /- -->
		</div><!-- container /- -->
	</div><!-- Statistics Section /- -->
	
	<!-- Blog Section -->
	<div id="blog-section" class="blog-section ow-section">
		<!-- container -->
		<div class="container">
			<!-- Section Header -->
			<div class="section-header">
				<h3><img src="<?php the_field('image40'); ?>" alt="sep-icon" /><?php the_field('heading2'); ?></h3>
			</div><!-- Section Header /- -->
			<!-- col-md-6 -->
			<article class="col-md-6 col-sm-12">
				<div class="blog-box">
					<div class="blog-box-inner">
						<!-- entry header -->
						<header class="entry-header">
							<h3><a title="Blog Title" href="#">12 tips to clean window</a></h3>
						</header><!-- entry header /- -->
						
						<footer class="entry-footer">
							<span class="byline">
								<span class="screen-reader-text">BY </span>
								<a title="Admin" href="#">Admin,</a>
							</span>
							<span class="byline">
								<span class="screen-reader-text">Likes </span>
								<a title="Likes" href="#">23</a>
							</span>
						</footer>
						
						<div class="entry-content">
							<p><?php the_field('service-para14'); ?></p>
						</div>
						<a href="services">Read more</a>
					</div>
					<div class="entry-cover pull-right">
						<a title="Entry Cover" href="#"><img src="<?php the_field('image41'); ?>" alt="blog-1" /></a>
						<span class="posted-on">
							<span class="like">12</span>
							<span class="date">10 APR</span>
						</span>
					</div>
				</div>
			</article><!-- col-md-6 /- -->
			
			<!-- col-md-6 -->
			<article class="col-md-6 col-sm-12">
				<div class="blog-box">
					<div class="blog-box-inner">
						<!-- entry header -->
						<header class="entry-header">
							<h3><a title="Blog Title" href="#">12 tips to clean window</a></h3>
						</header><!-- entry header /- -->
						
						<footer class="entry-footer">
							<span class="byline">
								<span class="screen-reader-text">BY </span>
								<a title="Admin" href="#">Admin,</a>
							</span>
							<span class="byline">
								<span class="screen-reader-text">Likes </span>
								<a Title="Likes" href="#">23</a>
							</span>
						</footer>
						
						<div class="entry-content">
							<p><?php the_field('service-para15'); ?></p>
						</div>
						<a href="services">Read more</a>
					</div>
					<div class="entry-cover pull-right">
						<a title="Blog Cover" href="#"><img src="<?php the_field('image42'); ?>" alt="blog-2" /></a>
						<span class="posted-on">
							<span class="like">12</span>
							<span class="date">10 APR</span>
						</span>
					</div>
				</div>
			</article><!-- col-md-6 /- -->
			<a href="services" class="btn">View All</a>
		</div><!-- container /- -->
	</div><!-- Blog Section /- -->
	
	<!-- call out Section -->
	<section id="call-out-section" class="call-out-section">
		<!-- container -->
		<div class="container">
			<!-- Section-header -->
			<div class="section-header">
				<h3><?php the_field('service-heading22'); ?></h3>
			</div><!-- Section-header /- -->
			<p><?php the_field('service-para16'); ?></p>
			<a title="Button" href="services" class="btn">Apply Now</a>
			<a title="Button" href="contact" class="btn">Contact Us</a>
		</div><!-- container -->
	</section><!-- call out section /- -->


<?php get_footer(); ?>