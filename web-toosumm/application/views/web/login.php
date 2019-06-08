<!--  <section class="login-section" style="background: url(images/bg/12.jpg) no-repeat; background-size: cover;"> -->
 	 <section class="login-section" style="background:  url(<?php echo base_url('assets/web_assets/images/bg/12.jpg'); ?>) no-repeat; background-size: cover;">  
<div class="overlay"></div>
<div class="container">
<div class="row">
<div class="col-md-6">
  <?php if (isset($message) || $message = $this->session->flashdata('message')) { ?>
                    <div class="iq-forgot <?php echo $this->session->flashdata('class'); ?> alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo $message; ?>    
                    </div>
                    <?php } ?>
</div>
<div class="col-md-6">
<div class="login-text iq-forgot">
<h1>Sign In</h1>
 
<p>Good to see you again!</p>
<ul class="iq-media-blog mt-10 mb-10">
<li><a href="# "><i class="fa fa-facebook "></i></a></li>
<li><a href="# "><i class="fa fa-linkedin "></i></a></li>
</ul>
<?php echo form_open("login");
      echo form_hidden('name', 'web');
?>

<div class="row">
  <div class="col-md-6">
<div class="form-group">
   <?php //echo form_label('Email:','email')?>
   <?php echo form_input($identity);?>
  
 </div>
</div>
<div class="col-md-6">
 <div class="form-group">
   <?php //echo lang('login_password_label', 'password');?>
   <?php echo form_password($password);?>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="">
<a href="<?php echo base_url('forgot-password') ?>" class="iq-font-white">Forgot Password ?</a><br>
<a href="<?php echo base_url('register') ?>" class="iq-font-white">Register a new membership</a>
</div>
</div>
<div class="col-sm-6">
<div class="text-center">
  <?php echo form_submit( ['class'=>'button', 'value'=>'Login'] ); ?>
</div>
</div>
</div>
 <?php echo form_close(); ?>  
</div>
</div>
</div>
</div>

</section>