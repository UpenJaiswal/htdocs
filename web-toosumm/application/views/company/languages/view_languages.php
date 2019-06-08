    <section class="content-header">
      <h1>
    <input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
      View Languages
      <small>Please show the languages's information below.</small>
    </h1>
      <ol class="breadcrumb">
        <li ><a href="<?php echo base_url('company/languages/add') ?> " style="color: white;" class="btn bt btn-primary btn-flat"><i class="fa fa-plus" ></i> Add Languages</a></li>
      </ol>
    </section>
    <br>
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
            <div class="box-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered">
                  <thead>
                  <tr>
                    <th> <input type="checkbox" class="delete_checkbox1" id="all_checkbox"></th>
                    <th>Languages Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php 
                  
                  foreach ($languages as $value){ ?>
                   <tr class="selectall">   
                   <td>                              
                    <input type="checkbox" class="delete_checkbox  delete_checkbox1" value="<?= $value->id ?>" />
                  </td>
                  <td><?php echo $value->languages_name ?></td>
                  <td>
                  <?php 
                  echo anchor('company/languages/edit/'.base64_encode($value->id), '<i class="fa fa-edit "></i>', ['class'=>'btn btn-primary', 'onclick'=>"return confirm('Do You Want to Edit this Languages ? ')"]); 
                  ?>
                  </td>
                   <td>
                  <?php echo anchor("company/languages/delete_languages/$value->id", '<i class="fa fa-trash-o "></i>', ['class'=>'btn btn-danger', 'onclick'=>"return confirm('Do You Want to Delete this Languages ? ')" ]) ?>
                  </td>
                  </tr>
                  <?php }
                  ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Languages Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
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
  //alert(csrfHash); return false;
  var checkbox = $('.delete_checkbox:checked');
    //console.log(checkbox); return false;      
  if(checkbox.length > 0)
  {
   var checkbox_value = [];
   $(checkbox).each(function(){
    checkbox_value.push($(this).val());
   });
   var url = $('#base_url').val() + 'company/Languages/delete_all';
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
</script>

