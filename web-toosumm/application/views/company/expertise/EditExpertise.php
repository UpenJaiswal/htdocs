<section class="content-header">
      <h1>
      Edit Expertise
      <small>Please enter the expertise's information below.</small>
    </h1>
      <ol class="breadcrumb">
        <li>
          <a href="<?php echo base_url('company/expertise/add') ?>" style="color: white;" class="btn btn-primary btn-flat">  <i class="fa fa-pencil"></i> Add Expertise
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('company/expertise') ?>" style="color: white;" class="btn btn-primary btn-flat">  <i class="fa fa-eye"></i> View Expertise
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
                  <div class="col-md-12">
                 <div class="alert alert-danger">
                <strong><?php echo validation_errors();?></strong>
               </div>
               </div>
               <?php }?>
          <div class="box box-primary">
            <div class="box-header with-border">
              
             
            </div>
            <?php echo form_open('company/expertise/edit/'.base64_encode($expertise->id)) ?>
              <div class="box-body">
                <div class="form-group">
                  <?php 
                      echo form_label('Expertise', 'expertise_name');
                      echo form_input( ['name'=>'expertise_name', 'class'=>'form-control toosumm-padding-left', 'id'=>'expertise_name', 'placeholder'=>'Enter Expertise Name',  'value'=>set_value('expertise_name',$expertise->expertise_name) ] );
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
  

  
  


  
  