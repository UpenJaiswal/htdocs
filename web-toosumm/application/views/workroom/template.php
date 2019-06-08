<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/web_assets/'); ?>css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/web_assets/'); ?>css/popups.css" type="text/css">
    <!-- datatable CSS -->
  <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet"/>
  <!-- Custom CSS -->
  <link href="<?php echo base_url('assets/web_assets/'); ?>css/olayout.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>plugins/datatables/dataTables.bootstrap.css">
  <link href="<?php echo base_url('assets/web_assets/'); ?>css/layout.css" type="text/css" rel="stylesheet"/>
  <!-- Choosen CSS -->
   <link href="<?php echo base_url('assets/web_assets/'); ?>css/chosen.css" type="text/css" rel="stylesheet"/>

  <!-- Calender CSS -->
     <link href="<?php echo base_url('assets/web_assets/'); ?>css/jquery-ui.css" type="text/css" rel="stylesheet"/>
  
  <!-- data table CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>bower_components/Ionicons/css/ionicons.min.css">
       <link href="<?php echo base_url('assets/web_assets/'); ?>css/carbon-components.css" type="text/css" rel="stylesheet"/>

   <!-- Font awesome CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
   <!-- Font CSS -->   
   <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
   
    <title>Toosumm </title>

  </head>
 <body>
  
  <nav class="navbar navbar-default navbar-static-top navbar-inverse" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href=""<?php echo base_url('dashboard'); ?>" class="navbar-brand"><img src="<?php echo base_url('assets/web_assets/') ?>images/logo.png" class="header-logo"/> </a>
    </div>
    <div id="navbar-menu" class="collapse navbar-collapse toosum-header-menu1">
      <ul class="nav navbar-nav toosum-margin-right1">        
        <li><a href="<?php echo base_url('team/'.base64_encode($logged_in_user->id)); ?>" class=""><img src="<?php echo base_url('assets/web_assets/') ?>images/group.png" class="header-menu-icon"/>Team Room</a></li>
        <li><a href="<?php echo base_url('time-sheet/'.base64_encode($logged_in_user->id)); ?>"><img src="<?php echo base_url('assets/web_assets/') ?>images/clock-circular-outline.png" class="header-menu-icon"/>Timesheet</a></li>
        <li><a href="<?php echo base_url('workroom-list/'.base64_encode($logged_in_user->id)); ?>"><img src="<?php echo base_url('assets/web_assets/') ?>images/meeting-room.png" class="header-menu-icon"/>Workroom</a></li>
        <li><a href="#"><img src="<?php echo base_url('assets/web_assets/') ?>images/chat.png" class="header-menu-icon"/>Collaboration</a></li>

        
        <li><a href="<?php echo base_url('Clients/'.base64_encode($logged_in_user->id)); ?>"><img src="<?php echo base_url('assets/web_assets/') ?>images/customer.png" class="header-menu-icon"/>Clients</a></li>
        <li><a href="#"><img src="<?php echo base_url('assets/web_assets/') ?>images/coin.png" class="header-menu-icon"/>Invoices</a></li>
        <li><a href="<?php echo base_url('dashboard'); ?>"><img src="<?php echo base_url('assets/web_assets/') ?>images/right-menu-bars.png" class="header-menu-icon"/>Dashboard</a></li>
        
          
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="/?signout" id="signout"><span class="glyphicon glyphicon-lock"></span> Sign Out</a></li> -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">

     <?php 
          if($logged_in_user->image == TRUE) {?>
          <img class="icon-toggle toosumm-team-icon12" src="<?php echo base_url('/Uploads/users/'.$logged_in_user->image);?>" alt="User profile picture"<b class="caret"></b>
          <?php
          }else{ ?>

          <img class="icon-toggle toosumm-team-icon12" src="<?php echo base_url('/Uploads/users/index.jpg');?>" alt="User profile picture" <b class="caret">
          <?php } ?>


          <ul class="dropdown-menu profile-edit">
              <li>
              <ul class="toosum-profile-edit">
                <li>
                   <?php 
          if($logged_in_user->image == TRUE) {?>
          <img class="icon-toggle" src="<?php echo base_url('/Uploads/users/'.$logged_in_user->image);?>" alt="User profile picture"<b class="caret"></b>
          <?php
          }else{ ?>

          <img class="icon-toggle" src="<?php echo base_url('/Uploads/users/index.jpg');?>" alt="User profile picture" <b class="caret">
          <?php } ?>
                </li>
                <li>

                <span><?php echo $logged_in_user->first_name ?> <?php echo $logged_in_user->last_name ?></span>
                <p>                  
                  <?php if ($logged_in_user->designation>0) {
                    echo $logged_in_user->designation;
                  }else {
                    echo $team[0]->role_name;
                  }
                  ?>
                </p>
                
                <a href="<?php echo base_url('besic-profile/'.base64_encode($logged_in_user->id)) ?>">Profile</a>
                <a href="<?php echo base_url('profile/edit/'.base64_encode($logged_in_user->id)) ?>" class="toosum-edit-profile-btn">Edit Profile</a>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-cogs" aria-hidden="true"></i> &nbsp; Account Setup</a></li>
              <li><a href="#"><i class="fa fa-usd" aria-hidden="true"></i> &nbsp; Account Billing</a></li>
              <li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> &nbsp; Security Setting</a></li>
              <li><a href="#"><i class="fa fa-archive" aria-hidden="true"></i> &nbsp; Account Storage</a></li>
              <li><a href="#"><i class="fa fa-arrow-down" aria-hidden="true"></i> &nbsp;Download Timer</a></li>
              <li><a href="<?php echo base_url('change-password') ?>"><i class="fa fa-lock" aria-hidden="true"></i> &nbsp; Change Password</a></li>
              <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp; Setup Notifications</a></li>
              <li><a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> &nbsp; Help</a></li>
              <li><a href="<?php echo base_url('logout') ?>"><i class="fa fa-sign-out" aria-hidden="true"></i> &nbsp; Logout</a></li>            
          </ul>
        </li>
      </ul>      
    </div>    
  </div>
  </nav>  
