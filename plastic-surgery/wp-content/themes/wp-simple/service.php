<?php
/* Template Name: service */
get_header(); ?>


        <!-- Page Loader -->        
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <!-- End Page Loader -->
        
        <!-- Page Wrap -->
        <div class="page" id="top">
            
            <!-- Head Section -->
            <section class="page-section bg-dark-alfa-50 parallax-3" data-background="<?php the_field('services')?>" style="height:400px;">
                <div class="relative container align-left mt-100">
                    
                    <div class="row">
                        
                        <div class="col-md-8">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">About Us</h1>
                            <div class="hs-line-4 font-alt">
                                Extraordinary art team &&nbsp;creative minimalism lovers
                            </div>
                        </div>
                        
                        <div class="col-md-4 mt-30">
                            <div class="mod-breadcrumbs font-alt align-right">
                                <a href="#">Home</a>&nbsp;/&nbsp;<span>Service</span>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End Head Section -->
            
            
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
            
            
            <!-- Testimonials Section -->
            <section class="page-section bg-dark bg-dark-alfa-90 fullwidth-slider" data-background="<?php the_field('testimonal_img')?>">
                
                <!-- Slide Item -->
                <div>
                    <div class="container relative">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 align-center">
                                <!-- Section Icon -->
                                <div class="section-icon">
                                    <span class="icon-quote"></span>
                                </div>
                                <!-- Section Title --><h3 class="small-title font-alt">What people say?</h3>
                                <blockquote class="testimonial white">
                                    <p>
                                        Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit. Aenean congue,
                                        risus utaliquam dapibus. Thanks!
                                    </p>
                                    <footer class="testimonial-author">
                                        John Doe, doodle inc.
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Slide Item -->
                
                <!-- Slide Item -->
                <div>
                    <div class="container relative">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 align-center">
                                <!-- Section Icon -->
                                <div class="section-icon">
                                    <span class="icon-quote"></span>
                                </div>
                                <!-- Section Title --><h3 class="small-title font-alt">What people say?</h3>
                                <blockquote class="testimonial white">
                                    <p>
                                        Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit. Aenean congue,
                                        risus utaliquam dapibus. Thanks!
                                    </p>
                                    <footer class="testimonial-author">
                                        John Doe, doodle inc.
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Slide Item -->
                
                <!-- Slide Item -->
                <div>
                    <div class="container relative">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 align-center">
                                <!-- Section Icon -->
                                <div class="section-icon">
                                    <span class="icon-quote"></span>
                                </div>
                                <!-- Section Title -->
                                <h3 class="small-title font-alt">What people say?</h3>
                                <blockquote class="testimonial white">
                                    <p>
                                        Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit. Aenean congue,
                                        risus utaliquam dapibus. Thanks!
                                    </p>
                                    <footer class="testimonial-author">
                                        John Doe, doodle inc.
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Slide Item -->
                
            </section>
            <!-- End Testimonials Section -->
  
                 </div>
                 
                 <!-- Top Link -->
                 <div class="local-scroll">
                     <a href="#top" class="link-to-top"><i class="fa fa-caret-up"></i></a>
                 </div>
                 <!-- End Top Link -->
           
        </div>
        <!-- End Page Wrap -->
 

<?php get_footer(); ?>
