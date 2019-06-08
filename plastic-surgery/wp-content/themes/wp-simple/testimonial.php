<?php
/* Template Name: testimonial */
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
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Testimonial</h1>
                            <div class="hs-line-4 font-alt">
                                Extraordinary art team &&nbsp;creative minimalism lovers
                            </div>
                        </div>
                        
                        <div class="col-md-4 mt-30">
                            <div class="mod-breadcrumbs font-alt align-right">
                               <a href="<?php echo get_home_url(); ?>">Home</a>&nbsp;/&nbsp;<span>Testimonial</span>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End Head Section -->
            
         <div class="test-sect mt-80">
		 <div class="container">
		<?php if(get_field('testimonial')): ?> 
		 <div class="row">
		<?php while(has_sub_field('testimonial')): ?> 
		 <div class="col-lg-12 ">
		 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		 <div class="test-img"><img src="<?php the_sub_field('image'); ?>"></div>
		 </div>
		 
		 
		 <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
		 <div class="contant">
		 <h4><?php the_sub_field('heading'); ?></h4>
		 <p><?php the_sub_field('content'); ?></p>
		 
		 </div>
		 </div>
		 </div>
		 
		 <?php endwhile; ?>
		 </div>
		 <?php endif; ?>
		 </div>
		 </div>
             
                 </div>
                 
                 <!-- Top Link -->
                 <div class="local-scroll">
                     <a href="#top" class="link-to-top"><i class="fa fa-caret-up"></i></a>
                 </div>
                 <!-- End Top Link -->
                 
           
            <!-- End Buy Button -->
        
        </div>
        <!-- End Page Wrap -->
   
<?php get_footer(); ?>
