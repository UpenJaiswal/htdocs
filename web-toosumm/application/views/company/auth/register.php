
    <!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <title>Admin | Register</title>
                <!-- Tell the browser to be responsive to screen width -->
                <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
                <!-- Bootstrap 3.3.7 -->
                <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
                <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>bower_components/bootstrap/dist/css/layout.css">
                <!-- Font Awesome -->
                <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>bower_components/font-awesome/css/font-awesome.min.css">
                <!-- Ionicons -->
                <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>bower_components/Ionicons/css/ionicons.min.css">
                <!-- Theme style -->
                <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>dist/css/AdminLTE.min.css">
                <!-- iCheck -->
                <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>plugins/iCheck/square/blue.css">

                <!-- Google Font -->
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
            </head>

            <body class="hold-transition login-page">
                <div class="register-box toosum-admin-register">
  <div class="register-logo toosumm-register-logo">
   <!-- <img class="admin_logo" src=" <?php echo base_url('Uploads/logo.png');?>"> -->
    <a href="#"><b>Register</b>Panel</a>
  </div>

  <div class="register-box-body">
    <?php if (isset($message) || $message = $this->session->flashdata('message')) {?>
                   <div class="<?php echo $this->session->flashdata('class'); ?> alert-dismissible">
                     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                   <?php echo $message; ?>    
                   </div>
               <?php } ?>
    <p class="login-box-msg">Register a new membership</p>

    <!-- <form action="../../index.html" method="post"> -->
        <?php echo form_open_multipart("admin/register");?>
        <div class="row">
           <div class="col-md-6">
             <div class="form-group has-feedback">
               <label for="exampleInputEmail1">First Name</label>
                <?php echo form_input($first_name);?>
                 <span class="glyphicon glyphicon-user form-control-feedback"></span>              
             </div>
           </div>
           <div class="col-md-6">
             <div class="form-group has-feedback">
                 <label for="exampleInputEmail1">Last Name</label>
                <?php echo form_input($last_name);?>
                 <span class="glyphicon glyphicon-user form-control-feedback"></span>              
              </div>
           </div>
           <div class="col-md-6">
             <div class="form-group has-feedback">
               <label for="exampleInputEmail1">Phone</label>
                <?php echo form_input($phone);?>
                 <span class="glyphicon glyphicon-phone form-control-feedback"></span>
             </div>
           </div>
           <div class="col-md-6">
             <div class="form-group has-feedback">
               <label for="exampleInputEmail1">Email</label>
                <?php echo form_input($email);?>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
             </div>
           </div>
           
           <div class="col-md-6">
             <div class="form-group has-feedback">
               <label for="exampleInputEmail1">Password</label>
                <?php echo form_input($password);?>
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
             </div>
           </div>
           <div class="col-md-6">
             <div class="form-group has-feedback">
               <label for="exampleInputEmail1">Confirm Password</label>
                <?php echo form_input($password_confirm);?>
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
             </div>
           </div>
           <div class="col-md-12">
             <div class="form-group has-feedback">
               <label for="exampleInputEmail1">Company Name</label>
                <?php echo form_input($company);?>
                 <span class="glyphicon glyphicon-briefcase form-control-feedback"></span>
             </div>
           </div>
           
        </div>

        

       
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
        
      
      <div class="row">
    
        <!-- /.col -->
        <div class="col-xs-4 flot-right ">
            <?php echo form_submit( ['name'=>'submit', 'class'=>'btn btn-primary btn-block btn-flat', 'value'=>'Start Now!'] ); ?>
        </div>
        <!-- /.col -->
      </div>
    <?php echo form_close();?>
   <div class="row toosumm-social-margin">
       <div class="col-md-6">
         <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      </div>
       <div class="col-md-6">
         <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
       </div>
   </div>
    

    <a href="<?php echo base_url('admin') ?>" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.login-box -->
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
                </script>
                <script >
                    // alert dismissal
    setTimeout(function(){
      $('.alert').slideUp();
    }, 4000); 
                </script>
            </body>
    </html>
