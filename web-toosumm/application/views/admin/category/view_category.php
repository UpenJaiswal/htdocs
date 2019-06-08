    <section class="content-header">
       <h1>
      View Category
      <small>Please show the category's information below.</small>
    </h1>
      <ol class="breadcrumb">
        <li ><a href="<?php echo base_url('admin/category/add') ?> " style="color: white;" class="btn bt btn-primary btn-flat"><i class="fa fa-plus" ></i> Add Category</a></li>
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
            <div class="box-header">
             </div>
              <div class="box-body">
                  <div class="table-responsive">
                      <table id="example1" class="table table-bordered table-striped table-hover">
                        <thead>
                          <tr>
                          <th>Id</th>
                          <th>Category Name</th>
                          <th>Edit</th>
                          </tr>
                        </thead>
                          <tbody>
                          <?php $i=1;
                          foreach ($category as $value) { ?>
                            <tr>   
                            <td><?php echo $i++;?></td>
                            <td><?php echo $value->category_name ?></td>
                            <td>
                            <?php 
                             echo anchor('admin/category/edit/'.base64_encode($value->id), '<i class="fa fa-edit "></i>', ['class'=>'btn btn-primary', 'onclick'=>"return confirm('Do You Want to Edit this Category ? ')"]); 
                           ?></td>
                           <?php } ?>
                           </tbody>
                            <tfoot>
                            <tr>
                            <th>Id</th>
                            <th>Category Name</th>
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
  
  

