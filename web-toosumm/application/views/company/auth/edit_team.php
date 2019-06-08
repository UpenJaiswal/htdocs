
	<section class="content-header">
		<h1>
			Edit Team Member 
			<small>Please enter the team member's information below.</small>
		</h1>    
	</section>

    <!-- Main content -->
    <section class="content">
		<div class="row">
			<div class="col-md-2"></div>

		<!-- left column -->
			<div class="col-md-8">
				<?php
						if(!null==validation_errors()){?>
						<div class="alert alert-danger">
						<strong><?php echo validation_errors();?></strong>
						</div>
						<?php }?>
			<!-- general form elements -->
				<div class="box box-primary toosumm-margin69">
					<div class="box-header with-border">
            </div>
					
					
					<?php echo form_open('company/auth/edit_team/'.base64_encode($team->id));?>
						<div class="box-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									<?php 
									echo form_label('First Name', 'first_name');
									echo form_input( ['name'=>'first_name', 'class'=>'form-control toosumm-padding-left', 'id'=>'first_name', 'placeholder'=>'Enter First Name',  'value'=>set_value('first_name',$team->first_name) ] );
									?>
									<span class="toosumm-box56"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									<?php 
									echo form_label('Last Name', 'last_name');
									echo form_input( ['name'=>'last_name', 'class'=>'form-control toosumm-padding-left', 'id'=>'last_name', 'placeholder'=>'Enter Last Name',  'value'=>set_value('last_name',$team->last_name) ] );
									?>
									<span class="toosumm-box56"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
									</div>
								</div>
								<div class="col-md-6">
                                   <div class="form-group">
									<?php 
									echo form_label('Company Name', 'company');
									echo form_input( ['name'=>'company', 'class'=>'form-control toosumm-padding-left', 'id'=>'company', 'placeholder'=>'Enter Company Name',  'value'=>set_value('company',$team->company) ] );
									?>
									<span class="toosumm-box56"><i class="fa fa-briefcase" aria-hidden="true"></i></span>
									</div>
								</div>
								<div class="col-md-6">
									 <div class="form-group">
									<?php 
									echo form_label('Phone', 'phone');
									echo form_input( ['name'=>'phone', 'class'=>'form-control toosumm-padding-left', 'id'=>'phone', 'placeholder'=>' phone ',  'value'=>set_value('phone',$team->phone) ] );
									?>
									<span class="toosumm-box56"><i class="fa fa-phone-square" aria-hidden="true"></i></span>
									</div>
								</div>

								

								<div class="col-md-6">
									<div class="form-group">
					                   <label>Select Role</label>
					                  <select name="team_role_id" class="form-control toosumm-padding-left select2">
					                  <?php foreach ($role_list as $value) { ?>
					                  <option <?php if($value->id == "$team->team_role_id"){ echo 'selected="selected"'; } ?> value="<?php echo $value->id ?>"><?php echo $value->role_name?> </option>
					                  <?php } ?>
					                  </select>
					                  <span class="toosumm-box56"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
					                </div>
								</div>
                                 <div class="col-md-6">
									<div class="form-group">
					                   <label>Select Project</label>
					                  <select name="project_id" class="form-control toosumm-padding-left select2">
					                  <?php foreach ($project_list as $value) { ?>
					                  <option <?php if($value->id == "$team->project_id"){ echo 'selected="selected"'; } ?> value="<?php echo $value->id ?>"><?php echo $value->project_name ?> </option>
					                  <?php } ?>
					                  </select>
					                  <span class="toosumm-box56"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
					                </div>
								</div>
								<div class="col-md-12">
									<div class="box-footer">
												

										<?php echo form_submit( [ 'class'=>'btn btn-primary btn-flat', 'value'=>'Submit'] ); ?>
									</div>
								<?php echo form_close();?>
								</div>
							</div>
						</div>
					
				</div>
				<!-- /.box -->
			</div> 
			</div>
			<div class="col-md-2"></div>       
		</div>
      	<!-- /.row -->
    </section>
    <!-- /.content