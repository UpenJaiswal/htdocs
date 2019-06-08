<section class="content-header">
     <h1>
      Create Role
      <small>Please show the role's information below.</small>
    </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('company/role'); ?>" style="color: white;" class="btn bt btn-primary btn-flat"><i class="fa fa-eye"></i> View Role</a></li>
        
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
            <?php echo form_open('company/role/add') ?>
            <?php  echo form_hidden('user_id',$this->session->userdata('user_id'));?>

              <div class="box-body">

                <div class="form-group">
                  <?php 
                      echo form_label('Role Name', 'role_name');
                      echo form_input( ['name'=>'role_name', 'class'=>'form-control toosumm-padding-left', 'id'=>'role_name', 'placeholder'=>' Role Name',  'minlength'=>'3', 'value'=>set_value('role_name') ] );
                       ?>
                       <span class="toosumm-box56"><i class="fa fa-rss-square" aria-hidden="true"></i></span>
                </div>
                 <!-- <div class="form-group">
                  <?php 
                      echo form_label(' Parent Category Name', 'parent_category_id');
                      echo form_input( ['name'=>'parent_category_id', 'class'=>'form-control', 'id'=>'parent_category_id', 'placeholder'=>'Enter Parent Category',  'minlength'=>'3', 'value'=>set_value('parent_category_id') ] );
                     ?>
                </div> -->
              
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
  
  


  
  