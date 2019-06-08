<div class="container">
	    <div class="row">
	    	<?php if($this->session->flashdata('message')) { ?>
					<div class="col-md-12">
					<div class="alert <?php echo $this->session->flashdata('class'); ?> alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<i class="icon fa fa-check"></i> <?php echo $this->session->flashdata('main_message'); ?>
					<?php echo $this->session->flashdata('message'); ?>
					</div>
					</div>
					<?php } ?>
		    <div class="col-md-12">
			    <h1 class="profile-heading1">Profile Details</h1>
				<ul class="profile-details">
				    <li class="first active"><a href="<?php echo base_url('besic-profile/'.base64_encode($logged_in_user->id)) ?>">Basic</a></li>
					<li class="second"><a href="<?php echo base_url('advance-profile/'.base64_encode($logged_in_user->id)) ?>">Advance</a></li>
				</ul>
				<a href="<?php echo base_url('workroom/workroom/individual_team/'.base64_encode($logged_in_user->id)) ?>" class="view-my-profile">View my profile as others see it</a>
			</div>
		</div>
	</div>
	
	<div class="toosum-section">
	    <div class="container">
		    <div class="row">
			    <div class="col-md-3">
				    <div class="team-profile-grid sidebar-marginbottom">
						

						<div class="team-profile1">
						<?php 
						if($logged_in_user->image == TRUE) {?>
						<img class="team-profile-pic border1px" src="<?php echo base_url('/Uploads/users/'.$logged_in_user->image);?>" alt="User profile picture">
						<?php
						}else{ ?>

						<img class="team-profile-pic border1px" src="<?php echo base_url('/Uploads/users/index.jpg');?>" alt="User profile picture">
						<?php } ?>
						</div>
						<div class="team-firstname">
						    <a href="#" class="team-name-color">
							<?php echo $logged_in_user->first_name ?></a>
						</div>
						<div class="team-lastname">
						    <a href="#" class="team-name-color"> </span>
							<?php echo $logged_in_user->last_name ?></a>
						</div>
					<?php if (!empty($reach_us)) {?>
							<div class="team-attach-portfolio">
							<a href="#" class="team-profile-color"><span class="team-icon45"> <i class="fa fa-envelope-o" aria-hidden="true"></i>
							</span><?php echo $reach_us->mail; ?>
							</a>
							</div>
							<div class="team-attach-link">
							<a href="#" class="team-profile-color"><span class="team-icon45"> <i class="fa fa-skype" aria-hidden="true"></i></span>
							<?php echo $reach_us->skype; ?></a>
							</div>
							<div class="team-personal-webpage">
							<a href="#" class="team-profile-color"><span class="team-icon45"> <i class="fa fa-phone" aria-hidden="true"></i></span>
							<?php echo $reach_us->phone; ?></a>
							</div>
                                <?php  
                           }else {
                           	    echo '	<div class="team-attach-portfolio">
		<a href="#" class="team-profile-color"><span class="team-icon45"> <i class="fa fa-envelope-o" aria-hidden="true"></i>
		</span>mail
		</a>
		</div>
		<div class="team-attach-link">
		<a href="#" class="team-profile-color"><span class="team-icon45"> <i class="fa fa-skype" aria-hidden="true"></i></span>
		skype</a>
		</div>
		<div class="team-personal-webpage">
		<a href="#" class="team-profile-color"><span class="team-icon45"> <i class="fa fa-phone" aria-hidden="true"></i></span>
		phone</a>
		</div>';
                           } ?>
						
				    </div>
					
				</div>
				 
				<div class="col-md-9">
				    <div class="toosum-social-accounts">
					    <h5>General Information</h5>
					</div>
					<div class="row basic-profile75">
					    <div class="col-md-3">
						     <div class="custom-control custom-radio">
                           <?php                              
                           if ($logged_in_user->gender === 'Male' ) {    
                       echo '<div class="custom-control custom-radio">';
						echo form_radio( ['name'=>'gender', 'id'=>'Male', 'value'=>'Male', 'required'=>'required', 'checked'=>(set_value('gender', $logged_in_user->gender) === 'Male' ? TRUE : FALSE) ] );echo "&nbsp;";
						echo form_label('Male', 'Male');
                        echo '</div>';

						echo '<div class="custom-control custom-radio">
							  <input type="radio" class="custom-control-input" id="defaultGroupExample2" name="groupOfDefaultRadios" disabled>
							  <label class="custom-control-label" for="defaultGroupExample2">Female</label>
							</div>';

					   }else { 

					   	echo '<div class="custom-control custom-radio">
							  <input type="radio" class="custom-control-input" id="defaultGroupExample2" name="groupOfDefaultRadios" disabled>
							  <label class="custom-control-label" for="defaultGroupExample2">Male</label>
							</div>';
							 echo '<div class="custom-control custom-radio">';
						echo form_radio( ['name'=>'gender', 'id'=>'Femail', 'value'=>'Femail', 'required'=>'required', 'checked'=>(set_value('gender', $logged_in_user->gender) === 'Femail' ? TRUE : FALSE) ] );
						echo "&nbsp;";
						echo form_label('Femail', 'Femail');
                         echo '</div>';
						
						} ?>							  
						</div>
						</div>
						<div class="col-md-3">
							<?php 
                            if ($logged_in_user->dob) {?>                             

                            	<div class="show-date1"><?php echo date('d/m/Y', strtotime($logged_in_user->dob)); ?>
                            	</div>
                            	<label>Date of birth </label>
                           <?php }
                           else { 
                            	echo 'hii'; exit();                            	
                            }
							 ?>
						     
						</div>
						<div class="col-md-3">
							<?php 
                            if ($logged_in_user->country) {?>                    
                            	<div class="show-date1"><?php echo $logged_in_user->country; ?>
                            	</div>
                            	<label> Country </label>
                           <?php }
                           else { 

                            	echo '<div class="show-date1"> Update country
                            	</div> <label>Update country </label>';

                            } ?>
						     
						</div>
						<div class="col-md-3">
							<?php 
                            if ($logged_in_user->city) {?>                    
                            	<div class="show-date1"><?php echo $logged_in_user->city; ?>
                            	</div>
                            	<label> City </label>
                           <?php }
                           else { 
                            	echo '<div class="show-date1"> Update City
                            	</div> <label>Update City </label>';                    	
                            } ?>
						     
						</div>
					</div>
					
					
					<div class="toosum-social-accounts">
					    <h5>Setting</h5>
					</div>
					<div class="row basic-profile75">					    
						
						<div class="col-md-4">
						    <select class="select-country">
							    <option>English</option>
								<option>Spanish</option>
								<option>Arebic</option>
								<option>French</option>
							</select>
							<label>Site Language</label>
						</div>
						<div class="col-md-8">
							<div class="row">
								<div class="col-md-6  col-md-offset-6">
                                <?php if (!empty($reach_us)) {?>
                                	<div class="team-attach-link linkdin-margin">
									    <a href="<?php echo $reach_us->linkdien;?>" target="_blank" class="team-profile-color">
									    	<span class="team-icon45"> 
									    		<i class="fa fa-linkedin" aria-hidden="true"></i>
			                               </span>Connect with Linkedin</a>
						           </div>
                                <?php  
                           }else {
                           	    echo '	<div class="team-attach-link linkdin-margin">
									    <a href="" class="team-profile-color">
									    	<span class="team-icon45"> 
									    		<i class="fa fa-linkedin" aria-hidden="true"></i>
			                               </span>Connect with Linkedin</a>
						           </div>';
                           } ?>

									
								</div>
							</div>
						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
