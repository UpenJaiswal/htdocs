 <section class="content-header">
      <h1>
        Company List
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
            <?php //echo '<pre>'; print_r($users->groups); ?>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Company</th>
                  <th><?php //echo lang('index_lname_th');?></th>
                  <th><?php echo lang('index_email_th');?></th>
                  <th><?php echo lang('index_groups_th');?></th>
                  <th><?php echo lang('index_status_th');?></th>
                  <th><?php echo lang('index_action_th');?></th>
                </tr>
                </thead>

                <tbody>
                <?php foreach ($users as $user):?>
                  <tr>
                    <td><?php echo htmlspecialchars($user->company,ENT_QUOTES,'UTF-8');?></td>
                    <td><?php //echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
                    <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
                    <td>
                      <?php foreach ($user->groups as $group):?>
                        <?php echo anchor("admin/auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8'),['class'=>'btn btn-primary btn-flat']) ;?><br />
                      <?php endforeach?>
                    </td>
                    <td>
                      <?php echo ($user->active) ? anchor("admin/auth/deactivate/".$user->id, lang('index_active_link'),['class'=>'btn btn-success btn-flat']) : anchor("admin/auth/activate/". $user->id, lang('index_inactive_link'),['class'=>'btn btn-danger btn-flat']);?>
                    </td>
                    <td>
                      <?php echo anchor("admin/users/edit/".$user->id, 'Edit',['class'=>'btn btn-primary btn-flat', 'onclick'=>"return confirm('Do You Want to Edit this Company? ')"]) ;?>
                    </td>
                  </tr>
                <?php endforeach;?> 
                </tbody>
                <tfoot>
                <tr>
                 <th>Company</th>
                  <th><?php //echo lang('index_lname_th');?></th>
                  <th><?php echo lang('index_email_th');?></th>
                  <th><?php echo lang('index_groups_th');?></th>
                  <th><?php echo lang('index_status_th');?></th>
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
