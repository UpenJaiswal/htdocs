
	<section class="support_types">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1">
					<div class="help_desc">
						<div class="desc_middle">
							<h3>Offline, Opensource, offgrid</h3>
							<p>wiLearn 4 Life is part of the global initiative</p>
						</div>
					</div>
				</div>
				<div class="col-md-8 col-md-offset-0 col-sm-10 col-sm-offset-1">
					<div class="row support_area">
						<div class="col-md-6">
							<div class="support">
								<figure class="support_image">
									<img src="<?php echo get_template_directory_uri(); ?>/images/book.svg" alt="education" class="svg">
								</figure>
								<div class="support_info">
									<h3>Education</h3>
									<p>Refugees,rural schools, remote communities</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="support">
								<figure class="support_image">
									<img src="<?php echo get_template_directory_uri(); ?>/images/hand.svg" alt="accomodation" class="svg">
								</figure>
								<div class="support_info">
									<h3>Accomodation</h3>
									<p>Our priority are the forgotten and most vulnerable people in crisis- emergencies and hard to reach places. </p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="support">
								<figure class="support_image">
									<img src="<?php echo get_template_directory_uri(); ?>/images/rice.svg" alt="food" class="svg">
								</figure>
								<div class="support_info">
									<h3>wifi technology</h3>
									<p>wifi technology delivering safe learning content for the next generation</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="support">
								<figure class="support_image">
									<img src="<?php echo get_template_directory_uri(); ?>/images/medical.svg" alt="health" class="svg">
								</figure>
								<div class="support_info">
									<h3>Health Care</h3>
									<p>Accessable, Affordable, Adaptable</p>
								</div>
							</div>
						</div>
					</div>						
				</div>
			</div>
		</div>
	</section>	
<section class="our_causes">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title_style">
						<h2>Our Causes</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="causes_slider owl-carousel">
					<?php 
       $args = array ( 'post_type' => 'our-cause', 'posts_per_page' => -1);
       $myposts = get_posts( $args );
       foreach( $myposts as $post ) : setup_postdata($post);
          ?>

						<figure class="single_cause">
							<div class="cause_img">
								<?php echo get_the_post_thumbnail( $page->ID, 'medium' ); ?>
							</div>
							
							<figcaption class="cause_hover">
							    <!-- progress start -->
									  <div class="single_progress">
										<div class="progress">
											<div class="progress-bar nomove" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 65%"> 
												<span>65%</span>  
											</div>
										</div>
										</div>
									  <!-- progress end -->
								<div class="hover_info">
									<h3><?php the_title(); ?></h3>
						<p><?php echo wp_trim_words( get_the_content(), 60, '...' ); ?></p>
								          
						            		
									<div class="goals">
										<span>Raised : <?php the_field('raise-price'); ?></span>
										<span>Goal : <?php the_field('goal-price'); ?></span>
									</div>
									<div class="hover_donate cmn_btn">
										<a href="<?php the_field('donate_link'); ?>" class="btn1_hover">Donate</a>
									</div>
								</div>
							</figcaption>
						</figure>
												
						<?php 
