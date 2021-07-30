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
 .block {
    padding: 15px 0;
    background: #fff;
}
/*profile info*/
 .tabsBlock {
    margin: 0 0 10px;
    padding: 0;
    border: 1px solid #e8e8e8;
    width: 100%;
}
 .tabsBlock ul.tabs {
    margin-bottom: 0;
}
 .tabsBlock ul li.current {
    background: transparent;
}
 .tabsBlock ul li {
    display: inline-block;
    margin: 0 5px 0 5px;
    position: relative;
    padding: 10px;
    cursor: pointer;
}
ul.tabs li.current {
    background: #f7921e;
    color: #fff;
}
.basicBlock {
    padding: 0;
    margin-bottom: 15px;
    width: 100%;
}
 .tab-content {
    padding: 0;
}
.tab-content.current {
    display: inherit;
    width: 100%;
}
.block .edit {
    float: right;
    width: 20px;
    height: 20px;
    cursor: pointer;
    margin: 20px 15px 0 0;
    background: url(../../images/profile-icons.8810e914d04e.png) no-repeat -266px -34px;
}
 .basicBlock h2 {
    padding: 15px 50px 15px 15px;
    margin: 0 0 15px;
    font-size: 18px;
    border-bottom: 1px solid #e8e8e8;
    text-transform: capitalize;
}
 .basicBlock .subHeading {
    padding: 0 15px;
    margin: 0 0 5px;
}
ul.dataList {
    display: flex;
    width: 100%;
    flex-wrap: wrap;
    padding: 15px;
}
.basicBlock .dataList .col-md-4 {
    position: relative;
}
 ul.dataList li {
    padding-left: 0;
    padding-right: 0;
}
ul.dataList .label {
    display: block;
    color: #afafaf;
    white-space: normal;
    line-height: 1.3;
    font-size: 14px;
    overflow: hidden;
    font-weight: 300;
    padding: 0;
    text-align: left;
}
 ul.dataList .data {
    margin: 0 0 15px;
    font-size: 18px;
    word-break: break-word;
}
 ul.dataList .data .noData {
    color: #fd6c73;
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
 <?php foreach ($user_info->result() as $myinfo): ?>
<section class="user-dashboard mt-5">
  <div class="container overviewBlock">
 
    <div class="row">
      <div class="col-lg-9 col-md-12 rightCol">
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
                    <li class="mail"><i class="fa fa-envelope"></i> <a href="mailto:<?php echo $myinfo->email; ?>"> <?php echo $myinfo->email; ?></a></li>
                </ul>
            </div>
            <!-- <div class="col-md-3"><p class="progress-heading">Profile Completeness</p><div class="profile-progress"><span data-progress="21%" class="progress-bar" id="progress-bar" style="width:21%;"></span></div></div> -->
            <div class="clear"> </div>
          </div>
         
        </div>
       
   <div class="row">
    <div class="col-md-12 ">
        <div class="block tabsBlock">
            <ul class="tabs">
                <li class="" data-stclass="bd" data-tab="tab-1">Basic Details</li>
                <li data-tab="tab-2" data-stclass="cd" class="">Contact Details</li>       
                <li data-tab="tab-3" ><a  class="btn btn-primary" href="#editAsModal"  data-toggle="modal">Account Setting</a></li>       
                <!--<li class="myDocs"><a href="/user-documents/">My Documents</a></li>-->
            </ul>
        </div>
        <div class="block basicBlock bd">
            <div id="tab-1 " class="tab-content current">
                <div class="edit" data-btn_id="1"><a href="#editBdModal"  data-toggle="modal"><i class="fa fa-pencil"></i></a></div>
                <h2>Basic Details</h2>
                <ul class="dataList">
                    <li class="col-md-4">
                        <div class="label">Full Name</div>
                        <div class="data"><?php echo $myinfo->name; ?></div>
                    </li>
                    
                    <li class="col-md-4 col-sm-6">
                        <div class="label">DOB</div>
                        <div class="data"><?php echo ($myinfo->dob)? $myinfo->dob : '<span class="noData">Not Mentioned </span>' ;?></div>
                    </li>
                    <li class="col-md-4 col-sm-6">
                        <div class="label">Gender</div>
                        <div class="data"><?php echo ($myinfo->gender)? $myinfo->gender : '<span class="noData">Not Mentioned </span>' ;?></div>
                    </li>
                   
                    <li class="col-md-4 col-sm-6">
                        <div class="label">Mother tongue</div>
                        <div class="data"><?php echo ($myinfo->mother_tongue)? $myinfo->mother_tongue : '<span class="noData">Not Mentioned </span>' ;?></div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="block basicBlock cd">
            <div id="tab-2" class="tab-content current">
                <div class="edit" data-btn_id="2"><a href="#editCdModal"  data-toggle="modal"><i class="fa fa-pencil"></i></a></div>
                <h2>Contact Details</h2>
                <ul class="dataList">
                    <li class="col-md-4 col-sm-6">
                        <div class="label">Mobile No.</div>
                        <div class="data"><?php echo ($myinfo->mobile_no)? $myinfo->mobile_no : '<span class="noData">Not Mentioned </span>' ;?></div>
                    </li>
                    <li class="col-md-4 col-sm-6">
                        <div class="label">Alternate Mobile Number</div>
                        <div class="data"><?php echo ($myinfo->alternate_no)? $myinfo->alternate_no : '<span class="noData">Not Mentioned </span>' ;?></div>
                    </li>
                    <li class="col-md-4 mobileFull">
                        <div class="label">Email Address</div>
                        <div class="data"><?php echo ($myinfo->email)? $myinfo->email : '<span class="noData">Not Mentioned </span>' ;?></div>
                    </li>
                   
                    <li class="col-md-4 col-sm-6">
                        <div class="label">Country</div>
                        <div class="data"><?php echo ($myinfo->country)? get_country($myinfo->country) : '<span class="noData">Not Mentioned </span>' ;?></div>
                    </li>
                    <li class="col-md-4 country-abroad col-sm-6">
                        <div class="label">State</div>
                        <div class="data"><?php echo ($myinfo->state)? get_state($myinfo->state) : '<span class="noData">Not Mentioned </span>' ;?></div>
                    </li>
                    <li class="col-md-4 country-abroad col-sm-6">
                        <div class="label">City</div>
                        <div class="data"><?php echo ($myinfo->city)? get_city($myinfo->city) : '<span class="noData">Not Mentioned </span>' ;?></div>
                    </li>
                   
                </ul>
            </div>
        </div>
       
    </div>
</div>
        <!--<div class="block tabsBlock"><ul><li class="myInfo"><a href="/users/user-profile/">My Profile</a></li><li class="myDocs active"><a href="#">My Documents</a></li></ul></div>--></div>
</div>
    </div>
  </div>
</section>
 <?php endforeach ?>

 <div id="editBdModal" class="modal " tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
     <form class="form" id="editBd" method="post">
      <div class="modal-header">
        <h5 class="modal-title">Edit Basic Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="fname" value="<?php echo ($myinfo->name)? $myinfo->name  : '' ;?>" class="form-control">
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="form-group">
                        <label>DOB</label>
                        <input type="date" name="dob" value="<?php echo ($myinfo->dob)? $myinfo->dob : '' ;?>" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label >Gender</label><br>
                        
                        <?php if($myinfo->gender == 'male'): ?>
                        <label for="male">male</label>
                        <input type="radio" checked="true" name="gender" value="male" id="male" >
                         <label for="female">female</label>
                        <input type="radio" name="gender" value="female" id="female" >
                        <?php else: ?>
                        <label for="male">male</label>
                        <input type="radio"  name="gender" value="male" id="male" >
                         <label for="female">female</label>
                        <input type="radio" checked="true" name="gender" value="female" id="female" >
                    <?php endif; ?>
                       
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Mother Tongue</label>
                        <input type="text" name="mother_tongue" value="<?php echo ($myinfo->mother_tongue)? $myinfo->mother_tongue : '' ;?>" class="form-control">
                    </div>
                </div>
            </div>
       
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
  </div>
</div>

<div id="editCdModal" class="modal " tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
     <form class="form" id="editCd" method="post">
      <div class="modal-header">
        <h5 class="modal-title">Edit Contact Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Mobile no.</label>
                        <input type="text" name="mobile_no" value="<?php echo ($myinfo->mobile_no)? $myinfo->mobile_no  : '' ;?>" class="form-control">
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Alternate Mobile no.</label>
                        <input type="text" name="alternate_no" value="<?php echo ($myinfo->alternate_no)? $myinfo->alternate_no  : '' ;?>" class="form-control">
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Email</label>
                        <input disabled type="email" name="email" value="<?php echo ($myinfo->email)? $myinfo->email : '' ;?>" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label >Country</label>
                        <select id="user_country" class="form-control" name="country">
                            <option value="">-- select country --</option>
                            <?php foreach ($country->result() as $country_name): ?>
                                
                                <option value="<?php echo $country_name->id ?>"><?php echo $country_name->name ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label >State</label>
                        <select id="user_state" class="form-control" name="state">
                            
                                <option value="">-- select state --</option>
                                
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label >City</label>
                        <select id="user_city" class="form-control" name="city">
                            
                                <option value="">-- select city --</option>
                               
                        </select>
                    </div>
                </div>
               </div>
       
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
  </div>
</div>

<!-- ----------------------------Account setting modal---------------------------------------- -->

<div id="editAsModal" class="modal " tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
     <form class="form" id="editAs" method="post">
      <div class="modal-header">
        <h5 class="modal-title">Edit Account Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Old Password.</label>
                        <input type="password" name="old_pass" id="old_pass" value="" class="form-control">
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="form-group">
                        <label>New Password</label>
                        <input type="password" name="new_pass" id="new_pass" value="" class="form-control">
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Repeat Password</label>
                        <input  type="password" name="rep_pass" id="rep_pass" value="" class="form-control">
                    </div>
                </div>
               
               </div>
       
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
  </div>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/application/views/common/footer.php');?>
<script type="text/javascript">
    $(".tabs li").click(function() {
        var cname = $(this).data('stclass');
    $('html,body').animate({
        scrollTop: $("."+cname+"").offset().top},
        'slow');
});
</script>
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
<script type="text/javascript">
    $('#editBd').on('submit' , function(e)
    {
        e.preventDefault();
         $(".loader-wrapper").show();
        var baseurl = '<?php base_url() ?>';
        $.ajax({
            type: 'post',
            url:  baseurl + '/home/updateBasicDetails',
            data: $('form').serialize(),
            success: function () {
            $(".loader-wrapper").hide();
              location.reload();
            }
          });
    })

    $('#editCd').on('submit' , function(e)
    {
        e.preventDefault();
         $(".loader-wrapper").show();
        var baseurl = '<?php base_url() ?>';
        $.ajax({
            type: 'post',
            url:  baseurl + '/home/updateContactDetails',
            data: $('form').serialize(),
            success: function () {
            $(".loader-wrapper").hide();
              location.reload();
            }
          });
    })

    $('#editAs').on('submit' , function(e)
    {
        e.preventDefault();
         $(".loader-wrapper").show();
        var baseurl = '<?php base_url() ?>';
        $.ajax({
            type: 'post',
            url:  baseurl + '/home/updatePswrd',
            data: $('form').serialize(),
            success: function () {
            $(".loader-wrapper").hide();
              location.reload();
            }
          });
    })
</script>
 <script type="text/javascript">
      $('#user_country').on('change' , function ()
      {
      country_id = $('#user_country').val();
      if(country_id){
      $.ajax({
      type: 'POST',
      url: '<?php echo base_url('admin/getStates'); ?>',
      data:{cid: country_id},
      success: function(response){
      $('#user_state').html('<option value="">- Select State - </option>');
      var obj = $.parseJSON(response);
      if(obj){
      $(obj).each(function(){
      var option = $('<option/>');
        option.attr('value' , this.id).text(this.name);
        $('#user_state').append(option);
        var state  =  "<?php echo ($myinfo->state ) ? $myinfo->state : 'Null' ?>"
            if (state == 'Null') 
            {

            }
            else
            {
               
                $("#user_state option").each(function(){
                    if($(this).val()==state){ // EDITED THIS LINE
                    $(this).attr("selected","selected");    
                    }
                });
                 $("#user_state").trigger("change");

            }
        })
        
        }else{
        $('#user_state').html('<option value="">- State Not Available - </option>');
        }
        }
        })
        }
        })
        /*============city===================*/
        $('#user_state').on('change' , function ()
        {
        state_id = $('#user_state').val();
        if(state_id){
        $.ajax({
        type: 'POST',
        url: '<?php echo base_url('admin/getCities'); ?>',
        data:{sid: state_id},
        success: function(response){
        $('#user_city').html('<option value="">- Select city - </option>');
        var obj = $.parseJSON(response);
        if(obj){
        $(obj).each(function(){
        var option = $('<option/>');
          option.attr('value' , this.id).text(this.name);
          $('#user_city').append(option);
          })
          var city  =  "<?php echo ($myinfo->city ) ? $myinfo->city : 'Null' ?>"
            if (city == 'Null') 
            {

            }
            else
            {
               
                $("#user_city option").each(function(){
                    if($(this).val()==city){ // EDITED THIS LINE
                    $(this).attr("selected","selected");    
                    }
                });


            }
          }else{
          $('#user_city').html('<option value="">- city Not Available - </option>');
          }
          }
          })
          }
          })
          </script>
          <script type="text/javascript">
            var country  =  "<?php echo ($myinfo->country ) ? $myinfo->country : 'Null' ?>"
            if (country == 'Null') 
            {

            }
            else
            {
               
                $("#user_country option").each(function(){
                    if($(this).val()==country){ // EDITED THIS LINE
                    $(this).attr("selected","selected");
                    
                        
                    }
                });
                $("#user_country").trigger("change");
                

            }

          </script>
          <script type="text/javascript">
              
            $('#editAs').validate({
              rules: {

                old_pass: {
                    required: true,
                    remote:
                        {
                            url: '<?php echo base_url() ?>home/old_pass_check',
                            type: "post",
                            dataType: "json",
                            data:
                              {
                                 email: function(){ return $("#old_pass").val(); }

                              }
                        }

                     },
                new_pass: {

                    required: true,

                    pwcheck: true,

                    minlength: 8

                },

                  rep_pass:{

                    required : true,

                    equalTo: "#new_pass"

                          

                  }
                },

   messages: {

        old_pass: 

         {

                remote: 'old Password Doesnt Match'

         },

          confirm_password:{

            equalTo:" Enter Confirm Password Same as Password"

          } 

   }

    });

    jQuery.validator.addMethod("pwcheck",

        function(value, element, param) {

            if (this.optional(element)) {

                return true;

            } else if (!/[A-Z]/.test(value)) {

                return false;

            } else if (!/[a-z]/.test(value)) {

                return false;

            } else if (!/[0-9]/.test(value)) {

                return false;

            }



            return true;

        },

        "Password Must Contain Atleast One Number and One Uppercase Letter");

    jQuery.validator.addMethod("lettersonly", function(value, element) 

{

return this.optional(element) || /^[a-z ]+$/i.test(value);

}, "Letters and spaces only please");



          </script>            
