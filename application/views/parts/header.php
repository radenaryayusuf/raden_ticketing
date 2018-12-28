<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Raden Ticketing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="author" content="Prakasam Mathaiyan">
    <meta name="description" content="">

    <!--[if IE]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="<?php echo base_url()?>assets/assets/plugins/lib/modernizr.js"></script>
    <link rel="icon" href="<?php echo base_url()?>assets/assets/images/favicon.png" type="image/gif">
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assets/plugins/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assets/css/bs-overide/bootstrap.wizard.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assets/plugins/validationEngine/validationEngine.jquery.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assets/plugins/monthly/css/monthly.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assets/plugins/emojionearea/emojionearea.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assets/plugins/datatable/dataTables.bootstrap.min.css">
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assets/plugins/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assets/plugins/date-picker/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assets/plugins/dateTime-picker/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assets/plugins/customselect/customselect.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assets/plugins/jasny-bootstrap/css/jasny-bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assets/plugins/emojionearea/emojionearea.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assets/plugins/timepicker/bootstrap-timepicker.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assets/plugins/colorpicker/css/bootstrap-colorpicker.min.css">
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/assets/css/style-default.css">
</head>

<body>
    
    <div class="wrapper has-footer">
        
        <header class="header-top navbar fixed-top">
            
            <div class="top-bar">   <!-- START: Responsive Search -->
                <div class="container">
                    <div class="main-search">
                        <div class="input-wrap">
                            <input class="form-control" type="text" placeholder="Search Here...">
                            <a href="page-search.html"><i class="sli-magnifier"></i></a>
                        </div>
                        <span class="close-search search-toggle"><i class="ti-close"></i></span>
                    </div>
                </div>
            </div>  <!-- END: Responsive Search -->

            <div class="navbar-header">
                <button type="button" class="navbar-toggle side-nav-toggle">
                    <i class="ti-align-left"></i>
                </button>

                <a class="navbar-brand" href="<?php echo base_url(); ?>">
                    <img src="<?php echo base_url()?>assets/assets/images/logo-w.svg">
                    <span>Raden Ticketing</span>
                </a>

                <ul class="nav navbar-nav-xs">  <!-- START: Responsive Top Right tool bar -->
                    <li>
                        <a href="javascript:;" class="collapse" data-toggle="collapse" data-target="#headerNavbarCollapse">
                            <i class="sli-user"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="search-toggle">
                            <i class="sli-magnifier"></i>
                        </a>
                    </li>
                    
                </ul>   <!-- END: Responsive Top Right tool bar -->
                
            </div>
            
            <div class="collapse navbar-collapse" id="headerNavbarCollapse">
                
                <ul class="nav navbar-nav">
                    
                    <li class="hidden-xs">
                        <a href="javascript:;" class="sidenav-size-toggle">
                            <i class="ti-align-left"></i>
                        </a>
                    </li>
                    
                    
                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                    
                    <li class="main-search hidden-xs">
                        <div class="input-wrap">
                            <input class="form-control" type="text" placeholder="Search Here...">
                            <a href="<?php echo base_url()?>assets/page-search.html"><i class="sli-magnifier"></i></a>
                        </div>
                    </li>
                    
                    <li class="user-profile dropdown">
                        <a href="javascript:;" class="clearfix dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo base_url()?>assets/demo/users/img-user-01.jpg" alt="" class="hidden-sm">
                            <div class="user-name"><?php echo $this->session->userdata('username'); ?><small class="fa fa-angle-down"></small></div>
                        </a>
                        <ul class="dropdown-menu dropdown-animated pop-effect" role="menu">
                            <li><a href="<?php echo base_url()?>assets/user-profile.html"><i class="sli-user"></i> My Profile</a></li>
                            <li><a href="<?php echo base_url()?>assets/app-calendar.html"><i class="sli-calendar"></i> Calendar</a></li>
                            <li><a href="<?php echo base_url()?>assets/msg-inbox.html"><i class="fa fa-envelope-o"></i> Inbox</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo base_url()?>assets/page-faq.html"><i class="sli-question"></i> FAQ's</a></li>
                            <li><a href="<?php echo site_url('auth/logout'); ?>"><i class="sli-logout"></i> Logout</a></li>
                        </ul>
                    </li>
                    
                </ul>
                
            </div><!-- END: Navbar-collapse -->
            
        </header>   <!-- END: Header -->
        