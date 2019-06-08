<section class="content-header">
     <h1>
      Create Status
      <small>Please show the status's information below.</small>
    </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('company/status'); ?>" style="color: white;" class="btn bt btn-primary btn-flat"><i class="fa fa-eye"></i> View Priority</a></li>
        
      </ol>
    </section>
    

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
         <div class="col-md-6 col-md-offset-3">
          <?php
    if(!null==validation_errors()){?>
    <div class="alert alert-danger">
    <strong><?php echo validation_errors();?></strong>
    </div>
    <?php }?>
          <!-- general form elements -->
       <div class="box box-primary toosumm-margin69">
            <div class="box-header with-border">
              
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo form_open_multipart('company/status/add') ?>
            <?php echo form_hidden('user_id',$this->session->userdata('user_id'));?>
            
              <div class="box-body">

                <div class="form-group">
                  <?php 
                      echo form_label('Status Name', 'status');
                      echo form_input( ['name'=>'status', 'class' => 'form-control toosumm-padding-left', 'id'=>'status', 'placeholder'=>'Status Name',  'minlength'=>'3', 'value'=>set_value('status') ] );
                       ?>
                   <span class="toosumm-box56"><i class="fa fa-spinner" aria-hidden="true"></i></span>
                </div>
              </div>
              <!-- /.box-body -->
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
  
  


  
  