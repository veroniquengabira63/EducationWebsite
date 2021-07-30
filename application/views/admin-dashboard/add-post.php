<?php include 'header1.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="content-wrapper" style="min-height: 1244.06px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add Post</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add Post</li>
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
                <h3 class="card-title">Quick Add Post</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form" id="register_venue" enctype="multipart/form-data" action="<?php echo base_url() ?>/admin/registerPost" accept-charset="UTF-8" method="post" novalidate="novalidate">
                <div class="card-body">
                  <div class="form-group">
                    <label for="name" class="control-label">Title</label>
                    <input class="form-control" type="text"  name="title" tabindex="1" >
                  </div>
                  <div class="form-group">
                    <label for="name" class="control-label">Select Category</label>
                    <select id="category" class=" form-control"   name="category">
                      <option value="">--Select category--</option>
                      <?php foreach ($categories as $category ): ?>
                      <option value="<?php echo $category->id  ?>"><?php echo $category->title  ?> </option>
                      
                      <?php endforeach ?>
                    </select>
                    <input type="hidden" name="userid" value="<?php echo $userid ?>">
                  </div>

                  <div class="form-group">
                    <label for="name" class="control-label">Select College</label>
                    <select id="college" class=" form-control"   name="college">
                      <option value="">--Select College--</option>
                      <?php foreach ($colleges as $college ): ?>
                      <option value="<?php echo $college->id  ?>"><?php echo $college->college_name  ?> </option>
                      
                      <?php endforeach ?>
                    </select>
                    <input type="hidden" name="userid" value="<?php echo $userid ?>">
                  </div>
                  
                  <div class="form-group">
                    <label for="name" class="control-label">Description</label>
                    <textarea class="textarea" name="description" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                    
                    </textarea>
                  </div>
                  <div class="form-group">
                    <label for="name" class="control-label">Featured Image</label>
                    <input type="file" name="featured_image" class="form-control">
                    
                  </div>
                  <div class="card-footer">
                    <input class="btn btn-primary" type="submit" name="save_vanue" tabindex="100" value="Add Post"> <a href="javascript:history.back()">Cancel</a>
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
      $(function () {
      // Summernote
      $('.textarea').summernote()
      })
      </script>
      <script type="text/javascript">
      $(document).ready(function(){
      $('#register_venue').validate({
      rules: {
      title: {
      required: true,
      },
      featured_image: {
      required: true,
      },
      category: {
      required: true,
      },
      description: {
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
      $('.post').addClass('menu-open');
      $('.addpost').addClass('active');
      </script>