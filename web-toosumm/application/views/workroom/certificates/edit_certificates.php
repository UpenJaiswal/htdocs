<div class="toosum-section">
	    <div class="container">
		    <div class="row">
			     <section class="content-header">
    
      <ol class="breadcrumb">
        <li class="active"><b>Update Certificates</b></li>
        <li ><a href="<?php echo base_url('workroom/Workroom/add_certificates/'.base64_encode($logged_in_user->id)) ?>" style="color: white;" class="btn bt btn-primary btn-flat"><i class="fa fa-plus" ></i> Add Certificates </a></li>
        <li><a href="<?php echo base_url('workroom/Workroom/certificates/'.base64_encode($logged_in_user->id)) ?>" style="color: white;" class="btn bt btn-primary btn-flat"><i class="fa fa-eye"></i> View Certificates</a></li>
        
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

				    <div class="row certificateste-edit">
            <?php echo form_open_multipart('workroom/Workroom/edit_certificates/'.base64_encode($find_certificates->id)) ?>

            <?php echo form_hidden('user_id',$this->session->userdata('user_id'));?>
            
                 
              <div class="col-md-6">  
              <div class="form-group">
              <?php echo form_label('From', 'start') ?>
              <div class="input-group">
              <div class="input-group-addon">
              <i class="fa fa-calendar"></i><br>
              </div>
              <?php
              echo form_input( ['name'=>'start', 'class'=>'datepick form-control', 'data-inputmask'=>"'alias':'dd/mm/yyyy'", 'data-mask', 'required'=>'required','placeholder'=>'Enter Data','value'=>set_value('start', date('d-m-Y', strtotime($find_certificates->start)))
              ] );
              ?>
              </div>
              </div>
              </div>

              <div class="col-md-6">
                 <div class="form-group">
              <?php echo form_label('From', 'end') ?>
              <div class="input-group">
              <div class="input-group-addon">
              <i class="fa fa-calendar"></i><br>
              </div>
              <?php
              echo form_input( ['name'=>'end', 'class'=>'datepick form-control', 'data-inputmask'=>"'alias':'dd/mm/yyyy'", 'data-mask', 'required'=>'required','placeholder'=>'Enter Data','value'=>set_value('end', date('d-m-Y', strtotime($find_certificates->end)))
              ] );
              ?>
              </div>
            </div>
              </div>

          <div class="col-md-6">
          <div class="form-group">
           <?php 
      echo form_label('Certificate Name', 'certificate_name');
      echo form_input( ['name'=>'certificate_name', 'class' => 'form-control toosumm-padding-left', 'id'=>'certificate_name', 'placeholder'=>'Certificate Name',  'minlength'=>'3', 'value'=>set_value('certificate_name',$find_certificates->certificate_name) ] );
       ?>
          </div>
        </div>

         <div class="col-md-6">
          <div class="form-group">
        <?php 
      echo form_label('Organization', 'organization');
      echo form_input( ['name'=>'organization', 'class' => 'form-control toosumm-padding-left', 'id'=>'organization', 'placeholder'=>'Organization',  'minlength'=>'3', 'value'=>set_value('organization',$find_certificates->organization) ] );
       ?>
          </div>
        </div>

          <div class="col-md-6">
          <div class="form-group">
           <?php 
              echo form_label('License number', '   license_number');
              echo form_input( ['name'=>'   license_number', 'class' => 'form-control toosumm-padding-left', 'id'=>'   license_number', 'placeholder'=>'  License number',  'minlength'=>'3', 'value'=>set_value('  license_number',$find_certificates->license_number) ] );
               ?>
          </div>
        </div>

          <div class="col-md-6">
          <div class="form-group">
          <?php 
          echo form_label('Certificate url', 'certificate_url');
          echo form_input( ['name'=>'certificate_url', 'class' => 'form-control toosumm-padding-left', 'id'=>'certificate_url', 'placeholder'=>'Certificate url',  'minlength'=>'3', 'value'=>set_value('certificate_url',$find_certificates->certificate_url) ] );
          ?>
          </div>
        </div>

        
             
              <!-- /.box-body -->
              <div class="box-footer">
                <?php
            echo form_submit( ['class'=>'edit-profile-submit submit56', 'value'=>'Submit', 'onclick'=>'return date_vali();']  ); 
                ?>
              </div>
            <?php echo form_close(); ?>
             </div>
					</div>
					
					
				</div>
				 
		</div>
	</div>
	
	