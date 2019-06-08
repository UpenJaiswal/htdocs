<?php
/* Template Name: blog */
get_header(); ?>

        <!-- Page Loader -->        
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <!-- End Page Loader -->
        
        <!-- Page Wrap -->
        <div class="page" id="top">
            
            <!-- Head Section -->
            <section class="page-section bg-dark-alfa-50 parallax-3" data-background="<?php the_field('blog')?>" style="height:400px;">
                <div class="relative container align-left mt-100">
                    
                    <div class="row">
                        
                        <div class="col-md-8">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Blog</h1>
                            <div class="hs-line-4 font-alt">
                                Extraordinary art team &&nbsp;creative minimalism lovers
                            </div>
                        </div>
                        
                        <div class="col-md-4 mt-30">
                            <div class="mod-breadcrumbs font-alt align-right">
                               <a href="<?php echo get_home_url(); ?>">Home</a>&nbsp;/&nbsp;<span>Blog</span>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End Head Section -->
            
            <!-- Section -->
            <section class="page-section">
                <div class="container relative">
                    
                            <div class="row multi-columns-row">
							<?php 
       $args = array ( 'post_type' => 'post', 'posts_per_page' => -1);
       $myposts = get_posts( $args );
       foreach( $myposts as $post ) : setup_postdata($post);
          ?>
                        
                                <!-- Post Item -->
                                <div class="col-sm-6 col-md-4 col-lg-4 mb-60 mb-xs-40">
                                    
                                    <div class="post-prev-img">
                                        <a href="blog-single-sidebar-right.html"><img src="<?php bloginfo ('template_url'); ?>/images/blog/post-prev-1.jpg" alt="" /></a>
                                    </div>
                                    
                                    <div class="post-prev-title font-alt">
                                        <a href="#"><?php the_title(); ?></a>
                                    </div>
                                    
                                    <div class="post-prev-info font-alt">
                                        <a href="#">John Doe</a> |<?php the_time( get_option( 'date_format' ) ); ?>
                                    </div>
                                    
                                    <div class="post-prev-text"><p>
									<?php echo wp_trim_words( get_the_content(), 60, '...' ); ?>
									</p></div>
                                    
                                    <div class="post-prev-more">
                                        <a href="#" class="btn btn-mod btn-gray btn-round">Read More <i class="fa fa-angle-right"></i></a>
                                    </div>
                                    
                                </div>
                               
                                
  <?php 
endforeach; 
wp_reset_postdata();
?>		                              
                                
                            </div>
                            
                            <!-- Pagination -->
                            <div class="pagination">
                                <a href="#"><i class="fa fa-angle-left"></i></a>
                                <a href="#" class="active">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a class="no-active">...</a>
                                <a href="#">9</a>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                            <!-- End Pagination -->
                    
                </div>
            </section>
            <!-- End Section -->
            
                 <!-- Top Link -->
                 <div class="local-scroll">
                     <a href="#top" class="link-to-top"><i class="fa fa-caret-up"></i></a>
                 </div>
                 <!-- End Top Link -->
                 
            <!-- End Buy Button -->
        
        </div>
        <!-- End Page Wrap -->
  
<?php get_footer(); ?>
