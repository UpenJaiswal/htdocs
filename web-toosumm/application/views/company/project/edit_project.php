<section class="content-header">
      <h1>
      Edit Project
      <small>Please Edit the project's information below.</small>
    </h1>
      <ol class="breadcrumb">
        <li>
          <a href="<?php echo base_url('company/project/add') ?>" style="color: white;" class="btn btn-primary btn-flat">  <i class="fa fa-pencil"></i> Add Project
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('company/project') ?>" style="color: white;" class="btn btn-primary btn-flat">  <i class="fa fa-eye"></i> View Project
          </a>
        </li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
         <?php if(!null==validation_errors()){?>
          <div class="alert alert-danger">
          <strong><?php echo validation_errors();?></strong>
          </div>
          <?php }?>
          <div class="box box-primary toosumm-margin69">
            <div class="box-header with-border">
             
            </div>
            <?php //echo '<pre>';print_r($project) ?>
           <?php echo form_open_multipart('company/project/edit_project/'.base64_encode($project->id)) ?> 
              <div class="box-body">
                <div class="row">
                     <div class="col-md-6">
                          <div class="row">
                              <div class="col-md-12">
                                   <div class="form-group">
                                      <?php 
                                         echo form_label('Project Name', 'project_name');
                                          echo form_input( ['name'=>'project_name', 'class'=>'form-control toosumm-padding-left', 'id'=>'project_name', 'placeholder'=>' Project Name',  'value'=>set_value('project_name',$project->project_name) ] );
                                           ?>
                                            <span class="toosumm-box56"><i class="fa fa-rss-square" aria-hidden="true"></i></span>
                                    </div>
                              </div>
                              <div class="col-md-12">
                                   <div class="form-group">
                                      <?php
                                          echo form_label('Start Date');
                                          echo form_input( ['name'=>'start_date', 'class'=>'form-control toosumm-padding-left datepick', 'data-inputmask'=>"'alias':'dd/mm/yyyy'", 'data-mask', 'required'=>'required','value'=>set_value('start_date', date('d-m-Y', strtotime($project->start_date)))]);
                                          ?>
                                       <span class="toosumm-box56">
                                        <i class="fa fa-calendar"></i></span>
                                    </div>
                              </div>
                              <div class="col-md-12">
                                   <div class="form-group">
                                      <?php
                                          echo form_label('Due Date');
                                          echo form_input( ['name'=>'due_date', 'class'=>'form-control toosumm-padding-left datepick', 'data-inputmask'=>"'alias':'dd/mm/yyyy'", 'data-mask', 'required'=>'required','value'=>set_value('due_date', date('d-m-Y', strtotime($project->due_date)))]);
                                          ?>
                                       <span class="toosumm-box56">
                                        <i class="fa fa-calendar"></i></span>
                                    </div>                      
                              </div>
                             
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label>Choose Status</label>
                                      <select name="status_id" class="form-control toosumm-padding-left select2">
                                      <?php foreach ($status_list as $value) { ?>
                                      <option <?php if($value->id == "$project->status_id"){ echo 'selected="selected"'; } ?> value="<?php echo $value->id ?>"><?php echo $value->status ; ?>  </option>
                                      <?php } ?>
                                      </select>
                                      <span class="toosumm-box56"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
                                  </div>                      
                              </div>

                              <div class="col-md-12">
                                   <div class="form-group">

                                        <label>Choose Priority</label>
                                        <select name="priority_id" class="form-control toosumm-padding-left select2">
                                        <?php foreach ($priority_list as $value) { ?>
                                        <option <?php if($value->id == "$project->priority_id"){ echo 'selected="selected"'; } ?> value="<?php echo $value->id ?>"><?php echo $value->priority_name?> </option>
                                        <?php } ?>
                                        </select>
                                        <span class="toosumm-box56"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
                                        </div>
                              </div>
                              <div class="col-md-12">
                                   <div class="form-group">
                                      <label>Choose Client</label>
                                      <select name="clients_id" class="form-control toosumm-padding-left select2">
                                      <?php foreach ($clients_list as $value) { ?>
                                      <option <?php if($value->id == "$project->clients_id"){ echo 'selected="selected"'; } ?> value="<?php echo $value->id ?>"><?php echo $value->clients_name?> </option>
                                      <?php } ?>
                                      </select>
                                      <span class="toosumm-box56"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
                                      </div>
                              </div>
                              
                              
                              
                          </div>
                     </div>
                     <div class="col-md-6">
                          <div class="row">
                               
                              <div class="col-md-12">
                                   <div class="form-group">
                                      <?php 
                                         echo form_label('Internal Cost', 'internal_cost');
                                          echo form_input( ['name'=>'internal_cost', 'onkeypress'=>'return isNumberKey(event)','class'=>'form-control toosumm-padding-left', 'id'=>'internal_cost', 'placeholder'=>' Project Name',  'value'=>set_value('internal_cost',$project->internal_cost) ] );
                                           ?>
                                            <span class="toosumm-box56">
                                             <i class="fa fa-usd" aria-hidden="true"></i>
                                               </span>
                                    </div>
                              </div>

                              <div class="col-md-12">
                                   <div class="form-group">
                                      <?php 
                                         echo form_label('External Cost', 'external_cost');
                                          echo form_input( ['name'=>'external_cost', 'onkeypress'=>'return isNumberKey(event)','class'=>'form-control toosumm-padding-left', 'id'=>'external_cost', 'placeholder'=>' Project Name',  'value'=>set_value('external_cost',$project->external_cost) ] );
                                           ?>
                                           <span class="toosumm-box56">
                                         <i class="fa fa-usd" aria-hidden="true"></i>
                                           </span>
                                    </div>
                              </div>

                          
                               <div class="col-md-12">
                                    <div class="form-group">
                                       <?php echo form_label('Image');?>
                                        <div >
                                          <p><img src="<?php echo base_url();?>./Uploads/project/<?php echo $project->project_image; ?>" class="img-responsive img-thumbnail" height="150" width="150" /></p>
                                         <?php echo form_upload(['name'=>'project_image', 'class'=>'form-control toosumm-padding-left']);?>
                                                  <span class="toosumm-box56"><i class="fa fa-rss-square" aria-hidden="true"></i></span>

                                         </div>

                                      </div>
                                 </div>
                          </div>
                     </div>
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
  

  
  


  
  