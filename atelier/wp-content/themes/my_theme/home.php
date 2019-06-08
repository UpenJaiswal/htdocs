<?php
/* Template Name: home */
 get_header(2); ?>


        <!-- MAIN-->
        <main id="main">
            <!-- PAGE HEADING-->
            <section class="p-t-40 p-b-40">
                
            </section>
            <!-- END PAGE HEADING-->

            <!-- MASONRY PROJECT-->
            <section class="section p-b-120">
                <div class="container">
                    <div class="masonry-row js-isotope-wrapper" class="fancybox">
                        <div class="row isotope-content" >
                            <div class="col-md-6 col-lg-4 isotope-item isotope-item-sizer">
                                <article class="media-project-2 m-b-30">
                                    <figure class="media__img">
									
									  <a href="<?php the_field('image1')?>" title="<h3>3d emblem_omega</h3><p>Omega-Emblem gegossen und verchromt</p>" class="fancybox" rel="ligthbox">
                                        <img src="<?php the_field('image1')?>" alt="" />
										</a>
                                    </figure>
									
									
                                    <div class="media__body">
                                        <h3 class="media__title">
                                            <a href="#"><?php the_field('heading1')?></a>
                                        </h3>
                                        <span class="address"><?php the_field('content1')?></span>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6 col-lg-4 isotope-item">
                                <article class="media-project-2 m-b-30">
                                    <figure class="media__img">
									
									 <a href="<?php the_field('image2')?>" title="<h3>Schwinger</h3><p>Schwingerpuppe aus Stoff</p>" class="fancybox" rel="ligthbox">
                                        <img src="<?php the_field('image2')?>" alt="" />
										</a>
										
                                    </figure>
                                    <div class="media__body">
                                        <h3 class="media__title">
                                            <a href="#"><?php the_field('heading2')?></a>
                                        </h3>
                                        <span class="address"><?php the_field('content2')?></span>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6 col-lg-4 isotope-item">
                                <article class="media-project-2 m-b-30">
                                    <figure class="media__img">
									
									<a href="<?php the_field('image3')?>" title="<h3>Aqua tower</h3><p>Taucher-Vitrine mit Wasser und Blasen</p>" class="fancybox" rel="ligthbox">
                                     <img src="<?php the_field('image3')?>" alt="" />
										</a>
										
                                    </figure>
                                    <div class="media__body">
                                        <h3 class="media__title">
                                            <a href="#"><?php the_field('heading3')?></a>
                                        </h3>
                                        <span class="address"><?php the_field('content3')?></span>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6 col-lg-4 isotope-item">
                                <article class="media-project-2 m-b-30">
                                    <figure class="media__img">
									    <a href="<?php the_field('image4')?>" title="<h3>Swiss Military</h3><p>Ausstellvitrine mit Leuchtposter </p>" class="fancybox" rel="ligthbox">
                                        <img src="<?php the_field('image4')?>" alt="" />
										</a>
										
                                    </figure>
                                    <div class="media__body">
                                        <h3 class="media__title">
                                            <a href="#"><?php the_field('heading4')?></a>
                                        </h3>
                                        <span class="address"><?php the_field('content4')?></span>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6 col-lg-4 isotope-item">
                                <article class="media-project-2 m-b-30">
                                    <figure class="media__img">
									 <a href="<?php the_field('image5')?>" title="<h3>Baureklamen</h3><p>Baureklamen in allen Grössen</p>" class="fancybox" rel="ligthbox">
                                        <img src="<?php the_field('image5')?>" alt="" />
										</a>
                                    </figure>
                                    <div class="media__body">
                                        <h3 class="media__title">
                                            <a href="#"><?php the_field('heading5')?></a>
                                        </h3>
                                        <span class="address"><?php the_field('content5')?></span>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-8 isotope-item">
                                <article class="media-project-2 m-b-30">
                                    <figure class="media__img">
									<a href="<?php the_field('image6')?>" title="<h3>Splendid</h3><p>Wand-und Möbel coverings</p>" class="fancybox" rel="ligthbox">
                                        <img src="<?php the_field('image6')?>" alt="" />
										</a>
                                    </figure>
                                    <div class="media__body">
                                        <h3 class="media__title">
                                            <a href="#"><?php the_field('heading6')?></a>
                                        </h3>
                                        <span class="address"><?php the_field('content6')?></span>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6 col-lg-4 isotope-item">
                                <article class="media-project-2 m-b-30">
                                    <figure class="media__img">
									 <a href="<?php the_field('image7')?>" title="<h3>Ck incounter set</h3><p>Modulares Incounter-Display</p>" class="fancybox" rel="ligthbox">
                                        <img src="<?php the_field('image7')?>" alt="" />
										</a>
                                    </figure>
                                    <div class="media__body">
                                        <h3 class="media__title">
                                            <a href="#"><?php the_field('heading7')?></a>
                                        </h3>
                                        <span class="address"><?php the_field('content7')?></span>
                                    </div>
                                </article>
                            </div>
							</div>
							<?php if(get_field('image_repeater')): ?>
						<div class="row isotope-content" >	
							<?php while(has_sub_field('image_repeater')): ?>
                            <div class="col-md-6 col-lg-4 isotope-item">
							
                                <article class="media-project-2 m-b-30">
                                    <figure class="media__img">
									  <a href="<?php the_field('image_r')?>" title="<h3>Smartwatcher</h3><p>Uhren Incounter Display chromebrushed </p>" class="fancybox" rel="ligthbox">
                                        <img src="<?php the_field('image_r')?>" alt="" />
										</a>
                                    </figure>
                                    <div class="media__body">
                                        <h3 class="media__title">
                                            <a href="#"><?php the_field('heading_r')?></a>
                                        </h3>
                                        <span class="address"><?php the_field('content_r')?></span>
                                    </div>
                                </article>
								
                            </div>
                            <?php endwhile; ?>
                         </div>
						<?php endif; ?>   
							
                        
                    </div>
                    <div class="text-center p-t-30">
                        <a class="au-btn au-btn--c6" href="contact"><?php the_field('get_in_touch')?></a>
                    </div>
                </div>
            </section>
            <!-- END MASONRY PROJECT-->
        </main>
        <!-- END MAIN-->

   

   <?php get_footer(); ?> 