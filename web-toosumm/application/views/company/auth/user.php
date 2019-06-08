    <section class="content-header">
      <h1>
        Team Member List
        <small>advanced tables</small>
      </h1>  
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <br>
          <?php if (isset($message) || $message = $this->session->flashdata('message')) {?>
                   <div class="<?php echo $this->session->flashdata('class'); ?> alert-dismissible">
                     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                   <?php echo $message; ?>    
                   </div>
               <?php } ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th><?php echo lang('index_fname_th');?></th>
                  <th><?php echo lang('index_lname_th');?></th>
                  
                  <th><?php echo lang('index_email_th');?></th>
                  <th>Role</th>
                  <th>project</th>
                  <th>Status</th>
                  <th><?php echo lang('index_action_th');?></th>
                </tr>
                </thead>

                <tbody>
                      <?php // echo '<pre>'; print_r($team); exit;?>
                <?php foreach ($team as $user):?>
                  <tr>
                    <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
                    <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
                  
                   
                    <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?><small class="post-date"> <strong>Created At: <?php echo date('d-m-Y',$user->created_on); ?></strong></small></td>
                    
                    <td><?php echo htmlspecialchars($user->role_name,ENT_QUOTES,'UTF-8');?> </td>
                    <td><?php echo htmlspecialchars($user->project_name,ENT_QUOTES,'UTF-8');?> </td>

                    <td>
                      <?php echo ($user->active) ? anchor("company/auth/deactivate/".$user->id, lang('index_active_link'),['class'=>'btn btn-success btn-flat']) : anchor("company/auth/activate/". $user->id, lang('index_inactive_link'),['class'=>'btn btn-danger btn-flat']);?>
                    </td>

                   
                    <td>
                      <?php echo anchor("company/team/edit/".base64_encode($user->id), 'Edit',['class'=>'btn btn-primary btn-flat', 'onclick'=>"return confirm('Do You Want to Edit this Team Member ? ')"]) ;?>
                    </td>
                  </tr>
                <?php endforeach;?> 
                </tbody>
                <tfoot>
                <tr>
                  <th><?php echo lang('index_fname_th');?></th>
                  <th><?php echo lang('index_lname_th');?></th>
                   
                  <th><?php echo lang('index_email_th');?></th>
                  <th>Role</th>
                  <th>project</th>
                  <th>Status</th>
                  <th><?php echo lang('index_action_th');?></th>
                </tr>
                </tfoot>
              </table>
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
