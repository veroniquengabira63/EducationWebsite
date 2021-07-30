<?php include 'header1.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="content-wrapper" style="min-height: 1200.88px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>View Users</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">View Users</li>
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
              <a class="btn btn-warning" href="<?php echo base_url() ?>/admin/export_csv">Export CSV</a>
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Full Name</th>
                    <th>Mobile</th>
                    <th>Course</th>
                    <th>States</th>
                    <th>Date Recieved</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($inquiry_details as $inquiry): ?>
                  <tr>
                    <td><?php echo $inquiry->name ; ?></td>
                    <td><?php echo $inquiry->mobile ; ?></td>
                    <td><?php echo $inquiry->course ; ?></td>
                    <td><?php echo $inquiry->states ; ?></td>
                    <td><?php echo $inquiry->date_of_inquiry ; ?></td>
                    <td>
                     
                      <a class="btn btn-danger" href="#" onclick="deletes(<?php echo $inquiry->id; ?>)">Delete</a>
                     
                    </td>
                  </tr>
                  <?php endforeach ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Full Name</th>
                    <th>Mobile</th>
                    <th>Course</th>
                    <th>States</th>
                    <th>Date Recieved</th>
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
  $('.users').addClass('menu-open');
  $('.viewusers').addClass('active');
  
  </script>
  <script type="text/javascript">
  var url="<?php echo base_url();?>";
  function deletes(id){
  var r=confirm("Do you want to Delete this?")
  if (r==true)
  window.location = url+"/admin/deleteInquiry/"+id;
  else
  return false;
  }
  
  </script>