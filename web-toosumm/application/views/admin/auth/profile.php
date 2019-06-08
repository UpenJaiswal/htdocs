<section class="content-header">
      <h1>
      Admin  Profile
      <small>Please show the profile's information below.</small>
    </h1>
    </section>
      
    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
           <?php 
          if($logged_in_user->image == TRUE) {?>
          <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('/Uploads/users/'.$logged_in_user->image);?>" alt="User profile picture">
          <?php
          }else{ ?>

          <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('/Uploads/users/index.jpg');?>" alt="User profile picture">
          <?php } ?>
              
              <h3 class="profile-username text-center"><?php echo $logged_in_user->company ?></h3>

              <p class="text-muted text-center"><?php echo $logged_in_user->designation ?></p>

              <!-- <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Last Login</b>
                   <a class="pull-right">                
                    <small><?php echo date('d-m-Y', $logged_in_user->last_login); ?></small>
                  </a>
                </li>               
              </ul> -->

              <ul class="team-location">   
                   <li><strong><i class="fa fa-sign-in margin-r-5" aria-hidden="true"></i> Last Login</strong>
                   </li>
                   <li>
                    <p class="text-muted"><?php echo date('d-m-Y', $logged_in_user->last_login); ?></p></li>
               </ul>



               <ul class="team-location">   
                   <li> <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
                   </li>
                   <li>
                    <p class="text-muted"><?php echo $logged_in_user->city ?>, <?php echo $logged_in_user->country ?></p></li>
               </ul>


               <ul class="team-location">   
                   <li> <strong><i class="fa fa-pencil margin-r-5"></i>Profile Crearted At</strong>
                   </li>
                   <li>
                    <p>               
                      <span class="label label-success "><?php echo date('d-m-Y', $logged_in_user->created_on); ?></span>
                    </p>
                    </li>
               </ul>



         
         
              <div class="list-group-item">

              <a href="<?php echo base_url('admin/profile/edit/'.base64_encode($logged_in_user->id)) ?>" class="btn btn-primary btn-block"><b>Update Profile</b></a>
                </div>
            </div>
            
          </div>
        </div>
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">              
           <h4><li class="active"><a href="#timeline" data-toggle="tab" aria-expanded="true">&nbsp; &nbsp;Profile Details</a></li></h4>   
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="timeline">
                <ul class="timeline timeline-inverse">
                  <li>
                    <i class="fa fa-email bg-aqua"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">About :</a> </h3>
                      <div class="timeline-body">
                       <?php echo $logged_in_user->about_us?>
                      </div>
                    </div>
                  </li>
                  <li>
                    <i class="fa fa-email bg-aqua"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header no-border"><a href="#"> Email :</a> <?php echo $logged_in_user->email ?>
                      </h3>
                    </div>
                  </li>
                     <li>
                    <i class="fa fa-email bg-aqua"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header no-border"><a href="#"> Username :</a> <?php echo $logged_in_user->username ?>
                      </h3>
                    </div>
                  </li>
                   <li>
                    <i class="fa fa-email bg-aqua"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header no-border"><a href="#"> First Name :</a> <?php echo $logged_in_user->first_name ?>
                      </h3>
                    </div>
                  </li>
                
                   <li>
                    <i class="fa fa-email bg-aqua"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header no-border"><a href="#"> Last Name :</a> <?php echo $logged_in_user->last_name ?>
                      </h3>
                    </div>
                  </li> 
                    <li>
                    <i class="fa fa-email bg-aqua"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header no-border"><a href="#">Gender :</a> <?php echo $logged_in_user->gender ?>
                      </h3>
                    </div>
                  </li>
                  <li>
                    <i class="fa fa-email bg-aqua"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header no-border"><a href="#"> Compnay :</a> <?php echo $logged_in_user->company ?>
                      </h3>
                    </div>
                  </li>
                   <li>
                    <i class="fa fa-email bg-aqua"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header no-border"><a href="#"> Phone Number :</a> <?php echo $logged_in_user->phone ?>
                      </h3>
                    </div>
                  </li>
                  <li> 
                    <i class="fa fa-email bg-aqua"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header no-border"><a href="#"> Date Of Birth :</a> <?php echo date('d-m-Y', strtotime($logged_in_user->dob)); ?>
                      </h3>
                    </div>
                  </li>                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
