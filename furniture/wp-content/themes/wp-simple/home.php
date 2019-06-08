<?php
/* Template Name: home */
get_header(); ?>

<section>
               <div class="rev_slider_wrapper">
                  <!-- START REVOLUTION SLIDER 5.0 auto mode -->
                  <div id="slider-h3" class="rev_slider slider-home-3" data-version="5.0">
                     <ul>
                        <!-- SLIDE  -->
						<?php if(get_field('slider')): ?>
						<?php while(has_sub_field('slider')): ?>
                        <li data-transition="slideup" data-masterspeed="1000" >
						
                           <!-- MAIN IMAGE -->
                           <img src="<?php the_sub_field('image'); ?>"  alt="" data-bgposition="center center">							
                           <!-- LAYER NR. 1 -->
                           <div class="tp-caption heading-3 text-cap" 							
                              data-x="center" 
                              data-y="center"  data-voffset="-107" 	
                              data-transform_in="y:[200%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;" 				 
                              data-start="700" 
                              ><?php the_sub_field('content'); ?>
                           </div>
                           <!-- LAYER NR. 2 -->
                           <div class="tp-caption heading-4 text-cap " 						
                              data-x="center" 
                              data-y="center" 	
                              data-transform_in="y:[150%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;" 
                              data-start="900" 
                              
                              ><?php the_sub_field('heading'); ?>
                           </div>
                           <!-- LAYER NR. 3 -->
                           <div class="tp-caption btn-1" 							
                              data-x="center"  data-hoffset="-85"
                              data-y="center"  data-voffset="142" 
                              data-transform_in="y:[200%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;" 
                              data-start="1100" 	
                              >	
                              <a href="portfolioGrid_1.html" class="ot-btn btn-main-color text-cap "><?php the_sub_field('shop_now'); ?></a>  
                           </div>
                           <!-- LAYER NR. 3 -->
                           <div class="tp-caption btn-2" 							
                              data-x="center"  data-hoffset="85"
                              data-y="center"  data-voffset="142" 
                              data-transform_in="y:[200%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;" 
                              data-start="1100" 	
                              >	
                              <a href="contact.html" class="ot-btn btn-sub-color text-cap  "><?php the_sub_field('get_a_quote');?></a>
                           </div>
                           
                        </li>
						<?php endwhile; ?>
						<?php endif; ?>
                        <!-- SLIDE  -->
                       <!-- <li data-transition="slideup" data-masterspeed="1000"  >
                           <!-- MAIN IMAGE --
                           <img src="<?php the_field('custom_field')?>/images/banner-2.jpg"  alt="" data-bgposition="center center">							
                           <!-- LAYER NR. 1 --
                           <div class="tp-caption heading-3 text-cap" 							
                              data-x="center" 
                              data-y="center"  data-voffset="-107" 	
                              data-transform_in="y:[200%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;" 
                              data-start="700" 
                              >share passion with you
                           </div>
                           <!-- LAYER NR. 2 --
                           <div class="tp-caption heading-4 text-cap " 						
                              data-x="center" 
                              data-y="center" 	
                              data-transform_in="y:[150%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;" 
                              data-start="900" 
                              >Highest quality flooring solutions
                           </div>
                           <!-- LAYER NR. 3 --
                           <div class="tp-caption btn-1" 							
                              data-x="center"  data-hoffset="-85"
                              data-y="center"  data-voffset="142" 
                              data-transform_in="y:[200%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;" 
                              data-start="1100" 	
                              >	
                              <a href="portfolioGrid_1.html" class="ot-btn btn-main-color text-cap ">Shop Now</a>  
                           </div>
                           <!-- LAYER NR. 3 --
                           <div class="tp-caption btn-2" 							
                              data-x="center"  data-hoffset="85"
                              data-y="center"  data-voffset="142" 
                              data-transform_in="y:[200%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;" 
                              data-start="1100" 	
                              >	
                              <a href="contact.html" class="ot-btn btn-sub-color text-cap  ">Get a Quote</a>
                           </div>
                         
                        </li>
                        <!-- SLIDE  --
                        <li data-transition="slideup" data-masterspeed="1000">
                           <!-- MAIN IMAGE --
                           <img src="<?php the_field('custom_field')?>/images/banner-1.jpg"  alt="" data-bgposition="center center">							
                           <!-- LAYER NR. 1 --
                           <div class="tp-caption heading-3 text-cap" 							
                              data-x="center" 
                              data-y="center"  data-voffset="-107" 	
                              data-transform_in="y:[200%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;" 
                              data-start="700" 
                              >share passion with you
                           </div>
                           <!-- LAYER NR. 2 --
                           <div class="tp-caption heading-4 text-cap " 						
                              data-x="center" 
                              data-y="center" 	
                              data-transform_in="y:[150%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;" 
                              data-start="900" 
                              >Highest quality flooring solutions
                           </div>
                           <!-- LAYER NR. 3 --
                           <div class="tp-caption btn-1" 							
                              data-x="center"  data-hoffset="-85"
                              data-y="center"  data-voffset="142" 
                              data-transform_in="y:[200%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;" 
                              data-start="1100" 	
                              >	
                              <a href="portfolioGrid_1.html" class="ot-btn btn-main-color text-cap ">Shop Now</a>  
                           </div>
                           <!-- LAYER NR. 3 --
                           <div class="tp-caption btn-2" 							
                              data-x="center"  data-hoffset="85"
                              data-y="center"  data-voffset="142" 
                              data-transform_in="y:[200%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;" 
                              data-start="1100" 	
                              >	
                              <a href="contact.html" class="ot-btn btn-sub-color text-cap  ">Get a Quote</a>
                           </div>
                         
                        </li> -->
                     </ul>
                  </div>
                  <!-- END REVOLUTION SLIDER -->
               </div>
               <!-- END REVOLUTION SLIDER WRAPPER -->	
            </section>
            <!-- End Section Slider -->
            
			
			
			
			<div class="lastest-blog-container">
			<div class="container">
				<div class="row">
				<div class="col-lg-12">
				<div class="oh">
            <div class="title-decoration-lines wow slideInUp" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: slideInUp;">
              <h6 class="title-decoration-lines-content"><?php the_field('what_we_offer')?></h6>
            </div>
          </div>
				
				</div>
				
