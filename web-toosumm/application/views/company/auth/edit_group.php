<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<?php echo lang('edit_group_heading');?>
			<small><?php echo lang('edit_group_subheading');?></small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active"><?php echo lang('edit_group_heading');?></li>
		</ol>
	</section>

    <!-- Main content -->
    <section class="content">
		<div class="row">
		<!-- left column -->
			<div class="col-md-6">
			<!-- general form elements -->
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title"><?php echo $message;?></h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<?php echo form_open(current_url());?>
						<div class="box-body">
							<div class="form-group">
								<label for="exampleInputEmail1">Group Name</label>
								<?php echo form_input($group_name);?>
							</div>

							<div class="form-group">
								<label for="exampleInputPassword1">Description</label>
								<?php echo form_input($group_description);?>
							</div>

							
						</div>
						<!-- /.box-body -->
						<div class="box-footer">
							
							<?php echo form_submit( ['name'=>'submit', 'class'=>'btn btn-primary', 'value'=>'Submit'] ); ?>
						</div>
					<?php echo form_close();?>
				</div>
				<!-- /.box -->
			</div>        
		</div>
      	<!-- /.row -->
    </section>
    <!-- /.content -->