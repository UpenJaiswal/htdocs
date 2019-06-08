<?php
/* Template Name: about-us */
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
            <section class="section p-b-35">
                
            </section>
            <!-- END PAGE HEADING-->

            <!-- PAGE IMAGE-->
            <section class="section">
                <div class="wrap wrap--w1790">
                    <div class="container-fluid">
                        <img src="<?php the_field('image')?>" alt="About Us">
                    </div>
                </div>
            </section>
            <!-- END PAGE IMAGE-->

            <!-- ABOUT US-->
            <section class="section p-t-80 p-b-80">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
						    
							<div class="media-statistic-2 year-experience">
								<div class="media__body">
									<span class="media__number js-counterup"><?php the_field('number')?></span>
									<h5 class="media__title title-sub title-exp"><?php the_field('heading')?></h5>
								</div>
							</div>
                            <div class="row no-gutters">
                                
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <p class="text--s18-40 m-b-15">
                                <?php the_field('content')?>
                            </p>
                           <!-- <table class="contenttable contenttable-0 text--s18-40">
								<tbody>
									<tr class="tr-even tr-0">
											<td class="td-0">Gründungsjahr:</td>
											<td class="td-1">&nbsp;</td>
											<td class="td-last td-2">01.01.2003</td>
									</tr>
									<tr class="tr-odd tr-1">
											<td class="td-0">Rechtsform:</td>
											<td class="td-1">&nbsp;</td>
											<td class="td-last td-2">Einzelfirma</td>
									</tr>
									<tr class="tr-even tr-2">
											<td class="td-0">Inhaber:</td>
											<td class="td-1">&nbsp;</td>
											<td class="td-last td-2">Heiko Cornelsen</td>
									</tr>
									<tr class="tr-odd tr-3">
											<td class="td-0">Mitarbeiter:</td>
											<td class="td-1">&nbsp;</td>
											<td class="td-last td-2">4</td>
									</tr>
									<tr class="tr-even tr-last">
											<td class="td-0">Geschäftssitz:</td>
											<td class="td-1">&nbsp;</td>
											<td class="td-last td-2">Uetendorf / BE</td>
									</tr>
							    </tbody>
							</table>-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- END ABOUT US-->

            

            <!-- CLIENT-->
            <section class="section bg-pattern-01 p-t-100 p-b-25 m-b-100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-xl-3">
                            <div class="section-title section-title--light text-left p-t-15">
                                <h5 class="title-sub">awesome partner</h5>
                                <h2 class="title-1">Our Clients</h2>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-9">
						<?php if(get_field('client')): ?>
                            <div class="row">
						<?php while(has_sub_field('client')): ?>
                                <div class="col-md-6 col-lg-3">
                                    <a class="img-client m-b-60" href="#">
                                        <img src="<?php the_sub_field('client_logo'); ?>" alt="Client 1">
                                    </a>
                                </div>
							<?php endwhile; ?>	
                            </div>
							<?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END CLIENT-->

         
        </main>
        <!-- END MAIN-->

 <?php get_footer(); ?>        
