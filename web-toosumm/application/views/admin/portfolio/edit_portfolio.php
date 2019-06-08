<section class="content-header">
      <div class="btn-group btn-breadcrumb">
        <a href="<?php echo base_url('admin/portfolio'); ?>" style="color: white;" class="btn btn-primary"><i class="glyphicon glyphicon-home"></i></a>
         <a href="#" class="btn btn-default btn-flat"><i class="fa fa-archive fa-lg"></i>&nbsp; Portfolio</a>
      </div>
      <ol class="breadcrumb">
        <li class="active"><b>Edit Portfolio</b></li>
        <li>
          <a href="<?php echo base_url('admin/portfolio/add') ?>" style="color: white;" class="btn btn-primary btn-flat">  <i class="fa fa-pencil"></i> Add Portfolio
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('admin/portfolio') ?>" style="color: white;" class="btn btn-primary btn-flat">  <i class="fa fa-eye"></i> View Portfolio
          </a>
        </li>
        
      </ol>
    </section>
    
 <br><br>
  <?php
    if(!null==validation_errors()){?>
      <div class="col-md-12">
    <div class="alert alert-danger">
    <strong><?php echo validation_errors();?></strong>
    </div>
     </div>
    <?php }?>
    
    <!-- Main content -->
    <section class="content">
      <div class="row">
         <?php echo form_open_multipart('admin/portfolio/edit/'.base64_encode($portfolio->id)) ?>
         <?php echo form_hidden('portfolio', $portfolio->portfolio); ?>
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Update Portfolio</h3>
            </div>
              <div class="box-body">
                <div class="form-group">
                  <?php 
                      echo form_label('Portfolio Name', 'name');
                      echo form_input( ['name'=>'name', 'class'=>'form-control', 'id'=>'name', 'placeholder'=>'Enter Team Name',  'value'=>set_value('name',$portfolio->name) ] );
                       ?>
                </div>
              </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
            </div>
              <div class="box-body">
                <div class="form-group">
                    <?php echo form_label('Portfolio');?>                    
                   <div>
                      <p><img src="<?php echo base_url();?>./Uploads/portfolio/<?php echo $portfolio->portfolio; ?>" class="img-responsive img-thumbnail" height="150" width="150" /></p>
                     <?php echo form_upload(['name'=>'portfolio', 'class'=>'form-control']);?>
                    </div>
                  </div>
              <div class="box-footer">
                <?php 
                 echo form_submit( ['class'=>'btn btn-primary pull-right btn-flat', 'value'=>'Update', 'onclick'=>'return date_vali();']  );
                ?>        
               </div>
              </div>
          </div>
        </div>
      <?php echo form_close(); ?>
      </div>
    </section>
  

  
  


  
  