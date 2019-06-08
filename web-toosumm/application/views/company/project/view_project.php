
    <section class="content-header">
      <h1>
        <input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
      View Project
      <small>Please show the project's information below.</small>
    </h1>
     
      <ol class="breadcrumb">
        <li ><a href="<?php echo base_url('company/project/add') ?> " style="color: white;" class="btn bt btn-primary btn-flat"><i class="fa fa-plus" ></i> Create Project</a></li>
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
                         <a href="#" class="btn btn-danger delete-btn1" name="delete_all" id="delete_all">
                          <i class="fa fa-trash-o "></i>
                         </a>
                     </li>
                 </ul>             
             </div>
             <?php //echo '<pre>'; print_r($project); exit(); ?>
              <div class="box-body">
                  <div class="table-responsive">
                      <table id="example1" class="table table-bordered ">
                        <thead>
                          <tr>
                        <th> <input type="checkbox" name="select-check" class="delete_checkbox1" id="all_checkbox"></th>
                          <th>Project Name</th>
                          <th>Start Date</th>
                          <th>Due Date</th>
                          <th>Status</th>
                          <th>Priority</th>
                          <th>Client</th>
                          <th>Image</th>
                         
                          <th>Action</th>
                          </tr>
                        </thead>
                          <tbody>
                          <?php 
                                                     //$this->load->helper('test_project');
                       // echo "<pre>";print_r($project); 

                           //$value=find_team($value->id);

                          foreach ($project as $value) { ?>
                            <?php                          // $value=find_team($value->id);
                                   ?>
                            <tr class="selectall"> 
                            <td>                              
                              <input type="checkbox" name="select-check" class="delete_checkbox  delete_checkbox1" value="<?= $value->id ?>" />
                            </td> 
                          <td><?php echo $value->project_name ?><small class="post-date"> <strong>Created on: <?php echo date('d-m-Y', strtotime($value->created_at)); ?></strong></small></td>
                            <td><?php echo date('d-m-Y', strtotime($value->start_date)); ?></td>
                            <td><?php echo date('d-m-Y', strtotime($value->due_date)); ?></td>
                             
                             <td><?php echo word_limiter ($value->status,50); ?></td>
                        <td><?php echo $value->priority_name ?></td>
                        <td><?php echo $value->clients_name ?></td>

                          <td>
                          <img src="<?php echo base_url();?>./Uploads/project/<?php echo $value->project_image ?>" class="img-responsive img-thumbnail" style="width: 70px; height:70px; cursor: pointer;" />
                          </td>
                          <td>
                              <div class="btn-group">
                                <button type="button" class="btn btn-primary btn-flat">
                                  Action
                                </button>
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                  <span class="caret"></span>
                                  <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                  <li>
                                    <a href="#"class="btn btn-lg btn-primary project-details23" data-toggle="modal" data-target="#largeModal"><i class="fa fa-plus-circle"></i>  View Details
                                    </a>
                                  </li>
                                  
                                  <li>
                                    <?php 
                             echo anchor('company/project/edit/'.base64_encode($value->id), '<i class="fa fa-edit "></i>Edit', ['class'=>'btn  btn-lg btn-primary project-details23', 'onclick'=>"return confirm('Do You Want to Edit this Project ? ')"]); 
                           ?>
                                  </li>

                                  <li><?php echo anchor("company/Project/delete_project/$value->id/$value->project_image", '<i class="fa fa-trash-o "></i>Delete', ['class'=>'btn  btn-lg btn-danger
                                   project-details23', 'onclick'=>"return confirm('Do You Want to Delete this Project ? ')" ]) ?> </li>
                                  
                                                                
                                </ul>
                              </div>
                            </td>

                            <!-- <td>
                               <?php 
                             echo anchor('company/project/edit/'.base64_encode($value->id), '<i class="fa fa-edit "></i>', ['class'=>'btn btn-primary', 'onclick'=>"return confirm('Do You Want to Edit this Project ? ')"]); 
                           ?>
                         <?php echo anchor("company/Project/delete_project/$value->id/$value->project_image", '<i class="fa fa-trash-o "></i>', ['class'=>'btn btn-danger', 'onclick'=>"return confirm('Do You Want to Delete this Project ? ')" ]) ?> 
                            </td> -->
                           <?php } ?>
                           </tbody>
                            <tfoot>
                                 <tr>
                           <th> </th>
                          <th>Project Name</th>
                          <th>Start Date</th>
                          <th>Due Date</th>
                          <th>Status</th>
                          <th>Priority</th>
                          <th>Client</th>
                          <th>Image</th>
                          <th>Edit</th>
                          
                          </tr>
                          
                            </tfoot>
                      </table>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!-- large modal -->
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="false">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title project-details-heading" id="myModalLabel">Project Details</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body modal-paddding">
           <div class="box">  
            
            <div class="box-header1">
                 <ul class="delete-class">
                     <li>
                         <a href="#" class="btn btn-danger delete-btn1" name="delete_all" id="delete_all">
                          <i class="fa fa-trash-o "></i>
                         </a>
                     </li>
                 </ul>             
             </div>
              <div class="box-body">
                  <div class="table-responsive">
                      <table id="example5" class="table table-bordered ">
                        <thead>
                          <tr>
                          <th>Total Logged Time</th>
                          <th>Total Cost</th>
                          <th>Total Revenue</th>
                          </tr>
                        </thead>
                          <tbody>
                          <?php 
                         // $this->load->helper('test_project');
                       // echo "<pre>";print_r($project); 
                          foreach ($project as $value) { ?>
                            <?php // $value=find_team($value->id);
 ?>
                            <tr> 
                            
                          <td>Total logged time</td>
                         
                            <td><?php echo date('d-m-Y', strtotime($value->due_date)); ?></td>
                             
                             <td><?php echo word_limiter ($value->status,50); ?></td>
                        

                          <td>
                          
                          </td>
                          

                            
                           <?php } ?>
                           </tbody>
                            <tfoot>
                                 <tr>
                          <th>Total Logged Time</th>
                          <th>Total Cost</th>
                          <th>Total Revenue</th>
                          </tr>
                            </tfoot>
                      </table>
                  </div>
              </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



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
  //alert(csrfHash); return false;

  var checkbox = $('.delete_checkbox:checked');
    //console.log(checkbox); return false;
      
  if(checkbox.length > 0)
  {
   var checkbox_value = [];
   $(checkbox).each(function(){
    checkbox_value.push($(this).val());
   });
   var url = $('#base_url').val() + 'company/Project/delete_all';
   //alert(url); return false;
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
var btncolor = $("input[name='select-check']:checkbox");
btncolor.on("change", function() {
  $(".delete").toggleClass("current_active", btncolor.is(":checked"));
});
</script>




     