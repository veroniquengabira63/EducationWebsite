<?php include($_SERVER['DOCUMENT_ROOT'] . '/application/views/common/header.php');?>
<?php if(empty($this->session->userdata('login_data'))) {
    $this->session->set_flashdata('errormsg', 'You are Not Logged In');
 redirect('home','refresh');
}

    ?>
<style type="text/css">
      .overviewBlock.profileContent {
    margin-top: 20px;
}
      .user-dashboard .col-lg-9 {
    max-width: 100%;
    flex: none;
}
body{
    background: #f1f1f1;
}
.overviewBlock .profileBlock {
    overflow: hidden;
    padding-top: 15px;
    padding-bottom: 15px;
    background: #fff;
        padding: 15px;
}
.profileBlock {
    border: 1px solid #e8e8e8;
}
.block {
    margin: 0 0 25px;
    width: 100%;
}
.overviewBlock .profileBlock .photo {
    margin-bottom: 0;
    max-width: 130px;
}
.overviewBlock .photoDiv {
    margin-top: 0;
}
.profileBlock .photoDiv {
    width: 100%;
    max-width: 100px;
    position: relative;
    height: 100px;

}
.profileBlock .photoDiv img {
    border-radius: 50%;
    border: 1px solid #d7d9e0;
    height: 100%;
    width: 100%;
}
 .profileBlock .photoDiv .edit-icon {
    overflow: hidden;
    position: absolute;
    right: 2px;
    bottom: 5px;
    width: 37px;
    height: 37px;
    line-height: 37px;
    text-align: center;
    border-radius: 50%;
    color: #8b8d94;
    border: 1px solid #d7d9e0;
    background: #fff url(https://d345msw3voqqyz.cloudfront.net/static/images/profile-icon.8810e914d04e.png) no-repeat -258px 3px;
}
.profileBlock .photoDiv .edit-icon .fileUpload {
    position: absolute;
    right: 0;
    opacity: 0;
    cursor: pointer;
    font-size: 24px;
}
.overviewBlock .info {
    position: relative;
}
.profileBlock h2 {
    margin: 0;
    font-size: 20px;
    font-weight: normal;
}
.profilePage .profileBlock {
    padding-top: 20px;
    padding-bottom: 20px;
    width: 100%;
}
.profileBlock h2 a {
    text-decoration: none;
    display: inline-block;
    color: #333;
    cursor: pointer;
    transition: all .2s;

}
.overviewBlock p {
    line-height: 1.6;
}
ul, ol, li {
    list-style: none;
}
.profileBlock .date {
    color: #999;
    font-size: 12px;
}
.overviewBlock .profileBlock .info ul {
    margin-bottom: 0;
}
.profileBlock .info ul {
    margin-bottom: 20px;
    font-size: 14px;
}
.profileBlock .info ul li {
    display: inline-block;
    margin: 0 30px 8px 0;
    padding-left: 20px;
    position: relative;
}
.profileBlock .info ul li a {
    color: #333;
    }
    .overviewBlock .linkingTab ul li {
    width: 50%;
    float: left;
    padding: 0 8px;
    margin-bottom: 15px;
}
.overviewBlock .linkingTab ul li .box {
    background: #fff;
    text-align: center;
    padding: 15px;
    transition: .5s ease;
    min-height: 149px;
    height: auto;
}
.box {
    display: table;
    width: 100%;
    padding: 8px 10px;
    border: 1px solid #e8e8e8;
    border-radius: 2px;
    background: #fff;
}
.overviewBlock .linkingTab ul li .box a {
    text-decoration: none;
    font-weight: bold;
    color: #333;
    display: block;
}
.overviewBlock .linkingTab ul li .box a span {
    width: 45px;
    height: 45px;
    background: #f7f7f7;
    border: 1px solid #ececec;
    display: block;
    margin: 0 auto 10px;
    border-radius: 50%;
    vertical-align: middle;
    padding: 10px;
    text-align: center;
    font-size: 24px;
}
.overviewBlock .linkingTab ul li .box h5 {
    text-decoration: none;
    font-weight: bold;
    color: #333;
    margin: 0;
}
.overviewBlock .linkingTab ul li .box p {
    margin-bottom: 0;
    color: #999999;
    font-size: 13px;
}
.overviewBlock .linkingTab {
  width: 60%;
}
@media screen and (max-width: 767px)
{
    .overviewBlock .linkingTab
   {
      width: 100%;
   }
}
/*====================loader css===============================*/
.overlay {
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    position: fixed;
    background: #22222294;
    z-index: 1111111111;
}