<div class="col-lg-8 col-md-8 col-sm-12">
                           <article class="lastest-blog-item wow slideInUp" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: slideInUp;">
                              <figure class="latest-blog-post-img effect-zoe">
                                 <a href="blogDetail.html">
                                 <img src="<?php the_field('blog_image1')?>" class="img-responsive" alt="Image">
                                 </a>
                                 <div class="latest-blog-post-date text-cap">
                                    <span class="day"><?php the_field('status1')?></span>
                                    <!-- <span class="month">May</span> -->
                                 </div>
                              </figure>
                              <div class="latest-blog-post-description">
                                 <a href="blogDetail.html">
                                    <h3><?php the_field('blog_heading1')?></h3>
                                 </a>
                                <div class="box-sportlight-arrow"></div>
                               
                              </div>
                           </article>
                        </div>
                      <div class="col-lg-4 col-md-4 col-sm-12">
                           <article class="lastest-blog-item">
                              <figure class="latest-blog-post-img effect-zoe">
                                 <a href="blogDetail.html">
                                 <img src="<?php the_field('blog_image2')?>" class="img-responsive" alt="Image">
                                 </a>
                                 <div class="latest-blog-post-date text-cap">
                                    <span class="day"><?php the_field('status2')?></span>
                                    <!-- <span class="month">May</span> -->
                                 </div>
                              </figure>
                              <div class="latest-blog-post-description">
                                 <a href="blogDetail.html">
                                    <h3><?php the_field('blog_heading2')?></h3>
                                 </a>
                                <div class="box-sportlight-arrow"></div>
                               
                              </div>
                           </article>
                        </div>
				 </div>
					 
