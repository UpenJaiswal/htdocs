    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      View Team
      <small>Please show the team's information below.</small>
    </h1>
      <ol class="breadcrumb">
        <li >
          <a href="<?php echo base_url('admin/team/add') ?> " style="color: white;" class="btn bt btn-primary btn-flat"><i class="fa fa-plus" ></i> Add Team
          </a>
        </li>
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
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            </div>
            <div class="box-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped table-hover">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Team Name</th>
                    <th>Team Designation</th>
                    <th>Team Details</th>
                    <th>Team Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                <?php 
                   $i=1;
                    foreach ($team as $value){ ?>
                <tr>   
                <td><?php echo $i++;?></td>
                <td><?php echo $value->name ?></td>
                <td><?php echo $value->designation
                 ?></td>
               <td><?php echo word_limiter ($value->details,50); ?><small class="post-date"> <strong>Posted on: <?php echo date('d-m-Y', strtotime($value->created_at)); ?></strong></small></td>
                <td>
                <img src="<?php echo base_url();?>./Uploads/team/<?php echo $value->image ?>" class="img-responsive img-thumbnail" style="width: 90px; height:90px; cursor: pointer;" />
                </td>
                <td>
                <?php 
                echo anchor('admin/team/edit/'.base64_encode($value->id), '<i class="fa fa-edit "></i>', ['class'=>'btn btn-primary', 'onclick'=>"return confirm('Do You Want to Edit this Team ? ')"]); 
                ?>
                </td>
                  <td>
                  <?php echo anchor("admin/team/delete/$value->id/$value->image", '<i class="fa fa-trash-o "></i>', ['class'=>'btn btn-danger', 'onclick'=>"return confirm('Do You Want to Delete this Team ? ')" ]) ?>
                  </td>
                </tr>
              <?php }?>
              </tbody>
                  <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Team Name</th>
                    <th>Team Designation</th>
                    <th>Team Details</th>
                    <th>Team Image</th>
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
  
  

