<div class="toosum-section">
	    <div class="container">
		    <div class="row">
			     <section class="content-header">
    
      <ol class="breadcrumb">
        <li class="active"><b>Add Image</b></li>
        <li><a href="<?php echo base_url('profile/gallery/'.base64_encode($logged_in_user->id)) ?>" style="color: white;" class="btn bt btn-primary btn-flat"><i class="fa fa-eye"></i> View Image</a></li>
        
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
				
            <?php echo form_open_multipart('workroom/Workroom/add_image/'.base64_encode($logged_in_user->id)) ?>
            <?php echo form_hidden('user_id',$this->session->userdata('user_id'));?>
              <?php echo form_hidden('_hidden_field','Add');?>
              

                <div class="form-group">
                  <?php 
                      echo form_label(' Name', 'name');
                      echo form_input( ['name'=>'name', 'class'=>'form-control', 'id'=>'name', 'placeholder'=>'Enter Name',  'minlength'=>'3', 'value'=>set_value('name') ] );
                       ?>
                </div>
                 
               <div class="form-group">
                <?php echo form_label('Image');?>
                  <?php echo form_upload(['name'=>'image','class'=>'form-control','accept'=>'image/*']);?>
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
	
	