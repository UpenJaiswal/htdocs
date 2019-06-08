
<?php //echo base_url('assets/'); ?>
    <!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <title>Toosumm | Forgot Password</title>
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
                 <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>bower_components/bootstrap/dist/css/layout.css">

                <!-- Google Font -->
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
            </head>

            <body class="hold-transition login-page">
                <div class="login-box">
                    <div class="login-logo">
                        <img class="admin_logo toosum-login-img" src=" <?php echo base_url('Uploads/loader.png');?>">
                        
                    </div>
                    <!-- /.login-logo -->
                    <div class="login-box-body">
                        <a href="#" class="toosum-login-panel"><b>Forgot</b>Password</a>
                  <!-- <p class="login-box-msg">Enter the registerd email id</p> -->
                <?php if (isset($message) || $message = $this->session->flashdata('message')) {?>
                   <div class="<?php echo $this->session->flashdata('class'); ?> alert-dismissible">
                     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                   <?php echo $message; ?>    
                   </div>
               <?php } ?>

                        <?php echo form_open("admin/forgot-password");?>
                            <div class="form-group has-feedback">
                                <?php echo lang('login_identity_label', 'identity');?>
                                <?php echo form_input(['name'=>'identity', 'class'=>'form-control', 'placeholder'=>'Enter the registerd email id']);?>
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            </div>
                            

                            <div class="row">
                                
                                <!-- /.col -->
                                <div class="col-xs-4">
                                    <!-- <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button> -->
                                    <?php echo form_submit('submit', lang('forgot_password_submit_btn'), ['class'=>'btn btn-primary btn-block btn-flat']);?>
                                </div>
                                <!-- /.col -->
                            </div>
                        <?php echo form_close();?>

                            
                            <!-- /.social-auth-links -->

                    </div>
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
                       // alert dismissal
    setTimeout(function(){
      $('.alert').slideUp();
    }, 4000);

                </script>
            </body>
    </html>
