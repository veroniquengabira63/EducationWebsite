<?php include 'header.php'; ?>

<div class="col-md-3 bg-black side_bar hieght_equal">

	<?php include 'side_menu.php'; ?>



</div>

<div class="col-md-9 hieght_equal">

<div class="dashboard-main mt-50">

			<div class="row">

				<div class="col-md-12">

					<form class="form" method="post" action="<?php echo base_url() ?>admin/updateUser" id="updateUser" enctype="multipart/form-data">

						<?php foreach ($user_info as $user): ?>

							

				<div class="row">

					<div class="col-md-6">

						<div class="form-group">

							<label class="control-label">First name</label>

							<input type="text" name="first_name" class="form-control" value="<?php echo  $user->name ?>">

							<input type="hidden" name="user_id" class="form-control" value="<?php echo  $user->id ?>">

						</div>

					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label class="control-label">Last name</label>

							<input type="text" name="last_name" class="form-control" value="<?php echo  $user->last_name ?>">

						</div>

					</div>

				</div>

				<div class="row">

					<div class="col-md-12">

						<div class="form-group">

							<label class="control-label">Email</label>

							<input type="email" readonly="" name="email" class="form-control" value="<?php echo  $user->email ?>">

						</div>

					</div>

				</div>

				<div class="row">

					<div class="col-md-12">

						<div class="form-group">

							<label class="control-label">Comedy Style</label>

							<select id="comedy_style" class="selectpicker form-control"  multiple name="comedy_style[]">

							<?php foreach ($comedy_styles as $comedy_style ): ?>

													

								<option value="<?php echo $comedy_style->style_name;  ?>"><?php echo $comedy_style->style_name;  ?> </option>

							

							<?php endforeach ?>

							</select>

						</div>

					</div>

				</div>

				<div class="row">

					<div class="col-md-12">

						<div class="form-group">

							<label class="control-label">Add Youtube Promotional Video Url</label>

							<input type="text" placeholder="https://www.youtube.com/eUW08ualhLY" name="youtube_url" class="form-control" value="<?php echo  $user->youtube_url ?>">

						</div>

					</div>

				</div>

				<div class="row">

					<h2 class="p-20">Social Links</h2>

					<div class="col-md-4">

						<div class="form-group">

							<label class="control-label">Add Facebook Url</label>

							<input type="text" placeholder="https://www.facebook.com/username" name="facebook_url" class="form-control" value="<?php echo  $user->facebook_url; ?>">

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label class="control-label">Add Instagram Url</label>

							<input type="text" placeholder="https://www.instagram.com/username" name="instagram_url" class="form-control" value="<?php echo  $user->instagram_url; ?>">

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label class="control-label">Add Twitter Url</label>

							<input type="text" placeholder="https://www.twitter.com/username" name="twitter_url" class="form-control" value="<?php echo  $user->twitter_url; ?>">

						</div>

					</div>

				</div>

				<div class="row">

					<h2 class="p-20">About You</h2>

					<div class="col-md-12">

						<div class="form-group">

							<label class="control-label">Add Bio</label>

							<textarea rows="5" cols="35" name="bio" class="form-control"><?php echo  $user->bio ?></textarea>   

						</div>

					</div>

				</div>

				<div class="row">

					<h2 class="p-20">Profile</h2>

					<div class="col-md-12">

						<div class="form-group">

							<img width="150" src="<?php echo base_url() ?>assets/images/profile/<?php echo  $user->profile_pic ?>">

							<label class="control-label">Add Profile Picture</label>

							<input type="file" class="mt-10" name="profile_pic">   

							<input type="hidden" name="old_pic" value="<?php echo  $user->profile_pic ?>">   

						</div>

					</div>	

				</div>

						<div class="form-group">

							

							<input type="submit" name="submit-event" class="btn btn-flat btn-theme-colored btn-xl " value="Update">

							

						</div>

						<?php endforeach ?>

					</form>

				</div>

			</div>

		</div>

	</div>

</div>

<?php include 'footer.php'; ?>

<script type="text/javascript">

	$('#updateUser').validate({

  rules: {

    first_name: {

         required: true,

         lettersonly: true

         

     },

     last_name: {

         required: true,

         lettersonly: true

         

     },

     youtube_url: {

        

         url: true

         

     },

      facebook_url: {

        

         url: true

         

     },

      instagram_url: {

        

         url: true

         

     },

      twitter_url: {

        

         url: true

         

     }, 

     website: {

        

         url: true

         

     }

 }

 })

	jQuery.validator.addMethod("lettersonly", function(value, element) 

	{

		return this.optional(element) || /^[a-z ]+$/i.test(value);

	}, "Letters and spaces only please");



	$('#comedy_style').selectpicker();

<?php foreach ($user_info as $user): ?>

	<?php $style = explode(', ', $user->comedy_style) ?>

	

		$('#comedy_style').selectpicker('val', [<?php for ($i = 0; $i < count($style); $i++) {	?>'<?php echo $style[$i] ;?>', <?php } ?>]);





	

	<?php endforeach ?>



</script>