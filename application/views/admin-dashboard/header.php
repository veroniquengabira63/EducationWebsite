<!DOCTYPE html>

<html>

<head>

	<title>Admin Dashboard</title>

	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>





	  <!-- Favicon and Touch Icons -->

	<link href="<?php echo base_url() ?>assets/images/favicon.png" rel="shortcut icon" type="image/png">

	<!-- CSS | Theme Color -->

	<link href="<?php echo base_url() ?>assets/css/colors/theme-skin-pink.css" rel="stylesheet" type="text/css">



	<!-- Stylesheet -->

	<link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

	<link href="<?php echo base_url() ?>assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css">

	<link href="<?php echo base_url() ?>assets/css/animate.css" rel="stylesheet" type="text/css">

	<link href="<?php echo base_url() ?>assets/css/alertify/alertify.css" rel="stylesheet" type="text/css">

	<link href="<?php echo base_url() ?>assets/css/alertify/themes/default.css" rel="stylesheet" type="text/css">

	<!-- CSS | Main style file -->

	<link href="<?php echo base_url() ?>assets/css/style-main.css" rel="stylesheet" type="text/css">

	<link href="<?php echo base_url() ?>assets/css/dashboard/dashboard.css" rel="stylesheet" type="text/css">

	<link href="<?php echo base_url() ?>assets/css/bootstrap_5col.css" rel="stylesheet" type="text/css">

	 <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/croppie.css">

	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/css/bootstrap-select.min.css">

	<!-- CSS | Custom Margin Padding Collection -->

	<link href="<?php echo base_url() ?>assets/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">

	<!-- CSS | Responsive media queries -->

	<link href="<?php echo base_url() ?>assets/css/responsive.css" rel="stylesheet" type="text/css">

	<link href="<?php echo base_url() ?>assets/css/slick/slick.css" rel="stylesheet" type="text/css">

	<link href="<?php echo base_url() ?>assets/css/slick/slick.theme.css" rel="stylesheet" type="text/css">

	<!-- external javascripts -->

	<script src="<?php echo base_url() ?>assets/js/jquery-2.2.4.min.js"></script>



	<script src="<?php echo base_url() ?>assets/js/jquery-ui.min.js"></script>
	<script src="<?php echo base_url() ?>assets/ckeditor/ckeditor.js"></script>

	<script src="<?php echo base_url() ?>assets/js/jquery-plugin-collection.js"></script>



	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/js/bootstrap-select.min.js"></script>

	<script src="<?php echo base_url() ?>assets/js/slick.js"></script>

<style type="text/css">

	a {

    cursor: pointer;

}

.side_bar{

	    min-height: calc(100vh - 75px);

}

.sidebar-navigation ul li {

    padding: 15px;

    font-size: 16px;

    background: #35353538;

    margin: 10px;

}

.form-group .dropdown-menu{

	background: #fff;

}

</style>



</head>

<body>

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

	

	<div class="dashboard-header bg-black-222">

		<div class="container-fluid ">

			<div class="row">

				<div class="col-md-4 col-xs-4"><img class="img-circle pull-left mt-20 mr-20" width="50" src="<?php echo base_url(); ?>assets/images/profile/<?php echo $profile; ?>"><h2 class="text-capitalize text-white">Hello , <?php echo $user_name ?></h2>

				</div>

				<div class="col-md-4 col-xs-4 text-center p-20">

        

         <!-- <a href="<?php echo base_url() ?>"> <img width="150" src="<?php echo base_url() ?>assets/images/footer-logo.png"></a> -->

     

      </div>

				<div class="col-md-4 col-xs-4 text-right mt-20"><a class="text-white " href="<?php echo base_url() ?>home/logout">Logout</a></div>

			</div>

		</div>

	</div>

	<div class="d_table">