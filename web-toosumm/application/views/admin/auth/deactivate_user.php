<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<?php echo lang('deactivate_heading');?>
			<small></small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active"><?php echo lang('deactivate_heading');?></li>
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
						<h3 class="box-title"><?php //echo $message;?></h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<?php echo form_open("admin/auth/deactivate/".$user->id);?>
						<div class="box-body">
							<div class="form-group">
								<label for="exampleInputEmail1"><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></label><br>
								<input type="radio" name="confirm" value="yes" checked="checked" /> Yes
								&nbsp; &nbsp;
								<input type="radio" name="confirm" value="no" /> No
							</div>

					</div>
						<!-- /.box-body -->
						<div class="box-footer">
							<?php echo form_hidden($csrf); ?>
							<?php echo form_hidden(array('id'=>$user->id)); ?>
							
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