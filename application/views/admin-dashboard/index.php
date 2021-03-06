<?php include 'header1.php'; ?>



	<?php include 'sidebar.php'; ?>





<div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <div class="content-header">

      <div class="container-fluid">

        <div class="row mb-2">

          <div class="col-sm-6">

            <h1 class="m-0 text-dark">Dashboard</h1>

          </div><!-- /.col -->

          <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item"><a href="#">Home</a></li>

              <li class="breadcrumb-item active">Dashboard v1</li>

            </ol>

          </div><!-- /.col -->

        </div><!-- /.row -->

      </div><!-- /.container-fluid -->

    </div>

    <!-- /.content-header -->



    <!-- Main content -->

	<section class="content">

	      <div class="container-fluid">

	        <!-- Small boxes (Stat box) -->

	        <div class="row">

          <div class="col-lg-3 col-6">

            <!-- small box -->

            <div class="small-box bg-info">

              <div class="inner">

                <h3><?php echo $stream_count ; ?></h3>



                <p>Streams</p>

              </div>

              <div class="icon">

                <i class="ion ion-bag"></i>

              </div>

              <a href="<?php echo base_url() ?>/admin/view_course_stream" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

            </div>

          </div>

          <!-- ./col -->

          <div class="col-lg-3 col-6">

            <!-- small box -->

            <div class="small-box bg-success">

              <div class="inner">

                <h3><?php echo $course_count ; ?></h3>



                <p>Courses</p>

              </div>

              <div class="icon">

                <i class="ion ion-stats-bars"></i>

              </div>

              <a href="<?php echo base_url() ?>/admin/view_course" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

            </div>

          </div>

          <!-- ./col -->

          <div class="col-lg-3 col-6">

            <!-- small box -->

            <div class="small-box bg-warning">

              <div class="inner">

                <h3><?php echo $user_count ; ?></h3>



                <p>User Registrations</p>

              </div>

              <div class="icon">

                <i class="ion ion-person-add"></i>

              </div>

              <a href="<?php echo base_url() ?>/admin/view_users" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

            </div>

          </div>

          <!-- ./col -->

          <div class="col-lg-3 col-6">

            <!-- small box -->

            <div class="small-box bg-danger">

              <div class="inner">

                <h3><?php echo $college_count ; ?></h3>



                <p>Institutes</p>

              </div>

              <div class="icon">

                <i class="ion ion-pie-graph"></i>

              </div>

              <a href="<?php echo base_url() ?>/admin/view_college" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

            </div>

          </div>

          <!-- ./col -->

        </div>

	    </div>

	</section>

</div>



<?php include 'footer1.php'; ?>



