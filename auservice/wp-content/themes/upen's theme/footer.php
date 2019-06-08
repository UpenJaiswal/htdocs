  <footer class="footer">
		<div class="footer-section section-box" style="background-image: url(<?php bloginfo ('template_url'); ?>/images/hp-1-bg-footer.jpg)">
			<div class="container">
				<div class="row">
				
					<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-12">
						<div class="footer-item">
						<?php dynamic_sidebar( 'footer-1' ); ?>
						
						</div>
					</div>
					
					
					<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-12">
						<div class="footer-item">
						<?php dynamic_sidebar( 'footer-2' ); ?>
						
						</div>
					</div>
					<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-12">
						<div class="footer-item widget_tag_cloud">
						
						<?php dynamic_sidebar( 'footer-3' ); ?>
						
						</div>
					</div>
					<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-12">
						<div class="footer-item">
						
						<?php dynamic_sidebar( 'footer-4' ); ?>
						
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="sub-footer">
			<p>Copyright © <?php echo date('Y'); ?> <a href=http://www.ranksdigitalmedia.com/>ranksdigitalmedia</a>.com</p>
		</div>
	</footer>

	<!-- Back To Top Button -->
	<a href="#" id="back-to-top">
		<i class="la la-arrow-up"></i>
	</a>
	<!-- End Back To Top Button -->

<?php wp_footer(); ?>


