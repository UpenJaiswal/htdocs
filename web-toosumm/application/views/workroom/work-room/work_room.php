<div class="toosum-section">
	    <div class="container">
		    <div class="row">
			    <div class="col-md-2">
				    <div class="toosumm-team-filter">
					    <a onclick="mysearch-Function()" id="filter-tooglebtn" class="toosumm-filter-toggle-btn">
						    <span class="toosumm-team-filter-icon"><img src="<?php echo base_url('assets/web_assets/') ?>images/filter-results-button.png"/></span>
							<span>Filter</span>
						</a>
					</div>
				</div>
				<div class="col-md-10 toosumm-team-filter2">
				    <div class="toosumm-team-cloud-filter-icon">
					    <a href="#" class="globe-icon"><i class="fa fa-globe" aria-hidden="true"></i></a>
					</div>
					
					<div class="toosumm-team-cloud-filter-icon">
					    <span>Organize By:</span>
					</div>
					
					<div class="toosumm-team-cloud-filter-icon">
					    <a href="#"> Name </a>
					</div>
					
					<div class="toosumm-team-cloud-filter-icon">
					    <a href="#">  Client </a>
					</div>
					
					<div class="toosumm-team-cloud-filter-icon">
					    <a href="#"> Start Date </a>
					</div>
					
					<div class="toosumm-team-cloud-filter-icon">
					    <a href="#"> Due Date </a>
					</div>
					
					<div class="toosumm-team-cloud-filter-icon">
					    <a href="#"> Status </a>
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
							
							<option value="">Pending</option>
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
			
		    <div class="row">
           <?php //echo '<pre>';print_r($project); ?>
		    	<?php foreach ($project as $value) {?>
		    		<div class="col-md-3">
				    <div class="toosumm-work-room-section">
					    <div class="toosumm-project-card-head">
						    <div class="toosumm-project-image">
								<div class="toosumm-project-card-head">
									<a href="#">
										<img src="<?php echo base_url('/Uploads/project/'.$value->project_image);?>" alt="" class="img-responsive"/>
									</a>							
								</div>
								<div class="toosumm_project-image-bottom-panel1">
								    <div class="toosumm-project-image-bottom-panel">
									    <a href="#" class="toosumm-project-image-bottom-panel-link margin-left">
										    <div class="toosumm-project-image-panel-icon67"><i class="fa fa-list" aria-hidden="true"></i></div>
											<strong>7/22</strong>
										</a>
									</div>
									<div class="toosumm-project-image-bottom-panel text-right">
									    <a href="#" class="toosumm-project-image-bottom-panel-link  margin-right">
										    <div class="toosumm-project-image-panel-icon67">
								             <i class="fa fa-check-square-o" aria-hidden="true"></i>
								            </div>
											<strong>2/5</strong>
										</a>
									</div>
								</div>
							</div>
						    
						</div>
						<div class="toosumm_project-card-body">
						    <div class="toosumm_project-name-con">
							    <div class="toosum_project_name">
								    <a href="<?php echo base_url('work-room/'.base64_encode($value->id)) ?>" class="project-name_text"><?php echo $value->project_name; ?></a>
								</div>
								
								<div class="toosum_project_controle">
                            <?php //echo '<pre>'; print_r($task_team_array);  ?>

									
                           
								    <ul class="toosumm_project-controle-ul">
									    <li><a href="#"><i class="fa fa-comments" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-file-text" aria-hidden="true"></i></a></li>
									
										
									</ul>
								</div>
							</div>
							<div class="toosumm-project-details6"><span>Client: </span><span><?php echo $value->clients_name; ?></span></div>
							
							<div class="toosumm-project-details6"><span>Start Date: </span><span><?php echo date('d/m/Y', strtotime($value->start_date)); ?></span></div>
							
							<div class="toosumm-project-details6"><span>Due Date: </span><span><?php echo date('d/m/Y', strtotime($value->due_date)); ?></span></div><div class="toosumm-project-details6"><span>Priority : </span><span> <?php echo $value->priority_name; ?></span></div>
							
						</div>
						
						<div class="toosumm-footer-des">
						    <div class="project-status23"><i class="fa fa-play-circle-o" aria-hidden="true"></i>
                          
						    </div>
							<div class="project-footer-info5">$929 - 36.3h (282h budgeted) </div>
						</div>
						
					</div>				
					
				</div>
		    	<?php } ?>
			    
				
				
				
				
			</div>						
			
		</div>
	</div>