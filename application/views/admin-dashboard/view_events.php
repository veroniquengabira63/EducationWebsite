<?php include 'header.php'; ?>
<div class="col-md-3 bg-black side_bar hieght_equal">
	<?php include 'side_menu.php'; ?>
</div>
<div class="col-md-9 hieght_equal">
	<div id="page">
		<div class="component brief">
			<div class="profile-picture-wrap">
				<img class="artist-profile-image" width="150" alt="<?php echo $user_name ?>" title="<?php echo $user_name ?>" src="<?php echo base_url(); ?>assets/images/profile/<?php echo $profile; ?>">
			</div>
			<h1><?php echo $user_name ?></h1>
			<p class="events-count">
				6 upcoming concerts
			</p>
			<p>
				<a class="btn btn-go" rel="add-event" href="<?php echo base_url() ?>artist/add_event">Add event</a>
			</p>
		</div>
		<div class="component performance-listings" data-role="performance-listings">
			<ul class="performances">
				<li class="box performance">
					<div class="event">
						<span class="event-date">
							Thursday 16 April 2020
						</span>
						<span class="event-location">
							<strong>Carolina Theatre Durham</strong>
							<br>
							Durham, NC, US
						</span>
					
							<div class="event-actions">
								<div class="action-wrapper">
									<a rel="edit-event" href="#">
										<button class="btn btn--event-link edit-event">Edit event</button>
									</a>    </div>
									
										<div class="action-wrapper">
											<a target="_blank"  href="">
												<button class="btn btn--event-link open-event">
												<img width="16px" height="14px" class="icon-external-link" alt="View event" src="<?php echo base_url() ?>assets/images/external-link.svg">
												</button>
											</a>
											<a class="performance-removal" href="#">
												<button class="btn btn--event-link">
												<img width="11px" height="12px" class="icon-trash" alt="Delete event" title="Delete event" src="<?php echo base_url() ?>assets/images/trash.svg">
												</button>
											</a>    </div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
<?php include 'footer.php'; ?>