<?php $this->load->view($main_content); ?>
 
<footer class="toosum-footer">
      <div class="container">
        <div class="row toosum-footer-margin">
          <div class="col-md-6">
            <ul class="ts-footer-menu-list">
              <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
          <p class="toosum-copyright">©2008–2018 <a href="#">Ranks Digital Media</a>,All Rights Reserved</p>
          
        </div>
        
        <div class="col-md-6">
            <ul class="ts-footer-social-icons">
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
          </ul>        
        </div>
      </div>
    </div>  
  </footer>
   <div id="stop" class="scrollTop">
        <span><a href=""><i class="fa fa-arrow-up" aria-hidden="true"></i></a></span>
    </div>
  <!-- Jquery min -->
  <script src="<?php echo base_url('assets/web_assets/'); ?>js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <!-- Bootstrap JS -->
   <script src="<?php echo base_url('assets/web_assets/'); ?>js/bootstrap.min.js" type="text/javascript"></script>
  <!-- <script src="js/jquery-3.3.1.slim.min.js" type="text/javascript"></script> -->
  <script src="<?php echo base_url('assets/web_assets/'); ?>js/popper.min.js" type="text/javascript"></script>
  <!-- Custom JS -->
  <script src="<?php echo base_url('assets/web_assets/'); ?>js/layout.js" type="text/javascript"></script>
     <!-- Choosen JS -->  
  <script type="text/javascript" src="https://harvesthq.github.io/chosen/chosen.jquery.js"></script>
  <script type="text/javascript">
        document.getElementById('output').innerHTML = location.search;
        $(".chosen-select").chosen();
  </script>

  <!-- for active javascript-->
<script type="text/javascript">
    $(document).ready(function () {
        var url = window.location;
        $('.toosum-margin-right1 li a[href="'+ url +'"]').addClass('active');
        $('.toosum-margin-right1 li a').filter(function() {
             return this.href == url;
        }).addClass('active');
    });
</script> 
  
  <!-- Calender JS -->
  <script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>
   <script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>

  <!-- data table JS -->
  <script src="https://unpkg.com/carbon-components@latest/scripts/carbon-components.js" type="text/javascript"> 
  </script>
  <script src="https://harvesthq.github.io/chosen/chosen.jquery.js" type="text/javascript"></script>

  <script src="<?php echo base_url('assets/') ?>plugins/timepicker/bootstrap-timepicker.min.js"></script>
 <script type="text/javascript">
  document.getElementById('output').innerHTML = location.search;
$(".chosen-select").chosen();
  </script>
  <script src="<?php echo base_url('assets/'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url('assets/'); ?>plugins/datatables/dataTables.bootstrap.min.js"></script>

  <script>     
    src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
    integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
    crossorigin="anonymous">      
    </script> 
  <script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });

  });

</script>
<script>
function checkTime(i) {
  if (i < 10) {
    i = "0" + i;
  }
  return i;
}

function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  // add a zero in front of numbers<10
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
  t = setTimeout(function() {
    startTime()
  }, 500);
}
startTime();
</script>

<!-- datatable JS -->
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
} );

// Get value from data table
 $(document).on("click", "#btnMyTest001", function (e) {
     $('#my_modal #age').attr("value", $(this).attr("data-age"));
 })
  </script>

  </body>
</html>
