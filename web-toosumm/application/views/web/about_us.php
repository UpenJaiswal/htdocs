<section class="inner-section" style="background:url(<?php echo base_url('assets/web_assets/images/bg/about-us.jpg');?>) no-repeat; background-size: cover;">
<div class="overlay"></div>
<div class="container-fluid">
<div class="row">
<div class="col-md-12 banner-texts">
<h1>About Us</h1>
</div>
</div>
</div>
</section>

<div class="main-content">
<section class="overview-block-ptb iq-hide">
<div class="container">
<div class="row">
<div class="col-lg-6 col-sm-12 iq-best-box">
<h3 class="small-title iq-tw-6">We Are Best</h3>
<p> Lorem Ipsum is simply dummy text ever sincehar the 1500s, when an unknownshil printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. Simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
<p> Lorem Ipsum is simply dummy text ever sincehar the 1500s, when an unknownshil printer took. Lorem Ipsum is simply dummy text ever sincehar the 1500s, when an unknownshil printer took.
Lorem Ipsum is simply dummy text ever sincehar the 1500s, when an unknownshil printer took.Lorem Ipsum is simply dummy text ever sincehar the 1500s, when an unknownshil printer took.
Lorem Ipsum is simply dummy text ever sincehar the 1500s, when an unknownshil printer took.</p>
</div>
<div class="col-lg-6 col-sm-12 iq-re-9-mt50">
<img class="img-responsive img-fluid center-block" src="<?php echo base_url('assets/web_assets/'); ?>images/bg/03.jpg" alt="">
</div>
</div>
</div>
</section>


<section class="overview-block-ptb">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12">
<div class="heading-title text-center">
<h2 class="title tw-6">Meet the Team</h2>
<p>Lorem Ipsum is simply dummy text ever sincehar the 1500s, when an unknownshil printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
</div>
</div>
</div>
<div class="row team4">

<?php foreach ($team as $value) {?>
<div class="col-lg-4 col-sm-12 mtb-20">
<div class="team-blog pall-20 text-center">
 <img alt="#" class="img-responsive img-fluid text-center" src="<?php echo base_url('/Uploads/team/'.$value->image);?>">
<div class="testimonial-name font-dark mt-20">
<h6 class="font-black tw-6"> 
	<a href=""><?php echo $value->name ?></a>
</h6>
<span><?php echo $value->designation  ?></span>
<div class="star font-green mb-10">
	<i class="fa fa-star" aria-hidden="true"></i>
	<i class="fa fa-star" aria-hidden="true"></i>
	<i class="fa fa-star" aria-hidden="true"></i>
	<i class="fa fa-star" aria-hidden="true"></i>
	<i class="fa fa-star-half-o" aria-hidden="true"></i>
</div>
</div>
<p><?php echo $value->details?></p>
</div>
</div>
<?php } ?>


</div>
</div>
</section>




</div>
