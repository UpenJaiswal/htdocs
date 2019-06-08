<?php 
/* Template Name: contact */
get_header(); ?>

	<!-- START PAGE BANNER AND BREADCRUMBS -->
	<section class="single-page-title-area" data-background="<?php bloginfo ('template_url'); ?>/assets/images/contact-banner.jpg">
		<div class="auto-container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-12">
					<div class="single-page-title">
						<h2>Contact Us Page</h2>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-12">
					<ol class="breadcrumb">
					  <li class="breadcrumb-item"><a href="#"><span class="lnr lnr-home"></span></a></li>
					  <li class="breadcrumb-item">Pages</li>
					  <li class="breadcrumb-item active">Contact</li>
					</ol>
				</div>
			</div>
			<!-- end row-->
		</div>
	</section>
	<!-- END PAGE BANNER AND BREADCRUMBS -->
	
	<!-- GOOGLE MAP -->
	<div class="gmap_canvas">
		<iframe id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3539.6379620125654!2d153.0431078147224!3d-27.480528323742014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b915ba46622b07f%3A0xf3522438d871d829!2sLinda+Benn!5e0!3m2!1sen!2sin!4v1550299514020"></iframe>
		
	</div>
	<!-- END GOOGLE MAP -->
	
	<!-- START CONTACT SECTION -->
    <section id="contact" class="section-padding">
        <div class="auto-container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-12">
					<div class="contact-title">
						<h4>Get a quote</h4>
						<p>To discover the  benefits of a renewal program to restore life balance, submit the contact form below and we will promptly respond.</p>
						<hr>
					</div>
					<div class="contact-form mt-4">
						<form id="contact-form" class="form" name="enq" method="POST" action="#">
							<div class="row">
								<div class="form-group col-lg-6">
									<label>Name</label>
									<span class="form-icon"><i class="icofont icofont-user-alt-5"></i></span>
									<input name="cname" class="form-control form-controlb" id="cname" required="required" type="text">
								</div>
								<div class="form-group col-lg-6">
									<label>Email</label>
									<span class="form-icon"><i class="icofont icofont-envelope"></i></span>
									<input name="cmail" class="form-control form-controlb" id="cmail" required="required" type="email">
								</div>
								<div class="form-group col-lg-6">
									<label>Number</label>
									<span class="form-icon"><i class="icofont icofont-telephone"></i></span>
									<input name="cnumber" class="form-control form-controlb" id="cnumber" required="required" type="text">
								</div>
								<div class="form-group col-lg-6">
									<label>Subject</label>
									<span class="form-icon"><i class="icofont icofont-ui-email"></i></span>
									<input name="csubject" class="form-control form-controlb" id="csubject" required="required" type="text">
								</div>
								<div class="form-group col-lg-12">
									<label>Message</label>
									<textarea rows="6" name="cmessage" class="form-control" id="cmessage" placeholder="Your Message Here..." required="required"></textarea>
								</div>
								<div class="form-group col-lg-12 mb0">
									<div class="actions">
										<input value="Submit Message" name="submit" id="submitButton" class="btn btn-lg btn-contact-bg" title="Click here to submit your message!" type="submit">
										<img src="<?php bloginfo ('template_url'); ?>/assets/img/ajax-loader.gif" id="loader" style="display:none" alt="loading" width="16" height="16">
									</div>
								</div>	
							</div>
						</form>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-12 pl-lg-5 pl-md-5 pl-sm-2 pl-2 mt-lg-0 mt-md-0 mt-sm-3 mt-3">
					<div class="contact-title">
						<h4>Get In Touch</h4>
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, na aliqua.</p> -->
						<hr>
					</div>
					<div class="address-box mt-4">
						<div class="single-address-box mb-3">
							<span>Address:</span>
							<p>Linda Benn Brisbane QLD<br/> Australia & SF California </p>
						</div>
						<div class="single-address-box mb-3">
							<span>Phone & Fax:</span>
							<p>+61- 412-586528 </p>
							
						</div>
						<div class="single-address-box">
							<span>Inquires:</span>
							<p>linda@lindabenn.com</p>
						</div>
					</div>
					<div class="free-quote-box mt-4">
						<h6>Ask question</h6>
						<h3>Support is ready</h3>
						<p>Please choose the treatment and write what is your priority that you would like to focus on. Any questions? </p>
						<a href="#">Free quote <i class="icofont icofont-simple-right"></i></a>
					</div>
				</div>
			</div>
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END CONTACT SECTION -->
    
	<!-- SINGLE DOCTOR PROMO -->
	<div class="single-doc-promo bg-theme mt-5">
        <div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 col-12">
					<div class="single-doc-promo-box-img">
						<img class="img-fluid" src="<?php bloginfo ('template_url'); ?>/assets/images/doc-promo.png" alt="">
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-12 col-12">
					<div class="single-doc-promo-box">
						<div class="row"> 
							<div class="col-lg-9">
								<div class="single-doc-promo-content">								     
									 <p>Click here to book appointment</p>
									 <a href="https://app.acuityscheduling.com/schedule.php?owner=17451579"><i class="icofont icofont-phone"></i>+61 412 586 528</a>
								</div> 
							</div> 
							<div class="col-lg-3 mt-4">
								<a href="https://app.acuityscheduling.com/schedule.php?owner=17451579" class="single-doc-promo-btn fadeInUp animated">Contact Us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END SINGLE DOCTOR PROMO -->
	
    

<?php get_footer(); ?>