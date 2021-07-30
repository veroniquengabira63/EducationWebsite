<?php include 'common/header.php'; ?>


<!--================================banner==================================-->
    <!-- Image carousel  -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 p-0 banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="w-100" src="assets/images/abroad1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="w-100" src="assets/images/abroad2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="w-100" src="assets/images/abroad3.jpg" alt="Third slide">
            </div>
          </div>
          <!-- Controls  -->
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="carousel-caption tr">
          <h1>Search all Distance Education Institutions/Universities in India</h1>
          <form class="mx-auto form-lg">
            <div class="form-group d-none d-md-block">
              <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                  <div class="input-group-text search-college">Universities </div>
                </div>
                <input type="text" onkeyup="getSearchData('search' , 'finalResult')" class="form-control form-control-lg" id="search" placeholder="Search any Distance Learning Course or Institutions">
                <div id="spin-loader"><i class=" fa fa-spinner fa-spin"></i></div>
                
                <div style="width: 100%;clear: both;background: #000;">Note : If you are looking for MBA Colleges just type "MBA" in search Box</div>
                <ul id="finalResult" class="finalResult">
                      
                          </ul>
              </div>
            </div>
          </form>
          <form class="">
            <div class="form-group d-md-none">
              <div class="input-group mb-2 mr-sm-2">
                <input type="text" onkeyup="getSearchData('mobsearch' , 'mobfinalResult')" class="form-control form-control-lg" id="mobsearch" placeholder="Search any Distance Learning Course or Institutions">
                <div style="width: 100%;clear: both;background: #000;">Note : If you are looking for MBA Colleges just type "MBA" in search Box</div>
                <ul id="mobfinalResult" class="finalResult">
                      
                          </ul>
              </div>
            </div>
          </form>
          
        </div>
       
      </div>
    </div>
  </div>
  <!--================================Streams==================================-->
   
    
    
       <section class="category">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 ">
                <div class="seaction_header"><BR>
                    <h3>CHOOSE YOUR FUTURE</h3>
                    <p>Interspace Education is an extensive search engine for the students, parents, and education industry players who are seeking information about Distance Education Institutions/Universities</p>
                </div>
                <div class="grid-content">
                   <?php foreach ($streams as $stream): ?>
                     <?php $link = url_title($stream->degree_name, 'dash', true); ?>
                    <div class="grid-5">
                        <a href="<?php echo base_url('distance-education/'.$stream->id.'/stream/'.$link) ?>" title="">
                            <div class="grid-list"><img src="<?php echo base_url() ?>/assets/images/icons/<?php echo $stream->icon ?>" width="60px">
                                <div class="details">
                                    <h4><?php echo $stream->degree_name ?></h4>
                                    <p><?php echo countData($stream->id , 'course_degrees' , 'distance'); ?> colleges</p>
                                </div>
                            </div>
                        </a>
                    </div>
                   <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</section>
    
   <!--================================Streams===================================-->

    <!--================================Top Courses===================================-->
    <section class="header_bg_1 pt-4 pb-4">
        <div class="container">
        <div class="row pt-4 pb-4 ">
          <div class="col-12 top_course">
             <h2 class=" text-center   ">DISTANCE LEARNING TOP COURSES</h2>
        
         </div>
         <div class="col-12 text-center ">
          <div class="row">
              <?php foreach($home_setting as $setting): ?>
              
                <?php $college = explode(',', $setting->top_colleges); ?>
                <?php $course = explode(',', $setting->top_courses); ?>
                
              <?php endforeach ; ?>
              <?php for ($i = 0; $i < count($course); $i++) {  ?>
              <div class="col-md-3">
                  <?php $link = url_title(getCourse($course[$i]), 'dash', true); ?> 
                  <a href="<?php echo base_url('distance-education/'.$course[$i].'/course/'.$link) ?>">
                  <div class="course-col">
                      <img src="<?= base_url() ?>/assets/images/bcom.jpeg">
                      <h4><?php echo 'DISTANCE LEARNING - '.substr(getCourse($course[$i]), 0, strpos(getCourse($course[$i]), "-")) ;?></h4>
                  </div>
                  </a>
              </div>
              <?php } ?>
              
              
          </div>
      
          </div>
        
        </div>
    </div>
