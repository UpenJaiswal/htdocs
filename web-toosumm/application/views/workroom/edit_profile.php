<?php if($this->session->flashdata('message')) { ?>
    <div class="toosumm-alert">
      <div class="alert alert-box <?php echo $this->session->flashdata('class'); ?> alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
       <i class="icon fa fa-check"></i> <?php echo $this->session->flashdata('main_message'); ?>
        <?php echo $this->session->flashdata('message'); ?>
      </div>
    </div>    
<?php } ?>
<div class="toosum-section">
	    <div class="container"> 		

		    <div class="row">
			    <div class="col-md-3">

					<div class="advanced-profile-sidebar sticky">
					    <ul class="advanced-profile-list">
						    <li><a href="#basic-profile">Basic Profile</a></li>
						    <li><a href="#edit-profile">Edit Profile</a></li>
							<li><a href="#about-me">About me</a></li>
							<li>
								<a href='<?php echo base_url('profile/gallery/'.base64_encode($logged_in_user->id)) ?>'>Gallery</a>
							</li>
							
							<li><a href="<?php echo base_url('workroom/workroom/employment_history/'.base64_encode($logged_in_user->id)) ?>">Employment History</a></li>
							<li><a href="<?php echo base_url('workroom/workroom/education/'.base64_encode($logged_in_user->id)) ?>">Education</a></li>
							<li><a href="#english-language-profiency">English Language Profiency</a></li>
							<li><a href="#other-languages">Other Languages</a></li>
							<li><a href="#area-of-expertise">Area Of Expertise</a></li>
							<li><a href="#skills">Skills</a></li>
							<li><a href="#industries">Industries</a></li>
							<li><a href="<?php echo base_url('workroom/workroom/certificates/'.base64_encode($logged_in_user->id)) ?>">Certificate</a></li>
							<li><a href="#social-accounts">Social Accounts</a></li>
							<li><a href="#reachus">Reach us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-9">
					<?php
					if(!null==validation_errors()){?>
					<div class="col-md-12">
					<div class="alert alert-danger">
					<strong><?php echo validation_errors();?></strong>
					</div>
					</div>
					<?php }?>
					<?php //echo '<pre>'; print_r($logged_in_user); ?>

					<div class="edit_profile" id="edit-profile">
					    <h1> Update Image </h1>
						<div class="row">
							<div class="col-md-6 edit_profile-margin">
					 <?php echo form_open_multipart('workroom/Workroom/update_image/'.base64_encode($logged_in_user->id)); ?>

						<div class="toosumm-edit-profile67">
						<p> <?php if($logged_in_user->image == TRUE) {?>
						<img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('/Uploads/users/'.$logged_in_user->image);?>" alt="User profile picture">
						<?php
						}else{ ?>

						<img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('/Uploads/users/index.jpg');?>" alt="User profile picture">
						<?php } ?>
						</p>
						   <?php echo form_upload(['name'=>'image', 'class'=>'toosumm-upload-image45']);?>

						   <div class="toosumm-edit-icon56"><i class="fa fa-pencil" aria-hidden="true"></i></div>

						</div>

					<div class="col-md-6 edit_profile-margin">

					<?php echo form_submit(['class'=>'edit-profile-submit','value'=>'Update Image']) ?>
					</div>
					<?php echo form_close(); ?>
				</div>
				</div>
			</div>
				   <div class="edit_profile" id="basic-profile">
					    <h1> Basic Profile </h1>
					<div class="row basic-profile79">	
					    <?php echo form_open('workroom/Workroom/besic_profile/'.base64_encode($logged_in_user->id)) ?>
			   <?php  echo form_hidden('user_id',$this->session->userdata('user_id'));?>			    

						 <div class="col-md-6 margin45">
							<h6>First Name </h6>
							<?php echo form_input( ['name'=>'first_name', 'required'=>'required','class'=>'form-control toosumm-padding-left', 'id'=>'first_name', 'placeholder'=>'first_name',  'value'=>set_value('first_name',$logged_in_user->first_name) ] );
						?>
							 
						</div> 
						<div class="col-md-6 margin45">
							<h6>Last Name </h6>
						   <?php echo form_input( ['name'=>'last_name', 'required'=>'required','class'=>'form-control toosumm-padding-left', 'id'=>'last_name', 'placeholder'=>'last_name',  'value'=>set_value('last_name',$logged_in_user->last_name) ] );
						?>
							 
						</div>
						<div class="col-md-6 margin45">
							<h6>Date of birth </h6>
							<?php  
						    echo form_input( ['name'=>'dob', 'class'=>'form-control toosumm-padding-left datepick', 'data-inputmask'=>"'alias':'dd/mm/yyyy'", 'data-mask', 'required'=>'required','value'=>set_value('dob', date('d-m-Y', strtotime($logged_in_user->dob))) ] );
						
                                ?>
						</div>
						<div class="col-md-6 margin45">
							<h6>Country</h6>
						    <?php echo form_input( ['name'=>'country', 'required'=>'required', 'class'=>'form-control toosumm-padding-left', 'id'=>'country', 'placeholder'=>'Country',  'value'=>set_value('country',$logged_in_user->country) ] );
						?>
							
						</div>
						<div class="col-md-6 margin45">
							<h6>City </h6>
						    <?php 
						echo form_input( ['name'=>'city', 'class'=>'form-control toosumm-padding-left', 'required'=>'required', 'id'=>'city', 'placeholder'=>'City', 'value'=>set_value('city',$logged_in_user->city) ] );
						?>
							
						</div>

						<div class="col-md-6 margin45 gender">
						<?php  
						echo form_label('Gender', 'gender');
						echo "<br/>";?>
						<div class="gender-section">
						<?php echo form_radio( ['name'=>'gender', 'id'=>'Male', 'value'=>'Male', 'required'=>'required', 'checked'=>(set_value('gender', $logged_in_user->gender) === 'Male' ? TRUE : FALSE) ] );
						
						echo form_label('Male', 'Male');?>
						</div>
						
						<div class="gender-section">
						<?php echo form_radio( ['name'=>'gender', 'id'=>'Femail', 'value'=>'Femail', 'required'=>'required', 'checked'=>(set_value('gender', $logged_in_user->gender) === 'Femail' ? TRUE : FALSE) ] );
						
						echo form_label('Femail', 'Femail');
						?>
					     </div>
											
						</div>
					<div class="col-md-6 edit_profile-margin">
					<?php echo form_submit(['class'=>'edit-profile-submit','value'=>'Submit']) ?>
					</div>
					<?php echo form_close(); ?>
					</div>				
					</div>
				    <div class="edit_profile" id="edit-profile">
					    <h1> Edit Profile </h1>
						<div class="row">
			<?php echo form_open('workroom/Workroom/video_webpage/'.base64_encode($logged_in_user->id)) ?>
			<?php  echo form_hidden('user_id',$this->session->userdata('user_id'));?>

			<div class="col-md-6 edit_profile-margin">

			<?php
	        echo form_label('Persoanl Video:', 'video');
		    echo form_input( ['name'=>'video', 'required'=>'required','class'=>'form-control','placeholder'=>'Persoanl Url',
			'value'=> (isset($video_webpage->video)) ? set_value('video',$video_webpage->video) : set_value('video')
			] );
		    ?>
		    </div>
			<div class="col-md-6 edit_profile-margin">

			    <?php
			    echo form_label('Persoanl Webpage:', 'webpage');
                  echo form_input( ['name'=>'webpage', 'class'=>'form-control','placeholder'=>'Persoanl Webpage Url', 'required'=>'required',
			'value'=> (isset($video_webpage->webpage)) ? set_value('webpage',$video_webpage->webpage) : set_value('webpage')
				] );
		      ?>

			</div>

			<div class="col-md-6 edit_profile-margin">
			    <input type="submit" class="edit-profile-submit" value="Submit" />
			</div>
			<?php echo form_close(); ?>
		</div>

	</div>




                 <?php echo form_open('workroom/Workroom/about/'.base64_encode($logged_in_user->id)); ?>

					<div class="edit_profile" id="about-me">
					    <h1> About Me </h1>
						<div class="row">
                            <div class="col-md-12 edit_profile-margin">

							   <?php
                      echo form_label('About Us:', 'about_us');
                      echo form_textarea( ['name'=>'about_us', 'class'=>'ckeditor', 'id'=>'about_us', 'placeholder'=>'About Us', 'required'=>'required', 'value'=>set_value('about_us',$logged_in_user->about_us, false) ]  );
                        ?>
							</div>

					<div class="col-md-6 edit_profile-margin">
					<?php echo form_submit(['class'=>'edit-profile-submit','value'=>'Submit ']) ?>
					</div>

						</div>

					</div>
					<?php echo form_close(); ?>

					 <?php echo form_open('workroom/Workroom/language/'.base64_encode($logged_in_user->id)); ?>

					<div class="edit_profile" id="english-language-profiency">
					    <h1> English Language Proficiency </h1>
						<div class="row">
                            <div class="col-md-12 edit_profile-margin">
                            	<div class="english-language-profiency">
						<?php
						echo form_label('Language Proficiency', 'language');
						echo "<br/>";
						echo form_radio( ['name'=>'language', 'id'=>'Native', 'value'=>'Native', 'required'=>'required', 'checked'=>(set_value('language', $language_proficiency->language) === 'Native' ? TRUE : FALSE) ] );

						echo form_label('Native', 'Native');

						echo "<br/>";
						echo form_radio( ['name'=>'language', 'id'=>'Fluent', 'value'=>'Fluent', 'required'=>'required', 'checked'=>(set_value('language', $language_proficiency->language) === 'Fluent' ? TRUE : FALSE) ] );

						echo form_label('Fluent', 'Fluent');

						echo "<br/>";
						echo form_radio( ['name'=>'language', 'id'=>'Conversational', 'value'=>'Conversational', 'required'=>'required', 'checked'=>(set_value('language', $language_proficiency->language) === 'Conversational' ? TRUE : FALSE) ] );


						echo form_label('Conversational', 'Conversational');

						
						echo "<br/>";
						echo form_radio( ['name'=>'language', 'id'=>'Basic', 'value'=>'Basic', 'required'=>'required', 'checked'=>(set_value('language', $language_proficiency->language) === 'Basic' ? TRUE : FALSE) ] );

						echo form_label('Basic', 'Basic');
						//
						echo "<br/>";
						echo form_radio( ['name'=>'language', 'id'=>'I don’t speak English', 'value'=>'I don’t speak English', 'required'=>'required', 'checked'=>(set_value('language', $language_proficiency->language) === 'I don’t speak English' ? TRUE : FALSE) ] );

					 echo form_label('I don’t speak English', 'I don’t speak English');?>
						</div>
						</div>
					<div class="col-md-6 edit_profile-margin">
		            <?php echo form_submit(['class'=>'edit-profile-submit','value'=>'Submit ']) ?>
					</div>
					</div>
					</div>
					<?php echo form_close(); ?>



						


	<?php echo form_open_multipart('workroom/Workroom/profile_edit/'.base64_encode($logged_in_user->id));?>
	<div class="edit_profile" id="year-of-experience">
	    <h1> Years of experience </h1>
		<div class="row">
        <div class="col-md-12 edit_profile-margin">
          <label>Select Experience:</label>
             <select name="experience_id" class="form-control select2">
             <option value="">Select Experience</option>

              <?php foreach ($experience as $value) { ?>
              <option <?php if($value->id == "$logged_in_user->experience_id"){ echo 'selected="selected"'; } ?> value="<?php echo $value->id ?>"><?php echo $value->experience?> </option>
              <?php } ?>
              </select>
          </div>
            <div class="col-md-6 edit_profile-margin">
            <?php echo form_submit( ['class'=>'edit-profile-submit', 'value'=>'Submit '] ); ?>
            </div>
            </div>
	</div>
	<?php echo form_close(); ?>
	


                <div class="edit_profile" id="social-accounts">
                    <h1> Social accounts </h1>
                  <?php echo form_open_multipart('workroom/Workroom/social_accounts/'.base64_encode($logged_in_user->id));?>
         <?php  echo form_hidden('user_id',$this->session->userdata('user_id'));?>
                        <div class="row">

        <div class="col-md-6 edit_profile-margin">
                    <?php echo form_label('Facebook', 'facebook');
                    echo form_input( ['name'=>'facebook','required'=>'required', 'class'=>'form-control', 'placeholder'=>'Facebook','value'=>(isset($social_accounts->facebook))? set_value('facebook',$social_accounts->facebook) : set_value('facebook')]);
                    ?>
         </div>
         <div class="col-md-6 edit_profile-margin">
                    <?php echo form_label('Twitter', 'twitter');
                    echo form_input( ['name'=>'twitter', 'required'=>'required','class'=>'form-control', 'placeholder'=>'Twitter','value'=>(isset($social_accounts->twitter))? set_value('twitter',$social_accounts->twitter) : set_value('twitter')]);
                    ?>
            </div>
                <div class="col-md-6 edit_profile-margin">
                    <?php echo form_label('Youtube', 'youtube');
                    echo form_input( ['name'=>'youtube','required'=>'required', 'class'=>'form-control', 'placeholder'=>'Youtube','value'=>(isset($social_accounts->youtube))? set_value('youtube',$social_accounts->youtube) : set_value('youtube')]);
                    ?>
                </div>
                          
