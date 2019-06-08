    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="btn-group btn-breadcrumb">
        <a href="<?php echo base_url('admin/portfolio'); ?>" class="btn btn-primary btn-flat">
          <i class="glyphicon glyphicon-home"></i>
        </a>
        <a href="#" class="btn btn-default btn-flat"><i class="fa fa-archive fa-lg"></i>&nbsp; Portfolio</a>
      </div>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-eye"></i> <b>View Portfolio</b></li>
        <li >
          <a href="<?php echo base_url('admin/portfolio/add') ?> " style="color: white;" class="btn bt btn-primary btn-flat"><i class="fa fa-plus" ></i> Add Portfolio
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
              <h3 class="box-title">View</h3>
            </div>
            <div class="box-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped table-hover">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Portfolio Name</th>
                    <th>Portfolio</th>
                    <th>Edit</th>
                   </tr>
                  </thead>
                  <tbody>
                <?php 
                   $i=1;
                    foreach ($portfolio as $value){ ?>
                <tr>   
                <td><?php echo $i++;?></td>
                <td><?php echo $value->name ?></td>
                <td>
                <img src="<?php echo base_url();?>./Uploads/portfolio/<?php echo $value->image ?>" class="img-responsive img-thumbnail" style="width: 90px; height:90px; cursor: pointer;" />
                </td>
                <td>
                <?php 
                echo anchor('admin/portfolio/edit/'.base64_encode($value->id), '<i class="fa fa-edit "></i>', ['class'=>'btn btn-primary', 'onclick'=>"return confirm('Do You Want to Edit this Portfolio ? ')"]); 
                ?>
                </td>
                 <!--  <td>
                  <?php echo anchor("admin/portfolio/delete/$value->id/$value->image", '<i class="fa fa-trash-o "></i>', ['class'=>'btn btn-danger', 'onclick'=>"return confirm('Do You Want to Delete this Team ? ')" ]) ?>
                  </td> -->
                </tr>
              <?php }?>
              </tbody>
                  <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Portfolio Name</th>
                    <th>Portfolio</th>
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
  
  