</section>
<section class="trending_college pt-5 pb-5 grey-bg">
    <div class="container pt-5 pb-5">
        <h2 class="text-center pb-5">DISTANCE LEARNING TOP UNIVERSITIES</h2>
        <div class="row">
            <?php for ($i = 0; $i < count($college); $i++) {  ?>
            <?php $link = url_title(get_colleges($college[$i])['college_name'] , 'dash', true); ?>
            <div class="col-md-3">
                <div class="item" ><div class="imageZoom"><a href="<?=  base_url().'/single/'.$college[$i].'/'.$link.'/' ?>"><img src="<?=  base_url() .'/assets/images/cover/'.get_colleges($college[$i])['cover_photo'] ?>" data-src="<?=  base_url() .'/assets/images/cover/'.get_colleges($college[$i])['cover_photo'] ?>" alt="<?php echo get_colleges($college[$i])['college_name'] ;?>" class="loaded" data-was-processed="true"></a></div><div class="text"><a href="<?=  base_url().'/single/'.$college[$i].'/'.$link.'/' ?>" title="<?php echo get_colleges($college[$i])['college_name'] ;?>"><?php echo get_colleges($college[$i])['college_name'] ;?></a></div></div>
            </div>
            <?php } ?>
             
            
        </div>
    </div>
</section>
<section class="about_content pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="pb-3">Who we are</h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.


                </p>
                <h2 class="pb-3">How Interspace Education Counsellors Help</h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.


                </p>
                <h2 class="pb-3">What is Distance Education ?</h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.


                </p>
                <h2 class="pb-3">Distance Education in India</h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.


                </p>
                <h2 class="pb-3">Type of Distance Education</h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.


                </p>
                <h2 class="pb-3">Benefits of Distance Education</h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.


                </p>
            </div>
        </div>
    </div>
</section>
   <!--================================EXPLORE ALMOST EVERYTHING==================================--> 
  

      
 <!--================================Study Abroad===================================-->
 
  <!--================================Top Exam===================================-->

     <!--================================TOP FEATURED COLLEGES OF INDIA===================================-->


    
<?php include 'common/footer.php'; ?>
<script src="<?php echo base_url() ?>/assets/js/index.js"></script>
<script type="text/javascript">
  $('#suggestions').hide();
  $('#spin-loader').hide();
        function ajaxSearch() {
            var input_data = $('#search_data').val();
            if (input_data.length === 0) {
                $('#suggestions').hide();
            } else {

                var post_data = {
                    'search_data': input_data,
                    '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
                };

                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>home/autocomplete",
                    dataType: 'JSON',
                    data: post_data,
                    success: function(data) {
                        // return success
                        if (data.length > 0) {
                            $('#suggestions').show();
                            $('#suggestionslist').addClass('auto_list');
                            $('#suggestionslist').html(data);
                        }
                    }
                });

            }
        }
        
  function getSearchData(srch , final)
  {
      $('#spin-loader').show();
      if($("#"+srch).val() == ''){
          $('#'+final).html("");
           $('#'+final).removeClass("box-shadow");
           $('#spin-loader').hide();
      }
    if($("#"+srch).val().length>1){
        search = $("#"+srch).val();
        $('#'+final).html("");
        
        $.ajax({
            type: "post",
            url: "<?= base_url() ?>home/search_college",
            cache: false,    
            data:{search : search},
            success: function(response){
                //alert(response)
                $('#spin-loader').hide();
                $('#'+final).addClass("box-shadow");
                $('#'+final).html(response);
                 
                },
                error: function(){      
                    alert('Error while request..');
                }
            });
        }
        return false;
             
  }
</script>
