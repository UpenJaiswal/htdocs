<section class="content-header">
     <h1>
      Create Clients
      <small>Please show the clients's information below.</small>
    </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('company/clients'); ?>" style="color: white;" class="btn bt btn-primary btn-flat"><i class="fa fa-eye"></i> View Clients</a></li>
        
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
            <?php echo form_open_multipart('company/clients/add') ?>
            <?php echo form_hidden('user_id',$this->session->userdata('user_id'));?>
              <?php echo form_hidden('_hidden_field','Add');?>
              <div class="box-body">

                <div class="form-group">
                  <?php 
                      echo form_label('Clients Name', 'clients_name');
                      echo form_input( ['name'=>'clients_name', 'class' => 'form-control toosumm-padding-left', 'id'=>'clients_name', 'placeholder'=>'Clients Name',  'minlength'=>'3', 'value'=>set_value('clients_name') ] );
                       ?>
                   <span class="toosumm-box56"><i class="fa fa-user" aria-hidden="true"></i></span>
                </div>
                <div class="form-group">
                  <?php 
                      echo form_label('Contact Person', 'contact_person');
                      echo form_input( ['name'=>'contact_person', 'class' => 'form-control toosumm-padding-left', 'id'=>'contact_person', 'placeholder'=>'Contact Person',  'minlength'=>'3', 'value'=>set_value('contact_person') ] );
                       ?>
                   <span class="toosumm-box56"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                </div>
                 <div class="form-group">
                  <?php 
                      echo form_label('Contact Number', 'contact_number');
                      echo form_input( ['name'=>'contact_number', 'class' => 'form-control toosumm-padding-left', 'onkeypress'=>'return isNumberKey(event)', 'placeholder'=>'Contact Number',  'minlength'=>'10', 'maxlength'=>'10', 'value'=>set_value('contact_number') ] );
                       ?>
                   <span class="toosumm-box56"><i class="fa fa-phone-square" aria-hidden="true"></i></span>
                </div>
                <div class="form-group">
                  <?php 
                      echo form_label('Note', 'note');
                      echo form_input( ['name'=>'note', 'class' => 'form-control toosumm-padding-left', 'id'=>'note', 'placeholder'=>'Note',  'minlength'=>'3', 'value'=>set_value('note') ] );
                       ?>
                   <span class="toosumm-box56"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                </div>
                 
               <div class="form-group">
                <?php echo form_label('Image');?>
                  <?php echo form_upload(['name'=>'image','class'=>'form-control toosumm-padding-left','accept'=>'image/*']);?>
                   <span class="toosumm-box56"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
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
  
  


  
  