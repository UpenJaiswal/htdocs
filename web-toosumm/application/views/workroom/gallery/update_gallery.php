<div class="toosum-section">
	    <div class="container">
		    <div class="row">
			     <section class="content-header">
    
      <ol class="breadcrumb">
        <li class="active"><b>Update Image</b></li>
        <li ><a href="<?php echo base_url('workroom/Workroom/add_image/'.base64_encode($logged_in_user->id)) ?>" style="color: white;" class="btn bt btn-primary btn-flat"><i class="fa fa-plus" ></i> Add Image</a></li>
        <li><a href="<?php echo base_url('workroom/Workroom/gallery/'.base64_encode($logged_in_user->id)) ?>" style="color: white;" class="btn bt btn-primary btn-flat"><i class="fa fa-eye"></i> View Image</a></li>
        
      </ol>

    </section>

			</div>
		    <div class="row">
		    	<div class="col-md-4 col-md-offset-4">
		    	<?php
    if(!null==validation_errors()){?>
    <div class="alert alert-danger">
    <strong><?php echo validation_errors();?></strong>
    </div>
    <?php }?>	
		    	</div>
		    	
			    <div class="col-md-4 col-md-offset-4">

				 <div class="toosumm-edit-section55">
				
            <?php echo form_open_multipart('workroom/Workroom/edit_image/'.base64_encode($find_image->id)) ?>
            <?php echo form_hidden('user_id',$this->session->userdata('user_id'));?>
            
              

                <div class="form-group">
                  <?php 
                      echo form_label(' Name', 'name');
                      echo form_input( ['name'=>'name', 'class'=>'form-control', 'id'=>'name', 'placeholder'=>'Enter Name',  'minlength'=>'3', 'value'=>set_value('name',$find_image->name) ] );
                      echo form_hidden('image', $find_image->image); 
                       ?>
                </div>
                 
                 
               
                <div class="form-group">
                   <?php echo form_label('blog Image');?>
                    <div >
                      <p><img src="<?php echo base_url();?>./Uploads/portfolio/<?php echo $find_image->image; ?>" class="img-responsive img-thumbnail" height="150" width="150" /></p>
                     <?php echo form_upload(['name'=>'image', 'class'=>'form-control']);?>
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
		</div>
	</div>
	
	