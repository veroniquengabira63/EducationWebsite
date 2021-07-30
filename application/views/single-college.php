
<?php include 'common/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/inner.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<style type="text/css">
 .header.collegeDetails {
    padding: 0 0 15px;
}
.breadcrumb {
    font-size: 12px;
    padding: 10px 0;
    background: transparent;
}
.header.collegeDetails .container {
    position: relative;
}
.breadcrumb li {
    display: inline-block;
}
.breadcrumb li a {
    color: #999;
    text-decoration: none;
}
.breadcrumb>li+li:before {
    color: #b7b7b7;
    padding: 0 5px;
    content: "/\00a0";
}
.block {
    margin-bottom: 15px;
}
.mobileAds {
    height: 95px;
    width: 360px;
    margin: 5px auto;
    text-align: center;
}
.header.collegeDetails .collegeInfo {
    margin: 0 125px 0 0;
}
.collegeDetails .collegeLogo {
    float: left;
    width: 94px;
    height: 94px;
    margin-right: 20px;
    padding: 4px;
    border: 1px solid #f1f1f1;
    background: #fff;
    border-radius: 4px;
}
.collegeDetails .collegeLogo img {
    width: 100%;
    height: auto;
}
.header.collegeDetails .collegeInfo h1 {
    margin-bottom: 5px;
}
h1.tooltips {
    position: relative;
    cursor: pointer;
}
h1.tooltips span {
    padding: 10px;
    top: 40px;
    left: 112px;
    min-width: 75px;
    max-width: 430px;
    background-color: #000;
    color: #fff;
    height: auto;
    border-radius: 5px;
    opacity: 0;
    position: absolute;
    visibility: hidden;
    word-wrap: break-word;
    font-size: 12px;
    z-index: 10000;
    -webkit-transition: all .5s;
    -moz-transition: all .5s;
    -ms-transition: all .5s;
    -o-transition: all .5s;
    transition: all .5s;
}
.header.collegeDetails .collegeInfo .subDesc {
    color: #999;
    font-size: 13px;
}
.header.collegeDetails .collegeInfo .subDesc p {
    margin-bottom: 5px;
}
.header.collegeDetails .collegeInfo .subDesc span.location {
    padding-left: 20px;
}
.header.collegeDetails .collegeInfo .subDesc span {
    padding-left: 15px;
}
.location {
    color: #999;
    margin-bottom: 8px;
    font-size: 14px;
    padding-left: 20px;
    position: relative;
    z-index: 6;
}
.star-ratings-sprite {
    background: url(https://d345msw3voqqyz.cloudfront.net/static/images/star-rating-sprite.c5717f71dc5a.png) repeat-x;
    font-size: 0;
    height: 20px;
    line-height: 0;
    overflow: hidden;
    width: 85px;
    display: inline-flex;
    margin-right: 5px;
}
.star-ratings-sprite-rating {
    background: url(https://d345msw3voqqyz.cloudfront.net/static/images/star-rating-sprite.c5717f71dc5a.png) repeat-x;
    background-position: 0 100%;
    float: left;
    height: 14px;
    display: block;
}
.rating-per .text {
    cursor: pointer;
    display: inline-block;
    font-size: 13px;
    text-decoration: none!important;
}
.rating-per .text a {
    display: inline-block!important;
    font-weight: normal!important;
    font-size: 13px!important;
    margin-right: 3px;
    text-decoration: none!important;
}
.collegeDetails .write-review {
    margin-top: 10px;
}
.collegeDetails .write-review a.reviewBtn {
    padding: 7px 18px 8px 40px;
    border-radius: 3px;
    border: 1px solid #f8931f;
}
.collegeDetails .write-review a {
    display: inline-block;
    color: #f8931f;
    font-size: 13px;
    text-transform: uppercase;
    text-decoration: none;
    position: relative;
}
.collegeDetails .write-review a.download {
    color: #fff;
    margin: 0 0 0 12px;
}
.button{
    display: inline-block;
    color: #fff;
    cursor: pointer;
    text-decoration: none;
    font-size: 14px;
    padding: 7px 15px 8px;
    border: 0;
    border-radius: 2px;
    background: #fd6c73;
    transition: all .2s;
}
.header.collegeDetails .applyBtn {
    position: absolute;
    right: 15px;
    top: 50%;
    margin: -10px 0 0;
    text-transform: uppercase;
}
.header.collegeDetails .applyBtn a {
    padding: 10px 15px;
}
h1, h2, h3, h4, h5, h6 {
    color: #333;
    margin-top: 0;
    margin-bottom: 20px;
    font-weight: 700;
    font-family: 'Lato',sans-serif;
}
h1 {
    font-size: 26px;
}
.collegeTabs {
    clear: both;
    bottom: 0;
    left: 0;
    width: 100%;
    font-size: 15px;
    background: #efefef;
    z-index: 71;
}
ul.links {
    display: table;
    width: 100%;
    color: #d7eeff;
    background: #efefef;
    z-index: 60;
}
ul.collegeDetailsLinks li {
    text-transform: none;
}

ul.links li {
    display: table-cell;
    list-style: none;
    margin-right: 2px;
    font-weight: 400;
    text-transform: uppercase;
    position: relative;
}
ul.links li.active a {
    background: #f8931f;
}
ul.links li a:hover, ul.links li a:focus, ul.links li a:active, ul.links li.active a, ul.links li:hover>a {
    color: #fff;
    text-decoration: none;
}
ul.links li a {
    display: block;
    text-decoration: none;
    overflow: hidden;
    color: #333;
    padding: 12px 0;
    text-align: center;
    -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    box-shadow: 0 0 1px transparent;
    position: relative;
    -webkit-transition-property: color;
    transition-property: color;
    -webkit-transition-duration: .3s;
    transition-duration: .3s;
}
ul.links li a:before {
    content: '';
    position: absolute;
    z-index: -1;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    height: 100%;
    background: #ffb45d;
    -webkit-transform: scaleY(0);
    transform: scaleY(0);
    -webkit-transform-origin: 50% 100%;
    transform-origin: 50% 100%;
    -webkit-transition-property: transform;
    transition-property: transform;
    -webkit-transition-duration: .3s;
    transition-duration: .3s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out;
}
ul.links li:hover > a:before {
    background: #ffb45d;
}
ul.links li a:hover:before, ul.links li a:focus:before, ul.links li a:active:before, ul.links li:hover>a:before {
    -webkit-transform: scaleY(1);
    transform: scaleY(1);
}
/*====================================Main Cotent=====================================*/

.collegedetailsPage {
    padding-top: 20px;
}
.collegedetailsPage .leftCol {
    padding-right: 20px;
}
.facilitiesBlock .box, .commonCarousel>.box {
    display: block;
}
.collegedetailsPage .box {
    padding: 15px 20px;
}
.box {
    display: table;
    width: 100%;
    padding: 8px 10px;
    border: 1px solid #e8e8e8;
    border-radius: 2px;
    background: #fff;
}
.highlightBlock .infraList table {
    width: 100%;
    margin-bottom: 0;
    border: 0;
    display: block;
}
.highlightBlock .infraList table {
    margin: 0;
}
.highlightBlock .infraList table tr:nth-child(odd) {
    background: #fff;
}
.highlightBlock .infraList table .tableBlock {
    float: left;
    border: 1px solid #e8e8e8;
    padding: 10px;
    width: 100%;
}
table tr:nth-child(odd) {
    background: #fafafa;
}
.highlightBlock .infraList table .tableBlock td {
    width: 100%;
    float: left;
    padding: 0;
    text-align: center;
    border: 0;
}
.data {
    color: #333;
    font-weight: bold;
}

.infraList .icon {
    margin: 0 auto;
    width: 40px;
    display: inline-block;
    height: 38px;
   
}
.label {
    color: #999;
    margin-bottom: 2px;
    font-size: 13px;
}
.gs_readmore {
    overflow: hidden;
}
.collegeImage, .overviewVideo {
    position: relative;
    float: left;
    width: 250px;
    margin: 5px 20px 8px 0;
}
.bodyContent .view-more {
    display: block;
    margin: -62px 0 28px;
    padding: 30px 0 10px;
    text-align: center;
    font-size: 14px;
    font-weight: bold;
    position: relative;
    background: -moz-linear-gradient(top,rgba(255,255,255,0) 0,rgba(255,255,255,0.86) 30%,rgba(255,255,255,1) 100%);
    background: -webkit-linear-gradient(top,rgba(255,255,255,0) 0,rgba(255,255,255,0.86) 30%,rgba(255,255,255,1) 100%);
    background: linear-gradient(to bottom,rgba(255,255,255,0) 0,rgba(255,255,255,0.86) 30%,rgba(255,255,255,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00ffffff',endColorstr='#ffffff',GradientType=0);
}
.bodyContent .view-more a {
    display: inline-block;
    color: #fd6c73;
    padding: 8px 30px 6px 13px;
    font-size: 12px;
    text-decoration: none;
    border: 1px solid #fd6c73;
    border-radius: 2px;
    background: #fff;
    position: relative;
}
.bodyContent .view-more a:after {
    content: "";
    position: absolute;
    right: 10px;
    top: 14px;
    width: 0;
    height: 0;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-top: 5px solid #fd6c73;
}
.bodyContent .hide.view-more {
    display: none;
}
.bodyContent .view-less {
    margin-top: -8px;
}
.bodyContent .hide.view-more {
    display: none;
}
.bodyContent .view-less a:after {
    border-top: 0;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-bottom: 5px solid #fd6c73;
}

/*===================Tablet=================================*/

@media screen and (max-width: 768px)
{
  .breadcrumb 
  {
    padding: 24px 0;
    white-space: nowrap;
    overflow-x: auto;
    display: block;
  }
  .header.collegeDetails .collegeInfo {
    margin-right: 0;
  }
  h1 {
    font-size: 22px;
}
.collegeDetails .write-review {
    clear: both;
    text-align: center;
}
.header.collegeDetails .applyBtn {
    position: fixed;
    right: 0;
    bottom: 0;
    width: 50%;
    top: auto;
    z-index: 52;
}
.header.collegeDetails .applyBtn a, .ctaBlock .btn {
    display: block;
    width: 100%;
    margin: 0;
    border-radius: 0;
    padding: 12px 0;
    text-transform: uppercase;
    text-align: center;
    box-shadow: 0 0 6px rgba(0,0,0,.4);
}
.collegeTabs>.container {
    padding: 0;
}
ul.collegeDetailsLinks {
    display: block;
    overflow-x: auto;
}
.collegedetailsPage {
    padding-top: 10px;
}
.collegedetailsPage .leftCol {
    padding-left: 10px;
    padding-right: 10px;
}
ul.collegeDetailsLinks li {
    text-transform: none;
}
ul.collegeDetailsLinks li a {
    padding: 12px 15px;
}
}

/*=========================Mobile========================================*/

@media screen and (max-width: 480px)
{
  .breadcrumb 
  { 
    font-size: 12px;
  }
  .block {
    margin: 0 0 10px;
  }
  .collegeDetails .write-review a.reviewBtn {
    padding: 7px 12px 8px 33px;
}
.collegeImage, .overviewVideo {
    float: none;
    display: block;
    width: 100%;
    margin-bottom: 6px;
}
.collegeImage img {
    width: 100%;
    height: 200px;
}
.overviewBlock .view-more {
    margin: -20px 0 10px;
}

}



/*=========================Mobile========================================*/

/*====================================Main Cotent=====================================*/




</style>
</div>
<?php foreach ($college_data as $college): ?>
    

<div class="header collegeDetails">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/"><span itemprop="title">Home</span></a></li>
            <li><a href="#"><span><?php echo get_state($college->states) ;?></span></a></li>
            <li class="bc-item active"><span itemprop="title"><?php echo $college->college_name ;?> </span></li>
        </ul>
        <div class="block mobileAds">
            <img src="<?php base_url() ?>/assets/images/ads.gif" alt="">
        </div>
        <div class="collegeInfo">
            <div class="collegeLogo"><img src="<?php echo base_url().'/assets/images/profile/'.$college->profile_photo ?>" alt="Indian Institute of Technology" width="104" height="104" style="border-radius: 2px;" title="Indian Institute of Technology" class="initial loading"
                    data-was-processed="true"></div>
            <div class="collegeDesc">
                <h1 class="tooltips"><?php echo $college->college_name ;?>
                   </h1>
                <div class="subDesc">
                    <span class="location"><i class="fa fa-map-marker"></i> <?php echo get_city($college->city) ;?> (<?php echo get_state($college->states) ;?>)</span><span class="approvedBy"> Approved by :<?php echo  $college->affiliated_by ; ?>  </span></div>
                <div class="rating-per">
                    <div class="star-ratings-sprite"><span style="width:90.0%" class="star-ratings-sprite-rating"></span></div><span class="text"><a href="/colleges/iit-kharagpur#reviews">2 Reviews</a></span></div>
                <div class="write-review"><a href="#" target="_blank" class="reviewBtn">Write A Review</a>
                    <?php if(!empty($login)): ?>
                    <a href="<?php echo base_url().'/assets/files/brochure/'.$college->brochure ?>" target="_blank" rel="nofollow" class="download button"> Download Brochure </a>
                    <?php else: ?>
                        <a href="#" data-toggle="modal" data-target="#modalRegisterForm" class="download button"> Download Brochure </a>
                    <?php endif ; ?>
                </div>
            </div>
        </div>
        
    </div>
</div>
<!--=============================================== tabs==================================================== -->
<?php $link = url_title($college->college_name , 'dash', true); ?>
<div class="collegeTabs" data-gssticky="1" style="top: 0px; position: sticky;">
    <div class="container">
        <ul class="links collegeDetailsLinks">
           <li class="active" ><a href="<?php base_url() ?>/single/<?php echo $college->id.'/'.$link  ?>">Overview</a></li>
            <li ><a href="<?php base_url() ?>/courses/<?php echo $college->id  ?>"> Courses </a></li>
            <li ><a href="<?php base_url() ?>/admission/<?php echo $college->id  ?>">Admissions</a></li>
            <li ><a href="<?php base_url() ?>/scholarships/<?php echo $college->id  ?>">Scholarships</a></li>
            <li ><a href="<?php base_url() ?>/placement/<?php echo $college->id  ?>">Placement</a></li>
            <li ><a href="<?php base_url() ?>/news/<?php echo $college->id  ?>">News</a></li>
            <li ><a href="<?php base_url() ?>/gallery/<?php echo $college->id  ?>">Pictures</a></li>
        </ul>
    </div>
</div>

<!--=============================================== tabs==================================================== -->
<!--=============================================== Main Content==================================================== -->

<div class="collegedetailsPage collegeDetailsContent">
    <div class="container">
        <div class="row">
            <div class="col-md-12 leftCol bodyContent">
                <!-- for apply_now banner for partner college -->
                <div class="block commonCarousel highlightBlock">
                  <div class="box">
                      <div class="infraList">
                          <table class="notScrollTable">
                              <tbody class="owl-highlight owl-carousel owl-theme ">
                                  <tr class="item tableBlock">
                                      <td colspan="2"><span class="icon collegeType">
                                        <img src="<?php base_url() ?>/assets/images/goverment.png" width="200" alt="">
                                      </span>
                                          <div class="label">College Type</div>
                                      </td>
                                      <td colspan="2" class="data"><?php echo $college->college_type  ?></td>
                                  </tr>
                                  <tr class="tableBlock">
                                      <td colspan="2"><span class="icon establishedYear">
                                         <img src="<?php base_url() ?>/assets/images/ESTABLISHMENT.png" width="200" alt="">
                                      </span>
                                          <div class="label">Established In</div>
                                      </td>
                                      <td colspan="2" class="data"><?php echo $college->eshtablished  ?></td>
                                  </tr>
                                  
                                  <tr class="item tableBlock">
                                      <td colspan="2"><span class="icon feeRange">
                                        <img src="<?php base_url() ?>/assets/images/SALARY.png" width="200" alt="">
                                      </span>
                                          <div class="label">Fee Range</div>
                                      </td>
                                      <td colspan="2" class="data">INR <?php echo $college->fees_per_year  ?></td>
                                  </tr>
                                  <tr class="item tableBlock">
                                      <td colspan="2"><span class="icon coursesOffered">
                                        <img src="<?php base_url() ?>/assets/images/FEES.png" width="200" alt="">
                                      </span>
                                          <div class="label">Courses Offered</div>
                                      </td>
                                      <td colspan="2" class="data"><?php $course_count = explode(',', $college->courses ); echo count($course_count); ?></td>
                                  </tr>
                                  
                              </tbody>
                          </table>
                      </div>
                  </div>
                </div>
                <!-- overview Section -->
               <div class="block box overviewBlock">
                  <h2><?php echo $college->college_name.' , '.get_city($college->city) ;?> Overview</h2>
                  <div id="a3" class="readmore gs_readmore" style="height: 250px;"><a href="/colleges/pictures-iit-kharagpur" class="collegeImage">
                    <img width="200" src="<?php echo base_url().'/assets/images/cover/'.$college->cover_photo ?>" alt="Indian Institute of Technology" class="initial loaded" data-was-processed="true" style=""></a>
                     <p><?php echo $college->description ?></p>
                  </div>
                  <div class="view-more view-all" ><a href="javascript:void(0)" class="view_all">Read More</a></div>
                  <div class="view-more view-less hide" ><a href="javascript:void(0)" class="view_less">Read Less</a></div>
              </div>
             </div>
    
    
</div>
</div>
<div class="clear"></div>

</div>
</div>
<?php endforeach ?>
<!--=============================================== Main Content==================================================== -->
<div class="container-fluid">
<?php include 'common/footer.php'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" type="text/javascript"></script>

<script type="text/javascript">
  $(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});
  
   $('.owl-highlight, .owl-notableAlumni, .owl-faculty').owlCarousel({
       loop: false,
       margin: 10,
       nav: true,
       responsive: {
           0: {
               items:2
           },
           480: {
               items:2
           },
           600: {
               items:3
           },
           1000: {
               items:3
           }
       }
   });

   $('.owl-gallery').owlCarousel({
       loop: true,
       margin: 10,
       nav: true,
       responsive: {
           0: {
               items: 1
           },
           480: {
               items: 1
           },
           600: {
               items:2
           },
           1000: {
               items:3
           }
       }
   })


   $('.view_all').on('click' , function(){

    $('.view-all').addClass('hide');
    $('.view-less').removeClass('hide');
    $('.gs_readmore').css('height' , 'auto');


   })

   $('.view_less').on('click' , function(){

    $('.view-less').addClass('hide');
    $('.view-all').removeClass('hide');
    $('.gs_readmore').css('height' , '250px');

   })

</script>

</body>
</html>