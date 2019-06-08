<div class="toosum-section">
	    <div class="container">
		    <div class="row">
			     <section class="content-header">
    
      <ol class="breadcrumb">
        <li class="active"><b>Add Certificate </b></li>
        <li><a href="<?php echo base_url('workroom/Workroom/certificates/'.base64_encode($logged_in_user->id)) ?>" style="color: white;" class="btn bt btn-primary btn-flat"><i class="fa fa-eye"></i> View Certificate </a></li>
        
      </ol>

    </section>

			</div>
		    <div class="row">
		    	
		    	<?php
    if(!null==validation_errors()){?>
    <div class="alert alert-danger">
    <strong><?php echo validation_errors();?></strong>
    </div>
    <?php }?>	
		    	
		    	
			    <div class="col-md-6 col-md-offset-3">

				 <div class="toosumm-edit-section55">
				
           <?php echo form_open('workroom/Workroom/add_certificates/'.base64_encode($logged_in_user->id));?>
   <?php  echo form_hidden('user_id',$this->session->userdata('user_id'));?>
  <div class="edit_profile" id="employment-history">
  <div class="row">
  <div class="col-md-6 edit_profile-margin employment-calender-position">
  <?php echo form_label('From', 'start') ?>
  <div class="input-group">
  <div class="input-group-addon">
  <i class="fa fa-calendar"></i><br>
  </div>
  <?php
        echo form_input( ['name'=>'start', 'class'=>'datepick', 'data-inputmask'=>"'alias':'dd/mm/yyyy'", 'data-mask', 'required'=>'required','placeholder'=>'Enter Data',
                'value'=> (isset($employment_history->start)) ? set_value('start', date('d-m-Y', strtotime($employment_history->start))) : set_value('start')
        ] );
      ?>
  </div>
  </div>

  <div class="col-md-6 edit_profile-margin employment-calender-position">
  <?php echo form_label('To', 'end') ?>
  <div class="input-group">
  <div class="input-group-addon">
  <i class="fa fa-calendar"></i><br>
  </div>
  <?php
        echo form_input( ['name'=>'end', 'class'=>'datepick', 'data-inputmask'=>"'alias':'dd/mm/yyyy'", 'data-mask', 'required'=>'required','placeholder'=>'Enter Data',
                'value'=> (isset($employment_history->end)) ? set_value('end', date('d-m-Y', strtotime($employment_history->end))) : set_value('end')
        ] );
      ?>
  </div>
  </div>

  <div class="col-md-6 edit_profile-margin">
   <?php 
      echo form_label('Certificate Name', 'certificate_name');
      echo form_input( ['name'=>'certificate_name', 'class' => 'form-control toosumm-padding-left', 'id'=>'certificate_name', 'placeholder'=>'Certificate Name',  'minlength'=>'3', 'value'=>set_value('certificate_name') ] );
       ?>
  </div>
 <div class="col-md-6 edit_profile-margin">
   <?php 
      echo form_label('Organization', 'organization');
      echo form_input( ['name'=>'organization', 'class' => 'form-control toosumm-padding-left', 'id'=>'organization', 'placeholder'=>'Organization',  'minlength'=>'3', 'value'=>set_value('organization') ] );
       ?>
  </div>

  <div class="col-md-6 edit_profile-margin">
   <?php 
      echo form_label('License number', '   license_number');
      echo form_input( ['name'=>'   license_number', 'class' => 'form-control toosumm-padding-left', 'id'=>'   license_number', 'placeholder'=>'  License number',  'minlength'=>'3', 'value'=>set_value('  license_number') ] );
       ?>
  </div>

   <div class="col-md-6 edit_profile-margin">
   <?php 
      echo form_label('Certificate url', 'certificate_url');
      echo form_input( ['name'=>'certificate_url', 'class' => 'form-control toosumm-padding-left', 'id'=>'certificate_url', 'placeholder'=>'Certificate url',  'minlength'=>'3', 'value'=>set_value('certificate_url') ] );
       ?>
  </div>
  <div class="col-md-6 edit_profile-margin">
         <?php echo form_submit( ['class'=>'edit-profile-submit', 'value'=>'Submit'] ); ?>
  </div>
  </div>
  </div>
  
            
            <?php echo form_close(); ?>
        
					</div>
					
					
				</div>
				 
			</div>
		</div>
	</div>
	
	