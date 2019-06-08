    <section class="content-header">
       <h1>
      Create Experience
      <small>Please enter the experience's information below.</small>
    </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url('company/experience'); ?>" style="color: white;" class="btn bt btn-primary btn-flat"><i class="fa fa-eye"></i> View Experience</a></li>
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
            <?php echo form_open('company/experience/add') ?>
            <?php  echo form_hidden('user_id',$this->session->userdata('user_id'));?>
              <div class="box-body">
                <div class="form-group">
                  <?php 
                      echo form_label('Experience', 'experience');
                      echo form_input( ['name'=>'experience', 'class'=>'form-control toosumm-padding-left', 'id'=>'experience', 'placeholder'=>'Experience',  'minlength'=>'3', 'value'=>set_value('experience') ] );
                      ?>
                 <span class="toosumm-box56"><i class="fa fa-archive fa-lg" aria-hidden="true"></i></span>
                </div>
              </div>
              <div class="box-footer">
                <?php echo form_submit(['class'=>'btn btn-primary pull-right btn-flat', 'value'=>'Submit', 'onclick'=>'return date_vali();']);?>
              </div>
                <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </section>
  
  


  
  