<?php include 'common/header.php'; ?>
<?php include 'common/single-uni-header.php'; ?>
<style type="text/css">
  a.fancybox.w-100 img {
    height: 200px;
    object-fit: cover;
}
</style>
 <?php foreach ($college_data as $college): ?>
<div class="col-md-9">
  <div class="article-tab my-3">
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
                
                <li class="d-flex mt-2 mb-2">

                  <span class="font-weight-bold mr-half mr-2"><?php echo count(getCourseSpecs($details->id , $details->course_name)); ?> Streams </span>
                  
                  <ul class="list-unstyled d-flex show-five">
                    <?php foreach (getCourseSpecs($details->id , $details->course_name) as $specs): ?>
                    <li><a href="#"><?php echo getCourse($specs->name).' in '.get_specialization($specs->specialization); ?></a></li>
                    
                    <?php endforeach ?>
                  </ul>
                </li>
              </ul>
              <a class="download-btn" href="#">Download Brochure <i class="fa fa-cloud-download"></i></a>
            </div>
            <div class="course-right-part">
              <span class="heading-fee-rupee">₹ <?php echo $details->fees; ?></span>1st Yr Fees
              <a href="#" class="simple-btn text-yellow">Check Detailed Fees </a>
            </div>
          </div>
          <?php endforeach ?>
          
        </div>
      </div>
      
      <!-- Sub Tab - End -->
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