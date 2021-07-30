<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>AdminLTE 3 | Dashboard</title>

  <!-- Tell the browser to be responsive to screen width -->

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->

  <link rel="stylesheet" href=" <?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">

  <!-- Ionicons -->

  <link rel="stylesheet" href=" https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Toastr -->

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/toastr/toastr.min.css">

  <!-- Theme style -->

  <link rel="stylesheet" href=" <?php echo base_url() ?>assets/dist/css/adminlte.min.css">



  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/summernote/summernote-bs4.css">

  <!-- Select2 -->

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/select2/css/select2.min.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">



  <!-- Daterange picker -->

  <link rel="stylesheet" href=" <?php echo base_url() ?>assets/plugins/daterangepicker/daterangepicker.css">

  

  <!-- Google Font: Source Sans Pro -->

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>

<?php 



	if (empty($this->session->userdata('login_data'))) {



		redirect(base_url('home'),'refresh');



        }



       $userdata = $this->session->userdata('login_data');



       $userid = $userdata['id'];



       $user_role = $userdata['user_role'];



       $profile = $userdata['profile'];



       $user_name = $userdata['username'];



       if ( $user_role != 'admin') {



       	redirect(base_url('home'),'refresh');



       }



	 ?>

<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">



  <!-- Navbar -->

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Left navbar links -->

    <ul class="navbar-nav">

      <li class="nav-item">

        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>

      </li>

     

    </ul>



  

    <!-- Right navbar links -->

    <ul class="navbar-nav ml-auto">

      <!-- Messages Dropdown Menu -->
      <li class="nav-item ">

        <a class="nav-link"  href="<?php echo base_url() ?>/home">

          <i class="fa  fa-home"></i>

          Home

        </a>
      </li>
       <li class="nav-item ">

        <a class="nav-link"  href="<?php echo base_url() ?>/home/logout">

          <i class="fa  fa-sign-out-alt"></i>

          Logout

        </a>

       

      </li>

      <!-- Notifications Dropdown Menu -->

   

    </ul>

  </nav>

  <!-- /.navbar -->