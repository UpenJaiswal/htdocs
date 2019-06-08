<section class="content-header">
         <h1>
      Create Team
      <small>Please enter the team's information below.</small>
    </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/team/'); ?>" style="color: white;" class="btn bt btn-primary btn-flat"><i class="fa fa-eye"></i> View Team</a></li>
        
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <br><br>
    <?php
    if(!null==validation_errors()){?>
    <div class="alert alert-danger">
    <strong><?php echo validation_errors();?></strong>
    </div>
    <?php }?>
          <div class="box box-primary">
            <div class="box-header with-border">
              
            </div>
            <?php echo form_open_multipart('admin/team/add') ?>
            <?php echo form_hidden('user_id',$this->session->userdata('user_id'));?>
            <?php echo form_hidden('_hidden_field','Add');?>
              <div class="box-body">
                <div class="form-group">
                  <?php 
                      echo form_label('Team Name', 'name');
                      echo form_input( ['name'=>'name', 'class'=>'form-control toosumm-padding-left', 'id'=>'name', 'placeholder'=>'Enter Team Name',  'minlength'=>'3', 'value'=>set_value('name') ] );
                   ?>
                   <span class="toosumm-box56"><i class="fa fa-user-circle-o" aria-hidden="true"></i></i></span>
                </div>
                <div class="form-group">
                  <?php 
                      echo form_label('Team Designation', 'designation');
                      echo form_input( ['name'=>'designation', 'class'=>'form-control toosumm-padding-left', 'id'=>'designation', 'placeholder'=>'Enter Designation ',  'minlength'=>'3', 'value'=>set_value('designation') ] );
                    ?>
                    <span class="toosumm-box56"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                </div>
                <div class="form-group">
                  <?php 
                      echo form_label('Team Details', 'details');
                      echo form_textarea( ['name'=>'details', 'class'=>'ckeditor', 'id'=>'details', 'placeholder'=>'Enter Team Details', 'minlength'=>'3', 'value'=>set_value('details') ] );
                     ?>
                </div>
               <div class="form-group">
                <?php echo form_label('Team Image');?>
                  <?php echo form_upload(['name'=>'image','class'=>'form-control toosumm-padding-left','accept'=>'image/*']);?>
                  <span class="toosumm-box56"><i class="fa fa-file-image-o" aria-hidden="true"></i></span>
                </div> 
              </div>
              <div class="box-footer">
                <?php
            echo form_submit( ['class'=>'btn btn-primary pull-right btn-flat', 'value'=>'Submit', 'onclick'=>'return date_vali();']  ); 
                ?>
              </div>
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </section>
  
  


  
  