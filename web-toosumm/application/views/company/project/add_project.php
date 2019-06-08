<section class="content-header">
     <h1>
      Create Project
      <small>Please show the project's information below.</small>
    </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('company/project'); ?>" style="color: white;" class="btn bt btn-primary btn-flat"><i class="fa fa-eye"></i> View Project</a></li>
        
      </ol>
    </section>
    

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
         <div class="col-md-8 col-md-offset-2">
          <?php
    if(!null==validation_errors()){?>
    <div class="alert alert-danger">
    <strong><?php echo validation_errors();?></strong>
    </div>
    <?php }?>
          <!-- general form elements -->
       <div class="box box-primary toosumm-margin69">
            <div class="box-header with-border">
              
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo form_open_multipart('company/project/add') ?>
            <?php echo form_hidden('user_id',$this->session->userdata('user_id'));?>
              <?php echo form_hidden('_hidden_field','Add');?>
              <div class="box-body">
               <div class="row">
               <!-- <div class="col-md-6">
                
                </div> -->

               <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12">
                       <div class="form-group">
                          <?php 
                              echo form_label('Project Name', 'project_name');
                              echo form_input( ['name'=>'project_name', 'class' => 'form-control toosumm-padding-left', 'id'=>'project_name', 'placeholder'=>'Project Name',  'minlength'=>'3', 'value'=>set_value('project_name') ] );
                               ?>
                           <span class="toosumm-box56">
                           <i class="fa fa-ravelry" aria-hidden="true"></i></span>
                        </div>
                  </div>
                  <div class="col-md-12">
                       <div class="form-group">
                          <?php
                              echo form_label('Start Date');
                              echo form_input( ['name'=>'start_date', 'class'=>'form-control toosumm-padding-left datepick', 'data-inputmask'=>"'alias':'dd/mm/yyyy'", 'data-mask', 'required'=>'required','value'=>set_value('start_date', date('d-m-Y')) ] );
                              ?>
                           <span class="toosumm-box56">
                            <i class="fa fa-calendar"></i></span>
                        </div>
                  </div>
                  <div class="col-md-12">
                        <div class="form-group">
                            <?php 
                               echo form_label('Due Date');
                                
                              echo form_input( ['name'=>'due_date', 'class'=>'form-control toosumm-padding-left datepick', 'required'=>'required', 'placeholder'=>'Choose Date','value'=>set_value('due_date', date('d-m-Y')) ] );
                              ?>
                             <span class="toosumm-box56">
                              <i class="fa fa-calendar"></i></span>
                          </div>
                  </div>
                 
                  <div class="col-md-12">
                             <div class="form-group">
                                <?php 
                                    echo form_label('External Cost:', 'external_cost');
                                    echo form_input( ['name'=>'external_cost', 'onkeypress'=>'return isNumberKey(event)', 'class' => 'form-control toosumm-padding-left', 'id'=>'external_cost', 'placeholder'=>'External cast',  'minlength'=>'3', 'value'=>set_value('external_cost') ] );
                                     ?>
                                 <span class="toosumm-box56">
                                 <i class="fa fa-usd" aria-hidden="true"></i>
                                   </span>
                              </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                              <?php echo form_label('Image');?>
                                <?php echo form_upload(['name'=>'project_image','class'=>'form-control toosumm-padding-left','accept'=>'image/*']);?>
                                 <span class="toosumm-box56"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
                              </div>
                        </div>
                </div>
                
              </div>

              <div class="col-md-6">
                   <div class="row">
                        <div class="col-md-12">
                             <div class="form-group">
                                  <label>Choose Priority</label>
                                  <select name="priority_id" class="form-control toosumm-padding-left select2">
                                     <option value="">Select Priority</option>
                                    <?php foreach ($priority_list as $value): ?>
                                 
                                    <option value="<?php echo $value->id; ?>" <?php echo set_select('priority_id', $value->id, false); ?> ><?php echo $value->priority_name; ?> </option>
                                    <?php endforeach; ?>
                                  </select>
                                  <span class="toosumm-box56"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
                                </div>
                        </div>

                        <div class="col-md-12">
                             <div class="form-group">
                                <label>Choose clients</label>
                                <select name="clients_id" class="form-control toosumm-padding-left select2">
                                   <option value="">Select clients</option>
                                  <?php foreach ($clients_list as $value): ?>
                               
                                  <option value="<?php echo $value->id; ?>" <?php echo set_select('clients_id', $value->id, false); ?> ><?php echo $value->clients_name; ?> </option>
                                  <?php endforeach; ?>
                                </select>
                                <span class="toosumm-box56"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
                              </div>
                        </div>

                        <div class="col-md-12">
                        <div class="form-group">
                          <label>Choose Status</label>
                          <select name="status_id" class="form-control toosumm-padding-left select2">
                             <option value="">Select Status</option>
                            <?php foreach ($status_list as $value): ?>
                         
                            <option value="<?php echo $value->id; ?>" <?php echo set_select('status_id', $value->id, false); ?> ><?php echo $value->status; ?> </option>
                            <?php endforeach; ?>
                          </select>
                          <span class="toosumm-box56"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
                        </div>
                  </div>

                     

                        <div class="col-md-12">
                              <div class="form-group">
                                  <?php 
                                      echo form_label('Internal Cost :', 'internal_cost');
                                      echo form_input( ['name'=>'internal_cost', 'onkeypress'=>'return isNumberKey(event)', 'class' => 'form-control toosumm-padding-left', 'id'=>'internal_cost', 'placeholder'=>'Internal cast',  'minlength'=>'3', 'value'=>set_value('internal_cost') ] );
                                       ?>
                                   <span class="toosumm-box56">
                                   <i class="fa fa-usd" aria-hidden="true"></i>
                                             </span>
                                </div>
                        </div>

                        
                   </div>
              </div>
               

                  

                

              
                

                        

                                  
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
  
  


  
   
  