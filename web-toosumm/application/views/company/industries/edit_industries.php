<section class="content-header">
       <h1>
      Edit Industries
      <small>Please enter the industries's information below.</small>
    </h1>
      <ol class="breadcrumb">
        <li>
          <a href="<?php echo base_url('company/industries/add') ?>" style="color: white;" class="btn btn-primary btn-flat">  <i class="fa fa-pencil"></i> Add Industries
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('company/industries') ?>" style="color: white;" class="btn btn-primary btn-flat">  <i class="fa fa-eye"></i> View Industries
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
            <?php echo form_open('company/industries/edit/'.base64_encode($industries->id)) ?>
              <div class="box-body">
                <div class="form-group">
                  <?php 
                      echo form_label('Industries', 'industries_name');
                      echo form_input( ['name'=>'industries_name', 'class'=>'form-control toosumm-padding-left', 'id'=>'industries_name', 'placeholder'=>'Enter Industries Name',  'value'=>set_value('industries_name',$industries->industries_name) ] );
                      ?>
                 <span class="toosumm-box56"><i class="fa fa-industry" aria-hidden="true"></i></span>
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
  

  
  


  
  