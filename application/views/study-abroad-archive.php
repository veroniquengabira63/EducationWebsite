
<?php include 'common/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/inner.css">
<style type="text/css">
  .list-group {
    overflow: auto;
    height: 200px;
    border: 1px solid #eee;
    padding: 10px;
}
#loading{
    background: url(https://media3.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.gif?cid=ecf05e4796bf566bca7bcf31afe39ba7a3643c1f98fdd5ff&rid=giphy.gif) no-repeat center;
    height: 150px;
    width: 100%;
    
  }
</style>


<div class="row text-center" >
  <div class="col-12  pt-5 pb-4 heading_h1" style="z-index: -1;">
    <h1><strong style="color:#0000ff;">Abroad Colleges</strong></h1>
   </div>
   
</div>
<div class="row m-2 ">
  <div class=" col-12 col-lg-3  collage_bg slide_bar p-3  mt-4">
    <h3>Streams</h3>
<input class="form-control" id="search_streams" type="text" placeholder="Search Streams">
<br>
    <div class="list-group" id="list_streams">
     
        <?php foreach ($streams->result_array() as $stream): ?>
          <?php $get_stream = explode(',' , $stream['course_degrees']); ?>
          <?php for ($i=0; $i <count($get_stream) ; $i++) { ?> 
            <?php $stream_data[] = $get_stream[$i]; 
            

            ?>
          <?php } ?>
          <?php endforeach ?>
          <?php foreach (get_streams($stream_data) as $mystream): ?>
            <div class="list-group-item checkbox">
            <label><input type="checkbox" class="common_seleter streams" name="" value="<?php echo $mystream['id'] ?>">
              <?php echo $mystream['degree_name'] ?>
            </label>
          </div>
          <?php endforeach ?>
    </div>
    <br>
    <h3>Country</h3>
<input class="form-control" id="search_country" type="text" placeholder="Search country">
<br>

    <div class="list-group" id="list_country">
      
        <?php foreach ($countries->result_array() as $country): ?>
          
            <?php $country_id[] = $country['country']; 
            

            ?>
          <?php endforeach ?>
          <?php foreach (get_filter_except_country($country_id) as $mycountry): ?>
            <div class="list-group-item checkbox">
            <label><input type="checkbox" class="common_seleter countries" name="" value="<?php echo $mycountry['id'] ?>">
              <?php echo $mycountry['name'] ?>
            </label>
          </div>
          <?php endforeach ?>
     
        
      </div>
      
 
  </div>
  <div class="col-12 col-lg-9 pt-4">
    <br>
      <br>
      <div align="center" id="pagination_link">
        
      </div>
      <br>
      <br>
    <div class="row p-2 filter_data">
  
    
    </div>
    </div>
  </div>

<?php include 'common/footer.php'; ?>
 <script type="text/javascript">
/// some script
$(function () {
    'use strict'

  $("[data-trigger]").on("click", function(){
        var trigger_id =  $(this).attr('data-trigger');
        $(trigger_id).toggleClass("show");
        $('body').toggleClass("offcanvas-active");
    });

    // close if press ESC button 
    $(document).on('keydown', function(event) {
        if(event.keyCode === 27) {
           $(".navbar-collapse").removeClass("show");
           $("body").removeClass("overlay-active");
        }
    });

    // close button 
    $(".btn-close").click(function(e){
        $(".navbar-collapse").removeClass("show");
        $("body").removeClass("offcanvas-active");
    }); 
 
$(document).ready(function(){

  $("#search_cities").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#list_cities div").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

  $("#search_streams").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#list_streams div").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

});

})
</script>

<script type="text/javascript">
  $(document).ready(function () {
    filter_data(1);
    function filter_data(page) {
      
      $('.filter_data').html("<div id='loading'></div>");
      var action = 'fetch_data';
      var archive = 'abroad';
      var streams = get_filter('streams');
      var cities = get_filter('cities');
      var countries = get_filter('countries');
      jQuery.ajax({
        url : '<?php echo base_url() ?>home/fetch_data/'+page,
        method: 'POST',
        dataType: 'JSON',
        data : { archive:archive , streams : streams , cities : cities , countries : countries},
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
</body>
</html>