<section class="content-header">
      <h1>
      Edit Experience
      <small>Please enter the experience's information below.</small>
    </h1>
      <ol class="breadcrumb">
        <li>
          <a href="<?php echo base_url('company/experience/add') ?>" style="color: white;" class="btn btn-primary btn-flat">  <i class="fa fa-pencil"></i> Add Experience
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('company/experience') ?>" style="color: white;" class="btn btn-primary btn-flat">  <i class="fa fa-eye"></i> View Experience
          </a>
        </li>
        
      </ol>
    </section>
    <!-- Main content -->
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
              
              <h3 class="box-title">Update Experience</h3>
            </div>
            <?php echo form_open('company/experience/edit/'.base64_encode($experience->id)) ?>
              <div class="box-body">
                <div class="form-group">
                  <?php 
                      echo form_label('Experience', 'experience');
                      echo form_input( ['name'=>'experience', 'class'=>'form-control toosumm-padding-left', 'id'=>'experience', 'placeholder'=>'Experience',  'value'=>set_value('experience',$experience->experience) ] );
                      ?>
                  <span class="toosumm-box56"><i class="fa fa-archive fa-lg" aria-hidden="true"></i></span>
                </div>
              <div class="box-footer">
                <?php 
                 echo form_submit( ['class'=>'btn btn-primary pull-right btn-flat', 'value'=>'Update', 'onclick'=>'return date_vali();']  );
                ?>        
               </div>
              </div>
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </section>
  

  
  


  
  