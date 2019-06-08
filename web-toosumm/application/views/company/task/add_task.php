<section class="content-header">
     <h1>
      Create Task
      <small>Please show the task's information below.</small>
    </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('company/project'); ?>" style="color: white;" class="btn bt btn-primary btn-flat"><i class="fa fa-eye"></i> Back to Project</a></li>
         <li><a href="<?php echo base_url('company/task'); ?>" style="color: white;" class="btn bt btn-primary btn-flat"><i class="fa fa-eye"></i> View Task</a></li>
        
      </ol>
    </section>
    

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
         <div class="col-md-6 col-md-offset-3">
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
            <?php echo form_open_multipart('company/task/add') ?>
            <?php echo form_hidden('user_id',$this->session->userdata('user_id'));?>
            
              <div class="box-body">
                 <div class="col-md-12">
                             <div class="form-group">
                                  <label>Choose Project</label>
                                  <select name="project_id" class="form-control toosumm-padding-left select2">
                                     <option value="">Select Project</option>
                                    <?php foreach ($project_list as $value): ?>
                                 
                                    <option value="<?php echo $value->id; ?>" <?php echo set_select('project_id', $value->id, false); ?> ><?php echo $value->project_name; ?> </option>
                                    <?php endforeach; ?>
                                  </select>
                                  <span class="toosumm-box56"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
                                </div>
                        </div>
                <div class="form-group">
                  <?php 
                      echo form_label('Task Name', 'task_name');
                      echo form_input( ['name'=>'task_name', 'class' => 'form-control toosumm-padding-left', 'id'=>'task_name', 'placeholder'=>'Task Name',  'minlength'=>'3', 'value'=>set_value('task_name') ] );
                       ?>
                   <span class="toosumm-box56"><i class="fa fa-tasks" aria-hidden="true"></i></span>
                </div>

                    <div class="form-group">
                  <?php 
                      echo form_label('Task Description', 'task_details');
                      echo form_textarea( ['name'=>'task_details', 'class'=>'ckeditor', 'id'=>'task_details', 'placeholder'=>'Task Description', 'minlength'=>'3', 'value'=>set_value('task_details') ] );
                       ?>     

                </div>


                       <div class="form-group">
                          <?php
                              echo form_label('Start Date');
                              echo form_input( ['name'=>'start_date', 'class'=>'form-control toosumm-padding-left datepick', 'data-inputmask'=>"'alias':'dd/mm/yyyy'", 'data-mask', 'required'=>'required','value'=>set_value('start_date', date('d-m-Y')) ] );
                              ?>
                           <span class="toosumm-box56">
                            <i class="fa fa-calendar"></i></span>
                        </div>
                  
                 
                        <div class="form-group">
                            <?php 
                               echo form_label('Due Date');
                                
                              echo form_input( ['name'=>'due_date', 'class'=>'form-control toosumm-padding-left datepick', 'required'=>'required', 'placeholder'=>'Choose Date','value'=>set_value('due_date', date('d-m-Y')) ] );
                              ?>
                             <span class="toosumm-box56">
                              <i class="fa fa-calendar"></i></span>
                          </div>
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
                             <div class="form-group choosen-margin"> 
                               <div id="output"></div>
                               <?php echo form_label('Select team member');?> 
                                          
                               <select data-placeholder="Select Team" name="team_id[]" multiple class="chosen-select form-control toosumm-padding-left">
                                 <?php foreach ($team as $value): ?>
                                  <option value="<?php echo $value->id; ?>" <?php echo ($value->id) ?>> <?php echo $value->first_name;?>  </option>
                                 <?php endforeach; ?>
                               </select> 
                               <span class="toosumm-box56 margin-icon-user"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                               
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
  
  


  
  