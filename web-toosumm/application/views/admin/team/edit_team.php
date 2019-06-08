<section class="content-header">
      <h1>
      Edit Team
      <small>Please show the team's information below.</small>
    </h1>
      <ol class="breadcrumb">
        <li>
          <a href="<?php echo base_url('admin/team/add') ?>" style="color: white;" class="btn btn-primary btn-flat">  <i class="fa fa-pencil"></i> Add Team
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('admin/team') ?>" style="color: white;" class="btn btn-primary btn-flat">  <i class="fa fa-eye"></i> View Team
          </a>
        </li>
        
      </ol>
    </section>
    
 <br><br>
  <?php
    if(!null==validation_errors()){?>
      <div class="col-md-12">
    <div class="alert alert-danger">
    <strong><?php echo validation_errors();?></strong>
    </div>
     </div>
    <?php }?>
    
    <!-- Main content -->
    <section class="content">
      <div class="row">
         <?php echo form_open_multipart('admin/team/edit/'.base64_encode($team->id)) ?>
         <?php echo form_hidden('image', $team->image);?>
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
            </div>
              <div class="box-body">
                <div class="form-group">
                  <?php 
                      echo form_label('Team Name', 'name');
                      echo form_input( ['name'=>'name', 'class'=>'form-control toosumm-padding-left', 'id'=>'name', 'placeholder'=>'Enter Team Name',  'value'=>set_value('name',$team->name) ] );
                       ?>
                         <span class="toosumm-box56"><i class="fa fa-user-circle-o" aria-hidden="true"></i></i></span>
                </div>

                <div class="form-group">
                  <?php 
                      echo form_label('Team Designation', 'designation');
                      echo form_input( ['name'=>'designation', 'class'=>'form-control toosumm-padding-left', 'id'=>'designation', 'placeholder'=>'Enter Designation ',  'minlength'=>'3', 'value'=>set_value('designation',$team->designation) ] );
                     ?>
                       <span class="toosumm-box56"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                </div>
                <div class="form-group">
                  <?php 
                      echo form_label('Team Details', 'details');
                      echo form_textarea( ['name'=>'details', 'class'=>'ckeditor', 'id'=>'details', 'placeholder'=>'Enter Team Details', 'minlength'=>'3', 'value'=>set_value('details',$team->details, false) ] );
                     ?>
                </div>
              </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
            </div>
              <div class="box-body">
                <div class="form-group">
                    <?php echo form_label('Team Image');?>                    
                   <div>
                      <p><img src="<?php echo base_url();?>./Uploads/team/<?php echo $team->image; ?>" class="img-responsive img-thumbnail" height="150" width="150" /></p>
                     <?php echo form_upload(['name'=>'image', 'class'=>'form-control toosumm-padding-left']);?>
                       <span class="toosumm-box56"><i class="fa fa-file-image-o" aria-hidden="true"></i></span>
                    </div>

                  </div>
              <div class="box-footer">
                <?php 
                 echo form_submit( ['class'=>'btn btn-primary pull-right btn-flat', 'value'=>'Update', 'onclick'=>'return date_vali();']  );
                ?>        
               </div>
              </div>
          </div>
        </div>
      <?php echo form_close(); ?>
      </div>
    </section>
  

  
  


  
  