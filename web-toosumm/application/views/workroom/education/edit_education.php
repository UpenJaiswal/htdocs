<div class="toosum-section">
	    <div class="container">
		    <div class="row">
			     <section class="content-header">
    
      <ol class="breadcrumb">
        <li class="active"><b>Update Education</b></li>
        <li ><a href="<?php echo base_url('workroom/Workroom/add_education/'.base64_encode($logged_in_user->id)) ?>" style="color: white;" class="btn bt btn-primary btn-flat"><i class="fa fa-plus" ></i> Add Education </a></li>
        <li><a href="<?php echo base_url('workroom/Workroom/education/'.base64_encode($logged_in_user->id)) ?>" style="color: white;" class="btn bt btn-primary btn-flat"><i class="fa fa-eye"></i> View Education</a></li>
        
      </ol>

    </section>
       
			</div>
		    <div class="row">
		    	<div class="col-md-6 col-md-offset-3">


       <?php if($this->session->flashdata('message')) { ?>
    <div class="col-md-12">
      <div class="alert <?php echo $this->session->flashdata('class'); ?> alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
       <i class="icon fa fa-check"></i> <?php echo $this->session->flashdata('main_message'); ?>
        <?php echo $this->session->flashdata('message'); ?>
      </div>
    </div>
    <?php } ?>

		    	<?php
    if(!null==validation_errors()){?>
    <div class="alert alert-danger">
    <strong><?php echo validation_errors();?></strong>
    </div>
    <?php }?>	
		    	</div>
		    	
          <div class="col-md-6 col-md-offset-3">
          <div class="toosumm-edit-section55">
				
            <?php echo form_open_multipart('workroom/Workroom/edit_education/'.base64_encode($find_education->id)) ?>

            <?php echo form_hidden('user_id',$this->session->userdata('user_id'));?>
            
             <div class="row">    
          <div class="col-md-6 edit_profile-margin update-date">
     <div class="form-group">
              <?php echo form_label('From', 'start') ?>
              <div class="input-group">
              <div class="input-group-addon">
              <i class="fa fa-calendar"></i><br>
              </div>
              <?php
              echo form_input( ['name'=>'start', 'class'=>'datepick', 'data-inputmask'=>"'alias':'dd/mm/yyyy'", 'data-mask', 'required'=>'required','placeholder'=>'Enter Data','value'=>set_value('start', date('d-m-Y', strtotime($find_education->start)))
              ] );
              ?>
              </div>
              </div>
</div>
          
                
              
              <div class="col-md-6 edit_profile-margin update-date">
                 <div class="form-group">
              <?php echo form_label('From', 'end') ?>
              <div class="input-group">
              <div class="input-group-addon">
              <i class="fa fa-calendar"></i><br>
              </div>
              <?php
              echo form_input( ['name'=>'end', 'class'=>'datepick', 'data-inputmask'=>"'alias':'dd/mm/yyyy'", 'data-mask', 'required'=>'required','placeholder'=>'Enter Data','value'=>set_value('end', date('d-m-Y', strtotime($find_education->end)))
              ] );
              ?>
              </div>
              </div>
            </div>
          

          
              <div class="col-md-6 edit_profile-margin">
          <div class="form-group">
           <?php 
      echo form_label('Institute name ', 'institute_name');
      echo form_input( ['name'=>'institute_name', 'class' => 'form-control toosumm-padding-left', 'id'=>'institute_name', 'placeholder'=>'Institute name',  'minlength'=>'3', 'value'=>set_value('institute_name',$find_education->institute_name) ] );
       ?>
          </div>
        </div>
      

        
              <div class="col-md-6 edit_profile-margin">
          <div class="form-group">
       <?php 
      echo form_label('Area of study', 'area_of_study');
      echo form_input( ['name'=>'area_of_study', 'class' => 'form-control toosumm-padding-left', 'id'=>'area_of_study', 'placeholder'=>'Area of study',  'minlength'=>'3', 'value'=>set_value('area_of_study',$find_education->area_of_study) ] );
       ?>
          </div>
        </div>


         

          <div class="col-md-6 edit_profile-margin">
            <div class="form-group">
           <?php
        echo form_label('Education Degree', 'degree_type');

          $degree_type_option = [
                                ''            =>  'Select Type',
                                'Doctorate' =>  'Doctorate',
                                'Master'    =>  'Master',
                                'Bachechors'    =>  'Bachechors',
                                'Diploma'    =>  'Diploma',

                        ];
                        if (isset($find_education->degree_type)) {
                          echo form_dropdown( ['name'=>'degree_type', 'id'=>'degree_type', 'class'=>'form-control', 'required'=>'required'], $degree_type_option, set_value('degree_type', $find_education->degree_type) );
                        }else{
                          echo form_dropdown( ['name'=>'degree_type', 'id'=>'degree_type', 'class'=>'form-control', 'required'=>'required'], $degree_type_option, set_value('degree_type') );
                        }
        ?>

          </div>
          </div>
                    
          
            <div class="col-md-6 edit_profile-margin">
              <?php
            echo form_submit( ['class'=>'edit-profile-submit update-education-btn', 'value'=>'Submit', 'onclick'=>'return date_vali();']  ); 
                ?>
   
  
  </div>
             
              <!-- /.box-body -->
              
            <?php echo form_close(); ?>
          </div>
        </div>
          </div>
          </div>
			
					
					
				</div>
				 
		</div>
	</div>
	
	