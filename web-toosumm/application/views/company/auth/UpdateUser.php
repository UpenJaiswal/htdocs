
					<section class="content-header">
				       <h1>
				      Update Profile 
				      <small>Please enter the profile 's information below.</small>
				    </h1>
				    </section>
				    <br><br>
						<?php
						if(!null==validation_errors()){?>
						<div class="alert alert-danger">
						<strong><?php echo validation_errors();?></strong>
						</div>
						<?php }?>

						<!-- Main content -->
						<section class="content">
						<div class="row">
						<div class="col-md-2"></div>
						<!-- left column -->
						<div class="col-md-8">

					  <?php if($this->session->flashdata('message')) { ?>
					    
					      <div class="alert <?php echo $this->session->flashdata('class'); ?> alert-dismissible">
					        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					       <i class="icon fa fa-check"></i> <?php echo $this->session->flashdata('main_message'); ?>
					        <?php echo $this->session->flashdata('message'); ?>
					      </div>
					    
					    
					    <?php } ?>
						<!-- general form elements -->
						<div class="box box-primary">
						<div class="box-header with-border">
						
						</div>
						<?php echo form_open_multipart('company/profile/edit/'.base64_encode($logged_in_user->id));?>
						<?php echo form_hidden('image', $logged_in_user->image); ?>
						<div class="box-body">
						<div class="row">
						<div class="col-md-6">
						<div class="form-group">
						<?php echo form_label('Profile Image');?>
						<div >
						<p> <?php if($logged_in_user->image == TRUE) {?>
						<img class="profile-user-img img-responsive img-circle toosumm-update-profile" src="<?php echo base_url('/Uploads/users/'.$logged_in_user->image);?>" alt="User profile picture">
						<?php
						}else{ ?>

						<img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('/Uploads/users/index.jpg');?>" alt="User profile picture">
						<?php } ?>
						</p>
						<?php echo form_upload(['name'=>'image', 'class'=>'form-control toosumm-padding-left toosumm-padding-left toosumm-padding-left toosumm-edit-profile-file-upload']);?>
						 <span class="toosumm-box56"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
						</div>
						</div>
						</div>
						
						
						
						<div class="col-md-6">
						<div class="form-group">
						<?php 
						echo form_label('Company Name', 'company');
						echo form_input( ['name'=>'company', 'class'=>'form-control toosumm-padding-left', 'id'=>'company', 'placeholder'=>'Company Name',  'value'=>set_value('company',$logged_in_user->company) ] );
						?>
						<span class="toosumm-box56"><i class="fa fa-briefcase" aria-hidden="true"></i></span>
						</div>
						</div>
						<div class="col-md-6">
						<div class="form-group">
						<?php 
						echo form_label('Phone Number', 'phone');
						echo form_input( ['name'=>'phone', 'class'=>'form-control toosumm-padding-left', 'onkeypress'=>'return isNumberKey(event)', 'placeholder'=>'Phone Number',  'value'=>set_value('phone',$logged_in_user->phone) ] );
						?>
						  <span class="toosumm-box56"><i class="fa fa-phone-square" aria-hidden="true"></i></span>
						</div>
						</div>
						<div class="col-md-6">
						<div class="form-group">
						<?php 
						echo form_label('About Us', 'about_us');
						echo form_input( ['name'=>'about_us', 'class'=>'form-control toosumm-padding-left', 'id'=>'about_us', 'placeholder'=>'About Us',  'value'=>set_value('about_us',$logged_in_user->about_us) ] );
						?>
						  <span class="toosumm-box56"><i class="fa fa-tasks" aria-hidden="true"></i></span>
						</div>
						</div>
						<div class="col-md-6">
						<div class="form-group">
						<?php 
						echo form_label('City', 'city');
						echo form_input( ['name'=>'city', 'class'=>'form-control toosumm-padding-left', 'id'=>'city', 'placeholder'=>'City', 'value'=>set_value('city',$logged_in_user->city) ] );
						?>
						  <span class="toosumm-box56"><i class="fa fa-globe" aria-hidden="true"></i></span>
						</div>
						</div>
						<div class="col-md-6">
						<div class="form-group">
						<?php 
						echo form_label('Country', 'country');
						echo form_input( ['name'=>'country', 'class'=>'form-control toosumm-padding-left', 'id'=>'country', 'placeholder'=>'Country',  'value'=>set_value('country',$logged_in_user->country) ] );
						?>
						  <span class="toosumm-box56"><i class="fa fa-globe" aria-hidden="true"></i></span>
						</div>
						</div>
						
						<div class="col-md-6">
						<div class="box-footer">
						<?php echo form_submit( ['class'=>'btn btn-primary btn-flat', 'value'=>'Submit'] ); ?>
						</div>
						<?php echo form_close();?>
						</div>
						</div>
						</div>
						</div>
						</div> 
						</div>
						<div class="col-md-2"></div>       
						</div>
						</section>
						<!-- /.content