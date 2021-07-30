 <footer class="main-footer">
     <strong>Copyright &copy; 2014-2019 <a href="#">Interspace Education</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.4
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src=" <?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src=" <?php echo base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- jQuery validate -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.validate.min.js"></script>

<!-- Bootstrap 4 -->
<script src=" <?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Toastr -->
<script src="<?php echo base_url() ?>assets/ckeditor/ckeditor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/js/bootstrap-select.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/toastr/toastr.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url() ?>assets/plugins/select2/js/select2.full.min.js"></script>
<!-- daterangepicker -->
<script src=" <?php echo base_url() ?>assets/plugins/moment/moment.min.js"></script>
<script src=" <?php echo base_url() ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src=" <?php echo base_url() ?>assets/dist/js/adminlte.js"></script>
<script type="text/javascript">
	<?php
  if ($this->session->flashdata('add_success')) {
    
?>

toastr.success('<?php echo $this->session->flashdata('add_success') ?>')
<?php
}

 ?>
 <?php
  if ($this->session->flashdata('successmsg')) {
    
?>

toastr.success('<?php echo $this->session->flashdata('successmsg') ?>')
<?php
}

 ?>
 <?php
  if ($this->session->flashdata('errormsg')) {
    
?>

toastr.error('<?php echo $this->session->flashdata('errormsg') ?>')
<?php
}

 ?>
</script>
 </body>
</html>