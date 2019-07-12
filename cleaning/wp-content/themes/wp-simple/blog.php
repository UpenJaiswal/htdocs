<?php
/* Template Name: blog */

get_header(); ?>

 <!-- Page Banner -->
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
		
	<div id="blog-section" class="blog-section blog-list ow-section">
		<!-- container -->
		<div class="container">
			<!-- col-md-8 -->
			<div class="col-md-8 col-sm-7 no-padding">
				<article>
				<?php 
       $args = array ( 'post_type' => 'post', 'posts_per_page' => -1);
       $myposts = get_posts( $args );
	     foreach( $myposts as $post ) : setup_postdata($post);
          ?>
					<div class="blog-box">
						<div class="entry-cover">
							<a title="Blog Cover" href="#"><?php echo get_the_post_thumbnail( $page->ID,'large' ); ?></a>
							<span class="posted-on">
								<span class="like"><?php $post_date = get_the_date( 'l'); echo $post_date;?></span>
								<span class="date"><?php $post_date = get_the_date( 'F j'); echo $post_date;?></span>
							</span>
						</div>
						<div class="blog-box-inner">
							<!-- entry header -->
							<header class="entry-header">
								<h3><a title="Post Title" href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
							</header><!-- entry header /- -->
							
							
							
							<div class="entry-content">
								<p><?php echo wp_trim_words( get_the_content()); ?></p>
							</div>
						</div>
						<a href="<?php the_permalink();?>" class="btn">Read more</a>
					</div>
					 <?php 
endforeach; 
wp_reset_postdata();
?>
				</article>
				
				
				
			</div><!-- col-md-8 /- -->
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
					
					
					
					<aside class="widget widget_category">
						<?php dynamic_sidebar('blog1'); ?>
					</aside>
					
					<aside class="widget widget_recent_post">
						<?php dynamic_sidebar('blog2'); ?>
					</aside>
					
					<aside class="widget widget_gallery">
						<h3 class="widget-title"><?php the_field('gallery_heading');?></h3>
						<?php dynamic_sidebar('blog3'); ?>
					</aside>
				</div>
			</div><!-- col-md-3 /- -->
		</div>
		<!-- container /- -->		
	</div>	

<?php get_footer(); ?>