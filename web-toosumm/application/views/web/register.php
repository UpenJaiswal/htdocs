<section class="login-section" style="background:  url(<?php echo base_url('assets/web_assets/images/bg/01.jpg'); ?>) no-repeat; background-size: cover;">
<div class="overlay"></div>
<div class="container">
<div class="row ">
  <div class="col-md-6">
     <?php if (isset($message) || $message = $this->session->flashdata('message')) {?>
                   <div class="iq-login <?php echo $this->session->flashdata('class'); ?> alert-dismissible">
                     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                   <?php echo $message; ?>    
                   </div>
               <?php } ?>
  </div>
<div class="col-md-6">
<div class="login-text iq-login">
<h1>Sign Up</h1>

<p>Good to see you again!</p>
<ul class="iq-media-blog mt-10 mb-10">
<li><a href="# "><i class="fa fa-facebook "></i></a></li>
<li><a href="# "><i class="fa fa-linkedin "></i></a></li>
</ul>
  <?php echo form_open("register");?>
<div class="row">
<div class="col-md-6">
<div class="form-group has-feedback">
 <?php echo form_input($first_name);?>
</div>
</div>
<div class="col-md-6">
<div class="form-group has-feedback">
  <?php echo form_input($last_name);?>
 </div>
</div>
<div class="col-md-6">
<div class="form-group has-feedback">
  <?php echo form_input($phone);?>
</div>
</div>
<div class="col-md-6">
	 <?php
             if($identity_column!=='email')
                {
                echo '<p>';
                echo lang('create_user_identity_label', 'identity');
                echo '<br />';
                echo form_error('identity');
                echo form_input($identity);
                echo '</p>';
                }
                ?>    
<div class="form-group has-feedback">
  <?php echo form_input($email);?>
 </div>
</div>
<div class="col-md-6">
<div class="form-group has-feedback">
  <?php echo form_input($password);?>
</div>
</div>
<div class="col-md-6">
<div class="form-group has-feedback">
   <?php echo form_input($password_confirm);?>
</div>
</div>
<div class="col-md-6">
<div class="form-group has-feedback">
   <?php echo form_input($company);?>
</div>
</div>
<div class="col-md-6">
<div class="form-group has-feedback">
   <?php echo form_input($about_us);?>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="text-center">
	 <?php echo form_submit( ['name'=>'submit','class'=>'button', 'value'=>'Strat Now!'] ); ?>
<!-- <button type="submit" class="button">Start Now!</button>
 --></div>
</div>
<div class="col-sm-6">
<div class="">
<a href="<?php echo base_url('login') ?>" class="iq-font-white">I already have a membership</a><br>
</div>
</div> 
</div>

 <?php echo form_close();?>

</div>
</div>
</div>
</div>

</section>