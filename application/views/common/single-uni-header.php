<link href="<?php echo base_url() ?>/assets/css/single-college-style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/fancybox/jquery.fancybox.css">
<style type="text/css">
  .searchinput{
      line-height: 100%;
      display: table;
      margin: 0;
      width: 100%;
      position: absolute; 
      text-align: center;
      top: -50%;
      left: 50%;
      transform: translate(-50%, -50%);
  }

  .text{
      width: 60%;
      padding: 9px;
      color: green;
      border: 1px solid green;
      box-shadow: 1px 0px 3px green;
      border-radius: 50px 0 0px 50px;
      font-size: 15px;
      text-transform: capitalize;
      outline: none;
  }

  ::-webkit-input-placeholder{
      color: green;
  }

  ::-moz-input-placeholder{
      color: green;
  }

  ::-ms-input-placeholder{
      color: green;
  }

  .text:focus{
      box-shadow: 1px 1px 8px green;
  }

  .submit{
          padding: 10px;
      height: 40px;
      width: 40px;
      font-size: 13px;
      color: white;
      background: green;
      border: none;
      margin: 0;
      border-radius: 0px 50px 50px 0px;
      box-shadow: 0px 0px 10px green;
      outline: none;
  }
  .course_btn a button {
      width: 100px;
      white-space: nowrap;
      text-overflow: ellipsis;
      overflow: hidden;
      border: 1px solid;
      margin:5px 5px 0 0;
  }

  .submit:active{
      box-shadow: 0px 0px 7px green;
  }
</style>

<!--============ Single Page content start ============-->
<div class="college-info">
    <!-- Info College Section Name -->
    <?php foreach ($college_data as $college): ?>
    <div class="college-info-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="position-relative">
                        <div class="coll-info-img">
                            <img src="<?php echo base_url().'/assets/images/profile/'.$college->profile_photo ?>" atl="" />
                        </div>
                        <div class="coll-info-name">
                            <ul class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li><a href="#"><?php echo get_city($college->city) ;?></a></li>
                                
                            </ul>
                            <h1 class="college-name"><?php echo $college->college_name ;?> </h1>
                            <ul class="extra-info d-flex">
                                <li><a href="#"><i class="fa fa-map-marker"></i><?php echo get_city($college->city).' , '.get_state($college->states) ;?> </a></li>
                                <li><a href="#"><i class="fa fa-bookmark"></i><?php echo  $college->affiliated_by ; ?></a></li>
                                <li><a href="#"><i class="fa fa-thumb-tack"></i>ESTD <?php echo $college->eshtablished  ?></a></li>
                                <li><a href="#"><i class="fa fa-flag"></i> <?php echo get_city($college->city); ?></a></li>
                                <li><a href="#"><i class="fa fa-star"></i> <?php echo $college->college_type  ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div></div>
                </div>
            </div>
        </div>
    </div>
    <!-- College Sub Nav -->
    <div class="tab-nav">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="nav">
                        <li><a class="active" href="info.html">Info</a></li>
                        <li><a href="<?php base_url() ?>/courses/<?php echo $college->id  ?>">Courses & Fees</a></li>
                        <li><a href="#">ADMISSION PROCESS</a></li>
                        <li><a href="#">PLACEMENTS</a></li>
                        <li><a href="#">SCHOLORSHIP</a></li>
                        <li><a href="#">REVIEWS</a></li>
                        <li><a href="#">BLOGS</a></li>
                        <li><a href="<?php base_url() ?>/gallery/<?php echo $college->id  ?>">GALLERY</a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Content  -->
     <div class="about-article-tab">
          <div class="container">
              <div class="row">
                <?php endforeach ?>