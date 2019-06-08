<section class="content-header">
      <h1>
      Edit Priority
      <small>Please show the priority's information below.</small>
    </h1>
      <ol class="breadcrumb">
        <li>
          <a href="<?php echo base_url('company/priority/add') ?>" style="color: white;" class="btn btn-primary btn-flat">  <i class="fa fa-pencil"></i> Add Priority
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('company/priority') ?>" style="color: white;" class="btn btn-primary btn-flat">  <i class="fa fa-eye"></i> View Priority
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
            <?php echo form_open_multipart('company/priority/edit/'.base64_encode($priority->id)) ?>
              <div class="box-body">
                <div class="form-group">
                  <?php 
                     echo form_label('Priority Name', 'priority_name');
                      echo form_input( ['name'=>'priority_name', 'class'=>'form-control toosumm-padding-left', 'id'=>'priority_name', 'placeholder'=>' Clients Name',  'value'=>set_value('priority_name',$priority->priority_name) ] );
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
  

  
  


  
  