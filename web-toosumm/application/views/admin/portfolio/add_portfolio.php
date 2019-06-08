<section class="content-header">
      <div class="btn-group btn-breadcrumb">
        <a href="<?php echo base_url('admin/team'); ?>" class="btn btn-primary"><i class="glyphicon glyphicon-home"></i></a>
        <a href="#" class="btn btn-default btn-flat"><i class="fa fa-archive fa-lg"></i>&nbsp; Portfolio</a>
      </div>
      <ol class="breadcrumb">
        <li class="active"><b>Create Portfolio</b></li>
        <li><a href="<?php echo base_url('admin/portfolio/'); ?>" style="color: white;" class="btn bt btn-primary btn-flat"><i class="fa fa-eye"></i> View Portfolio</a></li>
        
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-6">
         <br><br>
        <?php
        if(!null==validation_errors()){?>
        <div class="">
        <div class="alert alert-danger">
        <strong><?php echo validation_errors();?></strong>
        </div>
        </div>
        <?php }?>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create</h3>
            </div>
            <?php echo form_open_multipart('admin/portfolio/add') ?>
            <?php echo form_hidden('user_id',$this->session->userdata('user_id'));?>
            <?php echo form_hidden('_hidden_field','Add');?>
              <div class="box-body">
                <div class="form-group">
                  <?php 
                      echo form_label('Portfolio Name', 'name');
                      echo form_input( ['name'=>'name', 'class'=>'form-control', 'id'=>'name', 'placeholder'=>'Enter portfolio Name',  'minlength'=>'3', 'value'=>set_value('name') ] );
                   ?>
                </div>
               <div class="form-group">
                <?php echo form_label('Portfolio');?>
                  <?php echo form_upload(['name'=>'portfolio','class'=>'form-control','accept'=>'image/*']);?>
                </div> 
              </div>
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
  
  


  
  