    <!-- Content Header (Page header) -->
   
    <section class="content-header">
        <h1>
      View Blog
      <small>Please show the blog's information below.</small>
    </h1>
      <ol class="breadcrumb">
        <li ><a href="<?php echo base_url('admin/blog/add') ?> " style="color: white;" class="btn bt btn-primary btn-flat"><i class="fa fa-plus" ></i> Add Blog</a></li>
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
    <?php //echo "<pre>", print_r($blog), exit; ?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped table-hover">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Blog Name</th>
                    <th>Blog Description</th>
                    <th>Blog Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
      
      <?php 
     // echo "<pre>", print_r($blog);
           $i=1;
          foreach ($blog as $value) 
          {
      ?>
      <tr>   
      <td><?php echo $i++;?></td>
      <td><?php echo $value->blog_name ?></td>

      <td><?php echo word_limiter ($value->blog_detail,50); ?><small class="post-date"> <strong>Posted on: <?php echo date('d-m-Y', strtotime($value->created_at)); ?></strong></small></td>
      <td>
      <img src="<?php echo base_url();?>./Uploads/blog/<?php echo $value->blog_image ?>" class="img-responsive img-thumbnail" style="width: 90px; height:90px; cursor: pointer;" />
      </td>
      
         <td>
      <?php 
      echo anchor('admin/blog/edit/'.base64_encode($value->id), '<i class="fa fa-edit "></i>', ['class'=>'btn btn-primary', 'onclick'=>"return confirm('Do You Want to Edit this Blog ? ')"]); 
      ?>
      </td>
        <td>
        <?php echo anchor("admin/blog/delete/$value->id/$value->blog_image", '<i class="fa fa-trash-o "></i>', ['class'=>'btn btn-danger', 'onclick'=>"return confirm('Do You Want to Delete this Blog ? ')" ]) ?>
        </td>
      </tr>
      <?php }?>
    </tbody>
                  <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Blog Name</th>
                    <th>Blog Description</th>
                    <th>Blog Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  
  

