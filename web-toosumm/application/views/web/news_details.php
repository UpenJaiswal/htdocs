<section class="inner-section" style="background:  url(<?php echo base_url('assets/web_assets/images/bg/about-us.jpg'); ?>) no-repeat; background-size: cover;">
<div class="overlay"></div>
<div class="container-fluid">
<div class="row">
<div class="col-md-12 banner-texts">
<h1>News Details</h1>
</div>
</div>
</div>
</section>

<div class="main-content">

<section class="blog overview-block-ptb">
<div class="container">
<div class="row">

<div class="col-lg-8 col-sm-12 iq-mtb-15">
<div class="grey-bg">
<div class="entry-image clearfix">
<img class="img-fluid" src="<?php echo base_url('/Uploads/news/'.$news_details->news_image);?>" alt="">

</div>
<div class="iq-pos-r">
<div class="blog-detail">
	<ul class="entry-meta iq-mt-10">
	<?php //echo "<pre>", print_r($blog_details); ?>
	<li>
	<a href=""><i class="fa fa-user" aria-hidden="true" >&nbsp;</i><?php echo $news_details->category_name ?></a>
	</li>
	<li>
	<a href=""><i class="fa fa-calendar" &nbsp; aria-hidden="true"></i> 
		<?php 
	$originalDate = $news_details->created_at;
	$newMonth = date("M", strtotime($originalDate));
	echo $newMonth ?>&nbsp;<?php
	$originalDate = $news_details->created_at;
	$newDate = date("d", strtotime($originalDate)); 
	echo $newDate ?>, &nbsp;<?php
	$originalYear = $news_details->created_at;
	$newYear = date("Y", strtotime($originalYear)); 

	echo $newYear ?>
	</a>
	</li>

	</ul>
<div class="entry-title">
<a href="#">
<h5 class="iq-tw-6"><?php echo $news_details->news_title; ?></h5>
</a>
</div>
<div class="entry-content">
<p><?php echo $news_details->news_detail; ?></p>

</div>
</div>
</div>
</div>

</div>
<div class="col-lg-4 col-sm-12 iq-mtb-15">
<div class="post-sidebar">
<div class="sidebar-widget">
<h5 class="iq-tw-6 small-title iq-font-dark">Recent Posts</h5>
<?php foreach ($recent_post as $valuee) { ?>
<div class="iq-recent-post media">
<div class="media-left iq-mr-10"> <a href="#"><img alt="" class="media-object" src="<?php echo base_url();?>./Uploads/news/<?php echo $valuee->news_image; ?>" class="img-responsive img-thumbnail" height="60" width="60""></a> 
</div>

<div class="media-body">
	

	<a href="<?php echo base_url('news/'.base64_encode($valuee->id)) ?>">
		<?php echo word_limiter($valuee->news_title,2); ?></a>
 <span>
 	<i class="fa fa-calendar"></i> <?php $originalDate = $valuee->created_at;
$newDate = date("M", strtotime($originalDate));    
 
echo $newDate ?> <?php
$originalDate = $valuee->created_at;
$newDate = date("d", strtotime($originalDate)); 
 
echo $newDate ?> ,<?php
$originalYear = $valuee->created_at;
$originalYear = date("Y", strtotime($originalYear)); 
 
echo $originalYear ?>
</span>

 
 </div>

</div>
<?php }?>

</div>

</div>
</div>

</div>

</div>
</section>



</div>

