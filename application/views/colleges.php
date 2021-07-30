<?php include 'common/header.php'; ?>



<div class="container">

	<div class="row">

		<div class="col-md-3">

			<br>

			<br>

			<br>

			<div class="list-group">

				<h3>Streams</h3>



				<?php foreach ($streams->result_array() as $stream): ?>

					<?php $get_stream = explode(',' , $stream['course_degrees']); ?>

					<?php for ($i=0; $i <count($get_stream) ; $i++) { ?> 

						<?php $stream_data[] = $get_stream[$i]; 

						



						?>

					<?php } ?>

					<?php endforeach ?>

					<?php foreach (get_streams($stream_data) as $mystream): ?>

						<div class="list-group-item checkbox">

						<label><input type="radio" class="common_seleter streams" name="streams" value="<?php echo $mystream['id'] ?>">

							<?php echo $mystream['degree_name'] ?>

						</label>

					</div>

					<?php endforeach ?>

					



					

					

					

				

				

			</div>

			<div class="list-group">

				<h3>Cities</h3>



				<?php foreach ($cities->result_array() as $city): ?>

					

						<?php $city_id[] = $city['city']; 

						



						?>

					<?php endforeach ?>
					

					<?php foreach (get_filter_city($city_id) as $mycity): ?>

						<div class="list-group-item checkbox">

						<label><input type="radio" class="common_seleter cities" name="cities" value="<?php echo $mycity['id'] ?>">

							<?php echo $mycity['name'] ?>

						</label>

					</div>

					<?php endforeach ?>

					



					

					

					

				

				

			</div>

		</div>

		<div class="col-md-9">

			<br>

			<br>

			<h3 align="center"> ALL COLLEGES</h3>

			<br>

			<br>

			<div align="center" id="pagination_link">

				

			</div>

			<br>

			<br>

			<div class="row filter_data">

				

			</div>

		</div>

	</div>

</div>



<!-------------------========footer---=========================== -->

<style type="text/css">

	#loading{

		background: url(https://media3.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.gif?cid=ecf05e4796bf566bca7bcf31afe39ba7a3643c1f98fdd5ff&rid=giphy.gif) no-repeat center;

		height: 150px;

		width: 100%;

		

	}

</style>

<?php include 'common/footer.php'; ?>

<script type="text/javascript">

	$(document).ready(function () {

		filter_data(1);

		function filter_data(page) {

			

			$('.filter_data').html("<div id='loading'></div>");

			var action = 'fetch_data';

			var streams = get_filter('streams');

			var cities = get_filter('cities');

			jQuery.ajax({

				url : '<?php echo base_url() ?>home/fetch_data/'+page,

				method: 'POST',

				dataType: 'JSON',

				data : {action: action , streams : streams , cities : cities},

				success: function(data) {

					$('.filter_data').html(data.college_list);

					$('#pagination_link').html(data.pagination_link);

				}

			})

		}

		function get_filter(class_name) {

			var filters = [];

			$('.'+ class_name +':checked').each(function () {

				filters.push($(this).val());

				

			})

			;

			return filters;

		}



		$(document).on('click' , '.pagination li a' , function(e)

		{

			e.preventDefault();

			var page = $(this).data('ci-pagination-page');

			filter_data(page);



		})



		$('.common_seleter').click(function(){



		filter_data(1)

	})



	})

</script>

