<section class="content-header">
      <h1>
      Edit Role
      <small>Please show the role's information below.</small>
    </h1>
      <ol class="breadcrumb">
        <li>
          <a href="<?php echo base_url('company/role/add') ?>" style="color: white;" class="btn btn-primary btn-flat">  <i class="fa fa-pencil"></i> Add Role
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('company/role') ?>" style="color: white;" class="btn btn-primary btn-flat">  <i class="fa fa-eye"></i> View Role
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
            <?php echo form_open_multipart('company/role/edit/'.base64_encode($role->id)) ?>
              <div class="box-body">
                <div class="form-group">
                  <?php 
                      echo form_label('Role Name', 'role_name');
                      echo form_input( ['name'=>'role_name', 'class'=>'form-control toosumm-padding-left', 'id'=>'role_name', 'placeholder'=>'Enter Blog Name',  'value'=>set_value('role_name',$role->role_name) ] );
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
  

  
  


  
  