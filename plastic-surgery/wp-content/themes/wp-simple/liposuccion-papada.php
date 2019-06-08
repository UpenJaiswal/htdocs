<?php
/* Template Name: facial-products */
get_header(); ?>


        <!-- Page Loader -->        
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <!-- End Page Loader -->
        
        <!-- Page Wrap -->
        <div class="page" id="top">
            
            
            <!-- Head Section -->
            <section class="page-section bg-dark-alfa-50 parallax-3" data-background="<?php the_field('facial_product')?>" style="height:400px;">
                <div class="relative container align-left mt-100">
                    
                    <div class="row">
                        
                        <div class="col-md-8">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">liposuccion-papada</h1>
                            <div class="hs-line-4 font-alt">
                                
                            </div>
                        </div>
                        
                        <div class="col-md-4 mt-30">
                            <div class="mod-breadcrumbs font-alt align-right">
                               <a href="<?php echo get_home_url(); ?>">inicio</a>&nbsp;/&nbsp;<span>liposuccion-papada</span>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End Head Section -->
            
	<div class="main-service mb-80">		
	<div class=" container">
	<?php if(get_field('facial_post')): ?>
	<div class="row">
	<?php while(has_sub_field('facial_post')): ?>	
<div class="col-lg-12 mt-50">	
			<div class="doctor-text">
			<h2><?php the_sub_field('facial_heading'); ?></h2>
			<p><?php the_sub_field('facial_content'); ?></p>
			
			</div>
			</div>	
			<?php endwhile; ?>
			</div>
			<?php endif; ?>

			</div>
			</div>
			
            <!-- About Section -->
            <section class="page-section pb-80 mb-50" id="portfolio">
                <div class="relative">
                   
                    
                    <div class="container">
                        <div class="row">
						
						<div class="col-lg-12">
						 <p class="text1 align-center">LO QUE OFRECEMOS</p>
                    <h2 class="section-title font-alt mb-20 mb-sm-20">Servicios</h2>
					
						</div>
						
                            <div class="col-md-8 col-md-offset-2">
                                
                                <div class="section-text align-center mb-70 mb-xs-40"><?php the_field('content')?></div>
                                
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
        <!-- End Page Wrap -->
   
<?php get_footer(); ?>
