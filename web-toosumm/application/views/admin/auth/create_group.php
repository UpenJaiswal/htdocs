<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<?php echo lang('create_group_heading');?>
			<small><?php echo lang('create_group_subheading');?></small>
		</h1>
		
	</section>

    <!-- Main content -->
    <section class="content">
		<div class="row">
		<!-- left column -->
			<div class="col-md-6 col-md-offset-3">
			<!-- general form elements -->
				<div class="box box-primary toosumm-margin69">
					<br>
					<?php if (isset($message) || $message = $this->session->flashdata('message')) {?>
                   <div class="<?php echo $this->session->flashdata('class'); ?> alert-dismissible">
                     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                   <?php echo $message; ?>    
                   </div>
               <?php } ?>
					<!-- <div class="box-header with-border">
						<h3 class="box-title"><?php echo $message;?></h3>
					</div> -->
					<!-- /.box-header -->
					<!-- form start -->
					<?php echo form_open("admin/auth/create_group");?>
						<div class="box-body">
							<div class="form-group">
								<label for="exampleInputEmail1">Group Name</label>
								<?php echo form_input($group_name);?>
								<span class="toosumm-box56"><i class="fa fa-object-group" aria-hidden="true"></i></span>
							</div>

							<div class="form-group">
								<label for="exampleInputPassword1">Description</label>
								<?php echo form_input($description);?>
								<span class="toosumm-box56"><i class="fa fa-asterisk" aria-hidden="true"></i></span>
							</div>

							
						</div>
						<!-- /.box-body -->
						<div class="box-footer">
							
							<?php echo form_submit( ['name'=>'submit', 'class'=>'btn btn-primary btn-flat', 'value'=>'Submit'] ); ?>
						</div>
					<?php echo form_close();?>
				</div>
				<!-- /.box -->
			</div>        
		</div>
      	<!-- /.row -->
    </section>
    <!-- /.content -->