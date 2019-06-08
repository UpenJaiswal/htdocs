
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
						<?php echo form_open_multipart('admin/profile/edit/'.base64_encode($logged_in_user->id));?>
						<?php echo form_hidden('image', $logged_in_user->image); ?>
						<div class="box-body">
						<div class="row">
						<div class="col-md-6">
						<div class="form-group">
						<?php echo form_label('Profile Image');?>
						<div >
						<p> <?php if($logged_in_user->image == TRUE) {?>
						<img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('/Uploads/users/'.$logged_in_user->image);?>" alt="User profile picture">
						<?php
						}else{ ?>

						<img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('/Uploads/users/index.jpg');?>" alt="User profile picture">
						<?php } ?>
						</p>
						<?php echo form_upload(['name'=>'image', 'class'=>'form-control toosumm-padding-left toosumm-padding-left toosumm-edit-profile-file-upload']);?>
						 <span class="toosumm-box56"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
						</div>
						</div>
						</div>
						<div class="col-md-6">
						<div class="form-group">
						<?php 
						echo form_label('User Name', 'username');
						echo form_input( ['name'=>'username', 'class'=>'form-control toosumm-padding-left', 'id'=>'username', 'placeholder'=>'Enter Blog Name',  'value'=>set_value('username',$logged_in_user->username) ] );
						?>
						<span class="toosumm-box56"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
						</div>
						</div>

						<div class="col-md-6">
						<div class="form-group">
						<?php  
						echo form_label('Gender', 'gender');
						echo "<br/>";
						echo form_radio( ['name'=>'gender', 'id'=>'Male', 'value'=>'Male', 'required'=>'required', 'checked'=>(set_value('gender', $logged_in_user->gender) === 'Male' ? TRUE : FALSE) ] );
						echo "&nbsp";
						echo form_label('Male', 'Male');
						echo "&nbsp; &nbsp; &nbsp;";
						echo form_radio( ['name'=>'gender', 'id'=>'Femail', 'value'=>'Femail', 'required'=>'required', 'checked'=>(set_value('gender', $logged_in_user->gender) === 'Femail' ? TRUE : FALSE) ] );
						echo "&nbsp;";
						echo form_label('Femail', 'Femail');
						?>
						</div>
						</div>
						


						<div class="col-md-6">
                                   <div class="form-group">
                                      <?php
						         echo form_label('Date Of Birth');
                                         
						      echo form_input( ['name'=>'dob', 'class'=>'form-control toosumm-padding-left datepick', 'data-inputmask'=>"'alias':'dd/mm/yyyy'", 'data-mask', 'required'=>'required','value'=>set_value('dob', date('d-m-Y', strtotime($logged_in_user->dob))) ] );
						
                                          ?>
                                       <span class="toosumm-box56">
                                        <i class="fa fa-calendar"></i></span>
                                    </div>                      
                              </div>
						
						<div class="col-md-6">
						<div class="form-group">
						<?php 
						echo form_label('First Name', 'first_name');
						echo form_input( ['name'=>'first_name', 'class'=>'form-control toosumm-padding-left', 'id'=>'first_name', 'placeholder'=>'First Name',  'value'=>set_value('first_name',$logged_in_user->first_name) ] );
						?>
						 <span class="toosumm-box56"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
						</div>
						</div>
						<div class="col-md-6">
						<div class="form-group">
						<?php 
						echo form_label('Last Name', 'last_name');
						echo form_input( ['name'=>'last_name', 'class'=>'form-control toosumm-padding-left', 'id'=>'last_name', 'placeholder'=>'Last Name',  'value'=>set_value('last_name',$logged_in_user->last_name) ] );
						?>
						 <span class="toosumm-box56"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
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
						echo form_label('Country', 'country');
						echo form_input( ['name'=>'country', 'class'=>'form-control toosumm-padding-left', 'id'=>'country', 'placeholder'=>'Country',  'value'=>set_value('country',$logged_in_user->country) ] );
						?>
						 <span class="toosumm-box56"><i class="fa fa-globe" aria-hidden="true"></i></span>
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
						<div class="box-footer">
						<?php echo form_submit( ['class'=>'btn btn-primary btn-flat admin-profile-submit', 'value'=>'Submit'] ); ?>
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