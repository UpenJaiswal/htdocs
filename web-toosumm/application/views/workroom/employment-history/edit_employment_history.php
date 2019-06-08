<div class="toosum-section">
	    <div class="container">
		    <div class="row">
			     <section class="content-header">
    
      <ol class="breadcrumb">
        <li class="active"><b>Update Employment History</b></li>
        <li ><a href="<?php echo base_url('workroom/Workroom/add_employment_history/'.base64_encode($logged_in_user->id)) ?>" style="color: white;" class="btn bt btn-primary btn-flat"><i class="fa fa-plus" ></i> Add Employment History</a></li>
        <li><a href="<?php echo base_url('workroom/Workroom/employment_history/'.base64_encode($logged_in_user->id)) ?>" style="color: white;" class="btn bt btn-primary btn-flat"><i class="fa fa-eye"></i> View Employment History</a></li>
        
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
        <?php echo form_open_multipart('workroom/Workroom/edit_employment_history/'.base64_encode($find_employment_history->id)) ?>

            <?php echo form_hidden('user_id',$this->session->userdata('user_id'));?>
  <div class="edit_profile" id="employment-history">
  <div class="row">
  <div class="col-md-6 edit_profile-margin employment-calender-position">
   <div class="form-group">
              <?php echo form_label('From', 'start') ?>
              <div class="input-group">
              <div class="input-group-addon">
              <i class="fa fa-calendar"></i><br>
              </div>
              <?php
              echo form_input( ['name'=>'start', 'class'=>'datepick', 'data-inputmask'=>"'alias':'dd/mm/yyyy'", 'data-mask', 'required'=>'required','placeholder'=>'Enter Data','value'=>set_value('start', date('d-m-Y', strtotime($find_employment_history->start)))
              ] );
              ?>
              </div>
              </div>
  </div>

  <div class="col-md-6 edit_profile-margin employment-calender-position">

                 <div class="form-group">
              <?php echo form_label('To', 'end') ?>
              <div class="input-group">
              <div class="input-group-addon">
              <i class="fa fa-calendar"></i><br>
              </div>
              <?php
              echo form_input( ['name'=>'end', 'class'=>'datepick', 'data-inputmask'=>"'alias':'dd/mm/yyyy'", 'data-mask', 'required'=>'required','placeholder'=>'Enter Data','value'=>set_value('end', date('d-m-Y', strtotime($find_employment_history->end)))
              ] );
              ?>
              </div>
              </div>
  </div>

  <div class="col-md-6 edit_profile-margin">
  <div class="form-group">
          <?php
          echo form_label('Company Name', 'company_name');
          echo form_input( ['name'=>'company_name', 'class'=>'form-control','placeholder'=>'Company Name', 'required'=>'required',
          'value'=> set_value('company_name',$find_employment_history->company_name)
          ] );
          ?>
          </div>
  </div>
  <div class="col-md-6 edit_profile-margin">
 
          <div class="form-group">
        <?php
        echo form_label('Title/Role', 'role');

        echo form_input( ['name'=>'role', 'class'=>'form-control', 'placeholder'=>'Title/Role','required'=>'required',
        'value'=> set_value('role',$find_employment_history->role)
        ] );
        ?>
          </div>
  </div>
  <div class="col-md-6 edit_profile-margin">
         <?php echo form_submit( ['class'=>'edit-profile-submit', 'value'=>'Submit '] ); ?>
  </div>
  </div>
  </div>
  <?php echo form_close() ?>
            
            <?php echo form_close(); ?>
        
          </div>
        
					</div>
					
					
				</div>
				 
		</div>
	</div>
	
	