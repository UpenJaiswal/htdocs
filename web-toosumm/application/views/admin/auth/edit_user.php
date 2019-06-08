
	<section class="content-header">
		<h1>
			Edit Company
			<small>Please enter the company's information below.</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>			
		</ol>
	</section>
    <!-- Main content -->
    <section class="content">
		<div class="row">
			<div class="col-md-2"></div>
		<!-- left column -->
			<div class="col-md-8 col-md-offset-0">
			<!-- general form elements -->
				<div class="box box-primary toosumm-margin69">
					<div class="box-header with-border">
						<h3 class="box-title"><?php echo $message;?></h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<?php echo form_open(uri_string());?>
						<div class="box-body">
							<div class="row">
								<!-- <div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputEmail1">First Name</label>
										<?php echo form_input($first_name);?>
									</div>
								</div> -->
								<!-- <div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputPassword1">Last Name</label>
										<?php echo form_input($last_name);?>
									</div>
								</div> -->
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputPassword1">Company Name</label>
										<?php echo form_input($company);?>
										<span class="toosumm-box56"><i class="fa fa-briefcase" aria-hidden="true"></i></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputPassword1">Phone</label>
										<?php echo form_input($phone);?>
										<span class="toosumm-box56"><i class="fa fa-phone-square" aria-hidden="true"></i></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputPassword1">Password</label>
										<?php echo form_input($password);?>
										<span class="toosumm-box56"><i class="fa fa-unlock" aria-hidden="true"></i></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputPassword1">Confirm Password</label>
										<?php echo form_input($password_confirm);?>
										<span class="toosumm-box56"><i class="fa fa-unlock" aria-hidden="true"></i></span>
									</div>
								</div>
								<div class="col-md-6">
									<?php if ($this->ion_auth->is_admin())
										{ ?>

										<h3><?php echo lang('edit_user_groups_heading');?></h3>
										<div class="checkbox">
											<?php foreach ($groups as $group) {?>
											  <label >
											  <?php
											      $gID=$group['id'];
											      $checked = null;
											      $item = null;
											      foreach($currentGroups as $grp) 
											      {
											          if ($gID == $grp->id) {
											              $checked= ' checked="checked"';
											          break;
											          }
											      }
											  ?>
											  <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
											  <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
											  </label>
											<?php }?>
										</div>
										<?php } ?>
								</div>
								<div class="col-md-6">
									<div class="box-footer">
										<?php echo form_hidden('id', $user->id);?>
									    <?php echo form_hidden($csrf); ?>		

										<?php echo form_submit( ['name'=>'submit', 'class'=>'btn btn-primary btn-flat', 'value'=>'Submit'] ); ?>
									</div>
								<?php echo form_close();?>
								</div>
							</div>
						</div>		
				</div>	<!-- /.box -->
			</div> 
			</div>
			<div class="col-md-2"></div>       
		</div>
      	<!-- /.row -->
    </section>
    <!-- /.content-->