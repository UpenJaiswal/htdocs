<?php
/* Template Name: drucksachen */
get_header(); ?>

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
            <section class="section p-t-80 p-b-65">
                <div class="container">
                    <div class="page-heading">
                        <h4 class="title-sub title-sub--c8 m-b-15"><?php the_field('heading')?></h4>
                        <h2 class="title-2"><?php the_field('sub-heading')?><br/></h2>
						<p><?php the_field('content1')?></br></p>
						<p><?php the_field('content2')?></p>
                    </div>
                </div>
            </section>
            <!-- END PAGE HEADING-->

            <!-- PROJECT-->
            <section class="section p-b-10">
                <div class="wrap wrap--w1790">
                    <div class="container-fluid">
					<?php if(get_field('drucksachen')): ?>
                        <div class="row gutter-lg">
					<?php while(has_sub_field('drucksachen')): ?>		
                            <div class="col-md-6 col-lg-3">
							
							    <a href="<?php the_sub_field('image'); ?>" title="<h3><?php the_sub_field('heading'); ?></h3><p><?php the_sub_field('content'); ?></p>" class="fancybox1 balmain-baseworld" rel="ligthbox">
                                <article class="media media-project media-project-1">
                                    <figure class="media__img">
                                        <img src="<?php the_sub_field('image'); ?>" alt="Decoration" />
                                    </figure>									
                                    <div class="bg-overlay"></div>
                                    <span class="line"></span>
                                    <span class="line line--bottom"></span>
                                    <div class="media__body">
                                        <h3 class="title"><?php the_sub_field('heading'); ?></h3>
                                        <div class="address"><?php the_sub_field('content'); ?></div>
                                    </div>									
                                </article>
								</a>
							
                            </div>
							
						<?php endwhile; ?>		
                        </div>
						<?php endif; ?>
                        
                    </div>
                </div>
            </section>
            <!-- END PROJECT-->
        </main>
        <!-- MAIN-->

<?php get_footer(); ?>  