 
<section class="content-header">
        <h1>
      Create News
      <small>Please enter the news's information below.</small>
    </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/news'); ?>" style="color: white;" class="btn bt btn-primary btn-flat"><i class="fa fa-eye"></i> View News</a></li>
        
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
       <!-- form start -->
        <?php echo form_open_multipart('admin/news/add') ?>
        <?php echo form_hidden('user_id',$this->session->userdata('user_id'));?>
        <?php echo form_hidden('_hidden_field','Add');?>
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
              <div class="box-body">
                <div class="form-group">
                  <?php 
                      echo form_label('News Title', 'news_title');
                      echo form_input( ['name'=>'news_title', 'class'=>'form-control toosumm-padding-left', 'id'=>'news_title', 'placeholder'=>'Enter News Title',  'minlength'=>'3', 'value'=>set_value('news_title') ] );
                       ?>
                        <span class="toosumm-box56"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
                </div>

                <div class="form-group">
                  <?php 
                      echo form_label('News Description', 'news_detail');
                      echo form_textarea( ['name'=>'news_detail', 'class'=>'ckeditor', 'id'=>'news_detail', 'placeholder'=>'Enter News Description', 'minlength'=>'3', 'value'=>set_value('news_detail') ] );
                     ?>
                </div>
              </div>
              <!-- /.box-body -->
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
                <label>Select Category type</label>
                <select name="category_id" class="form-control toosumm-padding-left select2">
                   <option value="">Select Category</option>
                  <?php foreach ($category_list as $value): ?>
               
                  <option value="<?php echo $value->id; ?>" <?php echo set_select('category_id', $value->id, false); ?> ><?php echo $value->category_name; ?> </option>
                  <?php endforeach; ?>
                </select>
                <span class="toosumm-box56"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
              </div>
                <br>
               <div class="form-group">
                <?php echo form_label('News Image');?>
                  <?php echo form_upload(['name'=>'news_image','class'=>'form-control toosumm-padding-left','accept'=>'image/*']);?>
                   <span class="toosumm-box56"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
                </div> 

              </div>
              <!-- /.box-body -->

     
              <div class="box-footer">
                <?php
            echo form_submit( ['class'=>'btn btn-primary pull-right btn-flat', 'value'=>'Submit', 'onclick'=>'return date_vali();']  ); 
                ?>
             </div>
          </div>
         
        </div>

        <?php echo form_close(); ?>
       
      </div>
    </section>
  
  


  
  