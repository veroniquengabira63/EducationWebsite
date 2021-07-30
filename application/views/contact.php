<?php include 'common/header.php'; ?>
<style type="text/css">
        .sec-contact {
    font-size: 0;
    padding: 2% 0;
    background: url(<?php echo base_url() ?>/assets/images/contact_collegedunia.jpg) #f5f5f5 no-repeat;
    background-size: cover;
   
}
.sec-contact .sec-contact-left {
    border-radius: 4px;
    font-size: 14px;
    width: 55%;
    background: rgba(255,255,255,.9);
    margin: 0 2% 0 5%;
    display: inline-block;
    padding: 0 5% 1%;
    vertical-align: top;
}


.sec-contact h3 {
    font-size: 20px;
    font-weight: 800;
    color: #3472fe;
}
.sec-contact .sec-contact-left p {
    font-size: 15px;
    padding-left: 20px;
    font-weight: 500;
}
.sec-contact .sec-contact-left h5 {
    text-transform: uppercase;
    font-size: 16px;
    font-weight: 600;
}
.sec-contact .sec-contact-left svg {
    height: 15px;
    width: 15px;
    fill: #444;
    vertical-align: text-top;
    margin-right: 5px;
}
svg:not(:root) {
    overflow: hidden;
}
.sec-contact .sec-contact-left .social-para {
    font-size: 18px;
    color: #888;
    margin-left: 0;
}
.sec-contact .sec-contact-left hr {
    width: 70%;
    margin: 8px;
    border-color: #ddd;
}
.sec-contact .sec-contact-left .social-para .fb {
    color: #3b5998;
}
.sec-contact .sec-contact-left .social-para a {
    padding: 4px 7px;
    border-radius: 2px;
    background: #f2f2f2;
    margin-right: 10px;
}
.sec-contact .sec-contact-left a {
    font-size: 14px;
}
.sec-contact .sec-contact-left .social-para .fb svg {
    fill: #3b5998;
}
.sec-contact .sec-contact-left .social-para svg {
    fill: #3b5998;
    margin-right: 2px;
}
.sec-contact .sec-contact-left .social-para .tw {
    color: #9AE4E8;
}
.sec-contact .sec-contact-left .social-para .tw svg {
    fill: #9AE4E8;
}
.sec-contact .sec-contact-right {
    border-radius: 4px;
    vertical-align: top;
    font-size: 14px;
    background: rgba(255,255,255,.9);
    display: inline-block;
    width: 31%;
    margin: 0 2%;
    padding: 0 2% 1%;
}
.sec-contact .sec-contact-right input[type=text], .sec-contact .sec-contact-right input[type=email], .sec-contact .sec-contact-right input[type=tel], .sec-contact .sec-contact-right textarea {
    width: 100%;
    margin: 4px 0;
    display: block;
    border: 1px solid #ddd;
    color: #aaa;
    background: rgba(255,255,255,.9);
    padding: 5px 5px 5px 9px;
    font-size: 13px;
    border-radius: 2px;
}
.sec-contact .sec-contact-right textarea {
    max-width: 100%;
}
.btn-success {
    color: #fff;
    background-color: #5cb85c;
    border-color: #4cae4c;
}
.h1, .h2, .h3, h1, h2, h3 {
    margin-top: 20px;
    margin-bottom: 10px;
}
.sec-map:before {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background: 0 0;
    z-index: 9;
    content: '';
}
.sec-map {
    position: relative;
    margin-bottom: -5px;
}
@media screen and (max-width:767px)
{
    .sec-contact .sec-contact-left , .sec-contact .sec-contact-right  
    {
    
    width: 90%;
    margin:10px;
    
    
     }
    
}
    </style>
</div>
<section class="sec-contact">
    <div class="sec-contact-left">
        <h3><i class="fa fa-map-pin"></i> Contact Us</h3>
        <p>Have a question? Need Some Help? Or Just want to say hello?</p>
        <p>We would love to hear from you..</p>
        <h5><i class="fa fa-map-marker"></i> We Are Located At</h5>
        <p>EDUPEDIA <br>SCF - 7, Second Floor, Model Town, Fatehabad -  <br>Haryana, 125050</p>
        <h5><i class="fa fa-phone-alt"></i> Call us</h5>
        <p><a href="tel:+919992575654">+91 99925 75654</a></p>
        <h5><i class="fa fa-thumb-tack"></i> Drop In a Mail</h5>
        <p><a href="mailto:info@edupedia.org.in">info@edupedia.org.in</a></p>
        <hr>
        <p class="social-para">
        	Follow Us On 
        	<a class="fb" href="#"><i class="fa fa-facebook"></i> Facebook</a>
        	<a class="tw" href="#"><i class="fa fa-twitter"></i> Twitter</a></p>
    </div>
    <div class="sec-contact-right">
        <h3 class="info"><i class="fa fa-comments-o"></i> GET IN TOUCH WITH US</h3>
        <form name="contactform" id="contact_form" method="post">
        	<input type="text" placeholder="Your name" required="" id="contact_name">
        	<input type="email" placeholder="Your Email Id" required="" id="contact_email">
        	<input type="text" placeholder="Your Mobile No." pattern="[789][0-9]{9}" required="" id="contact_tel"
                minlength="10" maxlength="10">
                <textarea cols="30" rows="10" required="" name="message"></textarea>
                <input class="btn btn-success" type="submit" value="Send">
        </form>
    </div>
</section>
<section class="sec-map">
	<iframe height="450" width="100%" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6943.931745795432!2d75.44129052552296!3d29.517353928308545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391165e8a293e12f%3A0xc7401fec3725f1fa!2sModel%20Town%2C%20Fatehabad%2C%20Haryana%20125050!5e0!3m2!1sen!2sin!4v1590385219963!5m2!1sen!2sin"></iframe>
	
</section>
<div class="container-fluid">
<?php include 'common/footer.php'; ?>