<section class="content-header">
      <h1>
      Edit Status
      <small>Please show the status's information below.</small>
    </h1>
      <ol class="breadcrumb">
        <li>
          <a href="<?php echo base_url('company/status/add') ?>" style="color: white;" class="btn btn-primary btn-flat">  <i class="fa fa-pencil"></i> Add Status
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('company/status') ?>" style="color: white;" class="btn btn-primary btn-flat">  <i class="fa fa-eye"></i> View Status
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
            <?php echo form_open_multipart('company/status/edit/'.base64_encode($status->id)) ?>
              <div class="box-body">
                <div class="form-group">
                  <?php 
                     echo form_label('Status Name', 'status');
                      echo form_input( ['name'=>'status', 'class'=>'form-control toosumm-padding-left', 'id'=>'status', 'placeholder'=>' Clients Name',  'value'=>set_value('status',$status->status) ] );
                       ?>
                        <span class="toosumm-box56"><i class="fa fa-rss-square" aria-hidden="true"></i></span>
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
  

  
  


  
  