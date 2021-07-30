<?php include 'header1.php'; ?>



<?php include 'sidebar.php'; ?>

<div class="content-wrapper" style="min-height: 1244.06px;">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <div class="container-fluid">

        <div class="row mb-2">

          <div class="col-sm-6">

            <h1>Add Course Specialization</h1>

          </div>

          <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item"><a href="#">Home</a></li>

              <li class="breadcrumb-item active">Add Course Specialization</li>

            </ol>

          </div>

        </div>

      </div><!-- /.container-fluid -->

    </section>



    <!-- Main content -->

    <section class="content">

      <div class="container-fluid">

        <div class="row">

          <div class="col-md-12">

            

            <div class="card card-primary">

              <div class="card-header">

                <h3 class="card-title">Quick Add Course Specialization</h3>

              </div>

              <!-- /.card-header -->

              <!-- form start -->

              <form class="form" id="register_venue"  action="<?php echo base_url() ?>/admin/register_specialization" accept-charset="UTF-8" method="post" novalidate="novalidate">

                <div class="card-body">

                  <div class="form-group">

                    <label for="name" class="control-label">Specialization Name </label>

                    <input class="form-control" type="text"  name="specialization_name" tabindex="1" >

                  </div>

                  

                 

                </div>

                <!-- /.card-body -->



                <div class="card-footer">

                <input class="btn btn-primary" type="submit" name="save_stream" tabindex="100" value="Add Course Specialization"> <a href="javascript:history.back()">Cancel</a>

                </div>

              </form>

            </div>

          </div>

          <!-- left column -->

         

        </div>

        <!-- /.row -->

      </div><!-- /.container-fluid -->

    </section>

    <!-- /.content -->

  </div>









<?php include 'footer1.php'; ?>

<!-- SweetAlert2 -->



<script type="text/javascript">



$(document).ready(function(){



    $('#register_venue').validate({



  rules: {



    stream_name: {



         required: true,

     }



  },

  errorElement: 'span',

    errorPlacement: function (error, element) {

      error.addClass('invalid-feedback');

      element.closest('.form-group').append(error);

    },

    highlight: function (element, errorClass, validClass) {

      $(element).addClass('is-invalid');

    },

    unhighlight: function (element, errorClass, validClass) {

      $(element).removeClass('is-invalid');

    }





});



});







 $('.specs').addClass('menu-open');

 $('.addspecs').addClass('active');



 </script>





