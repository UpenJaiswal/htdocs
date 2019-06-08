/<div class="container">
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
				    <li class="first"><a href="<?php echo base_url('besic-profile/'.base64_encode($logged_in_user->id)) ?>">Basic</a></li>
					<li class="second active"><a href="<?php echo base_url('advance-profile/'.base64_encode($logged_in_user->id)) ?>">Advance</a></li>
				</ul>
				<a href="<?php echo base_url('workroom/Workroom/indivisual_team/'.base64_encode($logged_in_user->id)) ?>" class="view-my-profile">View my profile as others see it</a>
			</div>
		</div>
	</div>
	
	<div class="toosum-section">
	    <div class="container">
		    <div class="row">
			    <div class="col-md-3">
				      <div class="team-profile-grid">
						

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
						
						<div class="team-attach-portfolio">
						    <a href="#" class="team-profile-color"><span class="team-icon45"> <i class="fa fa-paperclip" aria-hidden="true"></i> </span>
							Attachment portfolio file</a>
						</div>
						<div class="team-attach-link">
						    <a href="#" class="team-profile-color"><span class="team-icon45"> <i class="fa fa-play-circle" aria-hidden="true"></i> </span>
							ranksdigitalmadia.com</a>
						</div>
						<div class="team-personal-webpage">
						    <a href="#" class="team-profile-color"><span class="team-icon45"><i class="fa fa-desktop" aria-hidden="true"></i> </span>
							Personal web page </a>
						</div>
				    </div>
					
					<div class="toosum-calender-section">					     
						 <div class="calender-description">
						     <h5>English Language Proficiency</h5>
						 </div>
					</div>
					
						
					
					
					<div class="toosum-calender-section">					     
						 <div class="calender-description">
						     <h5>Other Languages</h5>
						 </div>
					</div>
					
					<div class="toosum-language-margin">
						<?php// print_r($language); exit(); ?>
						<?php foreach ($language as $value): ?>
						<div class="toosum-language-rating">
							  <input type="checkbox" class="form-check-input" value="<?php echo $value->id; ?>" <?php echo (in_array($value->id, $language_id_array)) ? 'checked' : '' ?>>
                        <?php echo $value->languages_name;?>
						</div>						
                       <?php endforeach; ?>
					</div>
				</div>
				 
				<div class="col-md-6">
				    <div class="toosum-social-accounts">
					    <h5>About me</h5>
					</div>
					<div class="toosum-about-section">
					    <div class="toosum-about-icon"><img src="<?php echo base_url('assets/web_assets/') ?>images/resume.png" alt="" class="toosum-about-icon-image1"/></div>
						<div class="toosum-about-description">
							<p><?php echo $logged_in_user->about_us ?></p>
						</div>
					</div>
					
					
					
					
					
					<div class="row toosum-margin">
					    <div class="col-md-6">
						    <div class="toosum-social-accounts">
								<h5>Years of experience</h5>
							</div>
						<?php foreach ($experience as $value): ?>
								<div class="custom-control custom-radio">
							  <input type="radio" <?php if($value->id == "$logged_in_user->experience_id")
							    { echo 'checked="checked"'; }?>>
							  <?php  echo form_label($value->experience); ?>
							</div>
                             <?php endforeach; ?>
							</div> 
												
					
						
						<div class="col-md-6 creative-directors">
						    <h1><i class="fa fa-briefcase" aria-hidden="true"></i></h1>
							<p>Excellent Strategist, creative director and copywriter </p>
						</div>
						
					</div>
					
					
					<div class="row toosum-margin">

					    <div class="col-md-12">
						    <div class="toosum-social-accounts">
								<h5>Employment History</h5>
							</div>
							<table class="toosum-employment-history">
							<tbody>
								
							<?php 

                           if (!empty($employment_history)) {
                           foreach ($employment_history as $value) {?>
                           	<tr>
                           <td><?php echo date('d/m/Y', strtotime($value->start)); ?>
							</td>
                            <td><?php echo date('d/m/Y', strtotime($value->end)); ?>
							</td>
							</td>
                            <td><?php echo $value->company_name; ?>
							</td>
							 <td><?php echo $value->role; ?>
							</td>
                           </tr>
                          
                          <?php } 
                          echo '
			                  <tr>
			                    <th>From</th>
			                    <th>To</th>
			                    <th>Company Name</th>
			                    <th>Title/Role</th>
			                  </tr>
			                  ';
                           }else {
                           	    echo '
			                  <tr>
			                    <th>From</th>
			                    <th>To</th>
			                    <th>Company Name</th>
			                    <th>Title/Role</th>
			                  </tr>
			                  ';
                           } ?>
							</tbody>
							</table>
							
							
							<div class="toosum-social-accounts">
								<h5>Education</h5>
							</div>
							 
							<table class="toosum-employment-history">
							<tbody>
								
							<?php 

                           if (!empty($education_list)) {
                           foreach ($education_list as $value) {?>
                           	<tr>
                           <td><?php echo date('d/m/Y', strtotime($value->start)); ?>
							</td>
                            <td><?php echo date('d/m/Y', strtotime($value->end)); ?>
							</td>
							</td>
                            <td><?php echo $value->institute_name; ?>
							</td>
							 <td><?php echo $value->area_of_study; ?>
							</td>
							<td><?php echo $value->degree_type ; ?></td>
                           </tr>
                          
                          <?php } 
                          echo '
			                  <tr>
			                    <th>Start</th>
			                    <th>End</th>
			                    <th>Institute name</th>
			                    <th>Area of study</th>
			                    <th>Degree type</th>
			                  </tr>
			                  ';
                           }else {
                           	    echo '
			                  <tr>
			                    <th>Start</th>
			                    <th>End</th>
			                    <th>Institute name</th>
			                    <th>Area of study</th>
			                    <th>Degree type</th>
			                  </tr>
			                  ';
                           } ?>
							</tbody>
							</table>


							<div class="toosum-social-accounts">
								<h5>Certificates</h5>
							</div>
							 
							<table class="toosum-employment-history">
							<tbody>
								

							<?php 
                          //echo '<pre>'; print_r($logged_in_user);
                           if (!empty($certificates)) {
                           foreach ($certificates as $value) {?>
                           	<tr>
                           <td><?php echo date('d/m/Y', strtotime($value->start)); ?>
							</td>
                            <td><?php echo date('d/m/Y', strtotime($value->end)); ?>
							</td>
							</td>
                            <td><?php echo $value->certificate_name; ?>
							</td>
						<td><?php echo $value->organization; ?></td>
						<td><?php echo $value->license_number; ?></td>
						<td><?php echo $value->certificate_url; ?></td>
                           </tr>
                          
                          <?php }
                          echo '
			                  <tr>
			                    <th>From</th>
			                    <th>To</th>
			                    <th>Certificate</th>
			                    <th>Organization</th>
			                    <th>License Num</th>
			                    <th>Certificate URL</th>
			                  </tr>
			                  '; 
                           }else {
                           	    echo '
			                  <tr>
			                    <th>From</th>
			                    <th>To</th>
			                    <th>Certificate Name</th>
			                    <th>Organization</th>
			                    <th>License Number</th>
			                    <th>Certificate URL</th>
			                  </tr>
			                  ';
                           } ?>
							</tbody>
							</table>							
						</div>						
					</div>
				
				 </div>
				<div class="col-md-3">
                   <div class="toosum-social-accounts">
					    <h5>Social accounts</h5>
					</div>
					<ul class="social-accounts12">
                     <?php  if (!empty($social_accounts)) {?>
                    <li><a href="<?php echo $social_accounts->facebook ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                     <li><a href="<?php echo $social_accounts->twitter ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                     <li><a href="<?php echo $social_accounts->youtube ?>" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    <?php }else {?>
                     	<li>
                     		<a href="#s"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                     	</li>
                     		<li>
                     		<a href="#s"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                     	</li>
                     		<li>
                     		<a href="#s"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                     	</li>                     		
                    <?php }?>
					</ul>
					<div class="clear"></div>


					<div class="toosum-social-accounts">
					    <h5>Areas of Expertise</h5>
					</div>
					<ul class="toosum-area-expertise">
					    <?php foreach ($expertise as $value) {?>
						<?php 							
								if(in_array($value->id, $experties_id_array)) {
									$class_name = 'toosum-expertise-color';
								} else{
									$class_name = '';
								}
								echo '<li class="'.$class_name.'" title="Brand Designer">';
									echo $value->expertise_name;
								echo '</li>';

						 ?>
						 <?php } ?>
					</ul>
					
					<div class="toosum-social-accounts">
					    <h5>Skills</h5>
					</div>
					<ul class="toosum-skills1">
					<?php foreach ($skills as $value) {?>  
						<?php 							
								if(in_array($value->id, $skills_id_array)) {
									$class_name = 'toosum-skills1-color';
								} else{
									$class_name = '';
								}
								echo '<li class="'.$class_name.'" title="Adobe InDesign">';
									echo $value->skills_name;
								echo '</li>';
						 ?>
						  <?php } ?>
					</ul>

					<div class="toosum-social-accounts">
					    <h5>Industries</h5>
					</div>
					<ul class="toosum-skills1">  
					<?php foreach ($industries as $value) {?>
						<?php 							
								if(in_array($value->id, $industries_id_array)) {
									$class_name = 'toosum-skills1-color';
								} else{
									$class_name = '';
								}
								echo '<li class="'.$class_name.'" title="Adobe InDesign">';
									echo $value->industries_name;
								echo '</li>';
						 ?>
						 <?php } ?> 
					</ul>	
				
				</div>
				 
			</div>
		</div>
	</div>

</div>

	
	