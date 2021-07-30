<?php include 'header.php'; ?>

<div class="col-md-3 bg-black side_bar hieght_equal">

	<?php include 'side_menu.php'; ?>

</div>

<div class="col-md-9 hieght_equal">

	<div id="page">
    <table class="table">
    	<tr>
    		<th>Degree Name</th>
    		<th>Created At</th>
    		<th>Action</th>
    	</tr>
    	<?php foreach ($degrees as $degree): ?>
    	<tr>
    		<td><?php echo $degree->degree_name ; ?></td>
    		<td><?php echo $degree->created_at ; ?></td>
    		<td><a href="<?php echo base_url() ?>/admin/edit_course_degree/<?php echo $degree->id ?>">Edit</a></td>
    	</tr>
    	<?php endforeach ?>
    	
    </table>

<?php include 'footer.php'; ?>

