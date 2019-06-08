<?php //echo base_url('assets/'); ?>
    <!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                 <title>Company | Log in</title>
                <!-- Tell the browser to be responsive to screen width -->
                <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
                <!-- Bootstrap 3.3.7 -->
                <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
                <!-- Font Awesome -->
                <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>bower_components/font-awesome/css/font-awesome.min.css">
                <!-- Ionicons -->
                <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>bower_components/Ionicons/css/ionicons.min.css">
                <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>bower_components/bootstrap/dist/css/layout.css">
                <!-- Theme style -->
                <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>dist/css/AdminLTE.min.css">
                <!-- iCheck -->
                <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>plugins/iCheck/square/blue.css">

                <!-- Google Font -->
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
            </head>

                    <body class="hold-transition login-page">
                    <div class="login-box toosum-login-form">
                    <div class="login-logo">
                        <img class="admin_logo toosum-login-img" src=" <?php echo base_url('Uploads/loader.png');?>">
                          <!--  <a href="<?php echo base_url('assets/'); ?>"><b>Login</b>panel</a> -->
                    </div>
                    <!-- /.login-logo -->
                    <div class="login-box-body">
                        <a href="<?php echo base_url('assets/'); ?>" class="toosum-login-panel"><b>Company</b>panel</a>
                    <!-- <p class="login-box-msg">Sign in to start your session</p> -->
                    <?php if (isset($message) || $message = $this->session->flashdata('message')) { ?>
                    <div class="<?php echo $this->session->flashdata('class'); ?> alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo $message; ?>    
                    </div>
                    <?php } ?>

                    <?php echo form_open("company");
                      echo form_hidden('name','admin');
                     ?>
                    <div class="form-group has-feedback">
                    <?php echo form_label('Email:','email')?>
                    <?php echo form_input($identity);?>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                    <?php echo lang('login_password_label', 'password');?>
                    <?php echo form_password($password);?>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>

                    <div class="row">
                    <div class="col-xs-8">
                    <div class="checkbox icheck">
                    <label>
                    <?php echo form_checkbox(['name'=>'remember', 'value'=>'1', 'id'=>'remember']);?> Remember Me
                    </label>
                    </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                    <?php echo form_submit('submit', lang('login_submit_btn'), ['class'=>'btn btn-primary btn-block btn-flat']);?>
                    </div>
                    <!-- /.col -->
                    </div>
                    <?php echo form_close();?>
                    <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
                    Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-social btn-google btn-flat">
                    <i class="fa fa-google-plus"></i> Sign in using Google+</a>
                    </div>
                    <a href="<?php echo base_url('company/forgot-password') ?>">I forgot my password</a><br>
                   <!--  <a href="<?php echo base_url('admin/register') ?>" class="text-center">Register a new membership</a> -->
                    <!-- <a href="<?php echo base_url('admin/auth/register') ?>" class="text-center">Register a new membership</a>
                    -->        </div>
                    <!-- /.login-box-body -->
                    </div>
                    <!-- /.login-box -->

                    <!-- jQuery 3 -->
                    <script src="<?php echo base_url('assets/'); ?>bower_components/jquery/dist/jquery.min.js"></script>
                    <!-- Bootstrap 3.3.7 -->
                    <script src="<?php echo base_url('assets/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
                    <!-- iCheck -->
                    <script src="<?php echo base_url('assets/'); ?>plugins/iCheck/icheck.min.js"></script>

                    <script>
                    $(function () {
                    $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' /* optional */
                    });
                    });
                    </script>
                    <script >
                    // alert dismissal
                    setTimeout(function(){
                    $('.alert').slideUp();
                    }, 4000); 
                    </script>
                    </body>
    </html>
