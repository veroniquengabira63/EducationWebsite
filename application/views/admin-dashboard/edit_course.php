<?php include 'header1.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="content-wrapper" style="min-height: 1244.06px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Course</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Course</li>
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
            
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Quick Edit Course</h3>
              </div>
              <?php foreach ($course_info as $course): ?>
              <form class="form" id="register_venue" action="<?php echo base_url() ?>/admin/update_course" accept-charset="UTF-8" method="post">
                <div class="card-body">
                  <div class="form-group">
                    
                    <label for="name" class="control-label">Course name</label>
                    <input class="form-control" type="text"  name="course_name" value="<?php echo $course->course_name ?>" tabindex="1" >
                    <input class="form-control" type="hidden"  name="id" value="<?php echo $course->id ?>" tabindex="1" >
                  </div>
                  <div class="form-group">
                    <label for="name" class="control-label">Course Category</label>
                    <select class="form-control select2" id="category"   name="category" tabindex="1" >
                      <option value=" ">--Select Course Category -- </option>
                      <option value="DIPLOMA ">DIPLOMA </option>
                      <option value="UNDERGRDUATE">UNDERGRDUATE</option>
                      <option value="POSTGRDUATE">POSTGRDUATE</option>
                      <option value="POSTGRDUATE DIPLOMA">POSTGRDUATE DIPLOMA</option>
                      <option value="DOCTORATE">DOCTORATE</option>
                    </select>
                  </div>
                 
                  <div class="form-group">
                    
                    <label for="name" class="control-label">Select Degree</label>
                    <select id="course_degree" class=" form-control"   name="course_degree">
                      <option value="<?php echo $course->course_degree ?>"><?php echo get_degrees($course->course_degree)['degree_name'] ; ?></option>
                      <?php foreach ($course_degrees as $course_degree ): ?>
                      
                      <option value="<?php echo $course_degree->id;  ?>"><?php echo $course_degree->degree_name;  ?> </option>
                      
                      <?php endforeach ?>
                    </select>
                    
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="street">is this Course Comes in Top Courses</label>
                    <?php if ($course->featured == '1') { ?>
                    <input type="checkbox" name="featured" checked value="1" data-bootstrap-switch  data-on-text="Yes" data-off-text="No">
                    <?php } else { ?>
                    <input type="checkbox" name="featured" value="1" data-bootstrap-switch  data-on-text="Yes" data-off-text="No">
                    <?php } ?>
                    
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input class="btn btn-danger" type="submit" name="save_vanue" tabindex="100" value="Save Degree"> <a href="javascript:history.back()">Cancel</a>
                </div>
              </form>
              <?php endforeach ?>
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
    <script src=" <?php echo base_url() ?>assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <script type="text/javascript">

      $('.select2').select2();

 

  <?php foreach ($course_info as $course): ?>
  
     

     
     $('#category').val( ['<?php echo $course->category ;?>']);

     $('#category').trigger('change');

    

  <?php endforeach; ?>

    
    $("input[data-bootstrap-switch]").each(function(){
    $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function(){
    $('#register_venue').validate({
    rules: {
    course_name: {
    required: true
    
    },
    course_degree: {
    required: true,
    
    }
    }
    });
    });
    $('.course').addClass('menu-open');
    $('.viewcourse').addClass('active');
    </script>