<div class="row row-top">
<div class="col-lg-4 col-md-4 col-sm-12">
                           <article class="lastest-blog-item wow slideInRight" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: slideInRight;">
                              <figure class="latest-blog-post-img effect-zoe">
                                 <a href="blogDetail.html">
                                 <img src="<?php the_field('blog_image3')?>" class="img-responsive" alt="Image">
                                 </a>
                                 
                              </figure>
                              <div class="latest-blog-post-description">
                                 <a href="blogDetail.html">
                                    <h3><?php the_field('blog_heading3')?></h3>
                                 </a>
                                <div class="box-sportlight-arrow"></div>
                                </div>
                           </article>
                        </div>
						
						
						<div class="col-lg-4 col-md-4 col-sm-12">
                           <article class="lastest-blog-item wow slideInLeft" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: slideInLeft;">
                              <figure class="latest-blog-post-img effect-zoe">
                                 <a href="blogDetail.html">
                                 <img src="<?php the_field('blog_image4')?>" class="img-responsive" alt="Image">
                                 </a>
                                 
                              </figure>
                              <div class="latest-blog-post-description">
                                 <a href="blogDetail.html">
                                    <h3><?php the_field('blog_heading4')?></h3>
                                 </a>
                                
								<div class="box-sportlight-arrow"></div>
                               
                              </div>
                           </article>
                        </div>
						
						
						
						
						<div class="col-lg-4 col-md-4 col-sm-12 ">
                           <article class="lastest-blog-item wow slideInUp" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: slideInUp;">
                              <figure class="latest-blog-post-img effect-zoe">
                                 <a href="blogDetail.html">
                                 <img src="<?php the_field('blog_image5')?>" class="img-responsive" alt="Image">
                                 </a>
                                
                              </figure>
                              <div class="latest-blog-post-description">
                                 <a href="blogDetail.html">
                                    <h3><?php the_field('blog_heading5')?></h3>
                                 </a>
                                
                               <div class="box-sportlight-arrow"></div>
                              </div>
                           </article>
                        </div>

</div>

					 
                  </div>
			  </div>
			
			
  <!-- End Section Why Choose Us -->
            <section class="padding">
               <div class=" container">
			   <div class="row">
			   	   <div class="col-lg-12">
			   <div class="oh ">
            <div class="title-decoration-lines">
              <h6 class="title-decoration-lines-content wow slideInUp" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: slideInUp;"><?php the_field('trending_product')?></h6>
            </div>
          </div>
		  </div>
		  
		  
		  
			   <div class="col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInLeft;">
			   <div class="left-largimg"><img src="<?php the_field('product_image1')?>" alt="Image"></div>
			   
			   </div>
			   
			   
		<div class="col-lg-6 col-md-6 col-sm-12">
			  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow slideInRight" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: slideInRight;"> 
			 <div class="right-img">
			
  <img src="<?php the_field('product_image2')?>" alt="Avatar" class="image">
  <div class="middle">
    <div class="text"><?php the_field('add_to_cart')?></div>
  </div>
</div> 


<div class="unit-body">
 <h5 class="product-title"><a href="single-product.html"><?php the_field('product1')?></a></h5>
 <div class="product-price-wrap">
<div class="product-price product-price-old"><?php the_field('old_price1')?></div>
<div class="product-price"><?php the_field('price1')?></div>
 </div>
</div>
 
</div> 		



 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow slideInLeft" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: slideInLeft;"> 
			 <div class="right-img">
			
  <img src="<?php the_field('product_image3')?>" alt="Avatar" class="image">
  <div class="middle">
    <div class="text"><?php the_field('add_to_cart')?></div>
  </div>
</div> 


<div class="unit-body">
 <h5 class="product-title"><a href="single-product.html"><?php the_field('product2')?></a></h5>
 <div class="product-price-wrap">
<div class="product-price product-price-old"><?php the_field('old_price2')?></div>
<div class="product-price"><?php the_field('price2')?></div>
 </div>
</div>
 
</div> 	




 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow slideInLeft" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: slideInLeft;"> 
			 <div class="right-img">
			
  <img src="<?php the_field('product_image4')?>" alt="Avatar" class="image">
  <div class="middle">
    <div class="text"><?php the_field('add_to_cart')?></div>
  </div>
