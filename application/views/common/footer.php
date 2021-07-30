
<!--================================subscription===================================-->
<section class="pt-5 pb-5" style="background: url('http://maxcity.mu/wp-content/uploads/2017/08/contact-us-banner-overlay.jpg');">
  <div class="container">
    <h2 class="text-center text-white mb-5">Get A Quick Inquiry</h2>
    <div class="row">

      <div class="col-12 col-md-6">
        <img src="https://timescareer.org/wp-content/uploads/2019/06/b2btripyourinquiry.png" class="img-fluid">
      </div> 
      <div class="col-12 col-md-6">
       <div class="card card-body bg-light">
        <form id="applyNowForm" name="apply_now_form" method="POST" action="<?php base_url() ?>/home/contact_form" data-toggle="validator" >
        <div class="modal-body">
          <div class="form-group">
            <label for="apply_full_name">Full Name:</label>
            <input type="text" name="apply_full_name" id="apply_full_name" class="form-control" placeholder="Please enter your full name*" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="apply_email">Email:</label>
            <input type="email" name="apply_email" id="apply_email" class="form-control" placeholder="Please enter your Email*" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="apply_phone">Mobile Number:</label>
            <input type="text" name="apply_phone" id="apply_phone" class="form-control" placeholder="Please enter your 10 digits valid mobile number*" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="apply_course">Select Course:</label>
            <select name="apply_course" id="apply_course" class="form-control">
              <option value="">Select course</option>
              <?php foreach(formCourses() as $formcourse): ?>
                <option value="<?= $formcourse->course_name ?>"><?= $formcourse->course_name ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          
        </div>
        <div class="modal-footer AlgnCenter">
          <button type="submit" class="btn-success buttonApplySubmit">Apply Now</button>
        </div>
      </form>
    </div>
      </div>
    </div>
  </div>
</section>

<!--================================Footer===================================-->
<footer style="background-color: #f8f8f8;">
<div class="container">
<div class="row pt-5 pb-5" >
 
  <div class="col-sm-3 col-md-3   footer pt-4">
   <h4>Intermediate Education</h4>
   <ul class="foot_nav">
       <li><i class="fa fa-phone"></i><a href="#">+91-1724643084</a></li>
       <li><i class="fa fa-envelope"></i><a href="#">info@interspaceeducation.com</a></li>
       <li>Connect with us: <br><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></li>
   </ul>
  </div>
  <div class="col-sm-3 col-md-3   footer pt-4">
   <h4>Quick Links</h4>
   <ul class="foot_nav">
       <li><a href="#">How are we Different</a></li>
       <li><a href="#">Top Distance Courses</a></li>
       <li><a href="#">Why Distance Learning</a></li>
       <li><a href="#">Contact Us</a></li>
       <li><a href="#">UGC Notices </a></li>
       <li><a href="#">Sitemap</a></li>
       
   </ul>
  </div>
  <div class="col-sm-3 col-md-3   footer pt-4">
      <?php foreach(footerMenu() as $menu): ?>
        <?php $college = explode(',', $menu->top_colleges); ?>
        <?php $course = explode(',', $menu->top_courses); ?>
      <?php endforeach; ?>
   <h4>Distance Learning Institutions/Universities</h4>
   <ul class="foot_nav">
       <?php for ($i = 0; $i < count($college); $i++) {  ?>
       <?php $link = url_title(get_colleges($college[$i])['college_name'] , 'dash', true); ?>
       <li><a href="<?=  base_url().'/single/'.$college[$i].'/'.$link.'/' ?>"><?= get_colleges($college[$i])['college_name'] ?></a></li>
       <?php }  ?>
       
       
   </ul>
  </div>
  <div class="col-sm-3 col-md-3   footer pt-4">
   <h4>Distance Learning Courses</h4>
   <ul class="foot_nav">
       <?php for ($i = 0; $i < count($course); $i++) {  ?>
       <?php $link = url_title(getCourse($course[$i]), 'dash', true); ?>
       <li><a href="<?php echo base_url('distance-education/'.$course[$i].'/course/'.$link) ?>"><?= getCourse($course[$i]) ?> </a></li>
      <?php }  ?> 
       
   </ul>
  </div>
  
  
 
