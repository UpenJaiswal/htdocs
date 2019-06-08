<section class="content-header">
      <h1>
      Edit Clients
      <small>Please show the clients's information below.</small>
    </h1>
      <ol class="breadcrumb">
        <li>
          <a href="<?php echo base_url('company/clients/add') ?>" style="color: white;" class="btn btn-primary btn-flat">  <i class="fa fa-pencil"></i> Add Clients
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('company/clients') ?>" style="color: white;" class="btn btn-primary btn-flat">  <i class="fa fa-eye"></i> View Clients
          </a>
        </li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
         <?php if(!null==validation_errors()){?>
          <div class="alert alert-danger">
          <strong><?php echo validation_errors();?></strong>
          </div>
          <?php }?>
          <div class="box box-primary toosumm-margin69">
            <div class="box-header with-border">
             
            </div>
            <?php echo form_open_multipart('company/clients/edit_clients/'.base64_encode($clients->id)) ?>
              <div class="box-body">
                <div class="form-group">
                  <?php 
                     echo form_label('Clients Name', 'clients_name');
                      echo form_input( ['name'=>'clients_name', 'class'=>'form-control toosumm-padding-left', 'id'=>'clients_name', 'placeholder'=>' Clients Name',  'value'=>set_value('clients_name',$clients->clients_name) ] );
                       ?>
                        <span class="toosumm-box56"><i class="fa fa-rss-square" aria-hidden="true"></i></span>
                </div>
                <div class="form-group">
                  <?php 
                      echo form_label('Contact Person', 'contact_person');
                      echo form_input( ['name'=>'contact_person', 'class' => 'form-control toosumm-padding-left', 'id'=>'contact_person', 'placeholder'=>'Contact Person',  'minlength'=>'3', 'value'=>set_value('contact_person',$clients->contact_person) ] );
                       ?>
                   <span class="toosumm-box56"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                </div>
                 <div class="form-group">
                  <?php 
                      echo form_label('Contact Number', 'contact_number');
                      echo form_input( ['name'=>'contact_number', 'class' => 'form-control toosumm-padding-left', 'onkeypress'=>'return isNumberKey(event)', 'placeholder'=>'Contact Number',  'minlength'=>'10', 'maxlength'=>'10', 'value'=>set_value('contact_number',$clients->contact_number) ] );
                       ?>
                   <span class="toosumm-box56"><i class="fa fa-phone-square" aria-hidden="true"></i></span>
                </div>
                 <div class="form-group">
                  <?php 
                      echo form_label('Note', 'note');
                      echo form_input( ['name'=>'note', 'class' => 'form-control toosumm-padding-left', 'id'=>'note', 'placeholder'=>'Note',  'minlength'=>'3', 'value'=>set_value('note',$clients->note) ] );
                       ?>
                   <span class="toosumm-box56"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                </div>
                 <div class="form-group">
                   <?php echo form_label('Image');?>
                    <div >
                      <p><img src="<?php echo base_url();?>./Uploads/clients/<?php echo $clients->image; ?>" class="img-responsive img-thumbnail" height="150" width="150" /></p>
                     <?php echo form_upload(['name'=>'image', 'class'=>'form-control toosumm-padding-left']);?>
                              <span class="toosumm-box56"><i class="fa fa-rss-square" aria-hidden="true"></i></span>

                     </div>

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
  

  
  


  
  