</div> 


<div class="unit-body">
 <h5 class="product-title"><a href="single-product.html"><?php the_field('product3')?></a></h5>
 <div class="product-price-wrap">
<div class="product-price product-price-old"><?php the_field('old_price3')?></div>
<div class="product-price"><?php the_field('price3')?></div>
 </div>
</div>
 
</div> 	



 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow slideInRight" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: slideInRight;"> 
			 <div class="right-img">
			
  <img src="<?php the_field('product_image5')?>" alt="Avatar" class="image">
  <div class="middle">
    <div class="text"><?php the_field('add_to_cart')?></div>
  </div>
</div> 


<div class="unit-body">
 <h5 class="product-title"><a href="single-product.html"><?php the_field('product4')?></a></h5>
 <div class="product-price-wrap">
<div class="product-price product-price-old"><?php the_field('old_price4')?></div>
<div class="product-price"><?php the_field('price4')?></div>
 </div>
</div>
 
</div> 	
	   
			   
			    </div>
			   
			   
			   
			   </div>
			   </div>
            </section>
            <!-- End Section What we do -->
            
			<div class="3box-sect">
			<div class=" container">
			<?php if(get_field('trending')): ?> 
			<div class="row">
			<?php while(has_sub_field('trending')): ?>   

			<div class="col-lg-4 col-md-4 col-sm-12 wow fadeInRight" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInRight;">
              <article class="box-icon-ruby">
                <div class="unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                   <div class="box-icon-ruby-icon fl-bigmug-line-circular220"><img src="<?php the_sub_field('trending_image'); ?>"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-ruby-title"><a href="single-service.html"><?php the_sub_field('trending_heading'); ?></a></h5>
                  <p class="box-icon-ruby-text"><?php the_sub_field('trending_content'); ?></p>
                  </div>
                </div>
              </article>
            </div>
			
			
			<!--
			
			<div class="col-lg-4 col-md-4 col-sm-12 wow fadeInRight" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInRight;">
              <article class="box-icon-ruby">
                <div class="unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                    <div class="box-icon-ruby-icon fl-bigmug-line-circular220"><img src="<?php the_field('custom_field')?>/images/label-icon.png"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-ruby-title"><a href="single-service.html">High-Quality products</a></h5>
                  <p class="box-icon-ruby-text">Award-winning flooring</p>
                  </div>
                </div>
              </article>
            </div>
			
			
			
		<div class="col-lg-4 col-md-4 col-sm-12 wow fadeInRight" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInRight;">
              <article class="box-icon-ruby">
                <div class="unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                    <div class="box-icon-ruby-icon fl-bigmug-line-circular220"><img src="<?php the_field('custom_field')?>/images/fair-icon.png"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-ruby-title"><a href="single-service.html">-20% on new collections</a></h5>
                  <p class="box-icon-ruby-text">Get your discount today!</p>
                  </div>
                </div>
              </article>
            </div>
			
			-->
			<?php endwhile; ?>

			</div>
			<?php endif; ?>
			</div>
			</div>
			
			
			
			
			
            <!-- End promotion Content Box -->
            <section class="padding  padding-bottom-0">
               
               <!-- End Title -->
               <div class="lastest-project-warp clearfix">
                   <div class="container">
				   
				   <div class="row">
				    
				  <div class="col-lg-12">
				  <div class="oh">
            <div class="title-decoration-lines wow slideInUp" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: slideInUp;">
              <h6 class="title-decoration-lines-content"><?php the_field('best_flooring_products')?></h6>
            </div>
          </div>
				  
				  </div>
				   
				   </div>
				   
				   
				   <div class="row clearfix projectContainer">
				  
                  <!-- End Project Fillter -->
				 
				  
				  
				  
				  
               <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-12 top-space wow slideInLeft" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: slideInLeft;">
                     <div class="element-item  Residential">
                        <img src="<?php the_field('project_image1')?>" alt="Image">
                        <div class="project-info">
                           <a href="portfolioDetail.html">
                              <h4 class="title-project text-cap text-cap"><?php the_field('project_name1')?></h4>
                           </a>
                           <a href="portfolioDetail.html" class="cateProject"><?php the_field('project_type1')?></a>
                        </div>
                     </div>
					  <div class="clear"></div>
					 </div>
					 
					  <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-12 top-space wow slideInUp" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: slideInUp;">
                     <div class="element-item Residential ">
                       <img src="<?php the_field('project_image2')?>" alt="Image">
                        <div class="project-info">
                           <a href="portfolioDetail.html">
                              <h4 class="title-project text-cap"><?php the_field('project_name2')?></h4>
                           </a>
                           <a href="portfolioDetail.html" class="cateProject"><?php the_field('project_type2')?></a>
                        </div>
                     </div>
					  <div class="clear"></div>
					 </div>
					 
					 
					   <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-12 top-space wow slideInRight" data-wow-delay=".0s" style="visibility: visible; animation-delay: 0s; animation-name: slideInRight;">
                     <div class="element-item Ecommercial">
                        <a class="img-contain-isotope" href="portfolioDetail.html">
                       <img src="<?php the_field('project_image3')?>" alt="Image">
                        </a>
                        <div class="project-info">
                           <a href="portfolioDetail.html">
                              <h4 class="title-project text-cap"><?php the_field('project_name3')?></h4>
                           </a>
                           <a href="portfolioDetail.html" class="cateProject"><?php the_field('project_type3')?></a>
                        </div>
                     </div>
					  <div class="clear"></div>
					   </div>
					   
					   
					   <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-12 top-space wow slideInUp" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: slideInUp;"> 
                     <div class="element-item Ecommercial ">
                        <a class="img-contain-isotope" href="portfolioDetail.html">
                        <img src="<?php the_field('project_image4')?>"  alt="Image">
                        </a>
                        <div class="project-info">
                           <a href="portfolioDetail.html">
                              <h4 class="title-project text-cap"><?php the_field('project_name4')?></h4>
                           </a>
                           <a href="portfolioDetail.html" class="cateProject"><?php the_field('project_type4')?></a>
                        </div>
                     </div>
					  <div class="clear"></div>
					 </div>
					 
					  <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-12 top-space wow slideInLeft" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: slideInLeft;">
                     <div class="element-item Office">
                        <a class="img-contain-isotope" href="portfolioDetail.html">
                       <img src="<?php the_field('project_image5')?>" alt="Image">
                        </a>
                        <div class="project-info">
                           <a href="portfolioDetail.html">
                              <h4 class="title-project text-cap"><?php the_field('project_name5')?></h4>
                           </a>
                           <a href="portfolioDetail.html" class="cateProject"><?php the_field('project_type5')?></a>
                        </div>
                     </div>
					  <div class="clear"></div>
					 </div>
					 
					  <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-12 top-space wow slideInDown" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: slideInDown;">
                     <div class="element-item Office">
                        <a class="img-contain-isotope" href="portfolioDetail.html">
                        <img src="<?php the_field('project_image6')?>" alt="Image">
                        </a>
                        <div class="project-info">
                           <a href="portfolioDetail.html">
                              <h4 class="title-project text-cap"><?php the_field('project_name6')?></h4>
                           </a>
                           <a href="portfolioDetail.html" class="cateProject"><?php the_field('project_type6')?></a>
                        </div>
                     </div>
					 <div class="clear"></div>
					  </div>
					 
					 
					 
                  </div>
                  <!-- End project Container -->
               
               <!-- End  -->
               
			   </div>
			   </div>
            </section>
            <!-- End Section Isotop Lastest Project -->
           
            <div class="blog-sect">
			<div class=" container">
			<div class="row">
			<div class="col-lg-12">
			<div class="oh">
            <div class="title-decoration-lines wow slideInUp" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: slideInUp;">
              <h6 class="title-decoration-lines-content"><?php the_field('latest_post')?></h6>
            </div>
           </div>
			</div>
			<?php 
       $args = array ( 'post_type' => 'Projects', 'posts_per_page' => -1);
       $myposts = get_posts( $args );
       foreach( $myposts as $post ) : setup_postdata($post);
          ?>

			<div class="col-lg-4 col-md-4 col-sm-12">
			
			<article class="lastest-blog-item wow slideInUp animated" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: slideInUp;">
			
			 <div class="post-creative-header">
                  <div class="group-md">
                    <div class="top2">
                      <div class="unit flex-column flex-sm-row unit-spacing-sm align-items-center">
                        <div class="unit-left"><img class="img-circles" src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" alt="" width="49" height="49">
                        </div>
                        <div class="unit-body">
                          <div class="post-creative-author">by<a href="#"> <?php echo  get_the_author(); ?></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="post-creative-time">
                      <time datetime="2018-05-17"><?php the_time( get_option( 'date_format' ) ); ?></time>
                    </div>
					  <div class=" clear"></div>
                  </div>
				
                </div>
			
                              <figure class="latest-blog-post-img effect-zoe">
                                 <a href="blogDetail.html">
                                 <?php echo get_the_post_thumbnail( $page->ID, 'medium' ); ?>
                                 </a>
                                
                              </figure>
                             <div class="post-creative-footer">
                  <h5 class="post-creative-title"><a href="blog-post.html"><?php echo  get_the_content(); ?></a></h5>
                </div>
              </article>
			
			</div>
			<?php 
