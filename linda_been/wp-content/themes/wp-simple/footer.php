       <!-- SINGLE DOCTOR PROMO -->
	<div class="single-doc-promo bg-theme mt-5">
        <div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 col-12">
					<div class="single-doc-promo-box-img">
						<?php dynamic_sidebar( 'doc-promo' ); ?>
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-12 col-12">
					<div class="single-doc-promo-box">
						<div class="row"> 
							<div class="col-lg-9">
								<div class="single-doc-promo-content">								     
									 <p>Click here to book appointment</p>
									 <a href="https://app.acuityscheduling.com/schedule.php?owner=17451579"><?php dynamic_sidebar( 'doc-promo_number' ); ?></a>
								</div> 
							</div> 
							<div class="col-lg-3 mt-4">
								<a href="https://app.acuityscheduling.com/schedule.php?owner=17451579" class="single-doc-promo-btn fadeInUp animated">Contact Us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END SINGLE DOCTOR PROMO -->
		<!-- START FOOTER -->
    <footer>
        <!--Footer top -->
        <div class="footer-top overlay-2 section-back-image" data-background="<?php bloginfo ('template_url'); ?>/assets/img/bg/counter-bg.jpg">
		<?php dynamic_sidebar( 'b_g' ); ?>
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12  mb-lg-0 mb-md-4 mb-sm-5 mb-5 footer-widget">
						<div class="footer-section-title col-12 p-0 mb-4">
                            <h5>About Us</h5>
                        <div class="about">
						<?php dynamic_sidebar( 'footer-1' ); ?>
                        </div>
                        <div class="footer-logo mt-3">
                            <a href="index.html">
							   <?php dynamic_sidebar( 'logo_b' ); ?>
								<!-- <div class="footer-logo-icon">
									<i class="icofont icofont-bed-patient"></i>
                                </div>
								<div class="footer-logo-text">
                                    <h3>Sensiv</h3>
                                    <p>Medical template</p>
                                </div> -->
							</a>
                        </div>
						</div>
                    </div>
                    <!-- End Widget -->
                    <div class="col-lg-2 col-md-6 col-sm-12 col-12  mb-lg-0 mb-md-4 mb-sm-5 mb-5 footer-widget">
                        <div class="footer-section-title col-12 p-0 mb-4">
                            <h5>Quick Links</h5>
                        </div>
						<?php dynamic_sidebar( 'footer-2' ); ?>
                        <!-- end widget title -->
						<!--<ul class="quick-link-list">
							<li><a href="about.html"><i class="icofont icofont-circled-right"></i> About Us</a></li>
							<li><a href="benn-technique-course.html"><i class="icofont icofont-circled-right"></i> Benn Method Course</a></li>
							<li><a href="testimonial.html"><i class="icofont icofont-circled-right"></i> Testimonial</a></li>
							<li><a href="blog.html"><i class="icofont icofont-circled-right"></i> Blog/Podcast</a></li>
							<li><a href="contact.html"><i class="icofont icofont-circled-right"></i> Contact</a></li>
						</ul>  -->
                    </div>
                    <!-- End Widget -->
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12  mb-lg-0 mb-md-0 mb-sm-5 mb-5 footer-widget">
                        <div class="footer-section-title col-12 p-0 mb-4">
                            <h5>Gallery</h5>
							<?php dynamic_sidebar( 'footer-3' ); ?>
                        </div>
                        <!-- end widget title -->
						
						
						
						<!--<div class="flick-post">
							<div class="single-flick-post">
								<a href="#"><img class="img-fluid" src="<?php the_field('gallery1')?>" alt=""></a>
								<a href="assets/img/gallery/4.jpg" class="venobox info icon vbox-item" data-title="Linda Benn Gallery" data-gall="gall1"><i class="icofont icofont-link"></i></a>									
							</div>	
							<div class="single-flick-post">
								<a href="#"><img class="img-fluid" src="<?php the_field('gallery2')?>" alt=""></a>
								<a href="assets/img/gallery/3.jpg" class="venobox info icon vbox-item" data-title="Linda Benn Gallery" data-gall="gall1"><i class="icofont icofont-link"></i></a>
							</div>	
							<div class="single-flick-post">
								<a href="#"><img class="img-fluid" src="<?php the_field('gallery3')?>" alt=""></a>
								<a href="assets/img/gallery/5.jpg" class="venobox info icon vbox-item" data-title="Linda Benn Gallery" data-gall="gall1"><i class="icofont icofont-link"></i></a>
							</div>
							<div class="single-flick-post">
								<a href="#"><img class="img-fluid" src="<?php the_field('gallery4')?>" alt=""></a>
								<a href="assets/img/gallery/1.jpg" class="venobox info icon vbox-item" data-title="Linda Benn Gallery" data-gall="gall1"><i class="icofont icofont-link"></i></a>								
							</div>	
							<div class="single-flick-post">
								<a href="#"><img class="img-fluid" src="<?php the_field('gallery5')?>" alt=""></a>
								<a href="assets/img/gallery/2.jpg" class="venobox info icon vbox-item" data-title="Linda Benn Gallery" data-gall="gall1"><i class="icofont icofont-link"></i></a>
							</div>	
							<div class="single-flick-post">
								<a href="#"><img class="img-fluid" src="<?php the_field('gallery6')?>" alt=""></a>
								<a href="assets/img/gallery/10.jpg" class="venobox info icon vbox-item" data-title="Linda Benn Gallery" data-gall="gall1"><i class="icofont icofont-link"></i></a>
							</div>	
						</div>	-->
                    </div>
                    <!-- End Widget -->
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 footer-widget">
                        <div class="footer-section-title col-12 p-0 mb-4">
                            <h5>Stay With us</h5>
							<?php dynamic_sidebar( 'footer-4' ); ?>
                        </div>
                        <!-- end widget title -->
						
						
						
						
					<!--	<ul class="quick-link-list">
							<li><a href="#"><i class="lnr lnr-map-marker"></i> Linda Benn 
