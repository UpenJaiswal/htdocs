<div class="toosum-section">
	    <div class="container">
		    <div class="row">			    
				 <section class="content-header">
			      <ol class="breadcrumb">
			        <li class="active">
                <i class="fa fa-eye"></i> <b>View Certificates</b>
              </li>
			        <li >
                <a href="<?php echo base_url('workroom/Workroom/add_certificates/'.base64_encode($logged_in_user->id)) ?>" style="color: white;" class="btn bt btn-primary btn-flat">
                  <i class="fa fa-plus" ></i> Add Certificates</a>
              </li>	
              <li >
                <a href="<?php echo base_url('profile/edit/'.base64_encode($logged_in_user->id)) ?>" style="color: white;" class="btn bt btn-primary btn-flat">
                  <i class="fa fa-arrow-left" aria-hidden="true"></i>Back</a>
                </li>
          </ol>
			    </section>
			     <?php if($this->session->flashdata('message')) { ?>
      <div class="col-md-12">
      <div class="alert <?php echo $this->session->flashdata('class'); ?> alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
       <i class="icon fa fa-check"></i> <?php echo $this->session->flashdata('main_message'); ?>
        <?php echo $this->session->flashdata('message'); ?>
      </div>
    </div>
    <?php } ?>
			</div>
		   <div class="edit_portfolio" >						
						<div class="box-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped table-hover">
                  <thead>
                  <tr>
                    <th>Start</th>
                    <th>End</th>
                    <th>Certificate name</th>
                    <th>Organization</th>
                    <th>License number</th>
                    <th>Certificate url</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody> 
      <?php   
     // echo '<pre>'; print_r($certificates_list);       
         foreach ($certificates_list as $value){ ?>
      <tr>      
      <td><?php echo date('d/m/Y', strtotime($value->start)); ?><br><small class="post-date"> <strong>Posted on: <?php echo date('d/m/Y', strtotime($value->created_at)); ?></strong></small>
      </td>
       <td><?php echo date('d/m/Y', strtotime($value->end)); ?></td>      
       <td><?php echo $value->certificate_name ; ?></td>      
       <td><?php echo $value->organization ; ?></td>      
       <td><?php echo $value->license_number ; ?></td>      
       <td><?php echo $value->certificate_url ; ?></td>      
   <td>
      <?php 
      echo anchor('workroom/Workroom/edit_certificates/'.base64_encode($value->id), '<i class="fa fa-edit "></i>', ['class'=>'btn btn-primary', 'onclick'=>"return confirm('Do You Want to Edit this Certificate ? ')"]); 
      ?>
      </td> 
        <td>
        <?php echo anchor('workroom/Workroom/delete_certificates/'.base64_encode($value->id), '<i class="fa fa-trash-o "></i>', ['class'=>'btn btn-danger', 'onclick'=>"return confirm('Do You Want to Delete this Certificate ? ')" ]) ?>
        </td>
      </tr>
      <?php }?>
    </tbody>
    <tfoot>
     <tr>
      <th>Start</th>
      <th>End</th>
      <th>Certificate name</th>
      <th>Organization</th>
      <th>License number</th>
      <th>Certificate url</th>
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
	 
	