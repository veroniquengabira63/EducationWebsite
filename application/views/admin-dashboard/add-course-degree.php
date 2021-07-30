<?php include 'header.php'; ?>

<div class="col-md-3 bg-black side_bar hieght_equal">

  <?php include 'side_menu.php'; ?>



</div>

<div class="col-md-9 hieght_equal">

<div class="dashboard-main mt-50">

  <h1 class="text-center">Add Degrees</h1>

<div class="row">

  <div class="col-md-5 col-md-offset-3">

      <form class="form" id="register_venue" action="<?php echo base_url() ?>/admin/register_course_degree" accept-charset="UTF-8" method="post">



        <fieldset>

         

          <div class="form-group">

            

              <label for="name" class="control-label">Degree name</label>

              <input class="form-control" type="text"  name="degree_name" tabindex="1" >

          </div>    
        
      <div class="form-footer submit-button">

            <input class="btn btn-flat btn-theme-colored" type="submit" name="save_vanue" tabindex="100" value="Save Degree"> <a href="javascript:history.back()">Cancel</a>

          </div>

        </fieldset>

      </form>

    </div>

  </div>

</div>

</div>

<?php include 'footer.php'; ?>

<script type="text/javascript">

$(document).ready(function(){

    $('#register_venue').validate({

  rules: {

    degree_name: {

         required: true,

         lettersonly: true

         

     }

  }

});

});

 </script>


