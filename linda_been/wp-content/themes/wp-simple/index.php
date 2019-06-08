<?php 

/* Template Name: index */
 get_header();

?>



<!-- START SLIDER SECTION -->
	<div class="tp-banner-container">
		<div class="tp-banner">
		
			<?php echo do_shortcode('[metaslider id="410"]'); ?>
			
		</div>
	</div>
	<!-- END SLIDER SECTION  -->
	
	<!-- START ABOUT SECTION -->
    <section id="about" class="section-padding">
        <div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-5 pr-md-5 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5 about-us-into">
					
					<?php the_field('welcome')?>
					
					 <a href="about.html" class="about-readmore single-doc-promo-btn fadeInUp animated">Read More..</a>
					
					
				</div>
				<!-- end col -->
				<div class="col-lg-6 col-md-6 col-sm-12 col-12">
				    <img class="img-fluid mb-4" src="<?php the_field('linda_benn')?>" alt="Linda Benn">					
				</div>
				<!-- end col -->	
			</div>
				
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END ABOUT SECTION -->
	
	<!-- START SERViCE SECTION -->
    <section id="service" class="section-padding bg-gray">
        <div class="container"> 
			<div class="row">
				<div class="col-lg-7 text-center mx-auto">
                    <div class="section-title">
                        <h3>Our<span> Services</span></h3>
                        <span class="line"></span>
                        <?php the_field('services')?>
                    </div>
				</div>
				<!-- end section title -->
			</div>
			<?php if(get_field('our_services')): ?>
            <div class="row">
			<?php while(has_sub_field('our_services')): ?>	
				<div class="col-lg-4 col-md-6 col-sm-12 col-12">
					<div class="service-two">
					  <img class="rounded img-fluid align-self-top" src="<?php the_sub_field('our_services_image'); ?>" alt="">
					  <div class="media-body mt-4 pt-3 pr-3 pl-3 pb-3">
						<?php the_sub_field('our_services_content'); ?>
					    <a class="service-two-link" href="<?php the_sub_field('our_services_refer'); ?>">Read More</a>
					  </div>
					</div>
				</div>
				<?php endwhile; ?>
			</div>
			<?php endif; ?>	
            <!--- END ROW -->
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END SERViCE SECTION -->
	
	<!-- START GALLERY SECTION -->
    
    <!-- END GALLERY SECTION -->
	
	
	<!-- START VIDEO & FAQ -->
    <section id="videofaq" class="section-padding pt-0">
        <div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-5 pr-md-5 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5">
					<div class="text-left">
						<div class="section-title section-title-left">
							<h3>Client <span>Reviews</span></h3>
							<span class="line"></span>
						</div>
					</div>
					<!-- end section title -->
					<?php if(get_field('client_review')): ?>
					<div class="panel-group faq-home-accor" id="accordion">
					<?php while(has_sub_field('client_review')): ?>	
                        <div class="panel panel-default">
	                         <div class="panel-heading">
	                         <h5 class="panel-title">
								<i class="icofont icofont-thin-down"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel1"><?php the_sub_field('review_heading'); ?><br/><small><?php the_sub_field('reviewer'); ?></small></a>
							</h5>
                            </div>
                            <div id="panel1" class="panel-collapse collapse">
							<div class="panel-body">
								<p><?php the_sub_field('review_content'); ?></p>
							</div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <a href="testimonial.html" class="about-readmore single-doc-promo-btn fadeInUp animated">View More</a>				
                    </div>	
					<?php endif; ?>
				</div>
				
				<!-- end col -->
				<div class="col-lg-6 col-md-6 col-sm-12 col-12">
					<div class="text-left">
						<div class="section-title section-title-left">
							<h3>Happy  <span>Client</span></h3>
							<span class="line"></span>
						</div>
					</div>
					<!-- end section title -->
					<div class="youtube-promo-video-wrap">
						
						<iframe style="margin-bottom: 30px; width:100%;" src="https://www.youtube.com/embed/uSiFbr2sqc0" height="300"></iframe>
						<a href="testimonial.html" class="about-readmore single-doc-promo-btn fadeInUp animated">View More</a>
						
					</div>
				</div>
				<!-- end col -->	
			</div>
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END VIDEO & FAQ -->
	
	
	<!-- START DOCTOR SECTION -->
    <section id="doctor" class="section-padding bg-gray">
        <div class="container">
            <div class="row">
				<div class="col-lg-7 text-center mx-auto">
                    <div class="section-title">
                        <h3>Our<span> Specialities</span></h3>
                        <span class="line"></span>
                        <?php the_field('our_speciality')?>
                    </div>
				</div>
				<!-- end section title -->
			</div>
			<div class="row">
				<div class="team-slider owl-carousel owl-theme">
					<div class="single-doctor single-doctor-warp">
						<img class="img-fluid" src="<?php the_field('release')?>" alt="" />
						<div class="single-doctor-info">
							<h4>Release</h4>
							
						</div>
						<div class="single-doctor-mask">
							<div class="single-doctor-mask-inner">
								<?php the_field('release_content')?>
								<ul>
								   <li><a href="contact.html">Get Appointment</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- end single doctor -->	
					<div class="single-doctor single-doctor-warp">
						<img class="img-fluid" src="<?php the_field('realign')?>" alt="" />
						<div class="single-doctor-info">
							<h4>Realign</h4> 
						</div>
						<div class="single-doctor-mask">
							<div class="single-doctor-mask-inner">
								<?php the_field('realign_content')?>
								<ul>
								   <li><a href="contact.html">Get Appointment</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- end single doctor -->
					<div class="single-doctor single-doctor-warp">
						<img class="img-fluid" src="<?php the_field('restore')?>" alt="" />
						<div class="single-doctor-info">
							<h4>Restore</h4>
							
						</div>
						<div class="single-doctor-mask">
							<div class="single-doctor-mask-inner">
								<?php the_field('restore_content')?>
								<ul>
								   <li><a href="contact.html">Get Appointment</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- end single doctor -->
					<div class="single-doctor single-doctor-warp">
						<img class="img-fluid" src="<?php the_field('rebalance')?>" alt="" />
						<div class="single-doctor-info">
							<h4>Rebalance</h4>
							 
						</div>
						<div class="single-doctor-mask">
							<div class="single-doctor-mask-inner">
								<?php the_field('rebalance_content')?>
								<ul>
								   <li><a href="contact.html">Get Appointment</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- end single doctor -->
					<div class="single-doctor single-doctor-warp">
						<img class="img-fluid" src="<?php the_field('re-energize')?>" alt="" />
						<div class="single-doctor-info">
							<h4>Re-energize</h4>
							 
						</div>
						<div class="single-doctor-mask">
							<div class="single-doctor-mask-inner">
								<h5>Re-energize</h5>
								<?php the_field('re-energize_content')?>
								<ul>
								   <li><a href="contact.html">Get Appointment</a></li>
								</ul>
							</div>
						</div>
					</div> 
					<!-- end single doctor -->
				</div>
			</div>
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END DOCTOR SECTION -->
	
	<!-- START BLOG SERCTION -->
    <section id="blog" class="section-padding">
        <div class="container">
            <div class="row">
				<div class="col-lg-7 text-center mx-auto">
                    <div class="section-title">
                        <h3>Our<span> Blog</span></h3>
                        <span class="line"></span>
                       <?php the_field('our_blog')?>
                    </div>
				</div>
				<!-- end section title -->
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
					<div class="single-blog-home">
						<div class="single-blog-home-img">
							<a href="#"><img class="img-fluid" src="<?php the_field('blog1')?>" alt=""></a>
							<div class="single-blog-home-meta">
								<span class="post-date"><i class="lnr lnr-calendar-full"></i> 15 Dec</span>
								<span class="post-user"><i class="lnr lnr-user"></i> Admin</span>
								<span class="post-comment"><i class="lnr lnr-bubble"></i> 5 comments</span>
							</div>
						</div>
						<a href="#"><?php the_field('blog1_content')?></a>
						
						<a href="blog_podcast" class="blog-home-rmbtn">Continue <i class="icofont icofont-long-arrow-right"></i></a>	
					</div>
				</div>
				<!-- end single blog -->
				<div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
					<div class="single-blog-home">
						<div class="single-blog-home-img">
							<a href="#"><img class="img-fluid" src="<?php the_field('blog2')?>" alt=""></a>
							<div class="single-blog-home-meta">
								<span class="post-date"><i class="lnr lnr-calendar-full"></i> 16 Dec</span>
								<span class="post-user"><i class="lnr lnr-user"></i> Jone</span>
								<span class="post-comment"><i class="lnr lnr-bubble"></i> 6 comments</span>
							</div>
						</div>
						<a href="#"><?php the_field('blog2_content')?></a>
						
						<a href="blog_podcast" class="blog-home-rmbtn">Continue <i class="icofont icofont-long-arrow-right"></i></a>	
					</div>
				</div>
				<!-- end single blog -->
				<div class="col-lg-4 col-md-6 col-sm-12 col-12">
					<div class="single-blog-home">
						<div class="single-blog-home-img">
							<a href="#"><img class="img-fluid" src="<?php the_field('blog3')?>" alt=""></a>
							<div class="single-blog-home-meta">
								<span class="post-date"><i class="lnr lnr-calendar-full"></i> 17 Dec</span>
								<span class="post-user"><i class="lnr lnr-user"></i> Admin</span>
								<span class="post-comment"><i class="lnr lnr-bubble"></i> 7 comments</span>
							</div>
						</div>
						<a href="#"><?php the_field('blog3_content')?></a>
						
						<a href="blog_podcast" class="blog-home-rmbtn">Continue <i class="icofont icofont-long-arrow-right"></i></a>	
					</div>
				</div>
				<!-- end single blog -->
			</div>
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END BLOG SERCTION -->
	
	
	



<?php get_footer(); ?>


