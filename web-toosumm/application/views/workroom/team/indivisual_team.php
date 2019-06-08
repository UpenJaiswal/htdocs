
	<div class="toosum-section">
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
			    <div class="col-md-3">

				    <div class="toosum-left-section">
					    <div class="toosum-left-heading-section">
						    <h3 class="toosum-heading1"><?php echo $indivisual->first_name ?> <?php echo $indivisual->last_name ?> </h3>
						</div>
						
						<div class="toosum-about-image">
						<?php 
						if($indivisual->image == TRUE) {?>
						<img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('/Uploads/users/'.$indivisual->image);?>" alt="User profile picture">
						<?php
						}else{ ?>

						<img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('/Uploads/users/index.jpg');?>" alt="User profile picture">
						<?php } ?>
						</div>
						<div class="clear"></div>
						<div class="toosum-left-icons-section">


						    <?php //echo '<pre>'; print_r($reach_us); ?>
                         <ul class="toosum-short-icon-details">
                     <?php 

                     if (!empty($reach_us)) {?>

                     <li><a href="<?php echo $reach_us->mail ?>" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                     <li><a href="<?php echo $reach_us->skype ?>" target="_blank"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                     <li><a href="tel:<?php echo $reach_us->phone; ?>" target="_blank"><i class="fa fa-mobile" aria-hidden="true"></i></a></li>

                     	
                    <?php }else {?>

                     	<li>
                     		<a href="#s"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                     	</li>
                     		<li>
                     		<a href="#s"><i class="fa fa-skype" aria-hidden="true"></i></a>
                     	</li>
                     		<li>
                     		<a href="#s"><i class="fa fa-mobile" aria-hidden="true"></i></a>
                     	</li>                     		
                    <?php }?>
                     </ul> 
                      <span><?php echo $team[0]->role_name; ?></span>
                      <div class="clear"></div>							
						</div>
						
						
					</div>
					<div class="toosum-calender-section">
					     <span><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span>
						 <div class="calender-description">
						     <h5><?php echo date('d-m-Y', $indivisual->last_login); ?></h5>
							 <h6>Last activity</h6>
						 </div>
					</div>
					
					
					    
					     <?php if (!empty($experiencei) ) {
					     	echo '<div class="toosum-calender-section"> <span><i class="fa fa-lightbulb-o" aria-hidden="true"></i></span> <p class="experience45"> ';
                        echo $experiencei[0]->experience ;
                          echo '</p></div>';
                      }else {
                      	echo '<div class="toosum-calender-section">
					     <span><i class="fa fa-lightbulb-o" aria-hidden="true"></i></span>
					          <h6 class="experience45">Experience</h6>
					</div>';
                      }
                      ?> 
					
					
					
					<div class="toosum-calender-section">					     
						 <div class="calender-description">
						     <h5>English Language Proficiency</h5>
						 </div>

					</div>
					<?php if (!empty($language_proficiency)): ?>
						<h6><?php echo $language_proficiency->language.':' ?></h6>
						<p>I have complete command of this language with no discernible accent.</p>
					<?php endif ?>
					
					
					
					<div class="toosum-calender-section">					     
						 <div class="calender-description">
						     <h5>Other Languages</h5>
						 </div>
					</div>
					
					<div class="toosum-language-margin">
						

                       <?php foreach ($language as $value) {?>
                       	<div class="toosum-language-rating">
							  <input type="checkbox" class="form-check-input" value="<?php echo $value->id; ?>" <?php echo (in_array($value->id, $language_id_array)) ? 'checked' : '' ?>>
                        <?php echo $value->languages_name;?>
						</div>
                       <?php } ?>
					</div>
				</div>
				 
				<div class="col-md-6">
				    <div class="toosum-social-accounts">
					    <h5>About me</h5>
					</div>
					<div class="toosum-about-section">
					    <div class="toosum-about-icon"><img src="<?php echo base_url('assets/web_assets/') ?>images/resume.png" alt="" class="toosum-about-icon-image1"/></div>
						<div class="toosum-about-description">
							<p><?php echo $indivisual->about_us ?></p>
						</div>
					</div>
					
					<div class="row toosum-margin">
					    <div class="col-md-6">
						    <div class="toosum-social-accounts">
								<h5>Gender</h5>
							</div>
							<div class="toosum-gender-section">
							    <i class="fa fa-user" aria-hidden="true"></i>
								<span><?php echo $indivisual->gender; ?></span>
							</div>
						</div>
						
						<div class="col-md-6">
						    <div class="toosum-social-accounts">
								<h5>Date of birth</h5>
							</div>
							<div class="toosum-gender-section">
							    <i class="fa fa-calendar" aria-hidden="true"></i>
								<span><?php echo date('d/m/Y', strtotime($indivisual->dob)); ?></span>
							</div>
						</div>
						
					</div>
					
					<div class="row toosum-margin">
					    <div class="col-md-12">
						    <div class="toosum-social-accounts">
								<h5>Portfolio (<?php echo ($num_images_list);?>)</h5>
							</div>
						</div>						
					</div>
					<div class="row">
						<?php foreach ($galleryi as $value) {?>
							<div class="col-md-6">
						    <a href="#" class="toosum-portfolio-link">
								<div class="toosum-portfolio-name">
									<span><?php echo $value->name; ?></span>
								</div>
								
								<img src="<?php echo base_url();?>./Uploads/portfolio/<?php echo $value->image ?>" class="img-responsive"  />
							</a>
						</div>
						<?php } ?>
	

					</div>

					 <?php echo $this->pagination->create_links();?>
					
					<div class="row toosum-margin">
					    <div class="col-md-6">
						    <div class="toosum-social-accounts">
								<h5>Location</h5>
							</div>
							<div class="toosum-map">
							    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d112110.7092437738!2d77.16413815820313!3d28.585984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1539676363166" width="100%" height="250" frameborder="0" style="border:0; width:100%; height:250;" allowfullscreen></iframe>
							</div>
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
                           	echo '
			                  <tr>
			                    <th>From</th>
			                    <th>To</th>
			                    <th>Company Name</th>
			                    <th>Title/Role</th>
			                  </tr>
			                  ';
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
                           	echo '
			                  <tr>
			                    <th>Start</th>
			                    <th>End</th>
			                    <th>Institute name</th>
			                    <th>Area of study</th>
			                    <th>Degree type</th>
			                  </tr>
			                  ';
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
							
						</div>						
					</div>
					
					
					
					
					
				</div>
				 
				<div class="col-md-3">
					<?php //echo '<pre>'; print_r($social_accounts) ?>
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
	
	