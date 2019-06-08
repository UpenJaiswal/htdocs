<section class="inner-section" style="background:  url(<?php echo base_url('assets/web_assets/images/bg/about-us.jpg'); ?>) no-repeat; background-size: cover;">
         <div class="overlay"></div>
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12 banner-texts">
                  <h1>Our News</h1>
               </div>
            </div>
         </div>
      </section>
      <div class="main-content">
         <section class="blog overview-block-ptb">
            <div class="container">
               <div id="masonry">

<?php foreach ($news as  $value) {?>
	<div class="item">
			<div class="item">
			<div class="blog-entry white-bg">
			<div class="entry-image clearfix">
			<img class="img-fluid" src="<?php echo base_url('/Uploads/news/'.$value->news_image);?>" alt="">         <span class="date"><?php
			$originalDate = $value->created_at;
			$newDate = date("d", strtotime($originalDate)); 

			echo $newDate ?>
			<small><?php 
			$newMonth = date("M", strtotime($originalDate));
			echo $newMonth ?></small></span>
			</div>
					<div class="blog-detail">
					<div class="entry-title iq-mb-10">
					<a href="<?php echo base_url('news/'.base64_encode($value->news_id)) ?>">
                     <h5 class="iq-tw-6"><?php echo word_limiter ($value->news_title,4); ?></h5>
					</a>
					</div>
					<ul class="entry-meta mt-10">
					<li>
						<a href=""><i class="fa fa-user" aria-hidden="true" >&nbsp;</i><?php echo $value->category_name ?></a>
					</li>
					<li>
					<a href=""><i class="fa fa-calendar" &nbsp; aria-hidden="true"></i> <?php 
					$newMonth = date("M", strtotime($originalDate));
					echo $newMonth ?>&nbsp;<?php
					$originalDate = $value->created_at;
					$newDate = date("d", strtotime($originalDate)); 
					echo $newDate ?>, &nbsp;<?php
					$originalYear = $value->created_at;
					$newYear = date("Y", strtotime($originalYear)); 

					echo $newYear ?>
					</a>
					</li>

					</ul>
					<div class="entry-content">
	                <p><?php echo word_limiter ($value->news_detail,40); ?></p>
                    </div>
					<a class="button iq-mt-20 iq-mb-80" href="<?php echo base_url('news/'.base64_encode($value->news_id)) ?>" role="button">Read More</a>
					</div>
					</div>
					</div>
                  </div>
        <?php } ?>
                  
             
               </div>
            </div>
         </section>
      </div>