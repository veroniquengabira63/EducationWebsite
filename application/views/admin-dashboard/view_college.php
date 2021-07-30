<?php include 'header1.php'; ?>

<?php include 'sidebar.php'; ?>
 <div class="content-wrapper" style="min-height: 1200.88px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View college</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View college</li>
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
                    		<th>College Name</th>
                    		<th>Location</th>
                    		<th>Created At</th>
                    		<th>Action</th>
    	                 </tr>
                    </thead>
                    <tbody>
                    	<?php foreach ($colleges as $college): ?>
                    	<tr>
                    		<td><?php echo $college->college_name ; ?></td>
                    		<td><?php echo get_country($college->country).' , '.get_state($college->states).' , '.get_city($college->city); ?></td>
                    		<td><?php echo $college->created_at ; ?></td>
                    		<td>
                          <a class="btn btn-danger" href="<?php echo base_url() ?>/admin/editCollege/<?php echo $college->id; ?>">Edit</a>
                           <a class="btn btn-danger" onclick="deletes(<?php echo $college->id; ?>)">Delete</a> <a class="btn btn-danger" href="<?php echo base_url() ?>/admin/edit_media/<?php echo $college->id; ?>">Edit Media</a>
                            <a class="btn btn-primary" href="<?php echo base_url() ?>/admin/course_details/<?php echo $college->id; ?>">Course Details</a>
                          </td>
                    	</tr>
                    	<?php endforeach ?>
    	            </tbody>
                     <tfoot>
                         <tr>
                            <th>College Name</th>
                            <th>Location</th>
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

$('.college').addClass('menu-open');
 $('.viewcollege').addClass('active');

  
</script>
<script type="text/javascript">
    var url="<?php echo base_url();?>";
    function deletes(id){
       var r=confirm("Do you want to delete this?")
        if (r==true)
          window.location = url+"/admin/deleteCollege/"+id;
        else
          return false;
        } 

</script>