</div>

</footer>
<div class="footer_bottom" style="background-color: #140c64;">
    <div class="container">
        <div class="row " >
        
            <div class="col-12 text-center pt-3 p-1 copyright" style="background-color: #140c64; color:white;">
                <p>Copyright © 2020 Interspace Education || All Rights Reserved.</p>
            </div>
        </div>
    </div>
</div>

<div id="applynowModal" class="applyNowPopup modal fade">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h4 class="modal-title">Admission Enquiry</h4>
    </div>
    <form id="applyNowForm" name="apply_now_form" method="POST" action="<?php base_url() ?>/home/contact_form" data-toggle="validator" >
      <div class="modal-body">
        <div class="form-group">
          <label for="apply_full_name">Full Name:</label>
          <input type="text" name="apply_full_name" id="apply_full_name" class="form-control" placeholder="Please enter your full name*" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="apply_email">Email:</label>
            <input type="email" name="apply_email" id="apply_email" class="form-control" placeholder="Please enter your Email*" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="apply_phone">Mobile Number:</label>
            <input type="text" name="apply_phone" id="apply_phone" class="form-control" placeholder="Please enter your 10 digits valid mobile number*" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="apply_course">Select Course:</label>
            <select name="apply_course" id="apply_course" class="form-control">
              <option value="">Select course</option>
              <?php foreach(formCourses() as $formcourse): ?>
                <option value="<?= $formcourse->course_name ?>"><?= $formcourse->course_name ?></option>
              <?php endforeach; ?>
            </select>
          </div>
      </div>
      <div class="modal-footer AlgnCenter">
        <button type="submit" class="btn-success buttonApplySubmit">Apply Now</button>
      </div>
    </form>
  </div>
</div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-cookie-master/src/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/menu.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/toastr/toastr.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/fancybox/jquery.fancybox.js"></script>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
        <script type="text/javascript">AOS.init({
            duration:2000,
        })</script>
<script type="text/javascript">


