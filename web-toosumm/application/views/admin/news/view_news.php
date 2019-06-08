    <!-- Content Header (Page header) -->
    <section class="content-header">
       <h1>
      View Blog
      <small>Please show the blog's information below.</small>
    </h1>
      <ol class="breadcrumb">
        <li ><a href="<?php echo base_url('admin/news/add') ?> " style="color: white;" class="btn bt btn-primary btn-flat"><i class="fa fa-plus" ></i> Add News</a></li>
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
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped table-hover">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>News Title</th>
                    <th>News Description</th>
                    <th>News Category</th>
                    <th>News Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
      
      <?php 
           $i=1;
          foreach ($news as $value) 
          {
            //echo "<pre>", print_r($value), exit;
            
      ?>
      <tr>   
      <td><?php echo $i++;?></td>
      <td><?php echo $value->news_title ?></td>

      <td><?php echo word_limiter ($value->news_detail,50); ?><small class="post-date"> <strong>Posted on: <?php echo date('d-m-Y', strtotime($value->created_at)); ?></strong></small></td>
      <td><?php echo word_limiter ($value->category_name,50); ?></td>
      <td>
      <img src="<?php echo base_url();?>./Uploads/news/<?php echo $value->news_image ?>" class="img-responsive img-thumbnail" style="width: 90px; height:90px; cursor: pointer;" />
      </td>
      <td>
      <?php 
      echo anchor('admin/news/edit/'.base64_encode($value->news_id), '<i class="fa fa-edit "></i>', ['class'=>'btn btn-primary', 'onclick'=>"return confirm('Do You Want to Edit this News ? ')"]); 
      ?>
      </td>
       <td>
        <?php echo anchor("admin/news/delete/$value->news_id/$value->news_image", '<i class="fa fa-trash-o "></i>', ['class'=>'btn btn-danger', 'onclick'=>"return confirm('Do You Want to Delete this News ? ')" ]) ?>
        </td>
      </tr>
      <?php
          }
       
      ?>
         
      
    </tbody>
                  <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>News Title</th>
                    <th>News Description</th>
                    <th>News Category</th>
                    <th>News Image</th>
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
  
  

