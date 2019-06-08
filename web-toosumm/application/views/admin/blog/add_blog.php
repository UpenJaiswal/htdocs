<section class="content-header">
       <h1>
      Create Blog
      <small>Please enter the blog's information below.</small>
    </h1>
      <ol class="breadcrumb">
       
        <li><a href="<?php echo base_url('admin/blog'); ?>" style="color: white;" class="btn bt btn-primary btn-flat"><i class="fa fa-eye"></i> View Blog</a></li>
        
      </ol>
    </section>
   

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <!-- left column -->
      
           <br><br>
    <?php
    if(!null==validation_errors()){?>
    <div class="alert alert-danger">
    <strong><?php echo validation_errors();?></strong>
    </div>
    <?php }?>
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo form_open_multipart('admin/blog/add') ?>
            <?php echo form_hidden('user_id',$this->session->userdata('user_id'));?>
              <?php echo form_hidden('_hidden_field','Add');?>
              <div class="box-body">

                <div class="form-group">
                  <?php 
                      echo form_label('Blog Name', 'blog_name');
                      echo form_input( ['name'=>'blog_name', 'class' => 'form-control toosumm-padding-left', 'id'=>'blog_name', 'placeholder'=>'Enter Blog Name',  'minlength'=>'3', 'value'=>set_value('blog_name') ] );
                       ?>
                   <span class="toosumm-box56"><i class="fa fa-rss-square" aria-hidden="true"></i></span>
                </div>

                <div class="form-group">
                  <?php 
                      echo form_label('Blog Description', 'blog_detail');
                      echo form_textarea( ['name'=>'blog_detail', 'class'=>'ckeditor', 'id'=>'blog_detail', 'placeholder'=>'Enter Blog Description', 'minlength'=>'3', 'value'=>set_value('blog_detail') ] );
                       ?>                        
                </div>
                 
               <div class="form-group">
                <?php echo form_label('Blog Image');?>
                  <?php echo form_upload(['name'=>'blog_image','class'=>'form-control toosumm-padding-left','accept'=>'image/*']);?>
                   <span class="toosumm-box56"><i class="fa fa-rss-square" aria-hidden="true"></i></span>
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
  
  


  
  