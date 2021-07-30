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
              <?php foreach ($college_info as $college): ?>
              <form class="form" id="register_college" enctype="multipart/form-data"  action="<?php echo base_url() ?>/admin/update_college" accept-charset="UTF-8" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="name" class="control-label">College name</label>
                    <input class="form-control" type="text"  name="college_name" value="<?php echo $college->college_name ?>" tabindex="1" >
                    <input class="form-control" type="hidden" name="college_id"  value="<?php echo $college->id ; ?>">
                  </div>
                  <div class="form-group">
                    <label class="control-label">College Stream</label>
                    
                    <select  class="form-control select2" id="college_stream"  multiple="multiple" data-placeholder="Select a Stream" name="course_degree[]">
                      <?php $stream = explode($college->course_degrees, ','); ?>
                      
                      <?php foreach ($course_degrees as $course_degree ): ?>
                      
                      <option value="<?php echo $course_degree->id;  ?>"><?php echo $course_degree->degree_name;  ?> </option>
                      
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="control-label">College Courses</label>
                    
                    <select  class="form-control select2" id="college_course" multiple="multiple"  data-placeholder="Select a Course" name="courses[]">
                      
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
                      <option value="<?php echo $college->states; ?>"> - Select State</option>
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
                    <input class="form-control" type="text" name="college_street" tabindex="25" value="<?php echo $college->street ?>" id="street" value="">
                  </div>
                  
                  <div class="form-group">
                    <label class="control-label" >College Category</label>
                    <select  name="category" id="category"  class="form-control select2">
                      
                      <option value="DISTANCE EDUCATION">DISTANCE EDUCATION</option>
                      
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="zip">Zip/postcode </label>
                    <input class="form-control" type="text" name="college_zipcode" value="<?php echo $college->zipcode ?>" tabindex="30" id="zip" value="">
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="phone">Phone <small>(optional)</small></label>
                    <input class="form-control" type="text" name="college_phone" value="<?php echo $college->phone ?>" tabindex="35" id="phone" value="">
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="website">Website <small>(optional)</small></label>
                    <input class="form-control" type="text" value="<?php echo $college->website ?>" name="college_website" tabindex="40" id="website" value="">
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="website">Email <small>(optional)</small></label>
                    <input class="form-control" type="text" name="college_email" value="<?php echo $college->email ?>" tabindex="40" id="website" value="">
                  </div>
                  
                  <div class="form-group">
                    <label class="control-label" for="capacity">Eshtablished On </label>
                    <input class="form-control" type="text" name="eshatblished" placeholder="ex:1995" value="<?php echo $college->eshtablished ?>" tabindex="45" id="capacity" value="">
                  </div>
                   <div class="form-group">
                    <label class="control-label" for="college_type">Institute Type</label>
                    <select class="form-control select2"  name="institute_type"  id="institute_type" >
                      <option value="College">College</option>
                      <option value="University">University</option>
                    </select>
                  </div> 
                  <div class="form-group">
                    <label class="control-label" for="college_type">College Type</label>
                    <select class="form-control select2"  name="college_type"  id="college_type" >
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

                            <?php echo $college->description ?>

                          </textarea>
                    
                  </div>
                   <div class="form-group">
                    <label class="control-label" for="placement">Placement</label>
                    <div class="field-note">Max 2000 characters.</div>
                     <textarea class="textarea" name="placement" placeholder="Place some text here" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                          <?php echo $college->placement ?>
                          </textarea>
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="scholarship">Scholarship</label>
                    <div class="field-note">Max 2000 characters.</div>
                     <textarea class="textarea" name="scholarship" placeholder="Place some text here" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                        <?php echo $college->scholarship ?>
                          </textarea>
                  </div>
                 
                  <div class="profile-img">
                    <img width="100" src="<?php echo base_url() ?>/assets/images/profile/<?php echo $college->profile_photo ?>">
                    <input type="hidden" name="profile" value="<?php echo $college->profile_photo ?>">
                  </div>
                  <div class="custom-file">
                    <label class="custom-file-label" for="profile">Profile Photo</label>
                    <div class="field-note">Image Size 500 x 500</div>
                    <input class="custom-file-input" type="file" multiple name="college_profile"  id="profile">
                  </div>
                  <div class="profile-img">
                    <img width="100" src="<?php echo base_url() ?>/assets/images/cover/<?php echo $college->cover_photo ?>">
                    <input type="hidden" name="cover" value="<?php echo $college->cover_photo ?>">
                  </div>
                  <div class="custom-file">
                    <label class=" custom-file-label"  for="cover">Choose Cover Photo</label>
                    <div class="field-note">Image Size 1300 x 200</div>
                    <input class=" custom-file-input" type="file"  name="college_cover"  id="cover">
                  </div>
                  <div class="preview_brochure">
                    <a target="_blank" class="btn btn-primary" href="<?php echo base_url() ?>/assets/files/brochure/<?php echo $college->brochure; ?>">Preview Brochure</a>
                    <input type="hidden" name="brochure" value="<?php echo $college->brochure ?>">
                  </div>
                  <div class="custom-file">
                    <label class=" custom-file-label"  for="brochure">Change Brochure</label>
                    <div class="field-note">PDF Only</div>
                    <input accept="application/pdf" class=" custom-file-input" type="file"  name="brochure"  id="brochure">
                  </div>
                  
                  
                  <div class="card-footer">
                    <input class="btn btn-primary" type="submit" name="save_vanue" tabindex="100" value="Save college"> <a href="javascript:history.back()">Cancel</a>
                  </div>
                </fieldset>
              </form>
              <?php endforeach ?>
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
      $('.select2').select2();
      
      <?php foreach ($college_info as $college): ?>
      <?php $stream = explode(', ', $college->course_degrees); ?>
      <?php $course = explode(', ', $college->courses); ?>
      <?php $language = explode(', ', $college->language); ?>
      <?php $affiliated = explode(', ', $college->affiliated_by); ?>
      <?php $facilities = explode(', ', $college->facilities); ?>
      <?php $country = $college->country; ?>
      $('#college_stream').val( [<?php for ($i = 0; $i < count($stream); $i++) {  ?>'<?php echo $stream[$i] ;?>', <?php } ?>]);
      $('#college_stream').trigger('change');
      
      $('#college_country').val( ['<?php echo $country ;?>']);
      $('#college_country').trigger('change');
      $('#affiliated_by').val( [<?php for ($i = 0; $i < count($affiliated); $i++) {  ?>'<?php echo $affiliated[$i] ;?>', <?php } ?>]);
      $('#affiliated_by').trigger('change');
      $('#facilities').val( [<?php for ($i = 0; $i < count($facilities); $i++) {  ?>'<?php echo $facilities[$i] ;?>', <?php } ?>]);
      $('#facilities').trigger('change');
      $('#category').val( ['<?php echo $college->college_category ;?>']);
      $('#category').trigger('change');
      $('#college_state').val( ['<?php echo $college->states ;?>']);
      $('#college_state').trigger('change');
      $('#college_language').val( [<?php for ($i = 0; $i < count($language); $i++) {  ?>'<?php echo $language[$i] ;?>', <?php } ?>]);
      $('#college_language').trigger('change');
      $('#institute_type').val( ['<?php echo $college->institute_type ;?>']);
      $('#institute_type').trigger('change');
      $('#college_type').val( ['<?php echo $college->college_type ;?>']);
      $('#college_type').trigger('change');
      <?php endforeach; ?>
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
        <?php foreach ($college_info as $college): ?>
        $('#college_state').val( ['<?php echo $college->states ;?>']);
        $('#college_state').trigger('change');
        <?php endforeach; ?>
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
          <?php foreach ($college_info as $college): ?>
          $('#college_city').val( ['<?php echo $college->city ;?>']);
          $('#college_city').trigger('change');
          <?php endforeach; ?>
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
            $('#college_course').val( [<?php for ($i = 0; $i < count($course); $i++) {  ?>'<?php echo $course[$i] ;?>', <?php } ?>]);
            $('#college_course').trigger('change');
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
          