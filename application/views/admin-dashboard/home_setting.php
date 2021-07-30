<?php include 'header1.php'; ?>



<?php include 'sidebar.php'; ?>


    <div class="content-wrapper" style="min-height: 1200.88px;">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <div class="container-fluid">

        <div class="row mb-2">

          <div class="col-sm-6">

            <h1>Homepage Setting</h1>
           

          </div>

          <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item"><a href="#">Home</a></li>

              <li class="breadcrumb-item active">Homepage Setting</li>

            </ol>

          </div>

        </div>

      </div><!-- /.container-fluid -->

    </section>



    <!-- Main content -->

    <section class="content">

      <div class="row">

        <div class="col-12">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Home Setting</h3>
              </div>
          <form method="post" action="<?= base_url() ?>/admin/updatehomesetting">
              <div class="card-body">
             
          
              <div class="home_setting row">
                  
                  <div class="form-group col-6">
                      <label>Select 4 Top Colleges </label>
                      <select name="top_colleges[]" class="select2" id="top_colleges" multiple="multiple" data-placeholder="Select a college" required style="width: 100%;">
                          <?php foreach($colleges as $college): ?>
                            <option value="<?= $college->id  ?>"><?= $college->college_name  ?></option>
                          <?php endforeach; ?>
                      </select>
                  </div>
                  <div class="form-group col-6">
                      <label>Select 4 Top Courses</label>
                      <select name="top_courses[]" class="select2" id="top_courses" multiple="multiple" data-placeholder="Select a Courses" required style="width: 100%;">
                          <?php foreach($courses as $course): ?>
                            <option value="<?= $course->id  ?>"><?= $course->course_name  ?></option>
                          <?php endforeach; ?>
                      </select>
                  </div>
                  <div class="text-right">
                      <button type="submit" class="btn btn-primary ">Update</button>
                  </div>
                
                  
              </div>
              </div>
          </form>

          <!-- /.card -->

        </div>

        <!-- /.col -->

      </div>

      <!-- /.row -->

    </section>

    <!-- /.content -->

  </div>



<?php include 'footer1.php'; ?>
<script type="text/javascript">


        $(document).ready(function() {

          var last_valid_selection = null;

          $('.select2').change(function(event) {

            if ($(this).val().length > 4) {

              $(this).val(last_valid_selection);
            } else {
              last_valid_selection = $(this).val();
            }
          });
          
          <?php foreach ($home_setting as $setting): ?>
      <?php $college = explode(',', $setting->top_colleges); ?>
      <?php $course = explode(',', $setting->top_courses); ?>
      
      $('#top_colleges').val( [<?php for ($i = 0; $i < count($college); $i++) {  ?>'<?php echo $college[$i] ;?>', <?php } ?>]);
      $('#top_colleges').trigger('change');
      $('#top_courses').val( [<?php for ($i = 0; $i < count($course); $i++) {  ?>'<?php echo $course[$i] ;?>', <?php } ?>]);
      $('#top_courses').trigger('change');
          
        });
        <?php endforeach; ?>
        </script>


<script>
$('.select2').select2()
  $(function () {

    $("#example1").DataTable({

      "responsive": true,

      "autoWidth": false,

    });

   

  });



$('.category').addClass('menu-open');

 $('.viewcategory').addClass('active');



  

</script>

<script type="text/javascript">

    var url="<?php echo base_url();?>";

    function deletes(id){

       var r=confirm("Do you want to delete this?")

        if (r==true)

          window.location = url+"/admin/deleteCategory/"+id;

        else

          return false;

        } 



</script>