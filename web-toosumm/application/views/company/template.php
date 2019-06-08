<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Company | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
 
  <!-- Calender CSS -->
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <!--  <link href="<?php echo base_url('assets/web_assets/'); ?>swal2/sweetalert2.min.css" rel="stylesheet" type="text/css" /> -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>bower_components/bootstrap/dist/css/layout.css">

   <link href="<?php echo base_url('assets/web_assets/'); ?>css/chosen.css" type="text/css" rel="stylesheet"/>
  <!-- Font Aweso>e -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>bower_components/jvectormap/jquery-jvectormap.css">
  
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
   <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>plugins/datatables/dataTables.bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <a href="" class="logo">
      <span class="logo-mini"><b>A</b>LT</span>
      <span class="logo-lg"><b>Toosumm</b></span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <?php if($logged_in_user->image == TRUE) {?>
              <img src="<?php echo base_url('/Uploads/users/'.$logged_in_user->image);?>" class="user-image" alt="User Image">
               <?php }else{ ?>
                <img src="<?php echo base_url('/Uploads/users/'); ?>/index.jpg" class="user-image" alt="User Image">
               <?php } ?>
              <span class="hidden-xs">Administrator</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
             <?php if($logged_in_user->image == TRUE) {?>
              <img src="<?php echo base_url('/Uploads/users/'.$logged_in_user->image);?>" class="user-image" alt="User Image">
               <?php }else{ ?>
                  <img src="<?php echo base_url('/Uploads/users/'); ?>/index.jpg" class="user-image" alt="User Image">
               <?php } ?> <br>
                <p>
                 <?php echo $logged_in_user->company; ?>
                  <small> Last Login <?php echo date('d-m-Y', $logged_in_user->last_login); ?></small>
                </p>
              </li>
              <li class="user-body">
                 <div class="toosumm-adminastrator-list pull-left">
                  <a href="<?php echo base_url('company/profile') ?>" class="btn btn-flat">Profile </a>
                </div>
                 <div class="toosumm-adminastrator-list pull-right">
                  <a href="<?php echo base_url('company/profile/edit/'.base64_encode($logged_in_user->id)) ?>" class="btn btn-flat">Update Profile</a>
                </div>
                <div class="toosumm-adminastrator-list pull-left">
                  <a href="<?php echo base_url('company/change-password') ?>" class="btn btn-flat">Change Password</a>
                </div>
                <div class="toosumm-adminastrator-list pull-right">
                  <a href="<?php echo base_url('company/logout') ?>" class="btn btn-flat">Sign out</a>
                </div>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
      <div class="pull-left image">
        <?php if($logged_in_user->image == TRUE) {?>
         <img src="<?php echo base_url('/Uploads/users/'.$logged_in_user->image);?>" class="user-image" alt="User Image">
         <?php }else{ ?>
          <img src="<?php echo base_url('/Uploads/users/'); ?>/index.jpg" class="user-image" alt="User Image">
         <?php } ?>
        </div>
        <div class="pull-left info">
          <p><?php echo $logged_in_user->company ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div> 
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <!-- <li>
        <a href="<?php echo base_url() ?>">
         <i class="fa fa-home text-primary"></i> <span>Access to the Web site</span>
        </a>
        </li> -->
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo base_url('company/dashboard') ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>      
        <li class=" treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Administrator</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li class="">
              <a href="<?php echo base_url('company/team') ?>">
               <i class="fa fa-th"></i></i> Team Member List</a>
             </li>
            <li class="">
              <a href="<?php echo base_url('company/team/create') ?>">
               <i class="fa fa-th"></i></i> Create Team Member</a>
             </li>            
          </ul>
        </li> 

          <li class=" treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i> <span>Project</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li class="">
             <a href="<?php echo base_url('company/project') ?>">
               <i class="fa fa-th"></i></i> Project</a>
             </li>
              <li class="">
              <a href="<?php echo base_url('company/task') ?>">
               <i class="fa fa-tasks"></i></i>Project Task</a>
             </li>
            <li class="">
               <a href="<?php echo base_url('company/priority') ?>">              
             <i class="fa fa-th"></i></i>Project priority</a>
             </li>
              
             <li class="">
               <a href="<?php echo base_url('company/status') ?>">              
             <i class="fa fa-th"></i></i> Project status</a>
             </li>

           

          </ul>
        </li>  
             <li>
        <a href="<?php echo base_url('company/clients') ?>">
        <i class="fa  fa-user"></i> 
        <span>Clients</span>
        </a>
        </li>
      
         <li>
          <a href="<?php echo base_url('company/role') ?>">
          <i class="fa fa-newspaper-o"></i> 
          <span>Team Role</span>
        </a>
        </li>
      
     
        <li class=" treeview">
          <a href="#">
            <i class="fa fa-archive"></i> <span>Web Profile</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li class="">
              <a href="<?php echo base_url('company/expertise') ?>">
               <i class="fa fa-th"></i></i> Experties</a>
             </li>
              <li class="">
              <a href="<?php echo base_url('company/experience') ?>">
               <i class="fa fa-th"></i></i>Experience</a>
             </li>
            <li class="">
              <a href="<?php echo base_url('company/skills') ?>">               
             <i class="fa fa-th"></i></i>Skills</a>
             </li>
              
             <li class="">
              <a href="<?php echo base_url('company/industries') ?>">               
             <i class="fa fa-th"></i></i> Industries</a>
             </li>

             <li class="">
              <a href="<?php echo base_url('company/languages') ?>">               
             <i class="fa fa-th"></i></i> Languages</a>
             </li>

          </ul>
        </li>
        <li>
        <a href="<?php echo base_url('company/logout') ?>">
        <i class="fa fa-sign-out"></i> 
        <span>Sign Out</span>
        </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php $this->load->view($main_content); ?>
  </div>
  
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> Development 
    </div>
    <strong>Copyright &copy;2018 <a href="">Toosumm</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
      </div>
      
    </div>
  </aside>
 
 

<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/'); ?>bower_components/jquery/dist/jquery.min.js">
  
</script>

<!-- jQuery UI 1.11.4 -->
<!-- <script src="<?php echo base_url('assets/'); ?>bower_components/jquery-ui/jquery-ui.min.js"></script> -->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>



<!-- Morris.js charts -->
<script src="<?php echo base_url('assets/'); ?>bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/'); ?>bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/'); ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/'); ?>bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/'); ?>bower_components/moment/min/moment.min.js"></script>

<script src="https://harvesthq.github.io/chosen/chosen.jquery.js" type="text/javascript"></script>

<script type="text/javascript">
  document.getElementById('output').innerHTML = location.search;
$(".chosen-select").chosen();
  </script>

<!-- datepicker -->

<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/'); ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('assets/'); ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/'); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/'); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="<?php //echo base_url('assets/'); ?>dist/js/pages/dashboard.js"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/'); ?>dist/js/demo.js"></script>
<!-- <script src="<?php echo base_url('assets/web_assets/'); ?>swal2/sweetalert2.min.js"></script> -->
  

 <script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
 <script src="<?php echo base_url('assets/'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
   <script src="<?php echo base_url('assets/web_assets/'); ?>js/layout.js" type="text/javascript"></script>
  
<script src="<?php echo base_url('assets/'); ?>plugins/datatables/dataTables.bootstrap.min.js"></script>
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
    $('#example5').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": false,
      "autoWidth": false
    });


    $(function () {
    // alert dismissal
    setTimeout(function(){
      $('.alert').slideUp();
    }, 4000);
  });

  });

</script>
<!-- Calender JS -->
  <script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>

</body>
</html>