endforeach; 
wp_reset_postdata();
?>
		<!--	
			
		<div class="col-lg-4 col-md-4 col-sm-12">
			
			<article class="lastest-blog-item wow slideInUp animated" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: slideInUp;">
			
			 <div class="post-creative-header">
                  <div class="group-md">
                    <div class="top2">
                      <div class="unit flex-column flex-sm-row unit-spacing-sm align-items-center">
                        <div class="unit-left"><img class="img-circles" src="<?php the_field('custom_field')?>/images/Blog/user-4-49x49.jpg" alt="" width="49" height="49">
                        </div>
                        <div class="unit-body">
                          <div class="post-creative-author">by<a href="#"> Mary Lee</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="post-creative-time">
                      <time datetime="2018-05-17">May 17, 2018</time>
                    </div>
					  <div class=" clear"></div>
                  </div>
				
                </div>
			
                              <figure class="latest-blog-post-img effect-zoe">
                                 <a href="blogDetail.html">
                                 <img src="<?php the_field('custom_field')?>/images/Blog/post-17-370x267.jpg" class="img-responsive" alt="Image">
                                 </a>
                                
                              </figure>
                             <div class="post-creative-footer">
                  <h5 class="post-creative-title"><a href="blog-post.html">Flooring Pro’s Secrets that can Raise Your Home Value</a></h5>
                </div>
              </article>
			
			</div>
			
			
			
		<div class="col-lg-4 col-md-4 col-sm-12">
			
			<article class="lastest-blog-item wow slideInUp animated" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: slideInUp;">
			
			 <div class="post-creative-header">
                  <div class="group-md">
                    <div class="top2">
                      <div class="unit flex-column flex-sm-row unit-spacing-sm align-items-center">
                        <div class="unit-left"><img class="img-circles" src="<?php the_field('custom_field')?>/images/Blog/user-4-49x49.jpg" alt="" width="49" height="49">
                        </div>
                        <div class="unit-body">
                          <div class="post-creative-author">by<a href="#"> Mary Lee</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="post-creative-time">
                      <time datetime="2018-05-17">May 17, 2018</time>
                    </div>
					  <div class=" clear"></div>
                  </div>
				
                </div>
			
                              <figure class="latest-blog-post-img effect-zoe">
                                 <a href="blogDetail.html">
                                 <img src="<?php the_field('custom_field')?>/images/Blog/post-18-370x267.jpg" class="img-responsive" alt="Image">
                                 </a>
                                
                              </figure>
                             <div class="post-creative-footer">
                  <h5 class="post-creative-title"><a href="blog-post.html">Flooring Pro’s Secrets that can Raise Your Home Value</a></h5>
                </div>
              </article>
			
			</div>-->

			</div>
			</div>
			</div>

<?php get_footer(); ?>


