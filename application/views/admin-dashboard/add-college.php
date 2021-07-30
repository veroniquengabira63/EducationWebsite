<?php include 'header1.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="content-wrapper" style="min-height: 1244.06px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add College</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add College</li>
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
                <h3 class="card-title">Quick Add College</h3>
              </div>
              <form class="form" id="register_college" enctype="multipart/form-data"  action="<?php echo base_url() ?>/admin/register_college" accept-charset="UTF-8" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="name" class="control-label">College name</label>
                    <input class="form-control" type="text"  name="college_name" tabindex="1" >
                    <input class="form-control" type="hidden" name="user_id"  value="<?php echo $userid; ?>">
                  </div>
                  <div class="form-group">
                    <label class="control-label">College Stream</label>
                    
                    <select class="form-control select2"  multiple="multiple" data-placeholder="Select a Stream" name="course_degree[]" id="college_stream">
                      <?php foreach ($course_degrees as $course_degree ): ?>
                      
                      <option value="<?php echo $course_degree->id;  ?>"><?php echo $course_degree->degree_name;  ?> </option>
                      
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="control-label">College Courses</label>
                    
                    <select class="form-control select2" multiple="multiple"  data-placeholder="Select a Course" name="courses[]" id="college_course">
                      <option value="">Select Course </option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Country</label>
                    <select name="college_country" id="college_country" class="form-control select2">
                      <option selected="" value=""> - Select Country</option>
                      
                      <option value="101"> India</option>
                     
                    </select>
                    
                  </div>
                  <div class="form-group">
                    <label class="control-label">State</label>
                    <select name="college_state" id="college_state" class="form-control select2">
                      <option value=""> - Select State</option>
                    </select>
                    
                  </div>
                  <div class="form-group">
                    <label class="control-label">City</label>
                    <select name="college_city" id="college_city" class="form-control select2">
                      <option value=""> - Select City</option>
                    </select>
                    
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="street">Street <small>(optional)</small></label>
                    <input class="form-control" type="text" name="college_street" tabindex="25" id="street" value="">
                  </div>
                 
                  <div class="form-group">
                    <label class="control-label" >College Category</label>
                    <select  name="category"  class="form-control select2">
                      
                      <option value="DISTANCE EDUCATION">DISTANCE EDUCATION</option>
                      
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="zip">Zip/postcode </label>
                    <input class="form-control" type="text" name="college_zipcode" tabindex="30" id="zip" value="">
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="phone">Phone <small>(optional)</small></label>
                    <input class="form-control" type="text" name="college_phone" tabindex="35" id="phone" value="">
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="website">Website <small>(optional)</small></label>
                    <input class="form-control" type="text" name="college_website" tabindex="40" id="website" value="">
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="website">Email <small>(optional)</small></label>
                    <input class="form-control" type="text" name="college_email" tabindex="40" id="website" value="">
                  </div>
                  
                  <div class="form-group">
                    <label class="control-label" for="capacity">Eshtablished On </label>
                    <input class="form-control" type="text" name="eshatblished" placeholder="ex:1995" tabindex="45" id="capacity" value="">
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="college_type">Institute Type</label>
                    <select class="form-control"  name="institute_type"  id="institute_type" >
                      <option value="College">College</option>
                      <option value="University">University</option>
                    </select>
                  </div> 
                  <div class="form-group">
                    <label class="control-label" for="college_type">College Type</label>
                    <select class="form-control"  name="college_type"  id="college_type" >
                      <option value="Private">Private</option>
                      <option value="Public">Public</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="affiliated_by">Affiliated By</label>
                    <select class="form-control select2" multiple="" name="affiliated_by[]"  id="affiliated_by" >
                      <option value="UGC">UGC</option>
                      <option value="PCI">DEB</option>
                      <option value="NAAC">NAAC</option>
                     
                      
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="facilities">Facilities</label>
                    <select class="form-control select2" multiple="" name="facilities[]"  id="facilities" >
                     <option value="COMP LABS">COMP LABS</option>
                      <option value="SPORTS">SPORTS</option>
                      <option value="GYM">GYM</option>
                      <option value="MEDICAL">MEDICAL</option>
                      <option value="CAFETERIA">CAFETERIA</option>
                      <option value="LABORATORY">LABORATORY</option>
                      <option value="LIBRARY">LIBRARY</option>
                      <option value="AUDITORIUM">AUDITORIUM</option>
                      <option value="HOSTEL">HOSTEL</option>
                      <option value="BANKS">BANKS</option>
                      <option value="SECURITY">SECURITY</option>
                      <option value="TRANSPORT">TRANSPORT</option>
                     
                    </select>
                  </div>
  
                  
                 
                 
                  <div class="form-group">
                    <label class="control-label" for="description">Description</label>
                    <div class="field-note">Max 2000 characters.</div>
                     <textarea class="textarea" name="description" placeholder="Place some text here" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">

                          </textarea>
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="placement">Placement</label>
                    <div class="field-note">Max 2000 characters.</div>
                     <textarea class="textarea" name="placement" placeholder="Place some text here" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">

                          </textarea>
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="scholarship">Scholarship</label>
                    <div class="field-note">Max 2000 characters.</div>
                     <textarea class="textarea" name="scholarship" placeholder="Place some text here" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">

                          </textarea>
                  </div>
                  
                  <div class="custom-file">
                    <label class="custom-file-label" for="profile">Profile Photo</label>
                    <div class="field-note">Image Size 500 x 500</div>
                    <input class="custom-file-input" type="file" multiple name="college_profile"   id="profile">
                  </div>
                  
                  <div class="custom-file">
                    <label class="custom-file-label" for="brochure">Brochure (pdf)</label>
                    <div class="field-note">Accept Pdf File Only</div>
                    <input class="custom-file-input" type="file" accept="application/pdf" name="brochure"  id="brochure">
                  </div>
                  <div class="custom-file">
                    <label class=" custom-file-label"  for="cover">Choose Cover Photo</label>
                    <div class="field-note">Image Size 1300 x 200</div>
                    <input class=" custom-file-input" type="file"  name="college_cover"   id="cover">
                  </div>
                  
                  <h2>Upload Gallery</h2>
                  <div class="custom-file">
                    
                    <label class=" custom-file-label"  for="gallery">Choose Images</label>
                    <div class="field-note">Select Multiple image By Pressing <b>Ctrl</b></div>
                    <input class=" custom-file-input" type="file"  name="gallery[]" onchange="preview_image();" multiple=""  id="gallery">
                  </div>
                  <div class="row" id="image_preview"></div>
                  
                  <div class="card-footer">
                    <input class="btn btn-primary" type="submit" name="save_vanue" tabindex="100" value="Save college"> <a href="javascript:history.back()">Cancel</a>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php include 'footer1.php'; ?>
      <script type="text/javascript" src="http://talkerscode.com/webtricks/demo/js/jquery.form.js"></script>
      <script src=" <?php echo base_url() ?>assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
      <script src="<?php echo base_url() ?>assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
      <script src="<?php echo base_url() ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
       <script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
    <script>
   
    $(function () {
    // Summernote
    $('.textarea').summernote()
    })
    </script>
      <script type="text/javascript">
      function preview_image()
      {
      $('#image_preview').html(' ')
      var total_file=document.getElementById("gallery").files.length;
      for(var i=0;i<total_file;i++)
      {
      $('#image_preview').append("<img width='200' class='col-md-3' src='"+URL.createObjectURL(event.target.files[i])+"'><br>");
      }
      }
      
      </script>
      <script type="text/javascript">
      $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
      });
      $(document).ready(function(){
      $('.select2').select2()
      $('#register_college').validate({
      rules: {
      college_name: {
      required: true,
      },course_degree: {
      required: true,
      },courses: {
      required: true,
      },
      college_city: {
      required: true,
      },
      college_zipcode: {
      required: true,
      },
      college_country: {
      required: true,
      },
      college_state: {
      required: true,
      },
      eshatblished: {
      required: true,
      },
      college_type: {
      required: true,
      },
      college_description: {
      required: true,
      },
      college_profile: {
      required: true,
      },
      college_cover: {
      required: true,
      },brochure: {
      required: true,
      },gallery: {
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
      </script>
      <script type="text/javascript">
      $('#college_country').on('change' , function ()
      {
      country_id = $('#college_country').val();
      if(country_id){
      $.ajax({
      type: 'POST',
      url: '<?php echo base_url('admin/getStates'); ?>',
      data:{cid: country_id},
      success: function(response){
      $('#college_state').html('<option value="">- Select State - </option>');
      var obj = $.parseJSON(response);
      if(obj){
      $(obj).each(function(){
      var option = $('<option/>');
        option.attr('value' , this.id).text(this.name);
        $('#college_state').append(option);
        })
        
        }else{
        $('#college_state').html('<option value="">- State Not Available - </option>');
        }
        }
        })
        }
        })
        /*============city===================*/
        $('#college_state').on('change' , function ()
        {
        state_id = $('#college_state').val();
        if(state_id){
        $.ajax({
        type: 'POST',
        url: '<?php echo base_url('admin/getCities'); ?>',
        data:{sid: state_id},
        success: function(response){
        $('#college_city').html('<option value="">- Select city - </option>');
        var obj = $.parseJSON(response);
        if(obj){
        $(obj).each(function(){
        var option = $('<option/>');
          option.attr('value' , this.id).text(this.name);
          $('#college_city').append(option);
          })
          
          }else{
          $('#college_city').html('<option value="">- city Not Available - </option>');
          }
          }
          })
          }
          })
          </script>
          <script type="text/javascript">
          $('#college_stream').on('change' , function ()
          {
          stream_id = $('#college_stream').val();
          if(stream_id){
          
          $.ajax({
          type: 'POST',
          url: '<?php echo base_url('admin/getAjaxCourses'); ?>',
          data:{sid: stream_id},
          success: function(response){
          $('#college_course').html('<option value="">- Select State - </option>');
          var obj = $.parseJSON(response);
          if(obj){
          $(obj).each(function(){
          var option = $('<option/>');
            option.attr('value' , this.id).text(this.course_name);
            $('#college_course').append(option);
            })
            
            }else{
            $('#college_course').html('<option value="">- State Not Available - </option>');
            }
            }
            })
            }
            })
            </script>
            <script>
          
            $('.college').addClass('menu-open');
            $('.addcollege').addClass('active');
            </script>

<script type="text/javascript">

  $('#institute_type').on('change' , function ()
  {
    var type = $('#institute_type').val();
    if(type == 'College')
    {
      $('#college_type').html('<option value="Private">Private</option>'+'<option value="Public">Public</option>');
    }
    else
    {
      $('#college_type').html('<option value="Private">Private</option>'+'<option value="Public">Public</option>'+'<option value="STATE UNIVERSITY">STATE UNIVERSITY</option>'+'<option value="STATE PRIVATE UNIVERSITY">STATE PRIVATE UNIVERSITY</option>'+'<option value="DEEMED TO BE UNIVERSITY">DEEMED TO BE UNIVERSITY</option>'+'<option value="CENTRAL UNIVERSITY">CENTRAL UNIVERSITY</option>'+'<option value="CENTRAL OPEN UNIVERSITY">CENTRAL OPEN UNIVERSITY</option>'+'<option value="STATE OPEN UNIVERSITY">STATE OPEN UNIVERSITY</option>');
    }
})

</script>