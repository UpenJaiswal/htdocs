<?php 
/* Template Name: testimonial */
get_header(); ?>
	
	<!-- START PAGE BANNER AND BREADCRUMBS -->
	<section class="single-page-title-area" data-background="<?php the_field('testimonial')?>">
		<div class="auto-container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-12">
					<div class="single-page-title">
						<h2>Testimonial</h2>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-12">
					<ol class="breadcrumb">
					  <li class="breadcrumb-item"><a href="#"><span class="lnr lnr-home"></span></a></li>
					  <li class="breadcrumb-item">Pages</li>
					  <li class="breadcrumb-item active">Testimonial</li>
					</ol>
				</div>
			</div>
			<!-- end row-->
		</div>
	</section>
	<!-- END PAGE BANNER AND BREADCRUMBS  -->
	
	
   <section class="section-padding testimonial-bg-color">
        <div class="auto-container">

            <div class="row">
			    <div class="col-md-2"></div>
				
			    <div class="col-md-8">
				     <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
           
                <div class="carousel-inner" role="listbox">
				
                    <div class="carousel-item active">
				<?php if(get_field('testi')): ?>
				<?php while(has_sub_field('testi')): ?>
                        <div class="testimonial4_slide">
                            <div class="single-testimonial-img testimonial-float1">
								<img class="img-fluid" src="<?php the_sub_field('testi_image'); ?>" alt="">
							</div>
							<h4><?php the_sub_field('testi_heading'); ?></h4>
                            <p><?php the_sub_field('testi_content'); ?></p>
                            
							<footer class="blockquote-footer"><?php the_sub_field('testi_author'); ?> </footer>
                        </div>
						<?php endwhile; ?>
					<?php endif; ?>	
                    </div>
					
					
					
                </div>
				
                <a class="carousel-control-prev testimonial-arrow" href="#testimonial4" data-slide="prev">
                    <span class="testimonial-prev-icon"><img src="<?php bloginfo ('template_url'); ?>/assets/images/backward-arrow.png"/></span>
                </a>
                <a class="carousel-control-next testimonial-arrow" href="#testimonial4" data-slide="next">
                    <span class="testimonial-next-icon"><img src="<?php bloginfo ('template_url'); ?>/assets/images/forward-arrow.png"/></span>
                </a>
            </div>
				
				</div>
				<div class="col-md-2"></div>
			</div>
            
        </div>
    </section>
	
	<section id="blog" class="section-padding pt-0">
	<div class="container">
	    <div class="row">
			<div class="col-lg-7 text-center mx-auto">
				<div class="section-title">
					<h3>Testimonial</h3>
					<span class="line"></span>
					
				</div>
			</div>
			<!-- end section title -->
		</div>
	    <div class="row">
		    <div class="col-md-6 col-sm-12 col-12">
			    <iframe style="width:100%;" height="280" src="https://www.youtube.com/embed/AdYnCmUHizo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="col-md-6 col-sm-12 col-12">
			    <iframe style="width:100%;" height="280" src="https://www.youtube.com/embed/X2RXDUMHUSM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	</section>
	
	
	
	
	<!-- START CLIENT SECTION -->
    
    <!-- END CLIENT SECTION -->
	
	
   <?php get_footer(); ?>