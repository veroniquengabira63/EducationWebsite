<?php include 'header1.php'; ?>


  <?php include 'sidebar.php'; ?>

<div class="content-wrapper" style="min-height: 1244.06px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Media</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Media</li>
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
                <h3 class="card-title">Quick Add Media</h3>
              </div>
              <?php foreach ($college_info as $college): ?>
      <form class="form" id="register_college" enctype="multipart/form-data"  action="<?php echo base_url() ?>/admin/update_media" accept-charset="UTF-8" method="post">
        <div class="card-body">
          <div class="row">
            <input class="form-control" type="hidden" name="college_id"  value="<?php echo $college->id ; ?>">
            <?php $media = explode(',' , $college->gallery); ?>
            <?php for ($i=0; $i < count($media) ; $i++) { ?>
            <div class="col-md-3 " id="<?php  echo 'id'.$i ; ?>">
              <table class="table">
                <tr>
                  <td>
                    <img width="200" src="<?php echo base_url() ?>/assets/images/gallery/<?php echo $media[$i]; ?>">
              <input type="hidden" name="media[]" value="<?php echo $media[$i]; ?>">
                  </td>
                </tr>
                <tr>
                  <td>
                    <a class="btn btn-danger" href="#" onclick="deletemedia('<?php echo 'id'.$i ; ?>')">Delete</a></a>
                  </td>
                </tr>
              </table>
              
              
            </div>
          <?php  } ?>
           
          </div>
          
            <h2>Upload Gallery</h2>
            <div class="custom-file">

              <label class=" custom-file-label"  for="gallery">Choose Images</label>

              <input class=" custom-file-input" type="file"  name="gallery[]" onchange="preview_image();" multiple=""  id="gallery">

            </div>
             <div class="field-note">Select Multiple image By Pressing <b>Ctrl</b></div>
            <div class="row" id="image_preview"></div>

         

      <div class="card-footer">

            <input class="btn btn-primary" type="submit" name="save_vanue" tabindex="100" value="Save Media"> <a href="javascript:history.back()">Cancel</a>

          </div>

      </form>
<?php endforeach ?>
    </div>

  </div>

</div>

</div>

<?php include 'footer1.php'; ?>
<script type="text/javascript" src="http://talkerscode.com/webtricks/demo/js/jquery.form.js"></script>
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

 </script>
<script type="text/javascript">
    function deletemedia(id){
     
       var r=confirm("Do you want to delete this?")
        if (r==true)
          $('#'+id).remove();
        
        else
          return false;
        } 

</script>
<script>

  $('.college').addClass('menu-open');
 $('.addcollege').addClass('active');
</script>