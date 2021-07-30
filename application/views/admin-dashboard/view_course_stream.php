<?php include 'header1.php'; ?>

<?php include 'sidebar.php'; ?>



    <div class="content-wrapper" style="min-height: 1200.88px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View Course Stream</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Course Stream</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with minimal features &amp; hover style</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Stream Name</th>  
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($streams as $stream): ?>
                        <tr>
                            <td><?php echo $stream->degree_name ; ?></td>
                            <td><?php echo $stream->created_at ; ?></td>
                            <td><a class="btn btn-danger" href="<?php echo base_url() ?>/admin/editStream/<?php echo $stream->id; ?>">Edit</a> <a class="btn btn-danger" onclick="deletes(<?php echo $stream->id; ?>)">Delete</a></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                     <tfoot>
                         <tr>
                            <th>Stream Name</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

<?php include 'footer1.php'; ?>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
   
  });

$('.stream').addClass('menu-open');
 $('.viewstream').addClass('active');

  
</script>
<script type="text/javascript">
    var url="<?php echo base_url();?>";
    function deletes(id){
       var r=confirm("Do you want to delete this?")
        if (r==true)
          window.location = url+"/admin/deleteStream/"+id;
        else
          return false;
        } 

</script>