
<?php include 'common/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/inner.css">
<style type="text/css">
  .list-group {
    overflow: auto;
    height: 300px;
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
    <h1><strong style="color:#0000ff;">Distance Education only for india</strong></h1>
   </div>
   
</div>
<div class="row m-2 ">
  <div class=" col-12 col-lg-3  collage_bg slide_bar p-3  mt-4">
    <h3>Streams</h3>
<input class="form-control" id="search_streams" type="text" placeholder="Search Streams">
<br>
    <div class="list-group" id="list_cities">
     
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
    <h3>Cities</h3>
<input class="form-control" id="search_cities" type="text" placeholder="Search Cities">
<br>

    <div class="list-group" id="list_cities">
      
        <?php foreach ($cities->result_array() as $city): ?>
          
            <?php $city_id[] = $city['city']; 
            

            ?>
          <?php endforeach ?>
          <?php foreach (get_filter_city($city_id) as $mycity): ?>
            <div class="list-group-item checkbox">
            <label><input type="checkbox" class="common_seleter cities" name="" value="<?php echo $mycity['id'] ?>">
              <?php echo $mycity['name'] ?>
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
  
    
      <div class="col-12 col-sm-6 col-lg-4 p-1 bg-light m-0 p-0 clg_top" >
        <div style="border :1.8px solid grey;">
          <img src="<?php echo base_url() ?>/assets/images/uni_logo.jpg" class="uni_logo" width="15%">
        <img src="<?php echo base_url() ?>/assets/images/collages_1.jpg" width="100%">
        <div class="collage_content m-0 p-0">
        <ul class="p-0 text-center pt-2">
          <li class="p-2"><b><i class="fa fa-map-marker p-1" aria-hidden="true"></i>
            CHENNAI,TAMIL NADU</b></li>
          <li class="p-2"> <b><i class="fa fa-check-circle-o p-1" aria-hidden="true"></i>NAAC</b></li>
         
        </ul>
      </div>
        <div class="row m-0 p-0">
          <div class="col-6 collage_content_1  m-0">
            <ul class="p-0 pl-2">
              <li><b>Rs.10K-50K</b></li><br>
              <li ><p class="collage_content_2">total fee range</p></li>
            </ul>
          </div>
          <div class="col-6 collage_content_1" style="border-left: 1.2px solid rgb(209, 209, 209);">
            <ul class="p-0">
              <li><b>9.4/10</b></li><br>
              <li ><p class="collage_content_2">Base on user reviews</p></li>
            </ul>
           
          </div>
        </div>

        <div class="text-center mt-2 p-0">
          <a href="#"><button class="btn content_btn" type="button"><i class="fa fa-check-square-o p-2" aria-hidden="true"></i>READ MORE</button></a>
          <a href="#"><button class="btn content_btn_1" type="button"><i class="fa fa-download p-2" aria-hidden="true"></i>BROCHURE</button></a>
        </div>
      </div>
        </div>
        

        <div class="col-12 col-sm-6 col-lg-4 p-1 bg-light m-0 p-0 clg_top" >
          <div style="border :1.8px solid grey;">
            <img src="<?php echo base_url() ?>/assets/images/uni_logo.jpg" class="uni_logo" width="15%">
          <img src="<?php echo base_url() ?>/assets/images/collages_1.jpg" width="100%">
          <div class="collage_content m-0 p-0">
            <div class="college_name">Devi ahilya vishvidhyalaya</div>
          <ul class="p-0 text-center pt-2">
            <li class="p-2"><b><i class="fa fa-map-marker p-1" aria-hidden="true"></i>
              CHENNAI,TAMIL NADU</b></li>
            <li class="p-2"> <b><i class="fa fa-check-circle-o p-1" aria-hidden="true"></i>NAAC</b></li>
           
          </ul>
        </div>
          <div class="row m-0 p-0">
            <div class="col-6 collage_content_1  m-0">
              <ul class="p-0 pl-2">
                <li><b>Rs.10K-50K</b></li><br>
                <li ><p class="collage_content_2">total fee range</p></li>
              </ul>
            </div>
            <div class="col-6 collage_content_1" style="border-left: 1.2px solid rgb(209, 209, 209);">
              <ul class="p-0">
                <li><b>9.4/10</b></li><br>
                <li ><p class="collage_content_2">Base on user reviews</p></li>
              </ul>
             
            </div>
          </div>
  
          <div class="text-center mt-2 p-0">
            <a href="#"><button class="btn content_btn" type="button"><i class="fa fa-check-square-o p-2" aria-hidden="true"></i>READ MORE</button></a>
            <a href="#"><button class="btn content_btn_1" type="button"><i class="fa fa-download p-2" aria-hidden="true"></i>BROCHURE</button></a>
          </div>
        </div>
          </div>        

     
          <div class="col-12 col-sm-6 col-lg-4 p-1 bg-light m-0 p-0 clg_top" >
            <div style="border :1.8px solid grey;">
              <img src="<?php echo base_url() ?>/assets/images/uni_logo.jpg" class="uni_logo" width="15%">
            <img src="<?php echo base_url() ?>/assets/images/collages_1.jpg" width="100%">
            <div class="collage_content m-0 p-0">
            <ul class="p-0 text-center pt-2">
              <li class="p-2"><b><i class="fa fa-map-marker p-1" aria-hidden="true"></i>
                CHENNAI,TAMIL NADU</b></li>
              <li class="p-2"> <b><i class="fa fa-check-circle-o p-1" aria-hidden="true"></i>NAAC</b></li>
             
            </ul>
          </div>
            <div class="row m-0 p-0">
              <div class="col-6 collage_content_1  m-0">
                <ul class="p-0 pl-2">
                  <li><b>Rs.10K-50K</b></li><br>
                  <li ><p class="collage_content_2">total fee range</p></li>
                </ul>
              </div>
              <div class="col-6 collage_content_1" style="border-left: 1.2px solid rgb(209, 209, 209);">
                <ul class="p-0">
                  <li><b>9.4/10</b></li><br>
                  <li ><p class="collage_content_2">Base on user reviews</p></li>
                </ul>
               
              </div>
            </div>
    
            <div class="text-center mt-2 p-0">
              <a href="#"><button class="btn content_btn" type="button"><i class="fa fa-check-square-o p-2" aria-hidden="true"></i>READ MORE</button></a>
              <a href="#"><button class="btn content_btn_1" type="button"><i class="fa fa-download p-2" aria-hidden="true"></i>BROCHURE</button></a>
            </div>
          </div>
            </div>              
              

            <div class="col-12 col-sm-6 col-lg-4 p-1 bg-light m-0 p-0 clg_top" >
              <div style="border :1.8px solid grey;">
                <img src="<?php echo base_url() ?>/assets/images/uni_logo.jpg" class="uni_logo" width="15%">
              <img src="<?php echo base_url() ?>/assets/images/collages_1.jpg" width="100%">
              <div class="collage_content m-0 p-0">
              <ul class="p-0 text-center pt-2">
                <li class="p-2"><b><i class="fa fa-map-marker p-1" aria-hidden="true"></i>
                  CHENNAI,TAMIL NADU</b></li>
                <li class="p-2"> <b><i class="fa fa-check-circle-o p-1" aria-hidden="true"></i>NAAC</b></li>
               
              </ul>
            </div>
              <div class="row m-0 p-0">
                <div class="col-6 collage_content_1  m-0">
                  <ul class="p-0 pl-2">
                    <li><b>Rs.10K-50K</b></li><br>
                    <li ><p class="collage_content_2">total fee range</p></li>
                  </ul>
                </div>
                <div class="col-6 collage_content_1" style="border-left: 1.2px solid rgb(209, 209, 209);">
                  <ul class="p-0">
                    <li><b>9.4/10</b></li><br>
                    <li ><p class="collage_content_2">Base on user reviews</p></li>
                  </ul>
                 
                </div>
              </div>
      
              <div class="text-center mt-2 p-0">
                <a href="#"><button class="btn content_btn" type="button"><i class="fa fa-check-square-o p-2" aria-hidden="true"></i>READ MORE</button></a>
                <a href="#"><button class="btn content_btn_1" type="button"><i class="fa fa-download p-2" aria-hidden="true"></i>BROCHURE</button></a>
              </div>
            </div>
              </div>            

              <div class="col-12 col-sm-6 col-lg-4 p-1 bg-light m-0 p-0 clg_top" >
                <div style="border :1.8px solid grey;">
                  <img src="<?php echo base_url() ?>/assets/images/uni_logo.jpg" class="uni_logo" width="15%">
                <img src="<?php echo base_url() ?>/assets/images/collages_1.jpg" width="100%">
                <div class="collage_content m-0 p-0">
                <ul class="p-0 text-center pt-2">
                  <li class="p-2"><b><i class="fa fa-map-marker p-1" aria-hidden="true"></i>
                    CHENNAI,TAMIL NADU</b></li>
                  <li class="p-2"> <b><i class="fa fa-check-circle-o p-1" aria-hidden="true"></i>NAAC</b></li>
                 
                </ul>
              </div>
                <div class="row m-0 p-0">
                  <div class="col-6 collage_content_1  m-0">
                    <ul class="p-0 pl-2">
                      <li><b>Rs.10K-50K</b></li><br>
                      <li ><p class="collage_content_2">total fee range</p></li>
                    </ul>
                  </div>
                  <div class="col-6 collage_content_1" style="border-left: 1.2px solid rgb(209, 209, 209);">
                    <ul class="p-0">
                      <li><b>9.4/10</b></li><br>
                      <li ><p class="collage_content_2">Base on user reviews</p></li>
                    </ul>
                   
                  </div>
                </div>
        
                <div class="text-center mt-2 p-0">
                  <a href="#"><button class="btn content_btn" type="button"><i class="fa fa-check-square-o p-2" aria-hidden="true"></i>READ MORE</button></a>
                  <a href="#"><button class="btn content_btn_1" type="button"><i class="fa fa-download p-2" aria-hidden="true"></i>BROCHURE</button></a>
                </div>
              </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 p-1 bg-light m-0 p-0 clg_top" >
                  <div style="border :1.8px solid grey;">
                    <img src="<?php echo base_url() ?>/assets/images/uni_logo.jpg" class="uni_logo" width="15%">
                  <img src="<?php echo base_url() ?>/assets/images/collages_1.jpg" width="100%">
                  <div class="collage_content m-0 p-0">
                  <ul class="p-0 text-center pt-2">
                    <li class="p-2"><b><i class="fa fa-map-marker p-1" aria-hidden="true"></i>
                      CHENNAI,TAMIL NADU</b></li>
                    <li class="p-2"> <b><i class="fa fa-check-circle-o p-1" aria-hidden="true"></i>NAAC</b></li>
                   
                  </ul>
                </div>
                  <div class="row m-0 p-0">
                    <div class="col-6 collage_content_1  m-0">
                      <ul class="p-0 pl-2">
                        <li><b>Rs.10K-50K</b></li><br>
                        <li ><p class="collage_content_2">total fee range</p></li>
                      </ul>
                    </div>
                    <div class="col-6 collage_content_1" style="border-left: 1.2px solid rgb(209, 209, 209);">
                      <ul class="p-0">
                        <li><b>9.4/10</b></li><br>
                        <li ><p class="collage_content_2">Base on user reviews</p></li>
                      </ul>
                     
                    </div>
                  </div>
          
                  <div class="text-center mt-2 p-0">
                    <a href="#"><button class="btn content_btn" type="button"><i class="fa fa-check-square-o p-2" aria-hidden="true"></i>READ MORE</button></a>
                    <a href="#"><button class="btn content_btn_1" type="button"><i class="fa fa-download p-2" aria-hidden="true"></i>BROCHURE</button></a>
                  </div>
                </div>
                  </div>


                  <div class="col-12 col-sm-6 col-lg-4 p-1 bg-light m-0 p-0 clg_top" >
                    <div style="border :1.8px solid grey;">
                      <img src="<?php echo base_url() ?>/assets/images/uni_logo.jpg" class="uni_logo" width="15%">
                    <img src="<?php echo base_url() ?>/assets/images/collages_1.jpg" width="100%">
                    <div class="collage_content m-0 p-0">
                    <ul class="p-0 text-center pt-2">
                      <li class="p-2"><b><i class="fa fa-map-marker p-1" aria-hidden="true"></i>
                        CHENNAI,TAMIL NADU</b></li>
                      <li class="p-2"> <b><i class="fa fa-check-circle-o p-1" aria-hidden="true"></i>NAAC</b></li>
                     
                    </ul>
                  </div>
                    <div class="row m-0 p-0">
                      <div class="col-6 collage_content_1  m-0">
                        <ul class="p-0 pl-2">
                          <li><b>Rs.10K-50K</b></li><br>
                          <li ><p class="collage_content_2">total fee range</p></li>
                        </ul>
                      </div>
                      <div class="col-6 collage_content_1" style="border-left: 1.2px solid rgb(209, 209, 209);">
                        <ul class="p-0">
                          <li><b>9.4/10</b></li><br>
                          <li ><p class="collage_content_2">Base on user reviews</p></li>
                        </ul>
                       
                      </div>
                    </div>
            
                    <div class="text-center mt-2 p-0">
                      <a href="#"><button class="btn content_btn" type="button"><i class="fa fa-check-square-o p-2" aria-hidden="true"></i>READ MORE</button></a>
                      <a href="#"><button class="btn content_btn_1" type="button"><i class="fa fa-download p-2" aria-hidden="true"></i>BROCHURE</button></a>
                    </div>
                  </div>
                    </div>
                    
                    <div class="col-12 col-sm-6 col-lg-4 p-1 bg-light m-0 p-0 clg_top" >
                      <div style="border :1.8px solid grey;">
                        <img src="<?php echo base_url() ?>/assets/images/uni_logo.jpg" class="uni_logo" width="15%">
                      <img src="<?php echo base_url() ?>/assets/images/collages_1.jpg" width="100%">
                      <div class="collage_content m-0 p-0">
                      <ul class="p-0 text-center pt-2">
                        <li class="p-2"><b><i class="fa fa-map-marker p-1" aria-hidden="true"></i>
                          CHENNAI,TAMIL NADU</b></li>
                        <li class="p-2"> <b><i class="fa fa-check-circle-o p-1" aria-hidden="true"></i>NAAC</b></li>
                       
                      </ul>
                    </div>
                      <div class="row m-0 p-0">
                        <div class="col-6 collage_content_1  m-0">
                          <ul class="p-0 pl-2">
                            <li><b>Rs.10K-50K</b></li><br>
                            <li ><p class="collage_content_2">total fee range</p></li>
                          </ul>
                        </div>
                        <div class="col-6 collage_content_1" style="border-left: 1.2px solid rgb(209, 209, 209);">
                          <ul class="p-0">
                            <li><b>9.4/10</b></li><br>
                            <li ><p class="collage_content_2">Base on user reviews</p></li>
                          </ul>
                         
                        </div>
                      </div>
              
                      <div class="text-center mt-2 p-0">
                        <a href="#"><button class="btn content_btn" type="button"><i class="fa fa-check-square-o p-2" aria-hidden="true"></i>READ MORE</button></a>
                        <a href="#"><button class="btn content_btn_1" type="button"><i class="fa fa-download p-2" aria-hidden="true"></i>BROCHURE</button></a>
                      </div>
                    </div>
                      </div>
                      
                      <div class="col-12 col-sm-6 col-lg-4 p-1 bg-light m-0 p-0 clg_top" >
                        <div style="border :1.8px solid grey;">
                          <img src="<?php echo base_url() ?>/assets/images/uni_logo.jpg" class="uni_logo" width="15%">
                        <img src="<?php echo base_url() ?>/assets/images/collages_1.jpg" width="100%">
                        <div class="collage_content m-0 p-0">
                        <ul class="p-0 text-center pt-2">
                          <li class="p-2"><b><i class="fa fa-map-marker p-1" aria-hidden="true"></i>
                            CHENNAI,TAMIL NADU</b></li>
                          <li class="p-2"> <b><i class="fa fa-check-circle-o p-1" aria-hidden="true"></i>NAAC</b></li>
                         
                        </ul>
                      </div>
                        <div class="row m-0 p-0">
                          <div class="col-6 collage_content_1  m-0">
                            <ul class="p-0 pl-2">
                              <li><b>Rs.10K-50K</b></li><br>
                              <li ><p class="collage_content_2">total fee range</p></li>
                            </ul>
                          </div>
                          <div class="col-6 collage_content_1" style="border-left: 1.2px solid rgb(209, 209, 209);">
                            <ul class="p-0">
                              <li><b>9.4/10</b></li><br>
                              <li ><p class="collage_content_2">Base on user reviews</p></li>
                            </ul>
                           
                          </div>
                        </div>
                
                        <div class="text-center mt-2 p-0">
                          <a href="#"><button class="btn content_btn" type="button"><i class="fa fa-check-square-o p-2" aria-hidden="true"></i>READ MORE</button></a>
                          <a href="#"><button class="btn content_btn_1" type="button"><i class="fa fa-download p-2" aria-hidden="true"></i>BROCHURE</button></a>
                        </div>
                      </div>
                        </div>               
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
      var archive = 'mbbs';
      var streams = get_filter('streams');
      var cities = get_filter('cities');
      jQuery.ajax({
        url : '<?php echo base_url() ?>home/fetch_data/'+page,
        method: 'POST',
        dataType: 'JSON',
        data : { archive:archive , streams : streams , cities : cities},
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