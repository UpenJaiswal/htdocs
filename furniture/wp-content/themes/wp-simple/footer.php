           <div class="footer-sect">
		<div class="container-fluid">
		<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-12">
		<div class="foot-box logo_b" >
		
		<?php dynamic_sidebar( 'footer_logo' ); ?>
		</div>
		<div class="foot-box" >
		<?php dynamic_sidebar( 'footer-1' ); ?>
		
		</div>
		</div>
		
		
	<div class="col-lg-4 col-md-4 col-sm-12">
	<div class="foot-box button" style="padding:0px;">
		
                      <?php dynamic_sidebar( 'footer-2' ); ?>
          
		</div>	
		
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12">
		<div class="col-lg-12 foot-box gallery-spac" style="padding:0px 0px 0px 35px; ">
		<div class="col-lg-12">
		
		<?php dynamic_sidebar( 'footer-3' ); ?>
		</div>
		
	
 
		
</div> 
</div>

<div class="clear"></div>

		</div>
		<div class="clear"></div>
		<div class="row">
	 <div class="col-lg-12">
		   <div class="copyright">
		   <p>Copyright © <?php echo date('Y'); ?>. | All Rights Reserved</p>
		   </div>
          
		   
		   </div>
		    <div class="clear"></div>
		 		</div>
		

		
		</div>
		
		
		
		</div>
<a id="to-the-top"><i class="fa fa-angle-up"></i></a>

<?php wp_footer(); ?>


<script type="text/javascript">
      (function($) { "use strict";
                  Royal_Preloader.config({
                      mode:           'logo', // 'number', "text" or "logo"
                      logo:           '<?php bloginfo ('template_url'); ?>/images/Header/logo.png',
                      timeout:       1,
                      showInfo:       false,
                      opacity:        1,
                      background:     ['#FFFFFF']
                  });
      })(jQuery);
      </script>


