<?php
/* Template Name: gallery */
get_header(); ?>

        <!-- Page Loader -->        
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <!-- End Page Loader -->
        
        <!-- Page Wrap -->
        <div class="page" id="top">
            
            <!-- Head Section -->
            <section class="page-section bg-dark-alfa-50 parallax-3" data-background="<?php the_field('gallery')?>" style="height:400px;">
                <div class="relative container align-left mt-100">
                    
                    <div class="row">
                        
                        <div class="col-md-8">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Gallery</h1>
                            <div class="hs-line-4 font-alt">
                                Extraordinary art team &&nbsp;creative minimalism lovers
                            </div>
                        </div>
                        
                        <div class="col-md-4 mt-30">
                            <div class="mod-breadcrumbs font-alt align-right">
                                <a href="<?php echo get_home_url(); ?>">Home</a>&nbsp;/&nbsp;<span>Gallery</span>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End Head Section -->
            
            
           <section class="page-section">
                <div class="container relative">
                    
                    <!-- Works Filter -->                    
                    <div class="works-filter font-alt align-center">
                        <a href="#" class="filter active" data-filter="*">All works</a>
                        <a href="#branding" class="filter" data-filter=".branding">Branding</a>
                        <a href="#design" class="filter" data-filter=".design">Design</a>
                        <a href="#photography" class="filter" data-filter=".photography">Photography</a>
                    </div>                    
                    <!-- End Works Filter -->
                    
                    <!-- Works Grid -->
                    <ul class="works-grid work-grid-2 work-grid-gut clearfix font-alt hover-white" id="work-grid">
                        
                        <!-- Work Item (Lightbox) -->
                        <li class="work-item mix photography">
                            <a href="<?php the_field('full_project1')?>" class="work-lightbox-link mfp-image">
                                <div class="work-img">
                                    <img src="<?php the_field('project1')?>" alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">Portrait</h3>
                                    <div class="work-descr">
                                        Lightbox
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
                        
                        <!-- Work Item (External Page) -->
                        <li class="work-item mix branding design">
                            <a href="portfolio-single-1.html" class="work-ext-link">
                                <div class="work-img">
                                    <img class="work-img" src="<?php the_field('project2')?>" alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">Vase 3D</h3>
                                    <div class="work-descr">
                                        External Page
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
                        
                        <!-- Work Item (External Page) -->
                        <li class="work-item mix branding">
                            <a href="portfolio-single-1.html" class="work-ext-link">
                                <div class="work-img">
                                    <img class="work-img" src="<?php the_field('project3')?>" alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">Boy in T-shirt</h3>
                                    <div class="work-descr">
                                        External Page
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
                        
                        <!-- Work Item (External Page) -->
                        <li class="work-item mix design photography">
                            <a href="portfolio-single-1.html" class="work-ext-link">
                                <div class="work-img">
                                    <img class="work-img" src="<?php the_field('project4')?>" alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">Space</h3>
                                    <div class="work-descr">
                                        External Page
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
                        
                        <!-- Work Item (External Page) -->
                        <li class="work-item mix design">
                            <a href="portfolio-single-1.html" class="work-ext-link">
                                <div class="work-img">
                                    <img class="work-img" src="<?php the_field('project5')?>" alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">Model</h3>
                                    <div class="work-descr">
                                        External Page
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
                        
                        <!-- Work Item (Lightbox) -->
                        <li class="work-item mix design branding">
                            <a href="<?php the_field('full_project3')?>" class="work-lightbox-link mfp-image">
                                <div class="work-img">
                                    <img src="<?php the_field('project6')?>" alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">Young Man</h3>
                                    <div class="work-descr">
                                        Lightbox
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
                        
                    </ul>
                    <!-- End Works Grid -->
                    
                </div>
            </section>
            <!-- End Portfolio Section -->
            
            
            <!-- Call Action Section -->
            <section class="small-section bg-dark">
                <div class="container relative">
                    
                    <div class="align-center">
                        <h3 class="banner-heading font-alt">Like Our Creative Works?</h3>
                        <div>
                            <a href="#" class="btn btn-mod btn-w btn-medium btn-round">Start Project</a>
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End Call Action Section -->
            
        </div>
        <!-- End Page Wrap -->
    
<?php get_footer(); ?>

