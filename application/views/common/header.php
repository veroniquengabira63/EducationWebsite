<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
        <link href="<?php echo base_url() ?>/assets/css/style.css" rel="stylesheet" type="text/css">
         <!--AOS-->
        <!--<link rel="stylesheet" href="bower_components/aos/dist/aos.css">-->
        <!--<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">-->
        <!-- Toastr -->
        <link rel="stylesheet" href="<?= base_url() ?>/assets/css/interspace_home.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/toastr/toastr.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/index.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/admitcard.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/review.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/exam.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/body.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/new.css">
        
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/country.css">
        <?php if (isset($ttitle)) {
        ?><title>Interspace Education | <?php echo $title; ?></title>
        <?php
        }
        
        else { ?>
        <title>Interspace Education | Top Distance Learning Universities/Institutions In India</title>
        <?php } ?>
       
  </head>
  <body>
<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 p-0">
                <div class="top-contact-details">
                   <!--  <ul class="pl-2">
                        <li><a href="<?php echo base_url() ?>/india/all"> Top Universities</a></li>
                        <li><a href="<?php echo base_url() ?>/courses/"> Top Courses</a></li>
                        <li><a href="<?php echo base_url() ?>/exams/"> Exams</a></li>
                        <li><a href="<?php echo base_url() ?>/news"> News</a></li>
                       
                    </ul> -->
                </div>
            </div>
            <div class="col-md-6 col-12 login" >
                <div class="top-user-login top-contact-details">
                    <ul>
                        <?php if($this->session->userdata('login_data')): ?>
                            <?php $login = $this->session->userdata('login_data'); ?>
                            <?php if ($login['user_role'] == 'admin') { ?>
                        <li><a href="<?php echo base_url() ?>/admin"><i class=" fa fa-dashboard"></i> Admin Dashboard</a></li>
                        <li><a href="<?php echo base_url() ?>/home/logout"><i class="fa fa-sign-in"></i> Logout</a></li>
                         <?php } else { ?>
                        <li><a href="<?php echo base_url() ?>/user/<?php echo url_title($login['username'], 'dash', true); ?>"><i class=" fa fa-dashboard"></i> User Dashboard</a></li>
                        <li><a href="<?php echo base_url() ?>/home/logout"><i class="fa fa-sign-in"></i> Logout</a></li>
                         <?php } ?>
                         <?php  else: ?>
                         <li><a href="<?php echo base_url() ?>/register"><i class=" fa fa-graduation-cap"></i> Register</a></li>
                        <li><a href="<?php echo base_url() ?>/login"><i class="fa fa-sign-in"></i> Login</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>    
<header id="header">
    <div class="container" id="menu_container">

      <div id="logo" class="pull-left">
        <h1><a href="<?php echo base_url() ?>" class="scrollto"><img width="200" src="<?php echo base_url() ?>assets/images/intersect_logo.png"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      

    </div>
  </header><!-- #header -->
