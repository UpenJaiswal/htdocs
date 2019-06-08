<section class="content-header">
     <h1>
      Edit News
      <small>Please enter the news's information below.</small>
    </h1>
      <ol class="breadcrumb">
      <li>
        <a href="<?php echo base_url('admin/news/add') ?>" style="color: white;" class="btn btn-primary btn-flat"> 
         <i class="fa fa-pencil"></i> Add News
        </a>
      </li>

      <li>
        <a href="<?php echo base_url('admin/news') ?>" style="color: white;" class="btn btn-primary btn-flat">  
        <i class="fa fa-eye"></i> View News
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
    
   <section class="content">
      <div class="row">
        <?php echo form_open_multipart('admin/news/edit/'.base64_encode($news->id)) ?>
        <?php echo form_hidden('news_image', $news->news_image);?>
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
            </div>
              <div class="box-body">
                <div class="form-group">
                  <?php 
                      echo form_label('News Name', 'news_title');
                      echo form_input( ['name'=>'news_title', 'class'=>'form-control toosumm-padding-left', 'id'=>'news_title', 'placeholder'=>'Enter News Name',  'value'=>set_value('news_title',$news->news_title) ] );
                       ?>
                       <span class="toosumm-box56"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
                </div>
                  <div class="form-group">
                  <?php 
                      echo form_label('News Description', 'news_detail');
                      echo form_textarea( ['name'=>'news_detail', 'class'=>'ckeditor', 'id'=>'news_detail', 'placeholder'=>'Enter News Description',  'value'=>set_value('news_detail',$news->news_detail, false) ]  );
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
                   <label>Select Category</label>
                  <select name="category_id" class="form-control toosumm-padding-left select2">
                  <?php foreach ($category_list as $value) { ?>
                  <option <?php if($value->id == "$news->category_id"){ echo 'selected="selected"'; } ?> value="<?php echo $value->id ?>"><?php echo $value->category_name?> </option>
                  <?php } ?>
                  </select>
                  <span class="toosumm-box56"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
                </div>
                <div class="form-group">
                   <?php echo form_label('News Image');?>
                <div >
                  <p><img src="<?php echo base_url();?>./Uploads/news/<?php echo $news->news_image; ?>" class="img-responsive img-thumbnail" height="150" width="150" />
                  </p>
                  <?php echo form_upload(['name'=>'news_image', 'class'=>'form-control toosumm-padding-left']);?>
                  <span class="toosumm-box56"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
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
  

  
  


  
  