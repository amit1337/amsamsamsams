<!DOCTYPE html>
<html>
  <head>
    <style>
    img{    height: 50px;
    width: 102px;}
    </style>
    <meta charset="UTF-8">
    <title>Vehicle-Soft</title> 
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link rel="shortcut icon" href="images/logo.jpg" />
    
       <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    
    <link href="dist/css/thoughtf_custom.css" rel="stylesheet" type="text/css" />
    
    <!--
<link href="bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    
    <link href="bootstrap/css/ionicons.min.css" rel="stylesheet" type="text/css" />
-->
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

    
    <link rel="stylesheet" href="<?php echo site_root;?>includes/members/chosen/prism.css">
<link rel="stylesheet" href="<?php echo site_root;?>includes/members/chosen/chosen.css">

    <!-- DATA TABLES -->
    <link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    
    
    <!-- Theme style -->
 
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    .box-title{
      width: 100%;
      }
      
          .box-title a{
      float: right;
      }
    </style>
  </head>
  <body class="skin-blue sidebar-mini  sidebar-collapse">
    <div class="wrapper">
 <header class="main-header">

        



        <!-- Logo -->
        <a href="index.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>V</b>Soft</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Vehicle-Soft</b></span>
        </a>
        
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          
         <img src="images/logo.jpg" alt="Vehicles"/> 
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
         
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->

              
             
           
              
              <!-- Notifications: style can be found in dropdown.less -->
              
              <!-- Tasks: style can be found in dropdown.less -->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="./images/logo.jpg" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"> <?php echo $_SESSION['ad_name'];
	             
	                  
                  ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="./images/logo.jpg" class="img-circle" alt="User Image" />
                    <p>
               
                      <?php echo $_SESSION['ad_name'];
                      
         ?>
                     <!--  <small>Member since Nov. 2012</small> -->
                    </p>
                  </li>
                 
                  <li class="user-footer">
                    <div class="pull-left">
                    
                    </div>
                    <div class="pull-right">
                      <a href="logout.php" class="btn btn-default btn-flat" >Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <!--
<li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
-->
            </ul>
          </div>

        </nav>
      </header>
      
        