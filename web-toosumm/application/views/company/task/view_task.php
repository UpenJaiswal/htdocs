    <section class="content-header">
      <h1>
        <input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
      View Task
      <small>Please show the task's information below.</small>
    </h1>
      <ol class="breadcrumb">
        <li ><a href="<?php echo base_url('company/task/add') ?> " style="color: white;" class="btn bt btn-primary btn-flat"><i class="fa fa-plus" ></i> Add Task</a></li>
      </ol>
    </section><br>
    <?php if($this->session->flashdata('message')) { ?>
    <div class="col-md-12">
      <div class="alert <?php echo $this->session->flashdata('class'); ?> alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
       <i class="icon fa fa-check"></i> <?php echo $this->session->flashdata('main_message'); ?>
        <?php echo $this->session->flashdata('message'); ?>
      </div>
    </div>
    <?php } ?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header1">
                 <ul class="delete-class">
                     <li>
                         <a href="#" class="btn btn-danger delete-btn1"  name="delete_all" id="delete_all" onclick="return confirm('Do You Want to Edit this Task ? ')">
                          <i class="fa fa-trash-o "></i>
                         </a>
                     </li>
                 </ul>             
             </div>
              <div class="box-body">
                  <div class="table-responsive">
                      <table id="example1" class="table table-bordered">
                        <thead>
                          <tr>
                           <th> <input type="checkbox" name="select-check" class="delete_checkbox1" id="all_checkbox"></th>
                          <th>Project Name</th>
                          <th>Task</th>
                          <th>Start Date</th>
                          <th>Due Date</th>
                          <th>Task Details</th>
                          <th>Task Status</th>
                          <th>Task Priority</th>
                          <th>Team</th>
                          <th>Action</th>
                          </tr>
                        </thead>
                          <tbody>
                          <?php 
                         //echo '<pre>'; print_r($task); exit();
                          if (is_array($task)) {
                            foreach ($task as $value) { ?>

                            <tr class="selectall">  
                            <td>                              
                              <input type="checkbox" name="select-check" class="delete_checkbox  delete_checkbox1" value="<?= $value->id ?>" />
                            </td>
                            <td><?php echo $value->project_name; ?></td>
                            <td><?php echo $value->task_name ?></td>
                             <td><?php echo date('d-m-Y', strtotime($value->start_date)); ?></td>
                            <td><?php echo date('d-m-Y', strtotime($value->due_date)); ?></td>
                           <td><?php echo word_limiter ($value->task_details,5); ?><small class="post-date"> <strong>Posted on: <?php echo date('d-m-Y', strtotime($value->created_at)); ?></strong></small></td>
                           <td><?php echo $value->status; ?></td>
                           <td><?php echo $value->priority_name; ?></td>


                             <td>

                              <ul class="task-image1">
                                      <?php 
                            foreach ($task_team_array[$value->id] as $task_team) { ?>
                              <?php 
                               echo '<li>'; 
                             
                             // echo "<pre>", print_r($task_team);
                              // foreach ($task_team_array as $team) {
                                 echo $task_team->first_name;

                                 ?>


                                  <?php if($task_team->image == TRUE) {?>
          <img src="<?php echo base_url();?>./Uploads/users/<?php echo $task_team->image ?>" class="img-responsive img-thumbnail task-image2" style="width: 40px; height:40px; cursor: pointer;" />

            <?php
            }else{ ?>

            <img class="img-responsive img-thumbnail task-image2" src="<?php echo base_url('/Uploads/users/index.jpg');?>" alt="User profile picture" style="width: 40px; height:40px; cursor: pointer;">
            <?php } ?>
          
                              
                            <?php 
                           echo ' </li>';
                          }

                           ?>
                               
                              </ul>

                              
                             
                           </td>
                             <td><div class="btn-group">
                                <button type="button" class="btn btn-primary btn-flat">
                                  Action
                                </button>
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                  <span class="caret"></span>
                                  <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">                              
                                  
                                  <li>
                                    <?php 
                             echo anchor('company/task/edit/'.base64_encode($value->id), '<i class="fa fa-edit "></i>Edit', ['class'=>'btn  btn-lg btn-primary project-details23', 'onclick'=>"return confirm('Do You Want to Edit this Project ? ')"]); 
                           ?>
                                  </li>

                                  <li> <?php echo anchor("company/Task/delete_task/$value->id",'<i class="fa fa-trash-o "></i>Delete', ['class'=>'btn  btn-lg btn-danger
                                   project-details23', 'onclick'=>"return confirm('Do You Want to Delete this Project ? ')" ]) ?> </li>
                                  
                                                                
                                </ul>
                              </div></td>
                           <!--  <td>
                            <?php 
                             echo anchor('company/task/edit/'.base64_encode($value->id), '<i class="fa fa-edit "></i>', ['class'=>'btn btn-primary', 'onclick'=>"return confirm('Do You Want to Edit this Task ? ')"]); 
                           ?></td>  
                            <td>
                            <?php echo anchor("company/Task/delete_task/$value->id", '<i class="fa fa-trash-o "></i>', ['class'=>'btn btn-danger', 'onclick'=>"return confirm('Do You Want to Delete this Task ? ')" ]) ?>
                            </td> -->
                           <?php } 
                          }else {
                            echo 'string';
                          }?>
                         
                           </tbody>
                            <tfoot>
                              <tr>
                           <th></th>
                          <th>Project Name</th>
                          <th>Task</th>
                          <th>Start Date</th>
                          <th>Due Date</th>
                          <th>Task Details</th>
                           <th>Task Status</th>
                          <th>Task Priority</th>
                          <th>Team</th>
                          <th>Action</th>
                          </tr>
                            </tfoot>
                      </table>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </section>
  <script>
$(document).ready(function(){

 $('.delete_checkbox').click(function(){
  if($(this).is(':checked'))
  {
   $(this).closest('tr').addClass('removeRow');

  }

  else
  {
   $(this).closest('tr').removeClass('removeRow');
  }
 });

 $('#delete_all').click(function(){

  var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>';
  var csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
 

  var checkbox = $('.delete_checkbox:checked');
    //console.log(checkbox); return false;
      
  if(checkbox.length > 0)
  {
   var checkbox_value = [];
   $(checkbox).each(function(){
    checkbox_value.push($(this).val());
   });
   var url = $('#base_url').val() + 'company/Task/delete_all';
   //alert('hi'); return false;
   $.ajax({
    url:url,
    type:"POST",
    data:{'checkbox_value':checkbox_value, csrf_test_name:csrfHash},
    success:function(data)
    {
     $('.removeRow').fadeOut(1500);
   
     window.location.reload(); 
    }, 
    error: function() {
      alert('entered in error');
    }
   });
  }
  else
  {
   alert('Select atleast one records');
  }
 });

});
</script>
  

