<?php include 'header1.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="content-wrapper" style="min-height: 1244.06px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add Course Details</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add Course Details</li>
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
                <h3 class="card-title">Quick Add Course Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form" id="register_venue" action="<?php echo base_url() ?>/admin/UpdateCollegeSpecs" accept-charset="UTF-8" method="post" novalidate="novalidate">
                <div class="card-body">
                  <?php foreach ($details as $course): ?>
                  <div class="form-group">
                    <label for="name" class="control-label"> Course</label>
                    
                      <input type="hidden"  name="main_id" value="<?php echo $course->id ?>"><h3><?php echo getCourse($course->name).' in '.get_specialization($course->specialization) ; ?></h3>
                    <input type="hidden"  name="college" value="<?php echo $course->college ?>">
                    <input type="hidden"  name="detail_id" value="<?php echo $course->detail_id ?>">
                   
                  </div>
                
                  <div class="form-group">
                    <label for="name" class="control-label">Fees</label>
                    <input class="form-control" type="text" value="<?php echo $course->fee ?>"  name="fee" tabindex="1" >
                  </div>
                
                
                  <div class="form-group">
                    <label for="name" class="control-label">Duration</label>
                    <input class="form-control" type="text"  name="duration" value="<?php echo $course->duration ?>" tabindex="1" >
                  </div>
                </div>
                <?php endforeach ?>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input class="btn btn-primary" type="submit" name="save_vanue" tabindex="100" value="Add Course Details"> <a href="javascript:history.back()">Cancel</a>
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
    <script src="<?php echo base_url() ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
    <script>

      $('.select2').select2();

    $(function () {
    // Summernote
    $('.textarea').summernote()
    })
    </script>
    <script type="text/javascript">
    $(document).ready(function(){
    $('#register_venue').validate({
    rules: {
    course_name: {
    required: true,
    },
    course_degree: {
    required: true
    
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
    $('.course').addClass('menu-open');
    $('.addcourse').addClass('active');
    </script>