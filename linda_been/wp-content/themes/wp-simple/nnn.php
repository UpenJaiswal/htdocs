<?php if(get_field('slideshow_images')): ?>
    <div id="myCarousel" class="carousel slide carousel_banner">
      <div class="carousel-inner">
		<?php while(the_repeater_field('slideshow_images')): ?>
        <div class="item active" style="background-image: url(<?php the_sub_field('image');?>);">
 <div class="container">
            <div class="carousel-">
              <h1><?php the_sub_field('title');?></h1>
              <h3><?php the_sub_field('sub_title');?></h3>
              <a class="btn btn-large btn-primary" href="<?php the_sub_field('image_links_to');?>"><?php the_sub_field('links_to_text');?> <i class="icon-chevron-right"></i></a>
            </div>
          </div>
        </div>
	    <?php endwhile; ?>

      </div>
   </div><!-- /.carousel -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	<?php endif; ?>
	
	
	
	<!--
	<div class="item active" style="background-image: url(<?php the_sub_field('image');?>);">
 <div class="container">
            <div class="carousel-">
              <h1><?php the_sub_field('title');?></h1>
              <h3><?php the_sub_field('sub_title');?></h3>
              <a class="btn btn-large btn-primary" href="<?php the_sub_field('image_links_to');?>"><?php the_sub_field('links_to_text');?> <i class="icon-chevron-right"></i></a>
            </div>
          </div>
        </div>  -->
		
		
<?php if(get_field('slideshow_images')): ?>
    <div id="myCarousel" class="carousel slide carousel_banner">
<div class="carousel-inner">
      <?php $z = 0; while(the_repeater_field('slideshow_images')): ?>
      <?php $z = $z + 1; $image = wp_get_attachment_image_src(get_sub_field('image'), 'full'); ?>
  <div class="<?php echo ($z==1) ? 'active ' : ''; ?>item" style="background-image: url(<?php the_sub_field('image');?>);">
 <div class="container">
            <div class="carousel-">
              <h1><?php the_sub_field('title');?></h1>
              <h3><?php the_sub_field('sub_title');?></h3>
              <a class="btn btn-large btn-primary" href="<?php the_sub_field('image_links_to');?>"><?php the_sub_field('links_to_text');?> <i class="icon-chevron-right"></i></a>
            </div>
          </div> </div>
      <?php endwhile; ?>

      </div>
   </div><!-- /.carousel -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	<?php endif; ?>