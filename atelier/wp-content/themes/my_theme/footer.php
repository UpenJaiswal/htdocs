<!-- FOOTER-->
        <footer class="footer bg-parallax">
            <div class="bg-overlay bg-overlay--p85"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-col">
                            <div class="widget m-b-25">
                                <a href="index.html">
                                    <?php dynamic_sidebar( 'logo' ); ?>
                                </a>
                            </div>
                            <div class="widget widget-address">
                                
                                    
									<?php dynamic_sidebar( 'address' ); ?>
									
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="footer-col p-l-70 p-md-l-0">
                            <div class="widget widget_pages">
                                <h4 class="widget-title">Link</h4>
								
								
								<?php dynamic_sidebar( 'link' ); ?>
								
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-col p-l-70 p-md-l-0">
                            <h4 class="widget-title">Social</h4>
                            <div class="widget widget_socials">
							
							<?php dynamic_sidebar( 'social' ); ?>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-col">
                            <div class="widget widget_text">
                                <h4 class="widget-title">copyright</h4>
                                <p>© <?php echo date('Y'); ?> atelier visual communication . Designed by <a href="http://www.ranksdigitalmedia.com/" class="ranks-digital" target="_blank">Ranks Digital Media Pvt. Ltd.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END FOOTER-->
		
		
<script type="text/javascript">
	jQuery(document).ready(function(){
		

  jQuery( "ul#menu-mycustom" ).addClass( "menu nav nav-bar" );
  jQuery( "ul#menu-mycustom li a" ).addClass( "active" );
 
  
	
});
</script>

<script type="text/javascript">
	jQuery(document).ready(function(){
		
  
 
  
  
  


});
</script>

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("header");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

<script type="text/javascript">
	$(document).ready(function(){
  $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
    
    
});
    
	</script>		
	



