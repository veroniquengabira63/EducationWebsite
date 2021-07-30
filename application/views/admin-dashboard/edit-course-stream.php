<?php include 'header1.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="content-wrapper" style="min-height: 1244.06px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Course Stream</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Course Stream</li>
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
                <h3 class="card-title">Quick Edit Course Stream</h3>
              </div>
              <?php foreach ($degree_info as $degree): ?>
              <form class="form" id="register_venue" enctype="multipart/form-data" action="<?php echo base_url() ?>/admin/update_course_stream" accept-charset="UTF-8" method="post">
                <div class="card-body">
                  <div class="form-group">
                    
                    <div class="form-group">
                      
                      <label for="name" class="control-label">Stream name</label>
                      <input class="form-control" type="text"  name="stream_name" value="<?php echo $degree->degree_name ?>" tabindex="1" >
                      <input class="form-control" type="hidden"  name="id" value="<?php echo $degree->id ?>" tabindex="1" >
                    </div>
                    <img class="btn-danger" width="100" src="<?php echo base_url() ?>/assets/images/icons/<?php echo $degree->icon ?>">
                    <div class="form-group">
                      <label for="name" class="control-label">Stream Icon </label>
                      <input class="form-control" type="file"  name="stream_icon" tabindex="1" >
                      <input class="form-control" type="hidden" value="<?php echo $degree->icon ?>"   name="old_icon" tabindex="1" >
                    </div>
                    <div class="form-group">
                    <label for="name" class="control-label">Stream Description </label>
                     <textarea class="textarea" name="description" placeholder="Place some text here" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">

                            <?php echo $degree->description ?>

                          </textarea>
                  </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <input class="btn btn-danger" type="submit" name="save_stream" tabindex="100" value="Save Stream"> <a href="javascript:history.back()">Cancel</a>
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
      <script src="<?php echo base_url() ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
    <script>
    $(function () {
    // Summernote
    $('.textarea').summernote()
    })
    </script>
      <script type="text/javascript">
      $(document).ready(function(){
      $('#register_venue').validate({
      rules: {
      stream_name: {
      required: true
      }
      });
      });
      $('.stream').addClass('menu-open');
      $('.viewstream').addClass('active');
      </script>