<div class="col-md-6 edit_profile-margin">
       <?php echo form_submit(['class'=>'edit-profile-submit','value'=>'Submit ']) ?>
                                </div>
                        </div>
                        <?php echo form_close(); ?>
                </div>


        <div class="edit_profile" id="reachus">
            <h1> Reach us </h1>
            
                <div class="row">
                   <?php echo form_open_multipart('workroom/Workroom/reach_us/'.base64_encode($logged_in_user->id));?>
                  <?php  echo form_hidden('user_id',$this->session->userdata('user_id'));?>
                      
                            <div class="col-md-6 edit_profile-margin">
                    <?php echo form_label('Mail', 'mail');
                    echo form_input( ['name'=>'mail','required'=>'required', 'class'=>'form-control', 'placeholder'=>'Mail','value'=>(isset($reach_us->mail))? set_value('mail',$reach_us->mail) : set_value('mail')]);
                    ?>
                           </div>

                    <div class="col-md-6 edit_profile-margin">
                    <?php echo form_label('Skype', 'skype');
                    echo form_input( ['name'=>'skype','required'=>'required', 'class'=>'form-control', 'placeholder'=>'skype','value'=>(isset($reach_us->skype))? set_value('skype',$reach_us->skype) : set_value('skype')]);
                    ?>   
                   </div>
                    <div class="col-md-6 edit_profile-margin">
                    <?php echo form_label('Linkdien', 'linkdien');
                    echo form_input( ['name'=>'linkdien','required'=>'required', 'class'=>'form-control', 'placeholder'=>'linkdien','value'=>(isset($reach_us->linkdien))? set_value('linkdien',$reach_us->linkdien) : set_value('linkdien')]);
                    ?>   
                   </div>

                    <div class="col-md-6 edit_profile-margin">
                    <?php echo form_label('Phone Number', 'phone');
                    echo form_input( ['name'=>'phone','onkeypress'=>'return isNumberKey(event)','required'=>'required', 'class'=>'form-control', 'placeholder'=>'phone','value'=>(isset($reach_us->phone))? set_value('phone',$reach_us->phone) : set_value('phone')]);
                    ?>   
                   </div>

                        <div class="col-md-6 edit_profile-margin">
                                <br/>