Brisbane QLD  Australia
& SF California</a></li>
							<li><a href="#"><i class="lnr lnr-envelope "></i> linda@lindabenn.com</a></li>
							<li><a href="#"><i class="lnr lnr-phone "></i> +61- 412-586528 </a></li>	
							<li><a href="#"><i class="icofont icofont-clock-time"></i> Open: Mon to Sat: 9AM to 5PM</a></li>
						</ul>
                        <div class="footer-section-title col-12 p-0 mt-4 mb-4">
                            <h5>Get Connected</h5> 
                        </div>
                        <!-- end widget title -->
						<div class="footer-social">
							<ul>
							   <li><a href="https://www.facebook.com/peakperformanceemployees/" target="_blank"><i class="icofont icofont-social-facebook"></i></a></li>
							   <li><a href="https://www.linkedin.com/in/lindabenn" target="_blank"><i class="icofont icofont-social-linkedin"></i></a></li>
							   <li><a href="https://www.youtube.com/channel/UCBN5gmikYLp38VCcMRUDqsw?disable_polymer=true" target="_blank"><i class="icofont icofont-social-youtube-play"></i></a></li>
							   <li><a href="https://twitter.com/siliconwellness" target="_blank"><i class="icofont icofont-social-twitter"></i></a></li>
							   
							</ul>
						</div>	
                    </div>
                    <!-- End Widget -->	
                </div>
            </div>
        </div>
		<div class="copyright">
            <div class="auto-container">
                <div class="row">
                    <div class="col-12 text-center copyright-text">
                        <p>Copyright © 2019 <a href="#" class="linda-benn56"> Linda Benn.</a> | All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>	
    </footer>
    <!-- END FOOTER -->
		<!--  footer -->

	<script type="text/javascript">
	jQuery(document).ready(function(){
		

  jQuery( "ul#menu-mycustom" ).addClass( "nav navbar-nav" );
  jQuery( "ul#menu-mycustom li a" ).addClass( "nav-link" );
  
	
});
</script>


<script type="text/javascript">
	jQuery(document).ready(function(){
		

  jQuery( "li#menu-item-428" ).addClass( "dropdown" );
  jQuery( "ul.sub-menu" ).addClass( "dropdown-menu" );
  jQuery( "li#menu-item-181" ).addClass( "dropdown" );
  jQuery( "ul.sub-menu" ).addClass( "dropdown-menu" );
  
  


});
</script>

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("myHeader");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

<script>
            jQuery(document).ready(function() {			
            	jQuery('.tp-banner').show().revolution(
            	{
            		dottedOverlay:"none",
            		delay:16000,
            		startwidth:1170,
            		startheight:550,
            		hideThumbs:200,
            		
            		thumbWidth:100,
            		thumbHeight:50,
            		thumbAmount:5,
            		
            		navigationType:"bullet",
            		navigationArrows:"solo",
            		navigationStyle:"preview4",
            		
            		touchenabled:"on",
            		onHoverStop:"on",
            		
            		swipe_velocity: 0.7,
            		swipe_min_touches: 1,
            		swipe_max_touches: 1,
            		drag_block_vertical: false,
            								
            		parallax:"mouse",
            		parallaxBgFreeze:"on",
            		parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
            								
            		keyboardNavigation:"off",
            		
            		navigationHAlign:"center",
            		navigationVAlign:"bottom",
            		navigationHOffset:0,
            		navigationVOffset:20,
            
            		soloArrowLeftHalign:"left",
            		soloArrowLeftValign:"center",
            		soloArrowLeftHOffset:20,
            		soloArrowLeftVOffset:0,
            
            		soloArrowRightHalign:"right",
            		soloArrowRightValign:"center",
            		soloArrowRightHOffset:20,
            		soloArrowRightVOffset:0,
            				
            		shadow:0,
            		fullWidth:"on",
            		fullScreen:"off",
            
            		spinner:"spinner4",
            		
            		stopLoop:"off",
            		stopAfterLoops:-1,
            		stopAtSlide:-1,
            
            		shuffle:"off",
            		
            		autoHeight:"off",						
            		forceFullWidth:"off",						
            									
            								
            		hideThumbsOnMobile:"off",
            		hideNavDelayOnMobile:1500,						
            		hideBulletsOnMobile:"off",
            		hideArrowsOnMobile:"off",
            		hideThumbsUnderResolution:0,
            		
            		hideSliderAtLimit:0,
            		hideCaptionAtLimit:0,
            		hideAllCaptionAtLilmit:0,
            		startWithSlide:0,
            		fullScreenOffsetContainer: ""	
            	});				
            });	//ready
            
       </script>

<?php wp_footer(); ?>

</body>
</html>
