<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

?>
			<?php astra_content_bottom(); ?>

			</div> <!-- ast-container -->

		</div><!-- #content -->

		<?php astra_content_after(); ?>

		<?php astra_footer_before(); ?>

		<?php astra_footer(); ?>

		<?php astra_footer_after(); ?>

	</div><!-- #page -->

	<?php astra_body_bottom(); ?>

	<?php wp_footer(); ?>

	</body>
</html>

<script type="text/javascript">		
window.onscroll = function() {myFunction()};

var header = document.getElementById("main-header-bar");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>

<script type="text/javascript">
	jQuery(document).ready(function(){
		

  jQuery( "ul#menu-mycustom" ).addClass( "menu nav inner-nav" );
  jQuery( "ul#menu-mycustom li a" ).addClass( "inner-nav desktop-nav" );
  jQuery( "li#menu-item-57 a" ).addClass( "mn-has-sub" );
  jQuery( "ul.sub-menu" ).addClass( "mn-sub to-right" );
  jQuery( "li#menu-item-56 a" ).addClass( "mn-has-sub" );
  jQuery( "ul.sub-menu" ).addClass( "mn-sub to-right" );
  
});
</script>

