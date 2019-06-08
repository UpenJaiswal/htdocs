<?php 

/* Template Name: home */
 get_header();

?>


<!-- START SLIDER SECTION -->
	<div class="tp-banner-container">
		<div class="tp-banner">
		<ul>
				<!-- SLIDE 1 -->
				<li data-transition="slideup" data-slotamount="1" data-masterspeed="1000" data-delay="10000"  data-saveperformance="off"  data-title="Slide One">
					<!-- MAIN IMAGE -->
					<img src="<?php the_field('slider_image_1')?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"> 
					<!-- LAYERS -->
					<!-- LAYER NR. 1 -->
					<div class="tp-caption sft sfb tp-resizeme rs-parallaxlevel-10"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="-100"
						data-speed="1000"
						data-start="1000"
						data-endspeed="1200"
						data-easing="easeOutExpo"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1">
						<div><h2 style="color:#fff !important;"><?php the_field('slider_heading_1')?></h2></div>
					</div>
					<!-- LAYER NR. 2 -->
					<div class="tp-caption lfb ltt tp-resizeme rs-parallaxlevel-10"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="-10"
						data-speed="1200"
						data-start="1200"
						data-endspeed="1200"
						data-easing="easeOutExpo"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1">
						<div><p style="color:#fff !important;"> <?php the_field('slider_content_1')?><br/><?php the_field('slider_content_1a')?></p></div>
					</div>
					<!-- LAYER NR. 3 -->
					<div class="tp-caption lfb ltt tp-resizeme rs-parallaxlevel-10"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="65"
						data-speed="1400"
						data-start="1400"
						data-endspeed="1200"
						data-easing="easeOutExpo"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1">
						<!-- <a  href="about-us.html" class="home-btn-1">Read More</a> &ensp;&ensp;  -->
						<a href="benn-technique" class="home-btn-2"><?php the_field('our_services_slider')?></a>
					</div>
				</li>
				<!-- SLIDE 2 -->
				<li data-transition="slidedown" data-slotamount="1" data-masterspeed="1000" data-delay="10000"  data-saveperformance="off"  data-title="Slide Two">
					<!-- MAIN IMAGE -->
					<img src="<?php the_field('slider_image_2')?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"> 
					<!-- LAYERS -->
					<!-- LAYER NR. 1 -->
					<div class="tp-caption sft sfb tp-resizeme rs-parallaxlevel-10"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="-100"
						data-speed="1000"
						data-start="1000"
						data-endspeed="1200"
						data-easing="easeOutExpo"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1">
						<div><h2 style="color:#fff !important;"><?php the_field('slider_heading_2')?></h2></div>
					</div>
					<!-- LAYER NR. 2 -->
					<div class="tp-caption lfb ltt tp-resizeme rs-parallaxlevel-10"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="-10"
						data-speed="1200"
						data-start="1200"
						data-endspeed="1200"
						data-easing="easeOutExpo"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1">
						<div><p style="color:#fff !important;"><?php the_field('slider_content_2')?>
						<br/><?php the_field('slider_content_2a')?><br/><?php the_field('slider_content_2b')?></p></div>
					</div>
					<!-- LAYER NR. 3 -->
					<div class="tp-caption lfb ltt tp-resizeme rs-parallaxlevel-10"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="65"
						data-speed="1400"
						data-start="1400"
						data-endspeed="1200"
						data-easing="easeOutExpo"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1">
						
						<a href="facial-hormony" class="home-btn-2"><?php the_field('our_services_slider')?></a>
					</div>
				</li>
				
				<!-- SLIDE 3 -->
				<li data-transition="slidedown" data-slotamount="1" data-masterspeed="1000" data-delay="10000"  data-saveperformance="off"  data-title="Slide Three">
					<!-- MAIN IMAGE -->
					<img src="<?php the_field('slider_image_1')?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"> 
					<!-- LAYERS -->
					<!-- LAYER NR. 1 -->
					<div class="tp-caption sft sfb tp-resizeme rs-parallaxlevel-10"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="-100"
						data-speed="1000"
						data-start="1000"
						data-endspeed="1200"
						data-easing="easeOutExpo"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1">
						<div><h2 style="color:#fff !important;"><?php the_field('slider_heading_3')?></h2></div>
					</div>
					<!-- LAYER NR. 2 -->
					<div class="tp-caption lfb ltt tp-resizeme rs-parallaxlevel-10"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="-10"
						data-speed="1200"
						data-start="1200"
						data-endspeed="1200"
						data-easing="easeOutExpo"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1">
						<div><p style="color:#fff !important;">
						<?php the_field('slider_content_3')?><br/><?php the_field('slider_content_3a')?>
						</p></div>
					</div>
					<!-- LAYER NR. 3 -->
					<div class="tp-caption lfb ltt tp-resizeme rs-parallaxlevel-10"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="65"
						data-speed="1400"
						data-start="1400"
						data-endspeed="1200"
						data-easing="easeOutExpo"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1">
						
						<a href="jet-log-recovery" class="home-btn-2"><?php the_field('our_services_slider')?></a>
					</div>
				</li>
				
				<!-- SLIDE 4 -->
				<li data-transition="slidedown" data-slotamount="1" data-masterspeed="1000" data-delay="10000"  data-saveperformance="off"  data-title="Slide Four">
					<!-- MAIN IMAGE -->
					<img src="<?php the_field('slider_image_4')?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"> 
					<!-- LAYERS -->
					<!-- LAYER NR. 1 -->
					<div class="tp-caption sft sfb tp-resizeme rs-parallaxlevel-10"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="-100"
						data-speed="1000"
						data-start="1000"
						data-endspeed="1200"
						data-easing="easeOutExpo"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1">
						<div><h2><?php the_field('slider_heading_4')?></h2></div>
					</div>
					<!-- LAYER NR. 2 -->
					<div class="tp-caption lfb ltt tp-resizeme rs-parallaxlevel-10"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="-10"
						data-speed="1200"
						data-start="1200"
						data-endspeed="1200"
						data-easing="easeOutExpo"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1">
						<div><p><?php the_field('slider_content_4')?><br/><?php the_field('slider_content_4a')?><br/><?php the_field('slider_content_4b')?>
						</p></div>
					</div>
					<!-- LAYER NR. 3 -->
					<div class="tp-caption lfb ltt tp-resizeme rs-parallaxlevel-10"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="65"
						data-speed="1400"
						data-start="1400"
						data-endspeed="1200"
						data-easing="easeOutExpo"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1">
						
						<a href="restore-realignmind-bodypackages" class="home-btn-2"><?php the_field('our_services_slider')?></a>
					</div>
				</li>
				
				<!-- SLIDE 5 -->
				<li data-transition="slidedown" data-slotamount="1" data-masterspeed="1000" data-delay="10000"  data-saveperformance="off"  data-title="Slide Five">
					<!-- MAIN IMAGE -->
					<img src="<?php the_field('slider_image_5')?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"> 
					<!-- LAYERS -->
					<!-- LAYER NR. 1 -->
					<div class="tp-caption sft sfb tp-resizeme rs-parallaxlevel-10"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="-100"
						data-speed="1000"
						data-start="1000"
						data-endspeed="1200"
						data-easing="easeOutExpo"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1">
						<div><h2 style="color:#fff !important;"><?php the_field('slider_heading_5')?></h2></div>
					</div>
					<!-- LAYER NR. 2 -->
					<div class="tp-caption lfb ltt tp-resizeme rs-parallaxlevel-10"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="-10"
						data-speed="1200"
						data-start="1200"
						data-endspeed="1200"
						data-easing="easeOutExpo"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1">
						<div><p style="color:#fff !important;">
						<?php the_field('slider_content_5')?><br/><?php the_field('slider_content_5a')?><br/><?php the_field('slider_content_5b')?>
						
						</p></div>
					</div>
					<!-- LAYER NR. 3 -->
					<div class="tp-caption lfb ltt tp-resizeme rs-parallaxlevel-10"
						data-x="left" data-hoffset="0"
						data-y="center" data-voffset="65"
						data-speed="1400"
						data-start="1400"
						data-endspeed="1200"
						data-easing="easeOutExpo"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1">
						
						<a href="facial-hormony" class="home-btn-2"><?php the_field('our_services_slider')?></a>
					</div>
				</li>
			</ul>
			
			
		</div>
	</div>
	<!-- END SLIDER SECTION  -->
	
	<!-- START ABOUT SECTION -->
    <section id="about" class="section-padding">
        <div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-5 pr-md-5 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5 about-us-into">
					
				<h3><?php the_field('welcome')?> <span><?php the_field('linda_ben')?></span></h3>
				<h5 class="pb-1 pt-1"><?php the_field('welcome_heading1')?> </h5>
					<h6 class="pb-1 pt-1"><em><?php the_field('welcome_heading2')?></em></h6>
					 <h6 class="pb-1 pt-1"><b><?php the_field('welcome_heading3')?> </b></h6>
					<h6 class="pb-1 pt-1"><b><a href="about.html"><?php the_field('click_here')?> </a><?php the_field('welcome_heading4')?>  </b></h6> 
					
					<p><?php the_field('welcome_content')?></p>	
					 <a href="about.html" class="about-readmore single-doc-promo-btn fadeInUp animated"><?php the_field('read_more')?>..</a>
					
					
				</div>
				<!-- end col -->
				<div class="col-lg-6 col-md-6 col-sm-12 col-12">
				    <img class="img-fluid mb-4" src="<?php the_field('linda_ben_img')?>" alt="Linda Benn">					
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
                        <h3><?php the_field('our')?> <span><?php the_field('services')?></span></h3>
                        <span class="line"></span>
                        <?php the_field('services_content')?>
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
					  <h4><?php the_sub_field('our_services_heading'); ?></h4>
					  <p><?php the_sub_field('our_services_content'); ?></p>
					    <a class="service-two-link" href="<?php the_sub_field('our_services_refer'); ?>"><?php the_sub_field('read_more')?></a>
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
							<h3><?php the_field('client')?> <span><?php the_field('review')?></span></h3>
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
                        
                        <a href="testimonial.html" class="about-readmore single-doc-promo-btn fadeInUp animated"><?php the_field('view_more')?></a>						
                    </div>
					<?php endif; ?>					
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
						<iframe style="margin-bottom: 30px; width:100%;" src="<?php the_field('promo_video')?>" height="300"></iframe>
						
						<a href="testimonial.html" class="about-readmore single-doc-promo-btn fadeInUp animated"><?php the_field('view_more')?></a>
						
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
        <!--- END CONTAINER -->
    </section>
    <!-- END DOCTOR SECTION -->
	
	<!-- START BLOG SERCTION -->
    <section id="blog" class="section-padding">
        <div class="container">
            <div class="row">
				<div class="col-lg-7 text-center mx-auto">
                    <div class="section-title">
                        <h3><?php the_field('our')?><span> <?php the_field('blog')?></span></h3>
                        <span class="line"></span>
                       <p><?php the_field('our_blog')?></p>
                    </div>
				</div>
				<!-- end section title -->
			</div>
			<div class="row">
			<?php 
       $args = array ( 'post_type' => 'Projects', 'posts_per_page' => -1);
       $myposts = get_posts( $args );
       foreach( $myposts as $post ) : setup_postdata($post);
          ?>
				<div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
					<div class="single-blog-home">
						<div class="single-blog-home-img">
							<?php echo get_the_post_thumbnail( $page->ID, 'medium' ); ?>
							<div class="single-blog-home-meta">
								<span class="post-date"><i class="lnr lnr-calendar-full"></i> <?php echo get_the_date('j M'); ?></span>
								<span class="post-user"><i class="lnr lnr-user"></i> Admin</span>
								<span class="post-comment"><i class="lnr lnr-bubble"></i> 5 comments</span>
							</div>
						</div>
						
						<a href="#"><h5><?php the_title(); ?></h5></a>
						<p><?php echo wp_trim_words( get_the_content(), 60, '...' ); ?></p>
						
						<a href="blog_podcast" class="blog-home-rmbtn">Continue <i class="icofont icofont-long-arrow-right"></i></a>	
					</div>
				</div>
				<?php 
endforeach; 
wp_reset_postdata();
?>
				<!-- end single blog -->
				
				
			</div>
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END BLOG SERCTION -->
	
	
	



<?php get_footer(); ?>


