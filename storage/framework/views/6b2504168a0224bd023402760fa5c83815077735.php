<?php /* D:\xampp\htdocs\newxampp\Laravel\SMS17-05-2019\resources\views/layouts/fontendheader.blade.php */ ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>Welcome | Rajshahi College Department of Economics.</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta name="csrf-token"   content="<?php echo e(csrf_token()); ?>">
    <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/css/parsley.css')); ?>" rel="stylesheet">
    <script src="<?php echo e(asset('js/jquery-3.3.1.min.js')); ?>"></script>
    
</head>
<body>
<div class="container">
    <div class="content">
        <header>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-2">
                    <div class="logo"> <a href="index.php"><img class="img-responsive" src="assets/img/logo.jpg"></a> </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-10">
                    <div class="logo">
                        <h1><a href="index.php">Rajshahi College Department of Economics</a></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <nav class="navbar navbar-inverse" role="navigation">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-animations"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                            </div>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-animations" data-hover="dropdown" data-animations="fadeInDown fadeInRight fadeInUp fadeInLeft">
                                <ul class="nav navbar-nav">
                                    <li><a href="index.php">Home</a></li>
                                    <li class="dropdown"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Faculty <span class="caret"></span></a>
                                        <ul class="dropdown-menu dropdownhover-bottom" role="menu">
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="honor-board.php">Professors</a></li>
                                            <li><a href="advisory-council.php">Assistant Professors</a></li>
                                            <li><a href="executive-committee.php">Lecturers</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="notice.php">Notice</a></li>
                                    <li><a href="events.php">Events</a></li>
                                    <li><a href="<?php echo e(url('result')); ?>">Result</a></li>
                                    <li><a href="download.php">Download</a></li>
                                    <li><a href="contact-us.php">Contact</a></li>
                                    <li class="dropdown"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Login <span class="caret"></span></a>
                                        <ul class="dropdown-menu dropdownhover-bottom" role="menu">
                                            <li><a href="<?php echo e(url('admin/dashboard')); ?>">Super Admin</a></li>
                                            <li><a href="<?php echo e(url('gadmin/dashboard')); ?>">Admin</a></li>
                                            <li><a href="<?php echo e(url('teacher/dashboard')); ?>">Teacher</a></li>
                                            <li><a href="<?php echo e(url('parent/dashboard')); ?>">Parent</a></li>
                                            <li><a href="<?php echo e(url('student/dashboard')); ?>">Student</a></li>
                                            <li><a href="<?php echo e(url('accountant/dashboard')); ?>">Accountant</a></li>
                                            <li><a href="<?php echo e(url('libarian/dashboard')); ?>">Libarian</a></li>
                                           
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <div class="clearfix">&nbsp;</div>
