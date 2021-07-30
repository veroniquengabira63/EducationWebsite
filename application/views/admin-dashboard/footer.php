</div>
</body>
</html>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/custom.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.validate.min.js"></script>

<script type="text/javascript" src="<?php echo base_url() ?>assets/js/alertify/alertify.min.js"></script>

 <?php 

if ($this->session->flashdata('login_success')) {
  ?>
<script type="text/javascript">
  
   alertify.dialog('alert').set({transition:'slide',message: '<?php echo $this->session->flashdata('login_success') ?>'}).show().setHeader("<h2>Welcome <?php echo $user_name; ?></h2>");
</script>
  <?php
}
 ?>
<?php 

if ($this->session->flashdata('add_success')) {
  ?>
<script type="text/javascript">
  
   alertify.dialog('alert').set({transition:'slide',message: '<?php echo $this->session->flashdata('add_success') ?>'}).show().setHeader("<h2>Welcome <?php echo $user_name; ?></h2>");
</script>
  <?php
}
 ?>
 <?php 

if ($this->session->flashdata('successmsg')) {
  ?>
<script type="text/javascript">
  
   alertify.dialog('alert').set({transition:'slide',message: '<?php echo $this->session->flashdata('successmsg') ?>'}).show().setHeader("<h2>Profile Update</h2>");
</script>
  <?php
}
 ?>
 <script type="text/javascript">
 	var highestBox = 0;
        $('.d_table .hieght_equal').each(function(){  
                if($(this).height() > highestBox){  
                highestBox = $(this).height();  
        }
    });    
    $('.d_table .hieght_equal').height(highestBox);
 </script>


 