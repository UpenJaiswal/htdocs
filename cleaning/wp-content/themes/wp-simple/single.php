<?php get_header();?>
<div id="page-banner" class="page-banner">
		<img src="http://localhost/cleaning/wp-content/uploads/2019/07/ghghjbjhbj.jpg" alt="page-banner" />
		<!-- container -->
		<div class="page-detail">
			<div class="container">
				<h3 class="page-title">Blog</h3>
				<div class="page-breadcrumb pull-right">	
					<ol class="breadcrumb">
						<li><a title="Home" href="<?php echo get_home_url();?>">Home</a></li>
						<li>blog</li>
					</ol>
				</div>
			</div>
		</div><!-- container /- -->
	</div><!-- Page Banner /- -->

<!--  / left container \ -->
<div id="blog-section" class="blog-section blog-list ow-section">
<div class="container">
<div class="col-md-8 col-sm-7 no-padding">
				<article>
					<div class="blog-box">
						<div class="entry-cover">
							
							<span class="posted-on">
								<span class="like">08</span>
								<span class="date">10 APR</span>
							</span>
						</div>
						<div class="blog-box-inner">
<div id="leftCntr">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
    
    <div <?php post_class() ?> id="post-<?php the_ID(); ?>"><br><br>
    <?php echo get_the_post_thumbnail( $page->ID, 'large' ); ?>
        <h2><?php the_title(); ?></h2>
    
        <div class="entry">
            <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
    
            
            <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?> 
    
        </div>
        
    </div>
    
    
    
    <?php endwhile; else: ?>
    
    
    
    <?php endif; ?>

</div>
</div>
</div>
</article>




</div>
<div class="col-md-1 col-sm-1"></div>
			<!-- col-md-3 -->
			<div class="col-md-3 col-sm-4 col-xs-8">
				<div class="sidebar row">
					<aside class="widget widget_search">
						<form method="get" action="#" role="search" class="search">
							<input type="text" required="" class="form-control" placeholder="search post HERE..." id="s" name="s">
							<span class="search-icon input-group-btn"><button type="submit" class="btn btn-xlg"></button></span>
						</form>
					</aside>
					
					<aside class="widget widget_text">
						<h3 class="widget-title">Text Widget</h3>
						<p>Nemo enim ipsam volupitatem quia voluptas sia aspernatur aut odit aut fugit, sed quia cosequun tur magni dolores eos qui ratione volup tatemas sequi nesciuntsa Neque porro.</p>
					</aside>
					
					<aside class="widget widget_category">
						
					</aside>
					
					<aside class="widget widget_recent_post">
						<?php dynamic_sidebar('blog2'); ?>
					</aside>
					
					<aside class="widget widget_gallery">
					<h3 class="widget-title">IMAGE GALLERY</h3>
						<?php dynamic_sidebar('blog3'); ?>
					</aside>
				</div>
			</div><!-- col-md-3 /- -->

</div>
</div>
<?php get_footer(); ?>