<?php echo form_submit(['class'=>'edit-profile-submit ','value'=>'Submit']) ?>
                        </div>
                </div>
                <?php echo form_close(); ?>
        </div>
            

        <div class="edit_profile" id="area-of-expertise">
            <h1> Areas of Expertise </h1>
             <?php echo form_open_multipart('workroom/Workroom/expertise/'.base64_encode($logged_in_user->id));?>
                <div class="row">

    
                  <div class="col-md-6 edit_profile-margin">                          
                        <div id="output"></div>
	                      <select data-placeholder="Choose Expertise ..." name="expertise_id[]" multiple class="chosen-select">
	                      	<?php foreach ($expertise as $value) {?>
	                      		
	                      		 <option value="<?php echo $value->id; ?>" <?php echo (in_array($value->id, $experties_id_array)) ? 'selected' : '' ?>> <?php echo $value->expertise_name;?>  </option>
	                             <?php } ?>
	                      </select>
                    </div>
                        <div class="col-md-6 edit_profile-margin">
                          <?php echo form_submit(['class'=>'edit-profile-submit toosum-btn-margin','value'=>'Submit']); ?>
                        </div>
                </div>
                <?php echo form_close(); ?>
                </div>
            <div class="edit_profile" id="skills">
                <h1> Skills </h1>
                    <?php echo form_open_multipart('workroom/Workroom/skills/'.base64_encode($logged_in_user->id));?>
                <div class="row">
                  <div class="col-md-6 edit_profile-margin">                          
                        <div id="output"></div>
	                      <select data-placeholder="Choose Skills ..." name="skills_id[]" multiple class="chosen-select">
	                      	<?php foreach ($skills as $value) {?>
	                      		
	                      		 <option value="<?php echo $value->id; ?>" <?php echo (in_array($value->id, $skills_id_array)) ? 'selected' : '' ?>> <?php echo $value->skills_name;?>  </option>
	                             <?php } ?>
	                      </select>
                    </div>
                        <div class="col-md-6 edit_profile-margin">
                          <?php echo form_submit(['class'=>'edit-profile-submit toosum-btn-margin','value'=>'Submit']); ?>
                        </div>
                </div>
                <?php echo form_close(); ?>
            </div>

				<div class="edit_profile" id="industries">
				<h1> Industries </h1>
                <?php echo form_open_multipart('workroom/Workroom/industries/'.base64_encode($logged_in_user->id));?>
                <div class="row">
                  <div class="col-md-6 edit_profile-margin">                          
                        <div id="output"></div>
	                      <select data-placeholder="Choose Industries ..." name="industries_id[]" multiple class="chosen-select">
	                      	<?php foreach ($industries as $value) {?>
	                      		
	                      		 <option value="<?php echo $value->id; ?>" <?php echo (in_array($value->id, $industries_id_array)) ? 'selected' : '' ?>> <?php echo $value->industries_name;?>  </option>
	                             <?php } ?>
	                      </select>
                    </div>
                        <div class="col-md-6 edit_profile-margin">
                          <?php echo form_submit(['class'=>'edit-profile-submit toosum-btn-margin','value'=>'Submit']); ?>
                        </div>
                </div>
                <?php echo form_close(); ?>
				</div>

				<div class="edit_profile" id="other-languages">
						<h1> Other Languages </h1>
						 <?php echo form_open_multipart('workroom/Workroom/other_language/'.base64_encode($logged_in_user->id));?>
                <div class="row">
                  <div class="col-md-6 edit_profile-margin">                          
                        <div id="output"></div>
	                      <select data-placeholder="Choose Other Languages..." name="language_id[]" multiple class="chosen-select">
	                      	<?php foreach ($language as $value) {?>                  		
	                      		 <option value="<?php echo $value->id; ?>" <?php echo (in_array($value->id, $language_id_array)) ? 'selected' : '' ?>> <?php echo $value->languages_name;?>  </option>
	                             <?php } ?>
	                      </select>                    
	                  </div>
                        <div class="col-md-6 edit_profile-margin">
                          <?php echo form_submit(['class'=>'edit-profile-submit toosum-btn-margin','value'=>'Submit']); ?>
                        </div>               
                         </div>
                <?php echo form_close(); ?>
						</div>				
					</div>
			</div>
		</div>
	</div>

