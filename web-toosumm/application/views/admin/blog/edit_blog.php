<section class="content-header">
      <h1>
      Edit Blog
      <small>Please enter the blog's information below.</small>
    </h1>
      <ol class="breadcrumb">
        <li>
          <a href="<?php echo base_url('admin/blog/add') ?>" style="color: white;" class="btn btn-primary btn-flat">  <i class="fa fa-pencil"></i> Add Blog
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('admin/blog') ?>" style="color: white;" class="btn btn-primary btn-flat">  <i class="fa fa-eye"></i> View Blog
          </a>
        </li>
        
      </ol>
    </section>
    

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- form start -->
        <div class="container">
       <br><br>
        <?php
        if(!null==validation_errors()){?>
         <div class="alert alert-danger">
        <strong><?php echo validation_errors();?></strong>
       </div>
       <?php }?>
         </div>
        <!-- left column -->
        <div class="col-md-6">
         
          <!-- general form elements -->
            <?php echo form_open_multipart('admin/blog/edit/'.base64_encode($blog->id)) ?>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Update Blog</h3>
            </div>
            <!-- /.box-header -->
            
              <div class="box-body">

                
            <div class="form-group">
              <?php 
                  echo form_label('Blog Name', 'blog_name');
                  echo form_input( ['name'=>'blog_name', 'class'=>'form-control toosumm-padding-left', 'id'=>'blog_name', 'placeholder'=>'Enter Blog Name',  'value'=>set_value('blog_name',$blog->blog_name) ] );
                  echo form_hidden('blog_image', $blog->blog_image); 
                  ?>
         <span class="toosumm-box56"><i class="fa fa-rss-square" aria-hidden="true"></i></span>
            </div>
                  <div class="form-group">
                  <?php 
                      echo form_label('blog Description', 'blog_detail');
                      echo form_textarea( ['name'=>'blog_detail', 'class'=>'ckeditor', 'id'=>'blog_detail', 'placeholder'=>'Enter Blog Description',  'value'=>set_value('blog_detail',$blog->blog_detail, false) ]  );
                        ?>
                </div>            
               
              </div>
            
          </div>
        </div>


        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            
              <div class="box-body">
                <div class="form-group">
                   <?php echo form_label('blog Image');?>
                    <div >
                      <p><img src="<?php echo base_url();?>./Uploads/blog/<?php echo $blog->blog_image; ?>" class="img-responsive img-thumbnail" height="150" width="150" /></p>
                     <?php echo form_upload(['name'=>'blog_image', 'class'=>'form-control toosumm-padding-left']);?>
                              <span class="toosumm-box56"><i class="fa fa-rss-square" aria-hidden="true"></i></span>

                     </div>

                  </div>
              <!-- /.box-body -->
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


  
  


  
  