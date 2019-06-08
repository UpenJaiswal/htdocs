<?php 
/* Template Name: about */
get_header(); ?>
	
	<!-- START PAGE BANNER AND BREADCRUMBS -->
	<section class="single-page-title-area" data-background="<?php the_field('about')?>">
		<div class="auto-container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-12">
					<div class="single-page-title">
						<h2><?php the_field('about_us')?></h2>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-12">
					<ol class="breadcrumb">
					  <li class="breadcrumb-item"><a href="#"><span class="lnr lnr-home"></span></a></li>
					  <li class="breadcrumb-item"><?php the_field('pages')?></li>
					  <li class="breadcrumb-item active"><?php the_field('about_us')?></li>
					</ol>
				</div>
			</div>
			<!-- end row-->
		</div>
	</section>
	<!-- END PAGE BANNER AND BREADCRUMBS -->
	
	
	<!-- START ABOUT SECTION -->
    <section id="about" class="section-padding">
        <div class="auto-container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-5 pr-md-5 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5 about-us-into">
                    <div class="about-description-heading">				
					<h3><?php the_field('about_heading')?> <span><?php the_field('international')?></span></h3>
					<strong><?php the_field('about_sub_heading')?></strong>
					</div>
					
					<img src="<?php the_field('linda')?>" class="img-responsive"/>
					<div class="about-description">
					<?php the_field('about_content')?></br>
					<a href="#" class="about-us-into-btn"><?php the_field('website')?></a>
					</div>
				</div>
				<!-- end col -->
				<div class="col-lg-6 col-md-6 col-sm-12 col-12">
				    <h3><?php the_field('credentials')?></h3>
					<?php if(get_field('credential')): ?>
					<?php while(has_sub_field('credential')): ?>
					<div class="about-us-into-features mb-1">
						<div class="about-us-into-features-icon">
						<i class="icofont icofont-simple-right"></i>
						</div>
						<div class="about-us-into-features-text">
						<p><?php the_sub_field('credential_content'); ?></p>
						</div>
					</div>
					<?php endwhile; ?>
					<?php endif; ?>
				</div>
				<!-- end col -->	
			</div>
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END ABOUT SECTION -->
	
	
	<!-- START ABOUT SERVICE SECTION -->
    <section id="service" class="section-padding pt-0">
        <div class="container">
            <div class="row">
				<div class="col-lg-7 text-center mx-auto">
                    <div class="section-title">
                        <h3><?php the_field('our')?> <span><?php the_field('services')?></span></h3>
                        <span class="line"></span>
                        <p><?php the_field('service_content')?></p>
                    </div>
				</div>
				<!-- end section title -->
			</div>
			<div class="service-tab">
                <div class="row">
                     <div class="col-lg-3 col-md-12 c0l-sm-12 col-xs-12">
						 <ul id="tabsJustified" class="nav nav-tabs text-center">
							<li class="nav-item">
								<a href="#" data-target="#one" data-toggle="tab" class="nav-link">
									 <h6><?php the_field('jet_lag_recovery')?></h6>
									<!--  <span>Skill</span> -->
								</a>
							</li>

							<li class="nav-item">
								<a href="#" data-target="#two" data-toggle="tab" class="nav-link active">
									 <h6><?php the_field('restore_service')?></h6>
									 
								</a>
							</li>
							<li class="nav-item">
								<a href="#" data-target="#three" data-toggle="tab" class="nav-link">
									 <h6><?php the_field('benn_method')?></h6>
									 
								</a>
							</li>
								
						</ul>
					</div>
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
						<div id="tabsJustifiedContent" class="tab-content">
							<div id="one" class="tab-pane animated fadeInRight">
								<div class="row">
									<div class="col-lg-8 col-md-8 col-sm-12 col-12">
										<h5><?php the_field('jet_lag_recovery_caps')?></h5>
										<p><?php the_field('jet_lag_recovery_content')?></p>
										
										<div class="service-tab-list">	
											<h5><?php the_field('feature_list')?></h5>	
											<div class="row mt-3">
												<div class="col-lg-6 col-md-6 col-sm-6 col-12">
													<ul>
													<?php if(get_field('feature_l')): ?>
													<?php while(has_sub_field('feature_l')): ?>
														<li><i class="icofont icofont-simple-right"></i><?php the_sub_field('list'); ?></li>
													<?php endwhile; ?>
													<?php endif; ?>	
														
													</ul>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6 col-12">
													<ul>
														<?php if(get_field('feature_r')): ?>
													<?php while(has_sub_field('feature_r')): ?>
														<li><i class="icofont icofont-simple-right"></i><?php the_sub_field('list'); ?></li>
													<?php endwhile; ?>
													<?php endif; ?>	
													</ul>
												</div> 
											</div> 
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-12 col-12">
										<div class="single-doctor single-doctor-warp">
											<img class="img-fluid" src="<?php the_field('linda_benn_image')?>" alt="" />
											<div class="single-doctor-info">
												<h4><?php the_field('linda_benn')?></h4>
												
											</div>
											<div class="single-doctor-mask">
												<div class="single-doctor-mask-inner">
													<h5><?php the_field('about_us')?></h5>
													<p><?php the_field('about_us_text')?></p>
													<ul>
													   <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
													   <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
													   <li><a href="#"><i class="icofont icofont-social-youtube-play"></i></a></li>
													   <li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
													</ul>
												</div>
											</div>
										</div>	
									</div>
								</div>	
							</div>
							<div id="two" class="tab-pane animated fadeInRight active show">
								<div class="row">
									<div class="col-lg-8 col-md-8 col-sm-12 col-12">
										<h5><?php the_field('restore1')?></h5>
										<p><?php the_field('restore_text1')?></p>
										
										<div class="service-tab-list">	
											<h5><?php the_field('restore2')?></h5>	
											<div class="row mt-3">
												<div class="col-lg-12 col-md-12 col-sm-6 col-12">
													<ul>
													<?php if(get_field('restore_text2')): ?>
													<?php while(has_sub_field('restore_text2')): ?>
														<li><i class="icofont icofont-simple-right"></i><?php the_sub_field('restore_text'); ?></li>
													<?php endwhile; ?>
													<?php endif; ?>	
														
													</ul>
												</div>
												
											</div> 
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-12 col-12">
										<div class="single-doctor single-doctor-warp">
											<img class="img-fluid" src="<?php the_field('linda_benn_image')?>" alt="" />
											<div class="single-doctor-info">
											    <h4><?php the_field('linda_benn')?></h4>
												<!-- <h4>Williums Kevins</h4>
												<span>Urologist</span>  -->
											</div>
											<div class="single-doctor-mask">
												<div class="single-doctor-mask-inner">
													<h5><?php the_field('about_us')?></h5>
													<p><?php the_field('about_us_text')?></p>
													<ul>
													   <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
													   <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
													   <li><a href="#"><i class="icofont icofont-social-youtube-play"></i></a></li>
													   <li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
													</ul>
												</div>
											</div>
										</div>	
									</div>
								</div>
							</div>
							<div id="three" class="tab-pane animated fadeInRight">
								<div class="row">
									<div class="col-lg-8 col-md-8 col-sm-12 col-12">
										<h5 ><?php the_field('benn_method_caps')?></h5>
										<p><?php the_field('benn_method_text1')?></p>
										
										<div class="service-tab-list">	
											<h5><?php the_field('benn_method_heading')?></h5>	
											<div class="row mt-3">
												<div class="col-lg-12 col-md-12 col-sm-6 col-12">
													<ul>
													<?php if(get_field('benn_method_text2')): ?>
													<?php while(has_sub_field('benn_method_text2')): ?>
														<li><i class="icofont icofont-simple-right"></i></i><?php the_sub_field('benn_method_text'); ?></li>
													<?php endwhile; ?>
													<?php endif; ?>		
													</ul>
												</div>
												
											</div> 
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-12 col-12">
										<div class="single-doctor single-doctor-warp">
											<img class="img-fluid" src="<?php the_field('linda_benn_image')?>" alt="" />
											<div class="single-doctor-info">
												<h4><?php the_field('linda_benn')?></h4> 
											</div>
											<div class="single-doctor-mask">
												<div class="single-doctor-mask-inner">
													<h5><?php the_field('about_us')?></h5>
													<p><?php the_field('about_us_text')?></p>
													<ul>
													   <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
													   <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
													   <li><a href="#"><i class="icofont icofont-social-youtube-play"></i></a></li>
													   <li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
													</ul>
												</div>
											</div>
										</div>	
									</div>
								</div>
							</div>
								
						</div>
					</div>
				</div>
			</div>
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END ABOUT SERVICE SECTION -->
	
	
	
	
	
	<!-- START VIDEO & FAQ -->
    <section id="videofaq" class="section-padding">
        <div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-5 pr-md-5 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5">
					<div class="text-left">
						<div class="section-title section-title-left">
							<h3><?php the_field('client')?> <span><?php the_field('review')?></span></h3>
							<span class="line"></span>
						</div>
					</div>
					<!-- end section title -->
					
					<div class="panel-group faq-home-accor" id="accordion">
					<?php if(get_field('client_review')): ?>
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
                        <?php endif; ?>
                        <a href="testimonial.html" class="about-readmore single-doc-promo-btn fadeInUp animated"><?php the_field('view_more')?></a>						
                    </div>
										
				</div>
				<!-- end col -->
				<div class="col-lg-6 col-md-6 col-sm-12 col-12">
					<div class="text-left">
						<div class="section-title section-title-left">
							<h3><?php the_field('happy')?>  <span><?php the_field('client')?> </span></h3>
							<span class="line"></span>
						</div>
					</div>
					<!-- end section title -->
					<div class="youtube-promo-video-wrap">
						<iframe src="https://www.youtube.com/embed/h1PHUvkO_dU" style="width:100%;" height="320"></iframe>
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
                        <h3><?php the_field('our')?><span> <?php the_field('speciality')?></span></h3>
                        <span class="line"></span>
                        <?php the_field('our_speciality')?>
                    </div>
				</div>
				<!-- end section title -->
			</div>
			<div class="row">
				<div class="team-slider owl-carousel owl-theme">
				<?php if(get_field('our_speciality_content')): ?>
				<?php while(has_sub_field('our_speciality_content')): ?>
					<div class="single-doctor single-doctor-warp">
						<img class="img-fluid" src="<?php the_sub_field('image')?>" alt="" />
						<div class="single-doctor-info">
							<h4><?php the_sub_field('heading')?></h4>
							
						</div>
						<div class="single-doctor-mask">
							<div class="single-doctor-mask-inner">
							<h5><?php the_sub_field('heading')?></h5>
							<p><?php the_sub_field('content')?></p>
								<ul>
								   <li><a href="contact.html"><?php the_sub_field('get_appointment')?></a></li>
								</ul>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
				<?php endif; ?>	
					
					
				</div>
			</div>
					</div>
					<!-- end single doctor -->
					<div class="single-doctor single-doctor-warp">
						<img class="img-fluid" src="<?php the_field('re-energize')?>" alt="" />
						<div class="single-doctor-info">
							<h4><?php the_field('re-energize_heading')?></h4>
							 
						</div>
						<div class="single-doctor-mask">
							<div class="single-doctor-mask-inner">
								<?php the_field('re-energize_heading')?>
								<?php the_field('re-energize_content')?>
								<ul>
								   <li><a href="contact.html"><?php the_field('get_appointment')?></a></li>
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
	
	
	<!-- START CALL TO ACTION 2 -->
    <section id="calltoaction2" class="calltwo-padding overlay section-back-image" data-background="<?php the_field('promo_bg')?>">
        <div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-6 col-sm-12 col-12">
					<div class="calltoaction-wrap-2 mb-lg-0 mb-md-0 mb-sm-4 mb-4">
						<h4><?php the_field('promo_txt')?></h4>
					</div>
				</div>			
				<div class="col-lg-4 col-md-4 col-sm-12 col-12 text-lg-right text-md-right text-sm-center text-center">
					<div class="calltoaction-wrap-2-btn">
						<a class="wow fadeInDown promo-rmbtn-2" href="#"><?php the_field('read_more')?></a>			
					</div>	
				</div>
			</div>
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END CALL TO ACTION 2 -->
	
	
	<!-- START TESTIMONIAL -->
    <section id="testimonialfaq" class="section-padding">
        <div class="container">
            <div class="row">
				<div class="col-lg-7 text-center mx-auto">
                    <div class="section-title">
                        <h3><?php the_field('client')?> <span><?php the_field('testimonial_text')?></span></h3>
                        <span class="line"></span>
                        <?php the_field('client_testimonial')?>
                    </div>
				</div>
				<!-- end section title -->
			</div>
			<?php if(get_field('testimonial')): ?>
			<div class="row">
			<?php while(has_sub_field('testimonial')): ?>	
				<div class="col-lg-6 col-md-6 col-sm-12 col-12">
				
					<div class="single-testimonial mb-4">
						<div class="single-testimonial-img">
							<img class="img-fluid" src="<?php the_sub_field('testi_image'); ?>" alt="">
						</div>
						<div class="single-testimonial-text-warp">
							<div class="single-testimonial-text-inner">
							    <h6><?php the_sub_field('testi_heading'); ?></h6>
								<p><?php the_sub_field('testi_content'); ?></p>
								<footer class="blockquote-footer"><?php the_sub_field('testi_author'); ?></footer>
							</div>
							<div class="single-testimonial-text-icon">
								<i class="icofont icofont-quote-left"></i>
							</div>
						</div>
					
						
						
					</div>
					
				</div>
				<?php endwhile; ?>
				
			</div>
			<?php endif; ?>
			
			<div class="row mt-5">
						<div class="col-lg-12">
							<h4><?php the_field('linda_benn_interview')?></h4>
							<hr>
							<div class="service-tab-list">
								<div class="row mt-3">
									<div class="col-lg-6 col-md-6 col-sm-12 col-12">
										<p class="mb-3"><?php the_field('interview')?></p>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-3 mb-sm-3 mb-3">
										<iframe style="width:100%;" height="300" src="https://www.youtube.com/embed/BcrlxUSz8Lw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
								</div> 
							</div>	
						</div>
					</div>
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END TESTIMONIAL -->
	
	
	
	

    <?php get_footer(); ?>