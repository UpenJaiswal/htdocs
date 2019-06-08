<?php
/* Template Name: about-practice */
get_header(); ?>


        <!-- Page Loader -->        
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <!-- End Page Loader -->
        
        <!-- Page Wrap -->
        <div class="page" id="top">
            
            <!-- Head Section -->
            <section class="page-section bg-dark-alfa-50 parallax-3" data-background="<?php the_field('about_us')?>" style="height:400px;">
                <div class="relative container align-left mt-100">
                    
                    <div class="row">
                        
                        <div class="col-md-8">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">trayectoria</h1>
                            <div class="hs-line-4 font-alt">
                               
                            </div>
                        </div>
                        
                        <div class="col-md-4 mt-30">
                            <div class="mod-breadcrumbs font-alt align-right">
                                <a href="<?php echo get_home_url(); ?>">inicio</a>&nbsp;/&nbsp;<span>trayectoria</span>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End Head Section -->
            
            
            <!-- About Section -->
            <section class="page-section" id="about">
                <div class="container relative">
                    
                    <div class="section-text mb-50 mb-sm-20">
                        <div class="row">
                        
                            <div class="col-md-4">
                                <blockquote>
                                    <p><?php the_field('about_text')?></p>
                                    <footer><p><?php the_field('about_author')?></p></footer>
                                </blockquote>
                            </div>
                            
                            <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30"><p><?php the_field('about_content')?></p></div>
                            
                            <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30"><p><?php the_field('about_content2')?></p></div>
                            
                        </div>
                    </div>
                    
                    <?php if(get_field('team_item')): ?>
                    <div class="row">
                    <?php while(has_sub_field('team_item')): ?>    
                        <!-- Team item -->
                        <div class="col-sm-4 mb-xs-30 wow fadeInUp">
                            <div class="team-item">
                                
                                <div class="team-item-image">
                                    
                                    <img src="<?php the_sub_field('team_img'); ?>" alt="" />
                                    
                                    <div class="team-item-detail">
                                        
                                        <h4 class="font-alt normal"><?php the_sub_field('team_heading'); ?></h4>
                                        
                                        <p>
                                            <?php the_sub_field('team_content'); ?>
                                        </p>
                                        
                                        <div class="team-social-links">
                                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                            <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="team-item-descr font-alt">
                                    
                                    <div class="team-item-name">
                                        <?php the_sub_field('team_name'); ?>
                                    </div>
                                    
                                    <div class="team-item-role">
                                        <?php the_sub_field('team_post'); ?>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                        
                      <?php endwhile; ?>  
                    </div>
                    <?php endif; ?>
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
  
            
            <!-- Features Section -->
            <section class="page-section">
                <div class="container relative">
                    
                    <h2 class="section-title font-alt mb-70 mb-sm-40">
                        Why Choose Us?
                    </h2>
                    
                    <!-- Features Grid -->
                    <div class="row multi-columns-row alt-features-grid">
                        
                        <!-- Features Item -->
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="alt-features-item align-center">
                                <div class="alt-features-icon">
                                    <span class="icon-flag"></span>
                                </div>
                                <h3 class="alt-features-title font-alt">We’re Creative</h3>
                                <div class="alt-features-descr align-left"><?php the_field('we_are_creative')?></div>
                            </div>
                        </div>
                        <!-- End Features Item -->
                        
                        <!-- Features Item -->
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="alt-features-item align-center">
                                <div class="alt-features-icon">
                                    <span class="icon-clock"></span>
                                </div>
                                <h3 class="alt-features-title font-alt">We’re Punctual</h3>
                                <div class="alt-features-descr align-left"><?php the_field('we_are_punctual')?></div>
                            </div>
                        </div>
                        <!-- End Features Item -->
                        
                        <!-- Features Item -->
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="alt-features-item align-center">
                                <div class="alt-features-icon">
                                    <span class="icon-hotairballoon"></span>
                                </div>
                                <h3 class="alt-features-title font-alt">We have magic</h3>
                                <div class="alt-features-descr align-left"><?php the_field('we_have_magic')?></div>
                            </div>
                        </div>
                        <!-- End Features Item -->
                        
                    </div>
                    <!-- End Features Grid -->
                        
                </div>
            </section>
            <!-- End Features Section -->
			
        </div>
        <!-- End Page Wrap -->
      

<?php get_footer(); ?>

