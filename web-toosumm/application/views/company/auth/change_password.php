<!-- Content Header (Page header) -->
	<section class="content-header">
		  <h1>
      Change Password
      <small>Please enter the password's information below.</small>
    </h1>
	</section>

    <!-- Main content -->
    <section class="content">
		<div class="row">
		<!-- left column -->
		 <div class="col-md-6 col-md-offset-3">
		 	<br>
                <?php if (isset($message) || $message = $this->session->flashdata('message')) {?>
                   <div class="<?php echo $this->session->flashdata('class'); ?> alert-dismissible">
                     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                   <?php echo $message; ?>    
                   </div>
               <?php } ?>
			<!-- general form elements -->
				<div class="box box-primary toosumm-margin69">
					<!-- /.box-header -->
					<!-- form start -->
					<?php echo form_open("company/change-password");?>
						<div class="box-body">
							<div class="form-group">
								<label for="exampleInputEmail1">Old Password</label>
								<?php echo form_input($old_password);?>
								<span class="toosumm-box56"><i class="fa fa-unlock" aria-hidden="true"></i></span>
							</div>

							<div class="form-group">
								<label for="exampleInputPassword1">New Password</label>
								<?php echo form_input($new_password);?>
								<span class="toosumm-box56"><i class="fa fa-unlock" aria-hidden="true"></i></span>
							</div>

							<div class="form-group">
								<label for="exampleInputPassword1">Confirm New Password</label>
								<?php echo form_input($new_password_confirm);?>
								<span class="toosumm-box56"><i class="fa fa-unlock" aria-hidden="true"></i></span>
							</div>
							
							
						</div>
						<!-- /.box-body -->
						<div class="box-footer">
							<?php echo form_input($user_id);?>
							
							<?php echo form_submit( ['name'=>'submit', 'class'=>'btn btn-primary btn-flat', 'value'=>'Submit'] ); ?>
						</div>
					<?php echo form_close();?>
				</div>
				<!-- /.box -->
			</div>        
		</div>
      	<!-- /.row -->
    </section>
    <!-- /.content -->