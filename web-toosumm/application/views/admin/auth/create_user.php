
	<section class="content-header">
		<h1>
			Create Company
			<small>Please enter the company's information below.</small>
		</h1>  
	</section>

    <!-- Main content -->
    <section class="content">
		<div class="row">
		<!-- left column -->
			<div class="col-md-6 col-md-offset-3">
			<!-- general form elements -->
				<div class="box box-primary toosumm-margin69">
					<br>
					<?php if (isset($message) || $message = $this->session->flashdata('message')) {?>
                   <div class="<?php echo $this->session->flashdata('class'); ?> alert-dismissible">
                     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                   <?php echo $message; ?>    
                   </div>
               <?php } ?>
					<!-- /.box-header -->
					<!-- form start -->
					<?php echo form_open("admin/users/create");?>
						<div class="box-body">
							<!-- <div class="form-group">
								<label for="exampleInputEmail1">First Name</label>
								<?php //echo form_input($first_name);?>
							</div> -->

							<!-- <div class="form-group">
								<label for="exampleInputPassword1">Last Name</label>
								<?php //echo form_input($last_name);?>
							</div> -->

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

							<div class="form-group">
								<label for="exampleInputPassword1">Company Name</label>
								<?php echo form_input($company);?>
								<span class="toosumm-box56"><i class="fa fa-briefcase" aria-hidden="true"></i></span>
							</div>

							<div class="form-group">
								<label for="exampleInputPassword1">Email</label>
								<?php echo form_input($email);?>
								<span class="toosumm-box56"><i class="fa fa-envelope" aria-hidden="true"></i></span>
							</div>

							<div class="form-group">
								<label for="exampleInputPassword1">Phone</label>
								<?php echo form_input($phone);?>
								<span class="toosumm-box56"><i class="fa fa-phone-square" aria-hidden="true"></i></span>
							</div>

							<div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<?php echo form_input($password);?>
								<span class="toosumm-box56"><i class="fa fa-unlock" aria-hidden="true"></i></span>
							</div>

							<div class="form-group">
								<label for="exampleInputPassword1">Confirm Password</label>
								<?php echo form_input($password_confirm);?>
								<span class="toosumm-box56"><i class="fa fa-unlock" aria-hidden="true"></i></span>
							</div>


							
							
						</div>
						<!-- /.box-body -->
						<div class="box-footer">
							
							<?php echo form_submit( ['name'=>'submit', 'class'=>'btn btn-primary btn-flat', 'value'=>'Submit'] ); ?>
						</div>
					<?php echo form_close();?>
				</div>
				<!-- /.box -->
			</div>        
		</div>
      	<!-- /.row -->
    </section>
    <!-- /.content--->