$(document).ready(function(){
$('#register_form').validate({
rules: {
full_name: {
required: true,
lettersonly: true
},
email: {
required: true,
email: true,
remote:
{
url: '<?php echo base_url() ?>home/register_email_exists',
type: "post",
dataType: "json",
data:
{
email: function(){ return $("#user_email").val(); }

}
}
},
password: {
required: true,
pwcheck: true,
minlength: 8
},
confirm_password:{
required : true,
equalTo: "#password"
}
},
messages: {
email:
{
remote: 'Email Id already in use.'
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

});
<?php
if ($this->session->flashdata('successmsg')) {

?>
toastr.success('<?php echo $this->session->flashdata('successmsg') ?>')
<?php
}
?>
<?php
if ($this->session->flashdata('errormsg')) {

?>
toastr.error('<?php echo $this->session->flashdata('errormsg') ?>')
<?php
}
?>
</script>
<script type="text/javascript">
$('#applyNowForm').validate({
rules: {
apply_full_name: {
required: true,
},
apply_course: {
required: true,
},
apply_state: {
required: true,
},
apply_phone: {
required: true,
number: true,
minlength: 10,
maxlength: 10
},
}
})
function checkImage(e, t, a) {
var i = new Image();
(i.onload = t), (i.onerror = a), (i.src = e);
}
(function (e) {
e.fn.ud_modal = function (t) {
var a = this,
i = !0;
a.on("shown.bs.modal", function (e) {
i = !1;
}),
a.on("hidden.bs.modal", function (t) {
"first" == e.cookie("modal_show")
? e.cookie("modal_show", "second", { path: "/", expires: 1 })
: "second" == e.cookie("modal_show")
? e.cookie("modal_show", "third", { path: "/", expires: 1 })
: "third" == e.cookie("modal_show") && e.cookie("modal_show", "no", { path: "/", expires: 1 }),
(i = !0);
}),
null == e.cookie("modal_show") && e.cookie("modal_show", "first", { path: "/", expires: 1 }),
"no" != e.cookie("modal_show") &&
i &&
setTimeout(function () {
a.modal("show");
}, t[e.cookie("modal_show") + "_time"]);
};
})(jQuery)
$(document).ready(function () {

$("#applynowModal").on("hidden.bs.modal", function () {
var e = "http://103.47.54.105/uploads/popup_image/image.jpg";
checkImage(
e,
function () {
$("#imagePopup").find("img").attr("src", e),
setTimeout(function () {
$("#imagePopup").modal("show");
}, 5e3);
},
function () {
console.log("bad");
}
);
});
$("#applynowModal").ud_modal({ first_time: 4e3, second_time: 1e4, third_time: 2e4 }),
$(window).scroll(function () {
$(this).scrollTop() > 500 ? $(".scroll-top").removeClass("off").addClass("on") : $(".scroll-top").removeClass("on").addClass("off");
}),
$(".scroll-top").click(function (e) {
return e.preventDefault(), $("html, body").animate({ scrollTop: 0 }, "slow"), !1;
});
})

</script>
<script type="text/javascript">
// Mobile Navigation
if ($('#nav-menu-container').length) {
var $mobile_nav = $('#nav-menu-container').clone().prop({
id: 'mobile-nav'
});
$mobile_nav.find('> ul').attr({
'class': '',
'id': ''
});
$('body').append($mobile_nav);
$('#menu_container').prepend('<button type="button" id="mobile-nav-toggle"><i class="fa fa-bars"></i></button>');
$('body').append('<div id="mobile-body-overly"></div>');
$('#mobile-nav').find('.menu-has-children').prepend('<i class="fa fa-chevron-down"></i>');
$(document).on('click', '.menu-has-children i', function(e) {
$(this).next().toggleClass('menu-item-active');
$(this).nextAll('ul').eq(0).slideToggle();
$(this).toggleClass("fa-chevron-up fa-chevron-down");
});
$(document).on('click', '#mobile-nav-toggle', function(e) {
$('body').toggleClass('mobile-nav-active');
$('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
$('#mobile-body-overly').toggle();
});
$(document).click(function(e) {
var container = $("#mobile-nav, #mobile-nav-toggle");
if (!container.is(e.target) && container.has(e.target).length === 0) {
if ($('body').hasClass('mobile-nav-active')) {
$('body').removeClass('mobile-nav-active');
$('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
$('#mobile-body-overly').fadeOut();
}
}
});
} else if ($("#mobile-nav, #mobile-nav-toggle").length) {
$("#mobile-nav, #mobile-nav-toggle").hide();
}
// Smooth scroll for the menu and links with .scrollto classes
$('.nav-menu a, #mobile-nav a, .scrollto').on('click', function() {
if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
var target = $(this.hash);
if (target.length) {
var top_space = 0;
if ($('#header').length) {
top_space = $('#header').outerHeight();
if( ! $('#header').hasClass('header-fixed') ) {
top_space = top_space - 20;
}
}
$('html, body').animate({
scrollTop: target.offset().top - top_space
}, 1500, 'easeInOutExpo');
if ($(this).parents('.nav-menu').length) {
$('.nav-menu .menu-active').removeClass('menu-active');
$(this).closest('li').addClass('menu-active');
}
if ($('body').hasClass('mobile-nav-active')) {
$('body').removeClass('mobile-nav-active');
$('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
$('#mobile-body-overly').fadeOut();
}
return false;
}
}
});
</script>
</body>
</html>