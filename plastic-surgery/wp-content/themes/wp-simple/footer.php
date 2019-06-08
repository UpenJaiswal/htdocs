<div class="location-sec mt-50 mb-50 pb-50 mb-80">
<div class="container">
<div class="row">
<div class="col-lg-4 col-4 col-md-6 col-sm-12">
<div class="location-box">
<?php dynamic_sidebar( 'location' ); ?>
</div>
</div>



<div class="col-lg-4 col-4 col-md-6 col-sm-12">
<div class="location-box">
<h4>OFFICE HOURS</h4>
<?php dynamic_sidebar( 'office_hours' ); ?>
</div>
</div>




<div class="col-lg-4 col-4 col-md-6 col-sm-12">
<div class="location-box box2">
<h4>GET IN TOUCH</h4>


<p>
<a href="" class="btn-call primary-border primary-fg">
<i class="fa fa-phone"></i><span class="mm-phone-number" style="border:0px;"><?php dynamic_sidebar( 'phone' );?></span>
</a>

<button type="button" class="btn-book-online ppop_bookonline_action small primary-bg primary-btn" data-locationid="18446">
            Request Appt
          </button>
              </p>

</div>
</div>










</div>
</div>
</div>


<!-- Foter -->
            <footer class="page-section bg-gray-lighter footer pb-60">
                <div class="container">
                    
                  
                    
                    <!-- Social Links -->
                    <div class="footer-link mb-xs-60">
                      <ul>
					  <li>© Copyright <?php echo date('Y'); ?> Design by RANKS DIGITAL MEDIA</li>
					  

  <li><a href="">Privacy Policy</a></li>   
  <li><a href="">Terms & Conditions</a></li>
  <li><a href="">Contact Us</a></li>
					  </ul>
                    </div>
                    <!-- End Social Links -->  
                    
                    <!-- Footer Text -->
                    <div class="footer-text">
                        
                        <!-- Copyright -->
                        <div class="footer-copy font-alt">
                            <P>Clínica Faciem Riera de St Miquel, 40 B – 08006 Barcelona, España
Abrimos</P>

                        <!-- End Copyright -->
                        
                        <div class="footer-made">
                            <p>Phone (appointments): 661-243-0510 | Phone (general inquiries): 661-324-7208</p>
                        </div>
                        
                    </div>
                    <!-- End Footer Text --> 
                    
                 </div>
                 
                 
                 <!-- Top Link -->
                 <div class="local-scroll">
                     <a href="#top" class="link-to-top"><i class="fa fa-caret-up"></i></a>
                 </div>
                 <!-- End Top Link -->
                 </div>
           </footer>
            <!-- End Foter -->
			
			
<script type="text/javascript">
	jQuery(document).ready(function(){
		

  jQuery( "ul#menu-mycustom" ).addClass( "menu nav inner-nav" );
  jQuery( "ul#menu-mycustom li a" ).addClass( "inner-nav desktop-nav" );
 
  
	
});
</script>

<script type="text/javascript">
	jQuery(document).ready(function(){
		
  jQuery( "li#menu-item-664 a" ).addClass( "mn-has-sub" );
  jQuery( "ul.sub-menu" ).addClass( "mn-sub to-right" );
  jQuery( "li#menu-item-514 a" ).addClass( "mn-has-sub" );
  jQuery( "ul.sub-menu" ).addClass( "mn-sub to-right" );
  
  


});
</script>



			
			
<?php wp_footer(); ?>