endforeach; 
wp_reset_postdata();
?>
					</div>
				</div>
			</div>
			
		</div>
	</section>
	
	
	
	<!-- START PAGE BANNER AND BREADCRUMBS -->
	<section class="single-page-title-area" data-background="assets/images/blog-banner.jpg">
		<div class="auto-container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-12">
					<div class="single-page-title">
						<h2>Latest Blog Post</h2>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-12">
					<ol class="breadcrumb">
					  <li class="breadcrumb-item"><a href="#"><span class="lnr lnr-home"></span></a></li>
					  <li class="breadcrumb-item">Pages</li>
					  <li class="breadcrumb-item active">Blog</li>
					</ol>
				</div>
			</div>
			<!-- end row-->
		</div>
	</section>
	<!-- END PAGE BANNER AND BREADCRUMBS -->
	
	
	<!-- START BLOG SECTION -->
    <section id="blog" class="section-padding">
        <div class="auto-container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-12">
					
					<div class="single-blog wow fadeInUp animated">
						<div class="single-blog-img">
							<div class="entry-mark"></div>
							<img class="img-fluid" style="width:100%;" src="assets/images/blog3.jpg" alt="Tension">
							<div class="entry-action">
								<a href="#"><i class="icofont icofont-link"></i></a>
							</div>
						</div>
						<div class="single-blog-info mt-5">
							<div class="single-blog-info-img">
								<img class="img-fluid" src="assets/img/team/testimonial10.jpg" alt="">
								<div class="single-blog-info-pm">
									<i class="icofont icofont-file-image"></i>
								</div>
							</div>
							<div class="single-blog-info-detail">
								<a href="#"><h5>Steps to Surrender Thoughts and Attachments</h5></a>
								<div class="single-blog-meta">
									<span class="post-date"><i class="lnr lnr-calendar-full"></i> 12 Apr</span>
									<span class="post-user"><i class="lnr lnr-user"></i> Admin</span>
									<span class="allpost-cata"><i class="lnr lnr-tag"></i>hashtheme, Sensiv</span>
									<span class="post-comment"><i class="lnr lnr-bubble"></i> 3 comments</span>
								</div>
								<p>Do you long to connect and feel the nature of your true self? Are you longing to be free of suffering, judgements, limiting beliefs and negative feelings? Are you willing to know the God that you are? Do you want peace and love more than your negative thoughts about yourself? Who or what would you</p>
								
							 </div>
						</div>	
					</div>
					<!-- end single blog -->
					
					
					
					
					
				</div>
				<!-- end col -->
				<aside class="col-lg-4 col-md-4 col-sm-12 col-12 pl-lg-5 pl-md-5 pl-sm-2 pl-2 mt-lg-0 mt-md-0 mt-sm-0 mt-5">
					
					
					<!-- end widget -->
					<div class="sidebar-widget">
							<h5 class="widget-title">Popular Categories</h5>
							<!-- end widget tittle-->
							<div class="servide-list">
								<ul>
									<li><a href="#"><i class="icofont icofont-rounded-right"></i> Release</a> </li>
									<li><a href="#"><i class="icofont icofont-rounded-right"></i> Realign</a> </li>
									<li><a href="#"><i class="icofont icofont-rounded-right"></i> Restore</a> </li>
									<li><a href="#"><i class="icofont icofont-rounded-right"></i> Rebalance</a> </li>
									<li><a href="#"><i class="icofont icofont-rounded-right"></i> Re-Energize</a> </li>
								</ul>
							</div>	
					</div>
					
					<!-- end widget -->
					<div class="sidebar-widget">
							<h5 class="widget-title">Tag List</h5>
							<!-- end widget tittle-->
							<div class="tags-lists">
								<span><a href="#">Counselling</a></span>
								<span><a href="#">Coaching</a></span>
								<span><a href="#">Bodywork</a></span>
								<span><a href="#">Healing</a></span>
								<span><a href="#">Group training</a></span>
							</div>
					</div>
					<!-- end widget -->
					<div class="sidebar-widget">
							<h5 class="widget-title">Linda Benn Gallery</h5>
							<!-- end widget tittle-->
							<div class="recent-post">
								<div class="single-recent-post">
									<a href="#"><img class="img-fluid" src="assets/img/gallery/4.jpg" alt=""></a>
									<a href="assets/img/gallery/4.jpg" class="venobox info icon" data-title="Linda Benn Gallery" data-gall="gall1"><i class="icofont icofont-link"></i></a>									
								</div>	
								<div class="single-recent-post">
									<a href="#"><img class="img-fluid" src="assets/img/gallery/3.jpg" alt=""></a>
									<a href="assets/img/gallery/3.jpg" class="venobox info icon" data-title="Linda Benn Gallery" data-gall="gall1"><i class="icofont icofont-link"></i></a>
								</div>	
								<div class="single-recent-post">
									<a href="#"><img class="img-fluid" src="assets/img/gallery/5.jpg" alt=""></a>
									<a href="assets/img/gallery/5.jpg" class="venobox info icon" data-title="Linda Benn Gallery" data-gall="gall1"><i class="icofont icofont-link"></i></a>
								</div>
								<div class="single-recent-post">
									<a href="#"><img class="img-fluid" src="assets/img/gallery/1.jpg" alt=""></a>
									<a href="assets/img/gallery/1.jpg" class="venobox info icon" data-title="Linda Benn Gallery" data-gall="gall1"><i class="icofont icofont-link"></i></a>								
								</div>	
								<div class="single-recent-post">
									<a href="#"><img class="img-fluid" src="assets/img/gallery/2.jpg" alt=""></a>
									<a href="assets/img/gallery/2.jpg" class="venobox info icon" data-title="Linda Benn Gallery" data-gall="gall1"><i class="icofont icofont-link"></i></a>
								</div>	
								<div class="single-recent-post">
									<a href="#"><img class="img-fluid" src="assets/img/gallery/10.jpg" alt=""></a>
									<a href="assets/img/gallery/10.jpg" class="venobox info icon" data-title="Linda Benn Gallery" data-gall="gall1"><i class="icofont icofont-link"></i></a>
								</div>	
							</div>
					</div>
					<!-- end widget -->
				</aside>
				<!-- end side bar -->	
			</div>
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END BLOG SECTION -->
	
	
   