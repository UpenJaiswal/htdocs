<section class="login-section" style="background:  url(<?php echo base_url('assets/web_assets/images/bg/12.jpg'); ?>) no-repeat; background-size: cover;">
<div class="overlay"></div>
<div class="container">
<div class="row">
	<div class="col-md-6">
		<?php if (isset($message) || $message = $this->session->flashdata('message')) {?>
                   <div class="iq-forgot <?php echo $this->session->flashdata('class'); ?> alert-dismissible">
                     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                   <?php echo $message; ?>    
                   </div>
               <?php } ?>
	</div>
<div class="col-md-6">
<div class="login-text  iq-forgot">
<h1>Forgot Password?</h1>
  
<p>Enter your email address and we'll send you instructions on how to reset your password.</p>
 <?php echo form_open("forgot-password");?>
<div class="row">
<div class="col-md-12">
<div class="form-group has-feedback">
 <?php echo form_label('Email:','email')?>
  <?php echo form_input(['name'=>'identity', 'class'=>'form-control', 'placeholder'=>'Enter the registerd email id']);?>
 </div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="text-center">
<?php echo form_submit('Continue', lang('forgot_password_submit_btn'), ['class'=>'button']);?>
</div>
</div>
</div>
<?php echo form_close();?>
</div>
</div>
</div>
</div>

</section>