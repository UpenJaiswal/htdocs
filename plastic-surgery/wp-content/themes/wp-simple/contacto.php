<?php 
/* Template Name: contact-us */
get_header(); ?>


        <!-- Page Loader -->        
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <!-- End Page Loader -->
        
        <!-- Page Wrap -->
        <div class="page" id="top">
            
            <!-- Head Section -->
            <section class="page-section bg-dark-alfa-50 parallax-3" data-background="<?php the_field('contact_img')?>" style="height:400px;">
                <div class="relative container align-left mt-100">
                    
                    <div class="row">
                        
                        <div class="col-md-8">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Contact</h1>
                            <div class="hs-line-4 font-alt">
                                Extraordinary art team &&nbsp;creative minimalism lovers
                            </div>
                        </div>
                        
                        <div class="col-md-4 mt-30">
                            <div class="mod-breadcrumbs font-alt align-right">
                               <a href="<?php echo get_home_url(); ?>">Home</a>&nbsp;/&nbsp;<span>Contact</span>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </section>
    
            <!-- Contact Section -->
            <section class="page-section" id="contact">
                <div class="container relative">
                    
                    <h2 class="section-title font-alt mb-70 mb-sm-40">
                        Have a questions?
                    </h2>
                    
                    <div class="row mb-60 mb-xs-40">
                        
                        <div class="col-md-8 col-md-offset-2">
                            <div class="row">
                                
                                <!-- Phone -->
                                <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                                    <div class="contact-item">
                                        <div class="ci-icon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="ci-title font-alt">
                                            Call Us
                                        </div>
                                        <div class="ci-text"><?php the_field('phone')?></div>
                                    </div>
                                </div>
                                <!-- End Phone -->
                                
                                <!-- Address -->
                                <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                                    <div class="contact-item">
                                        <div class="ci-icon">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="ci-title font-alt">
                                            Address
                                        </div>
                                        <div class="ci-text"><?php the_field('addr')?></div>
                                    </div>
                                </div>
                                <!-- End Address -->
                                
                                <!-- Email -->
                                <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                                    <div class="contact-item">
                                        <div class="ci-icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="ci-title font-alt">
                                            Email
                                        </div>
                                        <div class="ci-text">
                                            <a href="mailto:support@bestlooker.pro"><?php the_field('email')?></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Email -->
                                
                            </div>
                        </div>
                        
                    </div>
                    
                    <!-- Contact Form -->                            
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            
                            <form class="form contact-form" id="contact_form">
                                <?php echo do_shortcode('[contact-form-7 id="435" title="Contact form 1"]');?>
                            </form>
                            
                        </div>
                    </div>
                    <!-- End Contact Form -->
                    
                </div>
            </section>
            <!-- End Contact Section -->
            
            
            <!-- Google Map -->
            <div class="google-map">
                
               <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2992.8983013193897!2d2.1542906149275804!3d41.398014903300094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sRiera+de+St+Miquel%2C+40+B+%E2%80%93+08006+Barcelona%2C+Espa%C3%B1a+Abrimos+Lunes+a+Jueves+EMAIL!5e0!3m2!1sen!2sin!4v1555415364412!5m2!1sen!2sin" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                
                <div class="map-section">
                    
                    <div class="map-toggle">
                        <div class="mt-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="mt-text font-alt">
                            <div class="mt-open">Open the map <i class="fa fa-angle-down"></i></div>
                            <div class="mt-close">Close the map <i class="fa fa-angle-up"></i></div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
			
        </div>
                 
                 <!-- Top Link -->
                 <div class="local-scroll">
                     <a href="#top" class="link-to-top"><i class="fa fa-caret-up"></i></a>
                 </div>
             
        </div>
        <!-- End Page Wrap -->
  


<?php get_footer(); ?>