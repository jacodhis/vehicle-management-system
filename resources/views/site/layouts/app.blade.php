<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DALS</title>


  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
    <!-- Morris chart -->
 <link rel="stylesheet" href="assets/plugins/morris/morris.css">
 
 <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
 <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">


  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      <style type="text/css">
        #ls_warning-message { display: none; }

    @media only screen and (orientation:portrait){

        #ls_wrapper { display:none; }

        #ls_warning-message { display:block; }

    }

    @media only screen and (orientation:landscape){

        #ls_warning-message { display:none; }

    }
      </style>

</head>
<body  class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

@if(Auth::check())
  
  <header class="main-header">
    <!-- Logo -->
    <a href="{{ url('/') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>DA</b>LS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>DALS</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

<div class="navbar-custom-menu">
        <ul class="nav navbar-nav"> 
          
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 1 messages</li>
              
            </ul>
          </li>

          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 1 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> Thank you for joining DALS. You can review revision videos and notes through the tab on the left from different subjects. You can also update your profile by clicking on the myprofile link to personalise your experience.
                    </a>
                  </li>
                  </ul>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 0 tasks</li>
              
            </ul>
          </li>

    <ul class="nav navbar-nav"> 
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown user user-menu">
            <a href="{{ url('/') }}" class="dropdown-toggle" data-toggle="dropdown">
              <!-- <i class="fa fa-envelope-o"></i> -->
              <img src="{{ asset('frontend/images/avatars/avatar.png') }}" class="user-image" alt="User Image"/>
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                </form>
              
            </ul>
          </li>
      </ul> 
       
      </div>

      
    </nav>
  </header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('frontend/images/avatars/avatar.png') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Welcome <br /> {{ Auth::user()->full_name }}</p>
          <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
         
          <a href="{{ url('/home') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
          <!-- <a href="{{ url('pp1') }}"><i class="fa fa-circle-o"></i> My Profile</a> -->
          <!-- <script>window.location.href = "{{ url('pp1') }}";</script> -->
          

          @if((Auth::user()->usertype) == "admin")
          <ul class="treeview-menu">
            <li class="active"><a href="{{ url('profile') }}"><i class="fa fa-circle-o"></i> Admin Profile</a></li>
           
            <li><a href=""><i class="fa fa-circle-o"></i> Settings</a></li>


            
          </ul>
          @else
        <ul class="treeview-menu">
            <li class="active"><a href="{{ url('profile') }}"><i class="fa fa-circle-o"></i> My Profile</a></li>
           
            <li><a href=""><i class="fa fa-circle-o"></i>User Settings</a></li>
            
          </ul>
          @endif
         
        </li>
        
 @if((Auth::user()->usertype) == "admin")
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Admin Control</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/home') }}"><i class="fa fa-circle-o"></i> Demo request</a></li>
            <li><a href="{{ url('edit-records') }}"><i class="fa fa-circle-o"></i>Users </a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Active Users</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Payment</a></li>
            <li><a href="{{ url('crud') }}"><i class="fa fa-circle-o"></i>Bussiness Report</a></li>
            <li><a href="{{ url('/import') }}"><i class="fa fa-circle-o"></i>Import Users</a></li>
          </ul>
        </li>
@endif

@if((Auth::user()->usertype) == "sadmin" || (Auth::user()->usertype) == "admin")
    <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>School Admin</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">6</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/home') }}"><i class="fa fa-circle-o"></i>School Profile </a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>School Users</a></li>
            <li><a href="{{ url('/import') }}"><i class="fa fa-circle-o"></i>Import Users</a></li>
            <li><a href="{{ url('/import') }}"><i class="fa fa-circle-o"></i>Request Demo accounts</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Bulk Payment</a></li>
            <li><a href="{{ url('/home') }}"><i class="fa fa-circle-o"></i>School Report</a></li>

            
          </ul>
        </li>
@endif


        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Primary Content</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/pp1') }}"><i class="fa fa-circle-o"></i>Pre-Paratory 1 </a></li>
            <li><a href="{{ url('/pp2') }}"><i class="fa fa-circle-o"></i>Pre-Paratory 2</a></li>
            <!-- <li><a href="{{ url('/pp1') }}"><i class="fa fa-circle-o"></i>Grade 1</a></li>
            <li><a href="{{ url('/pp1') }}"><i class="fa fa-circle-o"></i>Grade 2</a></li> -->
            <li><a href="{{ url('/g3') }}"><i class="fa fa-circle-o"></i>Grade 3</a></li>
             <li><a href="{{ url('/g4') }}"><i class="fa fa-circle-o"></i> Grade 4 </a></li>
          </ul>
        </li>
       <!--  <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Upper Primary Content</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">3</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/pp1') }}"><i class="fa fa-circle-o"></i> Grade 4 </a></li>
            <li><a href="{{ url('/pp1') }}"><i class="fa fa-circle-o"></i>Grade 5</a></li>
            <li><a href="{{ url('/pp1') }}"><i class="fa fa-circle-o"></i> Grade 6</a></li>
          </ul>
        </li> -->
  
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/home') }}"><i class="fa fa-circle-o"></i> Exams Progres Report</a></li>
            <li><a href="{{ url('/home') }}"><i class="fa fa-circle-o"></i> Course Report</a></li>
            <li><a href="{{ url('/home') }}"><i class="fa fa-circle-o"></i> General Report</a></li>
          </ul>
        </li>

     <li><a href="https://#"><i class="fa fa-book"></i> <span>Tutorials</span></a></li>
     <li><a href="https://#"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
     <li><a href="https://#"><i class="fa fa-book"></i> <span>Other Resources</span></a></li>
     <li><a href="https://#"><i class="fa fa-book"></i> <span>Reference</span></a></li>
     
        
      <!-- </ul> -->
    </section>
    <!-- /.sidebar -->
  </aside>

 @endif
          
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
      <!-- /.row -->
      <!-- Main row -->

      
    
     @yield('content')
         
 </div>
        <!-- </section> -->
        
      
    

    <!-- </section> -->
    
  
  
  
<!-- </div> -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <!-- <div class="control-sidebar-bg"></div> -->
</div>
</div>
<!-- <div style="height: 60px; margin-top:-21px; background-color: rgb(0,0,0); color: rgb(255,255,255); text-align: center;">  -->  
<div class="col-md-12" style="color: rgb(255,255,255); text-align: center;background-color: rgb(0,0,0);" >
            <div class="pt-5">
              <p style="color: rgb(255,255,255); text-align: center;background-color: rgb(0,0,0);">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> DALS |  All Rights Reserved | <a href="#" target="_blank" >privacy Policy</a> | <a href="#" target="_blank" >Term of use</a> |  <a href="http://dalslearning.com" target="_blank" >Dals Learning</a> 
            
            </p>
            <!-- </div> -->
          </div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="assets/bower_components/raphael/raphael.min.js"></script>
<script src="assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

<script src="assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="assets/bower_components/moment/min/moment.min.js"></script>
<script src="assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- ChartJS 1.0.2 -->
<script src="assets/plugins/chartjs-old/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
</body>
</html>