.overlay__inner {
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    position: absolute;
}

.overlay__content {
    left: 50%;
    position: absolute;
    top: 50%;
    transform: translate(-50%, -50%);
}

.spinner {
    width: 75px;
    height: 75px;
    display: inline-block;
    border-width: 2px;
    border-color: rgba(255, 255, 255, 0.05);
    border-top-color: #fff;
    animation: spin 1s infinite linear;
    border-radius: 100%;
    border-style: solid;
}

@keyframes spin {
  100% {
    transform: rotate(360deg);
  }
}

/*====================loader css================================*/
    </style>
<div class="overlay loader-wrapper">
    <div class="overlay__inner">
        <div class="overlay__content"><span class="spinner"></span></div>
    </div>
</div>
<section class="user-dashboard mt-5">
  <div class="container overviewBlock">
    <div class="row">
      <div class="col-lg-9 col-md-12 rightCol">
           <?php foreach ($user_info->result() as $myinfo): ?>
    <div class="row">
        <div class="block profileBlock">
          <div class="row">
            <div class="col-md-2 photo">
               <div class="photoDiv"><img id="profile" src="<?php base_url() ?>/assets/images/user_profile/<?php echo $myinfo->profile_pic; ?>" alt="" title="" class="initial loaded" data-was-processed="true">
                  <span class="edit-icon fa fa-edit"><input type="file" name="image" class="fileUpload"></span>
                </div>
            </div>
            <div class="col-md-7 info">
                <h2><a href=""><?php echo $myinfo->name; ?></a></h2>
                <p class="date">Joined on <?php echo $myinfo->registered_on; ?></p>
                <ul>
                    <li class="phone"><i class="fa fa-phone"></i> <a href="#"> <?php echo ($myinfo->mobile_no)? $myinfo->mobile_no : 'Not Mentioned' ;?></a></li>
                    <li class="mail"><i class="fa fa-envelope"></i> <a href="#"> <?php echo $myinfo->email; ?></a></li>
                </ul>
            </div>
            <!-- <div class="col-md-3"><p class="progress-heading">Profile Completeness</p><div class="profile-progress"><span data-progress="21%" class="progress-bar" id="progress-bar" style="width:21%;"></span></div></div> -->
            <div class="clear"></div>
          </div>
           <?php endforeach ?>
        </div>
        <div class="linkingTab">
            <ul class="row">
               
                <li>
                    <div class="box"><a href="<?php echo base_url() ?>/home/profile_info"><span class="fa fa-user">
                      
                    </span><h5>My Profile</h5><p>Add/update your profile details</p><div class="r-arr"></div></a></div>
                </li>
                
                
                <li>
                    <div class="box"><a href="<?php echo base_url() ?>/home/logout"><span class="fa fa-power-off"></span><h5>Logout</h5><!-- <div class="r-arr"></div> --></a></div>
                </li>
            </ul>
        </div>
        <!--<div class="block tabsBlock"><ul><li class="myInfo"><a href="/users/user-profile/">My Profile</a></li><li class="myDocs active"><a href="#">My Documents</a></li></ul></div>--></div>
</div>
    </div>
  </div>
</section>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/application/views/common/footer.php');?>
<script type="text/javascript">
    $(".loader-wrapper").hide();
    $(".fileUpload").on('change', function(e) {
     var data = new FormData();

     data.append('profile_pic', $('.fileUpload').prop('files')[0]);
     var baseurl = '<?php base_url() ?>';
      $(".loader-wrapper").show();
    $.ajax({
        type: 'POST',
        data: data ,
        contentType: false,
        cache: false,
        processData:false,
        url: baseurl + '/home/uploadProfilePicture',
        success: function(data, textStatus, jqXHR) {

           $("#profile").attr('src' , '<?php base_url() ?>'+'/assets/images/user_profile/'+data)
           $(".loader-wrapper").hide();
            console.log(data);
        },
        error: function(jqXHR, textStatus, errorThrown){
            alert(jqXHR.responseText);
        }
    });
});
</script>