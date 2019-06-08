<section class="content-header">
       <h1>
      Edit Category
      <small>Please enter the category's information below.</small>
    </h1>
      <ol class="breadcrumb">
        <li class="active"><b>Edit Category</b></li>
        <li>
          <a href="<?php echo base_url('admin/category/add') ?>" style="color: white;" class="btn btn-primary btn-flat">  <i class="fa fa-pencil"></i> Add Category
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('admin/category') ?>" style="color: white;" class="btn btn-primary btn-flat">  <i class="fa fa-eye"></i> View Category
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
              <h3 class="box-title">Update Category</h3>
            </div>
            <?php echo form_open_multipart('admin/category/edit/'.base64_encode($category->id)) ?>
              <div class="box-body">
                <div class="form-group">
                  <?php 
                      echo form_label('Category Name', 'category_name');
                      echo form_input( ['name'=>'category_name', 'class'=>'form-control toosumm-padding-left', 'id'=>'category_name', 'placeholder'=>'Enter Blog Name',  'value'=>set_value('category_name',$category->category_name) ] );
                       ?>
                        <span class="toosumm-box56"><i class="fa fa-cogs" aria-hidden="true"></i></span> 
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
  

  
  


  
  