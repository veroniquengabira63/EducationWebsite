<?php include 'common/header.php'; ?>
<?php include 'common/single-uni-header.php'; ?>
<style type="text/css">
  a.fancybox.w-100 img {
    height: 200px;
    object-fit: cover;
}
.table-responsive {
    display: block;
    width: 100%!important;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
}
</style>
 <?php foreach ($college_data as $college): ?>
<div class="col-md-9">
  <div class="article-tab my-3">
    <div class="tab-content bg-white">
      <h2>Overview</h2>
      <p>
        <?php echo $college->description ?>
      </p>
    </div>
    <div class="tab-content bg-white">
      <h5><strong><?php echo $college->college_name ?> TOP COURSES, FEES & ELIGIBILITY</strong></h5>
      <!-- Sub Tab -->
     
      <!-- Tab Content -->
      
      <div id="subtab1" role="tabpanel" class="tab-pane panel-collapse collapse active" aria-labelledby="heading2">
        <div class="sub-tabpanel mt-3 mb-3">
          <!-- course - 1 -->
          <?php foreach ($course_details as $details): ?>
          <div class="course-main-part d-flex justify-content-between">
            <div class="course-left-part">
              <div class="course-details-container mb-1">
                <a class="course-heading" href="#"><?php echo getCourse($details->course_name); ?></a>
              </div>
              <ul class="course-details year list-unstyled d-flex">
                <li><i class="fa fa-clock-o"></i> <?php echo $details->duration ?></li>
                <li><i class="fa fa fa-book"></i> <?php echo $details->type_of_course ?></li>
                <li><i class="fa fa-building-o"></i> <?php echo $details->place ?></li>
                <li><i class="fa fa-file-powerpoint-o"></i> <?php echo $details->course_type ?></li>
              </ul>
              
              <ul class="course-details-list list-unstyled mt-3">
                <li class="d-flex mt-2 mb-2">
                  <span class="font-weight-bold mr-half mr-2">Exams Accepted: </span>
                  <ul class="list-unstyled d-flex show-five">
                    <?php $exms = explode(',' , $details->exams)  ?>
                    <?php for ($i=0; $i < count($exms) ; $i++) { ?>
                     <li><a href="#"><?php echo $exms[$i] ?></a></li>
                  <?php  }  ?>
                    
                   
                  </ul>
                </li>
                <?php if(count(getCourseSpecs($details->id , $details->course_name)) != 0):  ?>
                <li class="d-flex mt-2 mb-2">

                  <span class="font-weight-bold mr-half mr-2"><?php echo count(getCourseSpecs($details->id , $details->course_name)); ?> Streams </span>
                  
                  <ul class="list-unstyled d-flex show-five">
                    <?php foreach (getCourseSpecs($details->id , $details->course_name) as $specs): ?>
                    <li><a href="#"><?php echo getCourse($specs->name).' in '.get_specialization($specs->specialization); ?></a></li>
                    
                    <?php endforeach ?>
                  </ul>
                </li>
                <?php endif; ?>
              </ul>
              
            </div>
            <div class="course-right-part">
              <span class="heading-fee-rupee">₹ <?php echo $details->fees; ?></span>1st Yr Fees
              
            </div>
          </div>
          <?php endforeach ?>
          
        </div>
      </div>
      
      <!-- Sub Tab - End -->
    </div>
   <!--  -->
   
 
  <div class="tab-content bg-white">
    <h5><strong>FACILITIES</strong></h5>
    <hr class="my-3">
    <div class="row mb-3">
      <?php $facility =  explode(',' , $college->facilities);
      for ($i=0; $i < count($facility) ; $i++) { ?>
      <div class="col-sm-2 col-4 mb-2">
        <div class="facilities">
          <img src="<?php echo base_url() ?>/assets/images/<?php echo preg_replace('/ /', '', $facility[$i]); ?>.jpg
          " />
          <span class="facility-name"><?php echo $facility[$i] ?></span>
        </div>
      </div>
      <?php  } ?>
      
    </div>
   
  </div>
 
  <div class="tab-content bg-white">
    <div class="row">
      <div class="col-sm-6">
        <h5><strong>GALLERY IMAGES</strong></h5>
      </div>
      <div class="col-sm-6">
        <div class="head-desc">
          <a class="text-green" href="<?php echo base_url() ?>/gallery/<?php echo $college->id ?>">View All</a>
        </div>
      </div>
    </div>
    <hr class="my-3">
    <div class="row">
      <?php $gallery = explode(',', $college->gallery) ?>
      <?php $total_img = count($gallery); ?>
      <?php if($total_img > 1): ?>
      <?php for ($i=0; $i < 4 ; $i++) { ?>
      <div class="col-sm-3">
        <div class="fancybox-main">
          <a class="fancybox w-100" href="<?php echo base_url() ?>/assets/images/gallery/<?php echo $gallery[$i] ?>">
            <img class="w-100" src="<?php echo base_url() ?>/assets/images/gallery/<?php echo $gallery[$i] ?>" alt=""/>
          </a>
        </div>
      </div>
      <?php  } ?>
      <?php endif; ?>
    </div>
  </div>
  
  <div class="tab-content bg-white p-0">
    <div class="row">
      <div class="col-sm-6 pr-0">
        <div class="address-row bg-dark text-white h-100">
          <div class="loc-block p-3">
            <div class="add-block address-content mb-4">
              <i class="fa fa-map-marker"></i>
              <h3><?php echo $college->street; ?> <br> <?php echo get_city($college->city).' - '.$college->zipcode; ?> <br> <?php echo get_state($college->states).' - '.get_country($college->country); ?> </h3>
            </div>
           
          </div>
          <hr class="m-3 border-light">
          <div class="contact-block p-3">
            <ul class="list-unstyled mb-0">
              <li><span><i class="fa fa-phone"></i></span><?php echo $college->phone; ?></li>
              <li><span><i class="fa fa-envelope"></i></span><?php echo $college->email; ?></li>
              
              
          </div>
          <div class="contact-block bg-green p-3">
            <ul class="list-unstyled mb-0">
              <li class="text-white">
                <span><i class="fa fa-mail-forward"></i></span>
                <a class="text-white" href="#"><?php echo $college->website; ?></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-6 pl-0">
        <div class="map-row">
          <?php $address =  $college->street.' '.get_city($college->city).' - '.$college->zipcode.' '.get_state($college->states).' - '.get_country($college->country); ?>
         <iframe width="100%" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.it/maps?q=<?php echo $address; ?>&output=embed"></iframe>
        </div>
      </div>
    </div>
  </div>
 

  <div class="tab-content bg-white">
    <div class="row">
      <div class="col-sm-6">
        <h5><strong>NEWS</strong></h5>
      </div>
      <div class="col-sm-6">
        <div class="head-desc">
          <a class="text-green" href="#">View All</a>
        </div>
      </div>
    </div>
    <hr class="my-3">
    <div class="row">
      <?php if(count($college_post) > 0): ?>
      
      <?php foreach ($college_post as $post): ?>
      <div class="col-sm-4">
        <div class="news-block">
          <div class="news-img">
            <img src="<?php echo base_url() ?>/assets/images/post_images/<?php echo $post->featured_image ?>" />
          </div>
          <div class="bottom-block">
            <div class="news-date">
              <p> <?php $timestamp = strtotime($post->created_at); $newDate = date('d-F-Y', $timestamp); 
echo $newDate;?> </p>
              <a class="text-yellow" rel="nofollow" href="javascript:void(0)">
                <i class="fa fa-heart-o"></i>
              </a>
            </div>
            <a href="#" class="news-head text-green"><?php echo $post->title ?></a>
            <?php $this->load->helper('text'); ?>
            <p class="news-desc"> <?php echo word_limiter(strip_tags($post->description),40); ?></p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
    <?php else: ?>
      <div class="col-12">
      <h4 class="alert alert-info text-center">No News Found Related to this college!!</h4>
    </div>
    <?php endif; ?>

     
    </div>
  </div>
</div>
</div>
<?php endforeach ?>
<?php include 'common/single-uni-side.php'; ?>
<?php include 'common/footer.php'; ?>
<script type="text/javascript">
    $(".fancybox")
      .attr('rel', 'gallery')
      .fancybox({
        padding : 0
    });
</script>