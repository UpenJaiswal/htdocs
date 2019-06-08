
<section class="inner-section" style="background:  url(<?php echo base_url('assets/web_assets/images/bg/about-us.jpg'); ?>) no-repeat; background-size: cover;">
<div class="overlay"></div>
<div class="container-fluid">
<div class="row">
<div class="col-md-12 banner-texts">
<h1>Our Blogs</h1>
</div>
</div>
</div>
</section>

<div class="main-content">
<section class="blog overview-block-ptb">
<div class="container">
<div class="row">

	<?php foreach ($blog as  $value) {  ?>
		<div class="col-lg-4 col-md-6">
<div class="blog-entry white-bg">
<div class="entry-image clearfix">
<img class="img-fluid" src="<?php echo base_url('/Uploads/blog/'.$value->blog_image);?>" alt="">
<span class="date"><?php
$originalDate = $value->created_at;
$newDate = date("d", strtotime($originalDate)); 
 
echo $newDate ?>
<small><?php 
$newMonth = date("M", strtotime($originalDate));
echo $newMonth ?></small></span>
</div>
<div class="blog-detail">
<div class="entry-title iq-mb-10">
<a href="<?php echo base_url('blog/'.base64_encode($value->blog_id)) ?>">
<h5 class="iq-tw-6"><?php echo word_limiter ($value->blog_name,4); ?></h5>
</a>
</div>
<div class="entry-content">
	<p><?php echo word_limiter ($value->blog_detail,40); ?></p>
</div>
<ul class="entry-meta iq-mt-10">
<li><a href="#"><i class="fa fa-user" aria-hidden="true" >&nbsp;</i><?php echo $value->first_name ?></a></li>
 <li><a href="<?php echo base_url('blog/'.base64_encode($value->blog_id)) ?>" style="color:white;" class="btn bt btn-primary ">Read More</a></li>

</ul>
</div>
</div>
</div>
	<?php
      } ?>




</div>
</div>
</section>



</div>

