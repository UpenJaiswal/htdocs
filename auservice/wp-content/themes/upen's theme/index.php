<?php
/* Template Name: home */
get_header(); ?>


<div class="page-content">

		<!-- Slider Revolution Section -->
		<section class="home-slider style-home-slider-hp-1 style-home-slider-hp-3">
			<div class="rev_slider_wrapper fullscreen-container" >
	        	<!-- the ID here will be used in the inline JavaScript below to initialize the slider -->
	       		<div id="rev_slider_3" class="rev_slider fullscreenbanner" data-version="5.4.5">
		            <ul> 
		                <!-- BEGIN SLIDE 1 -->
						<?php if(get_field('slider')): ?>    
                        <?php while(has_sub_field('slider')): ?>
		                <li data-transition="boxslide">
		                    <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
		                    <img src="<?php the_sub_field('image'); ?>" alt="slide-1" class="rev-slidebg">

		                    <!-- BEGIN LAYER -->
		                    <div class="tp-caption tp-resizeme slide-caption-title-1" 				                   	
		                        data-frames='[{"delay":0,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"y:-20px;opacity:0;","ease":"Power3.easeInOut"}]'
                        		data-fontsize="['50', '50', '45', '45']" 
                        		data-lineheight="['60', '60', '54', '54']"
                        		data-color="#fff"
                        		data-textAlign="['left', 'center', 'center', 'center']"
		                        data-x="['center','center','center','center']"
		                        data-y="['middle','middle','middle','middle']"
		                        data-hoffset="['-300', '0', '0', '0']" 
								data-voffset="['-29', '-90', '-105', '-70']"
								data-width="['573', '770', '800', '800']" 
								data-whitespace="normal"
								data-basealign="slide" 
								data-responsive_offset="off" >
								<?php the_sub_field('heading'); ?>
		                	</div>
		                    <div class="tp-caption tp-resizeme slide-caption-title-2"
		                        data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"y:-20px;opacity:0;","ease":"Power3.easeInOut"}]'
		                        data-fontsize="['18', '20', '22', '27']" 
		                        data-lineheight="['27', '30', '40', '50']"
								data-color="#f2f2f2"
                        		data-textAlign="['center', 'center', 'center', 'center']"
		                        data-x="['center','center','center','center']"
		                        data-y="['middle','middle','middle','middle']" 
		                        data-hoffset="['-360', '0', '0', '0']" 
								data-voffset="['63', '-2', '0', '-10']"
								data-width="['700', '700', '650', '550']" 
								data-whitespace="normal"
								data-basealign="slide" 
								data-responsive_offset="off" >
								<?php the_sub_field('content'); ?>
		                	</div>
		                	<a href="clean-service.html" target="_self" class="tp-caption tp-resizeme au-btn au-btn-green btn-small btn-resize-slider-1"
		                        data-frames='[{"delay":1000,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"y:20px;opacity:0;","ease":"Power3.easeInOut"}]'            
		                        data-x="['center','center','center','center']"
		                        data-y="['middle','middle','middle','middle']" 
		                        data-hoffset="['-495', '0', '0', '0']" 
								data-voffset="['139', '90', '128', '80']"
								data-basealign="slide" 
								data-responsive_offset="off" >	
			          			<?php the_sub_field('read_more'); ?>
			          		</a>
			          		<!-- END LAYER -->					          		
		                </li>
						<?php endwhile; ?>
						<?php endif; ?>
		                <!-- END SLIDE 1 -->
						
		            </ul>
    			</div>
			</div>
		</section> 
		<!-- End Slider Revolution Section -->

		<!-- Our Services Section --> 
		<section class="services-section-hp-3 section-box">
			<div class="container">
				<h2 class="special-heading"><?php the_field('our_services')?></h2>
				<div class="row">
					<!-- Services-1 -->
					<?php if(get_field('services')): ?>    
					<?php while(has_sub_field('services')): ?>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
						<div class="services-content">
							<div class="services-icon">
								<a href="clean-service.html"><img src="<?php the_sub_field('image'); ?>" alt="services-1"></a>
							</div>
							<div class="services-text">
								<span><a href="clean-service.html"><?php the_sub_field('heading'); ?></a></span>
								<p><?php the_sub_field('content'); ?></p>
							</div>
						</div>
					</div>
					<?php endwhile; ?>
					<?php endif; ?>
					
				</div>
			</div>
		</section>
		<!-- End Our Services Section -->

		<!-- About Company -->
	    <section class="section about-company-section section-split bg-black why-hp-6">
	        <div class="section-split-left matchHeigh about-company-detail">
	        	 <div class="we-work-section">
	                <div class="about-company-left">
						<h2 class="special-heading"><?php the_field('about_company')?></h2>
						<p class="info"><?php the_field('about_1')?></p>
						<div class="inner">
							<i class="la la-home"></i>
							<div class="text">
								<p><?php the_field('about_2')?></p>
							</div>
						</div>
						<div class="inner">
							<i class="la la-graduation-cap"></i>
							<div class="text">
								<p><?php the_field('about_3')?></p>
							</div>
						</div>
						<div class="inner">
							<i class="la la-trophy"></i>
							<div class="text">
								<p><?php the_field('about_4')?></p>
							</div>
						</div>
						<div class="inner">
							<i class="la la-cog"></i>
							<div class="text">
								<p><?php the_field('about_5')?></p>
							</div>
						</div>
						<div class="button">
							<a href="contact-v1.html" class="au-btn au-btn-green btn-small"><?php the_field('contact_us')?></a>
						</div>
					</div>
	            </div>
	        </div>
	        <div class="section-split-right bg-cover matchHeigh" style="background: url(&quot;<?php the_field('about_image')?>&quot;) center center no-repeat;">
	           
	        </div>
	    </section>
		<!-- End About Company -->

		<!-- Statistics Section -->
		<section class="statistics-section statistics-about-us statistics-hp-3 section-box  js-waypoint">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
						<div class="statistics-content">
							<span class="counterUp"><?php the_field('experience')?></span>
							<p><?php the_field('year_of_experience')?></p>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
						<div class="statistics-content">
							<span class="counterUp"><?php the_field('employees')?></span>
							<p><?php the_field('our_employees')?></p>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
						<div class="statistics-content">
							<span class="counterUp"><?php the_field('customers')?></span><span class="sub-text"><?php the_field('unit')?></span>
							<p><?php the_field('happy_customers')?></p>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
						<div class="statistics-content">
							<span class="counterUp"><?php the_field('award')?></span>
							<p><?php the_field('award_winning')?></p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Statistics Section -->

		<!-- Gallery Section -->
		<section class="gallery-section gallery-v3-section gallery-hp-3-section section-box">			
			<div class="container">
				<h2 class="special-heading"><?php the_field('our_gallery')?></h2>
				<div class="gallery-total">
		            <div class="row">
		            	<!-- Product-1 -->
						<?php if(get_field('products')): ?>    
						<?php while(has_sub_field('products')): ?>
		                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
		                	<div class="gallery-content">
								<img src="<?php the_sub_field('image'); ?>">
								<div class="overlay"></div>
								<div class="gallery-text">
									<div class="gallery-text-inner">
										<p><?php the_sub_field('heading'); ?></p>
										<span><?php the_sub_field('content'); ?></span>
									</div>
									<a href="<?php the_sub_field('image'); ?>" data-fancybox="gallery" class="gallery-elements">
	                            		<i class="la la-search-plus"></i>
	                                </a>
								</div>
							</div>
		                </div>
						<?php endwhile; ?>
						<?php endif; ?>
		                
	                </div> 
                </div> 
                <div class="all-gallery">
					<a href="gallery-v1.html" class="au-btn au-btn-green btn-small"><?php the_field('view_all_gallery')?></a>
				</div>
			</div> 
		</section>
		<!-- End Gallery Section -->

		<!-- Pricing Table Section -->
		<section class="price-section section-box">
			<div class="container">
				<h2 class="special-heading"><?php the_field('pricing_table')?></h2>
				<div class="row">
				<?php if(get_field('table')): ?>    
				<?php while(has_sub_field('table')): ?>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
						<div class="price-content">
							<div class="type">
								<span><?php the_sub_field('plan_type'); ?></span>
							</div>
							<div class="price">
								<span><?php the_sub_field('price'); ?></span>
								<p> <?php the_sub_field('rate'); ?></p>
							</div>
							<div class="detail">
								<p><span><?php the_sub_field('bandwidth_content'); ?></span> <?php the_sub_field('bandwidth'); ?></p>
								<p><span><?php the_sub_field('storage_content'); ?></span> <?php the_sub_field('storage'); ?></p>
								<p><span><?php the_sub_field('account_content'); ?></span> <?php the_sub_field('account'); ?></p>
								<p><span><?php the_sub_field('hots_domain_content'); ?></span> <?php the_sub_field('hots_domain'); ?></p>
								<p><span><?php the_sub_field('support_content'); ?></span> <?php the_sub_field('support'); ?></p>
								<a href="#" class="au-btn-green au-btn btn-small"><?php the_sub_field('sign_up'); ?></a>
							</div>
							<div class="icon">
								<img src="<?php the_sub_field('icon'); ?>" alt="icon">
							</div>
						</div>
					</div>
					<?php endwhile; ?>
					<?php endif; ?>
					
				</div>
			</div>
		</section>
		<!-- End Pricing Table Section -->

		<!-- CTA Section -->
		<section class="cta-section cta-our-team cta-hp-3 section-box" style="background: url(<?php the_field('background_image')?>)">
			<div class="container">
				<div class="cta-content">
					<div class="cta-text">
						<p><?php the_field('are_you_ready')?></p>
						<span><?php the_field('lets_do')?></span>
					</div>
					<a href="clean-service.html" class="au-btn au-btn-green btn-small"><?php the_field('an_appointment')?></a>
				</div>
			</div>
		</section>
		<!-- End CTA Section -->

		<!-- Our Team Section -->
		<section class="our-team-v1-section our-team-about our-team-hp-3 section-box">
			<div class="our-team-inner">
				<div class="container">
					<h2 class="special-heading"><?php the_field('our_team')?></h2>
					<div id="our-team" class="owl-carousel owl-theme">
						<!-- Member-1 -->
						<?php if(get_field('team')): ?>    
						<?php while(has_sub_field('team')): ?>
						<div class="our-team-content">
							<img src="<?php the_sub_field('image'); ?>">
							<div class="team-member">
								<span class="member-name"><?php the_sub_field('name'); ?></span>
								<span class="member-job"><?php the_sub_field('job'); ?></span>
								<p><?php the_sub_field('content'); ?></p>
							</div>
							<div class="socials">
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-whatsapp"></i></a>
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-behance"></i></a>
							</div>
						</div>
						<?php endwhile; ?>
						<?php endif; ?>
						
					</div>
				</div>
			</div>
		</section>
		<!-- End Our Team Section -->

		<!-- Client Section -->
		<section class="client-section client-about-us client-hp-3 section-box">
			<div class="container">
				<h2 class="special-heading"><?php the_field('testimonials')?></h2>
				<div id="client-hp-1" class="owl-carousel owl-theme">
					<!-- Client-1 -->
					<div class="client-content">
						<i class="fas fa-quote-left"></i>
						<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubili elltesque habitant morbi tristique senectus et netus et malesuada fam turpi egestas. Nulla daps massa augue, vel suscipit lacus dapibus placerat. Etiam sem dmalesuada sit ame in, laoreet maximus the eget.</p>
						<div class="client-images">
							<img src="<?php bloginfo ('template_url'); ?>/images/hp-1-client.jpg" alt="client-1">
							<div class="client-title">
								<div class="client-info">
									<span class="cilent-name">Anthony Fowler</span>
									<span class="client-job">Developer in Envato</span>
								</div>
								<div class="client-rate">
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
								</div>
							</div>
						</div>
					</div>
					<!-- Client-2 -->
					<div class="client-content">
						<i class="fas fa-quote-left"></i>
						<p>Nulla imperdiet commodo nisl in pretium. Vivamus bibendum, arcu nec ullam viverra, est augue tincidunt justo, quis interdum quam dolor nec magna. Quis sodales dolor amet est commodo, quis aliquet velit congue. Suspendisse ut molestie ex. Sed eu sodales ipsum gravida.</p>
						<div class="client-images">
							<img src="<?php bloginfo ('template_url'); ?>/images/hp-1-client-1.jpg" alt="client-2">
							<div class="client-title">
								<div class="client-info">
									<span class="cilent-name">Monica Riley</span>
									<span class="client-job">Marketing in Envato</span>
								</div>
								<div class="client-rate">
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
								</div>
							</div>
						</div>
					</div>
					<!-- Client-3 -->
					<div class="client-content">
						<i class="fas fa-quote-left"></i>
						<p>Quis sodales dolor amet est commodo, quis aliquet velit congue. Suspendisse ut molestie exipsum, id pharetra mauris. Nulla imperdiet commodo nisl in pretium. Vivamus bibendum, arcu nec ullam viverra, est augue tincidunt justo, quis interdum quam dolor nec magna.</p>
						<div class="client-images">
							<img src="<?php bloginfo ('template_url'); ?>/images/hp-1-client-1.jpg" alt="client-3">
							<div class="client-title">
								<div class="client-info">
									<span class="cilent-name">Jonny Aloni</span>
									<span class="client-job">Employee</span>
								</div>
								<div class="client-rate">
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
								</div>
							</div>
						</div>
					</div>
					<!-- Client-4 -->
					<div class="client-content">
						<i class="fas fa-quote-left"></i>
						<p>Vivamus bibendum, arcu nec ullam viverra, est augue tincidunt justo, quis interdum quam dolor nec magna. Nulla imperdiet commodo nisl in pretium. Quis sodales dolor amet est commodo, quis aliquet velit congue. Suspendisse ut molestie exipsum, id pharetra mauris.</p>
						<div class="client-images">
							<img src="<?php bloginfo ('template_url'); ?>/images/hp-1-client.jpg" alt="client-4">
							<div class="client-title">
								<div class="client-info">
									<span class="cilent-name">Sami Andy</span>
									<span class="client-job">Director in MU</span>
								</div>
								<div class="client-rate">
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
								</div>
							</div>
						</div>
					</div>
					<!-- Client-5 -->
					<div class="client-content">
						<i class="fas fa-quote-left"></i>
						<p>Est augue tincidunt justo, quis interdum quam dolor nec magna. Quis sodales dolor amet est commodo, quis aliquet velit congue. Suspendisse ut molestie exipsum, id pharetra mauris. Nulla imperdiet commodo nisl in pretium. Vivamus bibendum, arcu nec ullam viverra.</p>
						<div class="client-images">
							<img src="<?php bloginfo ('template_url'); ?>/images/hp-1-client.jpg" alt="client-5">
							<div class="client-title">
								<div class="client-info">
									<span class="cilent-name">Henry Karic</span>
									<span class="client-job">Manager in SP</span>
								</div>
								<div class="client-rate">
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="far fa-star"></i>
								</div>
							</div>
						</div>
					</div>
					<!-- Client-6 -->
					<div class="client-content">
						<i class="fas fa-quote-left"></i>
						<p>Quis aliquet velit congue. Nulla imperdiet commodo nisl in pretium. Vivamus bibendum, arcu nec ullam viverra, est augue tincidunt justo, quis interdum quam dolor nec magna. Quis sodales dolor amet est commodo. Suspendisse ut molestie exipsum, id pharetra mauris.</p>
						<div class="client-images">
							<img src="<?php bloginfo ('template_url'); ?>/images/hp-1-client-1.jpg" alt="client-6">
							<div class="client-title">
								<div class="client-info">
									<span class="cilent-name">Taylor Hand</span>
									<span class="client-job">IT Support</span>
								</div>
								<div class="client-rate">
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="far fa-star"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Client Section -->

		<!-- Partner Section -->
		<section class="partner-section partner-our-team section-box">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
						<div class="partner-content">
							<figure>
								<img src="<?php the_field('partner_1')?>" alt="parner-1">
							</figure>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
						<div class="partner-content">
							<figure>
								<img src="<?php the_field('partner_2')?>" alt="parner-2">
							</figure>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
						<div class="partner-content">
							<figure>
								<img src="<?php the_field('partner_3')?>" alt="parner-3">
							</figure>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
						<div class="partner-content">
							<figure>
								<img src="<?php the_field('partner_4')?>" alt="parner-4">
							</figure>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Partner Section -->
<?php get_footer(); ?>


