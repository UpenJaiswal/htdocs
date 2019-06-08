<?php
/* Template Name: contact */
get_header(); ?>

    <!--Favicons-->
    <link rel="shortcut icon" href="<?php bloginfo ('template_url'); ?>/images/atlier/favicon.png">



        <!-- MAIN-->
        <main id="main">
            <!-- PAGE LINE-->
            <div class="page-line">
                <div class="container">
                    <div class="page-line__inner">
                        <div class="page-col"></div>
                        <div class="page-col"></div>
                        <div class="page-col"></div>
                    </div>
                </div>
            </div>
            <!-- END PAGE LINE-->

            <!-- PAGE HEADING-->
            <section class="section p-t-55 p-b-35">
                <div class="container">
                    <div class="page-heading">
                        <h4 class="title-sub title-sub--c8 m-b-15"><?php the_field('heading')?></h4>
                        <h2 class="title-2"><?php the_field('content')?></h2>
                    </div>
                </div>
            </section>
            <!-- END PAGE HEADING-->

            <!-- CONTACT-->
            <section class="section p-b-80">
                <div class="container">
                    <div class="row">
					   <div class="col-lg-12 m-t-20 m-b-60">
					   <iframe width="100" style="width:100%;" height="320" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.ch/maps?f=q&amp;source=s_q&amp;hl=de&amp;geocode=&amp;q=3D+Atelier+Heiko+Cornelsen,+Unterdorfstrasse,+Steffisburg&amp;aq=2&amp;sll=46.362093,9.036255&amp;sspn=6.126258,14.490967&amp;vpsrc=6&amp;ie=UTF8&amp;hq=3D+Atelier+Heiko+Cornelsen,&amp;hnear=Unterdorfstrasse,+3612+Steffisburg,+Bern&amp;ll=46.777811,7.634661&amp;spn=0.006295,0.006295&amp;t=h&amp;output=embed"></iframe>
					   </div>
					</div>
                    <div class="row no-gutters">
                        <div class="col-lg-4">
						
                            <div class="contact-info">
                                <div class="contact-info__item">
                                    <h5 class="title--sm2"><?php the_field('address')?></h5>
									<div class="contact-value-section">
										<span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
										<p class="value"><?php the_field('address1')?></p>
									</div>
									<div class="contact-value-section">
										<span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
										<p class="value"><?php the_field('address2')?></p>
									</div>
                                    
									
                                </div>
                                <div class="contact-info__item">
                                    <h5 class="title--sm2"><?php the_field('phone_number')?></h5>
									<div class="contact-value-section">
										<span><i class="fa fa-phone" aria-hidden="true"  ></i></span>
										<p class="value"><?php the_field('phone')?></p>
									</div>
									<div class="contact-value-section">
										<span><i class="fa fa-fax" aria-hidden="true"></i></span>
										<p class="value"><?php the_field('fax')?></p>
									</div>
									<div class="contact-value-section">
										<span><i class="fa fa-mobile" aria-hidden="true"></i></span>
										<p class="value"><?php the_field('mobile')?></p>
									</div>          
                                    
                                    
                                </div>
                                <div class="contact-info__item">
                                    <h5 class="title--sm2"><?php the_field('email_addr')?></h5>
									<div class="contact-value-section">
										<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
										<p class="value"><?php the_field('email')?></p>
									</div> 
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
						
						<?php echo do_shortcode('[contact-form-7 id="150" title="Contact form 1"]');?>
                            
                        </div>
                    </div>
                </div>
            </section>
            <!-- END CONTACT-->
        </main>
        <!-- END MAIN-->

  <?php get_footer(); ?>     
