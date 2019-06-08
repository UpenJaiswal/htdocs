<div class="toosum-section">
	    <div class="container">
		    <div class="row">
			    <div class="col-md-12">
				    <div class="toosumm-sticky-panel">
					    <div class="toosumm-sticky-inner_panel">
						    <div class="task-tab">
							     <a href="#" class="task-taba" style="border-radius: 15px 0 0 15px; background-color: #b9e5f6; "><span><img src="<?php echo base_url('assets/web_assets/') ?>images/checklist.png"/></span><span>Tasks</span></a>
								 <a href="#" class="task-taba"><span><img src="<?php echo base_url('assets/web_assets/') ?>images/gantt-chart.png"/></span><span>Gantt Chart</span></a>
								 <a href="#" class="task-taba"><span><img src="<?php echo base_url('assets/web_assets/') ?>images/lily.png"/></span><span>Activity Stream</span></a>
								 <a href="#" class="task-taba"><span><img src="<?php echo base_url('assets/web_assets/') ?>images/checklist.png"/></span><span>Checklists</span></a>
								 <a href="#" class="task-taba"><span><img src="<?php echo base_url('assets/web_assets/') ?>images/file.png"/></span><span>Files</span></a>
								 <a href="#" class="task-taba"><span><img src="<?php echo base_url('assets/web_assets/') ?>images/recurring-task.png"/></span><span>Recurring Tasks</span></a>
								 <a href="#" class="task-taba" style="border-radius: 0 15px 15px 0;"><span><img src="<?php echo base_url('assets/web_assets/') ?>images/comments.png"/></span><span>Comments</span></a>
							</div>
							<div class="drop-scroll-cont">
							    <div class="drop-scroll-inner1">								
								        
								   <button class="refresh-button56"><span><i class="fa fa-refresh" aria-hidden="true"></i></span></button>
								   
								   <div class="toosumm-drop-btn56">
								        <ul class="toosumm-drop-down90">						 
											<li>
												<a href="#" class="">
												    <span></span>
													<span></span>
												</a>
												<ul class="toosumm-dropdown89">							
													<li><a href="#"><span><img src="images/plus.png"/></span> <span>Add New Task</span> </a></li>
													
													<li><a href="#"><span><img src="images/recurring-task.png"/></span><span> Add New Recurring Task</span> </a></li>
													
													<li><a href="#"><span><img src="images/save-as.png"/></span><span> Save as Template</span></a></li>
													
													<li><a href="#"><span><img src="images/copy-content.png"/></span><span> Copy to new Project </span></a></li>
													
													<li><a href="#"><span><img src="images/archive.png"/></span><span> Archive this Project </span> </a></li>
													
													<li><a href="#"><span><img src="images/printer.png"/></span><span> Export and Print </span> </a></li>
													
													<li><a href="#"><span><img src="images/share.png"/></span><span>  Share this Project </span> </a></li>
													
													<li><a href="#"><span><img src="images/plus.png"/></span><span>  Reassign Tasks </span> </a></li>
													<li><a href="#"><span><img src="images/rubbish-bin.png"/></span><span>  Delete this Project </span> </a></li>
													
												</ul>
											</li>
										</ul>   
								   </div>
								</div>
							</div>						
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container" id="myDIV">			
			<div class="row  toosumm-team-filter78">
			    <div class="col-md-3">
					<div class="toosumm-team-filter-dropdown">
						<div id="output"></div>
						<form method="get" class="toosum-choosen-filter">
						  <select data-placeholder="Client" name="tags[]" multiple class="chosen-select">							
							<option value="">ACME LLC </option>
							<option value="">Internal</option>
							<option value="">SmartCode Tech.</option>
							<option value="">Vibrant Communication </option>
						  </select>							  
						</form>
					</div>
				</div>
				
				<div class="col-md-3">
					<div class="toosumm-team-filter-dropdown">
						<div id="output"></div>
						<form method="get" class="toosum-choosen-filter">
						  <select data-placeholder="Status" name="tags[]" multiple class="chosen-select">										
							
							<option value="">Pgfgfgfending</option>
							<option value="">Inprocess</option>
							<option value="">Completed</option>
						  </select>							  
						</form>
					</div>
				</div>
				
				<div class="col-md-3">
					<div class="toosumm-team-filter-dropdown">
					    <div class="toosumm-start-date">
						  <input type="text" placeholder="Start Date" class="datepick"/>
						</div>
						<div class="toosumm-calender-icon56">
						    <i class="fa fa-calendar" aria-hidden="true"></i>
						</div>
						
					</div>
				</div>
				
				<div class="col-md-3">
					<div class="toosumm-team-filter-dropdown">
					    <div class="toosumm-start-date">
						  <input type="text" placeholder="Due Date" class="datepick"/>
						</div>
						<div class="toosumm-calender-icon56">
						    <i class="fa fa-calendar" aria-hidden="true"></i>
						</div>
						
					</div>
				</div>
				
				
			</div>
			<div class="row toosum-search-section12">
				<div class="col-md-9">
					<div class="toosumm-search-div">
						<input type="text" name="search"/>
						<div class="toosumm-search-icon56">
							<i class="fa fa-search" aria-hidden="true"></i>
						</div>							
					</div>					    				
				</div>
				
				<div class="col-md-3">
			        <div class="toosumm-clearall-btn56">
					    <input type="submit" value="Clear All" />
					</div>
				</div>
			
			</div>
			
			</div>
			
			<div class="container">		
									    	<?php //echo '<pre>'; print_r($project); exit(); ?>

		    <div class="row">
			    <div class="col-md-12">
				    <div class="toosumm_task-main-image-cont">
					    <div class="toosumm-task-main-image">
						    
						    <div class="toosumm-task-main-image12">
							   <img class="" src="<?php echo base_url('/Uploads/project/'.$project[0]->project_image);?>" alt="User profile picture">
							</div>
						</div>
						<div class="inline-wrap">
						
						</div>
					</div>				
					<div class="toosumm_task-main-text">
					    <div class="row">
						    <div class="col-md-6">
							    <div class="toosum-task-main_field">
								    <div class="toosumm-task-main-text-field">
									    <h3><?php echo $project[0]->project_name; ?></h3>
									</div>
									
									<div class="toosumm-task-main-text-field">
									    <span class="toosumm-task-main-text-def-label">Start Date:<?php echo date('d/m/Y', strtotime($project[0]->project_startdate)); ?></span>
										<span></span>
									</div>
									
									<div class="toosumm-task-main-text-field">
									    <span class="toosumm-task-main-text-def-label">Due Date:<?php echo date('d/m/Y', strtotime($project[0]->project_duedate)); ?></span>
										<span></span>
									</div>
									
									<div class="toosumm-task-main-text-field">
									    <span class="toosumm-task-main-text-def-label">Status: <?php echo $project[0]->status; ?></span>
										<span>
										    
										</span>
									</div>
									
									<div class="toosumm-task-main-text-field">
									    <span class="toosumm-task-main-text-def-label">Priority:<?php echo $project[0]->priority_name; ?></span>
										<span>
										    
										</span>
									</div>
									
									<div class="toosumm-task-main-text-field">
									    <span class="toosumm-task-main-text-def-label">Client:<?php echo $project[0]->clients_name; ?></span>
										
									</div>
									
														
								</div>
							</div>
							<div class="col-md-6">
							    <div class="row">






								    <div class="col-md-12">
									    <div class="toosumm_task-main-user-heading">
										    <div class="toosumm_task-main-text1">
											    Project Team
											</div>
											
											<div class="toosumm_task-main-icon">
											   <i class="fa fa-list" aria-hidden="true"></i>
											</div>
										</div>
										<div class="toosumm-task-user">
                                	<ul class="task-image1">
                                		 <?php foreach ($project as $value) {?>
                   <?php foreach ($task_team_array[$value->taskid] as $task_team) { ?>
                   <?php 
                        echo '<li>'; 
                        //echo $task_team->first_name; ?>
                   <?php if($task_team->image == TRUE) {?>
                   	<div class="toosumm-icont">
                   <img src="<?php echo base_url();?>./Uploads/users/<?php echo $task_team->image ?>" title="<?php echo $task_team->first_name; ?> " class="img-responsive img-thumbnail task-image2"  />
                    </div>
                    <?php 
                   }else{ ?>
                   		<div class="toosumm-icont">
                   <img class="img-responsive img-thumbnail task-image2" src="<?php echo base_url('/Uploads/users/index.jpg');?>" title="User Name " alt="User profile picture">
                    </div>
                    <?php } ?>
                    <?php 
                           echo ' </li>';} ?>
                            <?php } ?>
                  </ul>
                              
							    	    

												
											  
											
										    
											
											
											<div class="toosumm-icont">
											    <div class="toosumm-i-counter">
											     3+
												</div>
											</div>
											
										</div>
										
										<div class="toosumm-task-main-finance">
										    <div class="toosumm-task-main-finance-margin-bottom">
												<div class="toosumm-task-inline-wrap">
													<div class="task-main-text-def-label">Total Logged Time:</div>
													<div class="task__main-text-def">310,7 hrs</div>
												</div>
												
											</div>
											
											<div class="toosumm-task-main-finance-margin-bottom">
												<div class="toosumm-task-inline-wrap">
													<div class="task-main-text-def-label">Total Cost:$2,760 | $85,000</div>
												</div>
												
											</div>
											
											<div class="toosumm-task-main-finance-margin-bottom">
												<div class="toosumm-task-inline-wrap">
													<div class="task-main-text-def-label">TTotal Revenue:$4,089 | $100,000</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>					
					</div>
				</div>
				<div class="col-md-12">
				<form id="form1" runat="server">
        <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Task</th>
                <th>User</th>
                <th>Start Date</th>
                <th>Due Date</th>
                <th>Assigned, hrs</th>
                <th>Logged, hrs</th>
				<th>Status</th>
				<th>Priority</th>
				<th>Level</th>
            </tr>
        </thead>
        <tbody>
        	<?php //echo '<pre>'; print_r($project); ?>
        	<?php foreach ($project as $value) { ?>
        		  <tr>
                <td> <?php echo $value->task_name; ?> </td>
                <td>
                 <ul class="task-image1">
                   <?php foreach ($task_team_array[$value->taskid] as $task_team) { ?>
                   <?php 
                        echo '<li class="toosumm-icont">'; 
                        ?>
                   <?php if($task_team->image == TRUE) {?>
                   <img src="<?php echo base_url();?>./Uploads/users/<?php echo $task_team->image ?>" class="img-responsive img-thumbnail task-image2" title="<?php echo $task_team->first_name; ?> " style="width: 40px; height:40px; cursor: pointer;" />
                    <?php }else{ ?>
                   <img class="img-responsive img-thumbnail task-image2" src="<?php echo base_url('/Uploads/users/index.jpg');?>" title="User Name" alt="User profile picture" style="width: 40px; height:40px; cursor: pointer;">
                    <?php } ?>
                    <?php 
                           echo ' </li>';} ?>
                  </ul>
                </td>
                <td><?php echo date('d/m/Y', strtotime($value->start_date)); ?></td>
                <td><?php echo date('d/m/Y', strtotime($value->due_date)); ?></td>
                <td class="text-center">8</td>
                <td></td>
				<td><button id="btnMyTest001" type="button" class="btn bt btn-primary btn-flat border-btn" data-toggle="modal" data-target="#my_modal" data-age="61"><?php echo $value->status ;?></button></td>
                <td class="text-center"><?php echo $value->priority_name;?></td>
				<td class="text-center">1</td>
            </tr>
        	 <?php } ?>
		    </tbody>
		    <tfoot>
            <tr>
                <th>Task</th>
                <th>User</th>
                <th>Start Date</th>
                <th>Due Date</th>
                <th>Assigned, hrs</th>
                <th>Logged, hrs</th>
				<th>Status</th>
				<th>Priority</th>
				<th>Level</th>
            </tr>
        </tfoot>
    </table>
    </form>
    <div class="modal fade" id="my_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Sample Modal</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    
                    <!--<input type="text" id="username" placeholder="User Name" class="form-control"/>-->
                    <!-- <div id="confirmdetails">Confirmation details go here...</div>-->
                    <label for="age">Age</label>
                    <input type="text" id="age" class="form-control"/>

                    
                </div>


            </div>
            <div class="modal-footer">
                <!-- onclick="cancelRecord()" -->
                <button type="button" class="btn btn-default" data-dismiss="modal" >OK</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
	</div>