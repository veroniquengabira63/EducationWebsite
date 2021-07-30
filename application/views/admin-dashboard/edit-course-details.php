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
              <?php foreach ($course as $detail): ?>
              <form class="form" id="register_venue" action="<?php echo base_url() ?>/admin/updateCourseDetails" accept-charset="UTF-8" method="post" novalidate="novalidate">
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="name" class="control-label">Select Course</label>
                    <input type="text" readonly="" class="form-control" name="course_name" value="<?php echo getCourse($detail->course_name) ?>">
                    <input type="hidden" name="detail_id" value="<?php echo $detail->id ?>">
                    <input type="hidden" name="college" value="<?php echo $detail->college ?>">
                  </div>
                   
                  <div class="form-group">
                    <label for="name" class="control-label">Fees</label>
                    <input class="form-control" type="text"  name="fees" tabindex="1" value="<?php echo $detail->fees ?>" >
                  </div>
                 
                  <!--<div class="form-group">-->
                  <!--  <label for="name" class="control-label">Entrance Exams Accepted</label>-->
                  <!--  <select required id="exams" name="exams[]" class="form-control select2" multiple>-->
                     
                  <!--    <option value="null">Nill</option>-->
                  <!--    <option value="BMC">BMC</option>-->
                  <!--    <option value="JDB">JDB</option>-->
                  <!--  </select>-->
                  <!--</div>-->
                  <div class="form-group">
                    <label for="name" class="control-label">Eligibility</label>
                    <textarea class="textarea" name="eligibility" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                    <?php echo $detail->eligibility ?>
                    </textarea>
                  </div>
                  
                  <div class="form-group">
                    <label for="name" class="control-label">Course Type</label>
                    <select name="course_type" class="form-control">
                      <option value=" <?php echo $detail->course_type ?>"><?php echo $detail->course_type ?></option>
                      <option value="Post Graduation">Post Graduation</option>
                      <option value="Under Graduation">Under Graduation</option>
                      <option value="Graduation">Graduation</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="name" class="control-label">Type Of Course</label>
                    <select name="type_of_course" class="form-control">
                      <option value=" <?php echo $detail->type_of_course ?>"><?php echo $detail->type_of_course ?></option>
                      <option value="Degree">Degree</option>
                      <option value="Certification">Certification</option>
                      <option value="Diploma">Diploma</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="name" class="control-label">Place</label>
                    <select name="place" class="form-control">
                      <option value=" <?php echo $detail->place ?>"><?php echo $detail->place ?></option>
                      <option value="Campus">Campus </option>
                      <option value="Distance">Distance</option>
                      
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="name" class="control-label">Duration</label>
                    <input class="form-control" type="text"  name="duration" tabindex="1" value="<?php echo $detail->duration ?>" >
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input class="btn btn-primary" type="submit" name="save_vanue" tabindex="100" value="Update Course Details"> <a href="javascript:history.back()">Cancel</a>
                </div>
              </form>
              <?php endforeach; ?>
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
    $(function () {
    // Summernote
    $('.textarea').summernote()
    })
    </script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('.select2').select2();
      <?php foreach ($course as $detail): ?>

        <?php $exams = explode(', ', $detail->exams); ?>
        
        $('#exams').val( [<?php for ($i = 0; $i < count($exams); $i++) {  ?>'<?php echo $exams[$i] ;?>', <?php } ?>]);
      $('#exams').trigger('change');
      

      <?php endforeach; ?>

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