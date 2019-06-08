<section class="content-header">
      <h1>
      Edit Task
      <small>Please show the task's information below.</small>
    </h1>
      <ol class="breadcrumb">
        <li>
          <a href="<?php echo base_url('company/task/add') ?>" style="color: white;" class="btn btn-primary btn-flat">  <i class="fa fa-pencil"></i> Add Task
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('company/task') ?>" style="color: white;" class="btn btn-primary btn-flat">  <i class="fa fa-eye"></i> View Task
          </a>
        </li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
         <?php if(!null==validation_errors()){?>
          <div class="alert alert-danger">
          <strong><?php echo validation_errors();?></strong>
          </div>
          <?php }?>
          <div class="box box-primary toosumm-margin69">
            <div class="box-header with-border">
             
            </div>
            <?php echo form_open_multipart('company/task/edit/'.base64_encode($task->id)) ?>
              <div class="box-body">
                   <div class="col-md-12">
                                  <div class="form-group">
                                      <label>Choose Project</label>
                                      <select name="project_id" class="form-control toosumm-padding-left select2">
                                      <?php foreach ($project_list as $value) { ?>
                                      <option <?php if($value->id == "$task->project_id"){ echo 'selected="selected"'; } ?> value="<?php echo $value->id ?>"><?php echo $value->project_name ; ?>  </option>
                                      <?php } ?>
                                      </select>
                                      <span class="toosumm-box56"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
                                  </div>                      
                              </div>
                <div class="form-group">
                  <?php 
                     echo form_label('Task Name', 'task_name');
                      echo form_input( ['name'=>'task_name', 'class'=>'form-control toosumm-padding-left', 'id'=>'task_name', 'placeholder'=>' Clients Name',  'value'=>set_value('task_name',$task->task_name) ] );
                       ?>
                        <span class="toosumm-box56"><i class="fa fa-rss-square" aria-hidden="true"></i></span>
                </div>
                      <div class="form-group">
                  <?php 
                      echo form_label('Task Description', 'task_details');
                      echo form_textarea( ['name'=>'task_details', 'rows'=>'3', 'class'=>'ckeditor', 'id'=>'task_details', 'placeholder'=>'Task Description', 'minlength'=>'3', 'value'=>set_value('task_details', $task->task_details) ] );

                       ?>                        
                </div>
                     
                                   <div class="form-group">
                                      <?php
                                          echo form_label('Start Date');
                                          echo form_input( ['name'=>'start_date', 'class'=>'form-control toosumm-padding-left datepick', 'data-inputmask'=>"'alias':'dd/mm/yyyy'", 'data-mask', 'required'=>'required','value'=>set_value('start_date', date('d-m-Y', strtotime($task->start_date)))]);
                                          ?>
                                       <span class="toosumm-box56">
                                        <i class="fa fa-calendar"></i></span>
                                    </div>
                           
                            
                                   <div class="form-group">
                                      <?php
                                          echo form_label('Due Date');
                                          echo form_input( ['name'=>'due_date', 'class'=>'form-control toosumm-padding-left datepick', 'data-inputmask'=>"'alias':'dd/mm/yyyy'", 'data-mask', 'required'=>'required','value'=>set_value('due_date', date('d-m-Y', strtotime($task->due_date)))]);
                                          ?>
                                       <span class="toosumm-box56">
                                        <i class="fa fa-calendar"></i></span>
                              </div>
                               <div class="form-group">
                                      <label>Choose Status</label>
                                      <select name="status_id" class="form-control toosumm-padding-left select2">
                                      <?php foreach ($status_list as $value) { ?>
                                      <option <?php if($value->id == "$task->status_id"){ echo 'selected="selected"'; } ?> value="<?php echo $value->id ?>"><?php echo $value->status ; ?>  </option>
                                      <?php } ?>
                                      </select>
                                      <span class="toosumm-box56"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
                                  </div>

                                  <div class="form-group">

                                        <label>Choose Priority</label>
                                        <select name="priority_id" class="form-control toosumm-padding-left select2">
                                        <?php foreach ($priority_list as $value) { ?>
                                        <option <?php if($value->id == "$task->priority_id"){ echo 'selected="selected"'; } ?> value="<?php echo $value->id ?>"><?php echo $value->priority_name?> </option>
                                        <?php } ?>
                                        </select>
                                        <span class="toosumm-box56"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
                                        </div>

                <div class="form-group"> 
                                         <div id="output"></div>
                                         <?php echo form_label('Select team member');?> 
                                                    
                                         <select data-placeholder="Select Team" name="team_id[]" multiple class="chosen-select form-control toosumm-padding-left">

                                           <?php foreach ($team as $value): ?>
                                            <option value="<?php echo $value->id; ?>" <?php echo (in_array($value->id, $team_id_array)) ? 'selected' : '' ?>> <?php echo $value->first_name;?>  </option>
                                           <?php endforeach; ?>
                                         </select> 
                                         <span class="toosumm-box56 margin-icon-user"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                                         
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
  

  
  


  
  