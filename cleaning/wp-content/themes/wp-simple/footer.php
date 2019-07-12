<!-- Footer Section -->
	<footer id="footer-section" class="footer-section ow-background">
		<!-- container -->
		<div class="container">
			<div class="footer-heading">
			  <?php dynamic_sidebar( 'footer-heading' ); ?>
				
			</div>
			<aside class="col-md-3 col-sm-3 widget widget-link">
			   <?php dynamic_sidebar( 'widget-link' ); ?>
				
			</aside>
			
			<aside class="col-md-3 col-sm-3 widget widget-link">
			 <?php dynamic_sidebar( 'widget-link1' ); ?>
				
			</aside>
			
			<aside class="col-md-2 col-sm-2 widget widget-link">
			 <?php dynamic_sidebar( 'widget-link2' ); ?>
				
			</aside>
			
			<aside class="col-md-4 col-sm-4 widget widget-calculator">
			
				<h3>Address</h3>
				 
				 <?php dynamic_sidebar('footer address'); ?>
				 
					
					
					
				
			</aside>
			
			<!-- Footer Bottom -->
			<div class="footer-bottom">
			<p>Copyright © <?php echo date('Y'); ?> RANKS DIGITAL MEDIA. All Rights Reserved.</p>
				
			</div>
			<!-- Footer Bottom /- -->
			
		</div>
		<!-- container /- -->
	</footer><!-- Footer Section /- -->

<?php wp_footer(); ?>

  
<script>
		new UISearch( document.getElementById( 'sb-search' ) );
</script>  
  
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

</body>
</html>
