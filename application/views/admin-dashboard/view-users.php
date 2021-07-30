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
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Registered on</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($users as $user): ?>
                  <tr>
                    <td><?php echo $user->name ; ?></td>
                    <td><?php echo $user->email ; ?></td>
                    <td><?php echo $user->registered_on ; ?></td>
                    <td>
                      <?php if($user->active == '2'): ?>
                      <a class="btn btn-primary" href="#" onclick="unblock(<?php echo $user->id; ?>)">Unblock</a>
                      <?php elseif($user->active == '0'): ?>
                      <i class="fa fa-ban"></i><a href="#" class="btn btn-default">Unverified</a>
                      <?php else: ?>
                      <a class="btn btn-danger" href="#" onclick="deletes(<?php echo $user->id; ?>)">Block</a>
                      <?php endif; ?>
                      <a class="btn btn-primary" href="#" onclick="openModal(<?php echo $user->id; ?>)">View Profile</a>
                    </td>
                  </tr>
                  <?php endforeach ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>User Name</th>
                  <th>Email</th>
                  <th>Registered on</th>
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
  <div id="viewProfile" class="modal " tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
     
      <div class="modal-header">
        <h5 class="modal-title">View Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="profileData">
        
       
      </div>
      <div class="modal-footer">
    
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
  </div>
</div>
<script type="text/javascript">
  function openModal(id)
  {
     var baseurl = '<?php echo base_url() ?>';
        $.ajax({
            type: 'post',
            url:  baseurl + '/home/view_user',
            data: {id : id },
            success: function(response) {
            $('#viewProfile').modal('show');
            var obj = $.parseJSON(response);
            var base_url = window.location.origin;
      if(obj){
      $(obj).each(function(){
        var option = 
          '<table class="table">'+
          '<tr><th>Name</th><td>'+this.name +'</td><th>Email</th><td>'+this.email +'</td></tr>'+
          '<tr><th>profile</th><td><img width="100" src="'+base_url+'/assets/images/user_profile/'+this.profile_pic +'"</td><th>Gender</th><td>'+this.gender +'</td></tr>'+
          '<tr><th>DOB</th><td>'+this.dob +'</td><th>Mother Toungue</th><td>'+this.mother_tongue +'</td></tr>'+
          '<tr><th>Mobile no.</th><td>'+this.mobile_no +'</td><th>Alternate no.</th><td>'+this.alternate_no +'</td></tr>'+
          '<tr><th>Registered </th><td>'+this.registered_on +'</td></tr>'+
          ' </table>';
        
        $('#profileData').html(option);
        
          });

  }
}
      })
      }
</script>
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
  var r=confirm("Do you want to Block this?")
  if (r==true)
  window.location = url+"/admin/blockUser/"+id;
  else
  return false;
  }
  function unblock(id){
  var r=confirm("Do you want to Unblock this?")
  if (r==true)
  window.location = url+"/admin/unblockUser/"+id;
  else
  return false;
  }
  </script>