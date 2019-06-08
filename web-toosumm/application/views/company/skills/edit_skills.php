<section class="content-header">
      <h1>
      Edit Skills
      <small>Please enter the skills's information below.</small>
    </h1>
      <ol class="breadcrumb">
        <li>
          <a href="<?php echo base_url('company/skills/add') ?>" style="color: white;" class="btn btn-primary btn-flat">  <i class="fa fa-pencil"></i> Add Skills
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('company/skills') ?>" style="color: white;" class="btn btn-primary btn-flat">  <i class="fa fa-eye"></i> View Skills
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
           
            </div>
            <?php echo form_open('company/skills/edit/'.base64_encode($skills->id)) ?>
              <div class="box-body">
                <div class="form-group">
                  <?php 
                      echo form_label('Skills', 'skills_name');
                      echo form_input( ['name'=>'skills_name', 'class'=>'form-control toosumm-padding-left', 'id'=>'skills_name', 'placeholder'=>'Enter Skills Name',  'value'=>set_value('skills_name',$skills->skills_name) ] );
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
  

  
  


  
  