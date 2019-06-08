<?php
/* Template Name: injectables */
get_header(); ?>


        <!-- Page Loader -->        
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <!-- End Page Loader -->
        
        <!-- Page Wrap -->
        <div class="page" id="top">
            
            <!-- Head Section -->
            <section class="page-section bg-dark-alfa-50 parallax-3" data-background="<?php the_field('bg_image')?>" style="height:400px;">
                <div class="relative container align-left mt-100">
                    
                    <div class="row">
                        
                        <div class="col-md-8">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Injectables</h1>
                            <div class="hs-line-4 font-alt">
                                Extraordinary art team &&nbsp;creative minimalism lovers
                            </div>
                        </div>
                        
                        <div class="col-md-4 mt-30">
                            <div class="mod-breadcrumbs font-alt align-right">
                               <a href="<?php echo get_home_url(); ?>">Home</a>&nbsp;/&nbsp;<a href="#">Service</a>&nbsp;/&nbsp;<span>Injectables</span>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End Head Section -->
            
	<div class="main-service mt-80 mb-80">		
	<div class=" container">		
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">	
			<div class="doctor-img">
			<img src="<?php the_field('image')?>">
			</div>
			</div>
			
			<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">	
			<div class="doctor-text">
			<h3><?php the_field('heading')?></h3>
			<p><?php the_field('content')?></p>
			
			</div>
			</div>
			
<div class="main-service mb-80">		
	<div class=" container">		
	<div class="row">
	<?php if(get_field('doctor')): ?>	
<div class="col-lg-12 mt-80">
	<?php while(has_sub_field('doctor')): ?>
			<div class="doctor-text">
			<h1><?php the_sub_field('doctor_heading'); ?></h1>
			
			<p><?php the_sub_field('doctor_content'); ?></p>
			
			
			
			</div>
			<?php endwhile; ?>
			</div>
			<?php endif; ?>		
			
			
			</div>
			</div>
			</div>
			
			
            
            <!-- About Section -->
            <section class="page-section pb-80 mb-50" id="portfolio">
                <div class="relative">
                   
                    
                    <div class="container">
                        <div class="row">
						
						<div class="col-lg-12">
						 <p class="text1 align-center">WHAT WE OFFER</p>
                    <h2 class="section-title font-alt mb-20 mb-sm-20">Services</h2>
					
						</div>
						
                            <div class="col-md-8 col-md-offset-2">
                                
                                <div class="section-text align-center mb-70 mb-xs-40"><?php the_field('service_content')?></div>
                                
                            </div>
                        </div>
                    </div>
                    
					
                    <!-- Works Grid -->
					<?php if(get_field('portfolio')): ?>
                    <ul class="works-grid work-grid-3 work-grid-gut clearfix font-alt hover-white hide-titles" id="work-grid">
                    <?php while(has_sub_field('portfolio')): ?>   
                        <!-- Work Item (External Page) -->
                        <li class="work-item">
                            <a href="portfolio-single-1.html" class="work-ext-link">
                                <div class="work-img">
                                    <img class="work-img" src="<?php the_sub_field('p_img'); ?>" alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title"><?php the_sub_field('p_title'); ?></h3>
                                    <div class="work-descr">
                                        <?php the_sub_field('p_content'); ?>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
                     <?php endwhile; ?> 
                    </ul>
					 <?php endif; ?>
                    <!-- End Works Grid -->
                    
                </div>
            </section>
            <!-- End About Section -->
           
          </div> 
        </div>
        <!-- End Page Wrap -->
        
        </div>
    
<?php get_footer(); ?>
