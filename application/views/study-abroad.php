 <?php include 'common/header.php'; ?>
 <!--================================banner==================================-->
            <style type="text/css">
              .section {
    padding: 15px 0 0;
    margin-bottom: 15px;
}
.title.bottom-bar {
    position: relative;
}
.title {
    color: #48639e;
    text-align: center;
    font-weight: 600;
}
.title.bottom-bar::before {
    content: "";
    position: absolute;
    bottom: -15px;
    height: 4px;
    border-radius: 25px;
    width: 80px;
    background: #ff7900;
    left: 50%;
    margin-left: -40px;
}
.subtitle {
    font-size: 16px;
    width: 70%;
    margin: 30px auto 0;
}
.counselling-cards {
    margin-top: 30px;
}
.counselling-cards .card {
    border: 1px solid #eee;
    border-radius: 5px;
    padding: 25px;
    box-shadow: 0 2px 10px rgba(40,44,63,.07);
    margin-bottom: 30px;
    color: inherit;
    min-height: 260px;
    max-height: 260px;
    position: relative;
}
.counselling-cards .card, .step-card {
    transition: .3s;
    display: inline-block;
}
.counselling-cards .card-title {
    margin-top: 0;
    margin-bottom: 15px;
    line-height: 1.3;
}
.text-green {
    color: #295F2D;
}
.counselling-cards .card_icon {
    text-align: right;
}
.counselling-cards .content {
    font-size: 16px;
    margin-bottom: 15px;
}
.counselling-cards .btn-fixed {
    position: absolute;
    bottom: 15px;
}
.h3, h3 {
    font-size: 20px;
}
mark {
    background: 0 0;
    padding: 0;
}
.btn-ghost-green {
    background: #fff;
    border: 1px solid #295F2D;
    color:#295F2D;
}
.btn-ghost-green:hover {
    color: #fff;
    background: #295F2D;
}
            </style>
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
                <img class="d-block w-100" src="<?php echo base_url() ?>/assets/images/slider.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo base_url() ?>/assets/images/slider.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo base_url() ?>/assets/images/slider.jpg" alt="Third slide">
              </div>
            </div>
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
            <h1>Discover the best colleges all over the world</h1>
            <div class="search  mx-auto mt-4">
                <input type="text" onkeyup="ajaxSearch()" class="mr-3 pl-2" id="search_data" placeholder="Search with course or country" >
                

                  <div id="suggestions">

                  <div id="suggestionslist">

                  </div>

                  </div>
              </div>
          </div>
          
        </div>
      </div>

      <section class="section">
        <div class="container">
        <div class="section-header">
          <h2 class="title bottom-bar">Admission Target Free Counselling: Let Us Guide You</h2>
          <p class="subtitle text-center">Looking into Study Abroad colleges and universities as an international student can be a challenge, but it's one you can overcome! From how to look for accredited schools to what you should write about on your applications, our expert counsellors
          will help you at every step</p>
        </div>
        <div class="counselling-cards">
          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <h3 class="card-title row"><span class="col-md-8">Profile<br><mark class="text-green">Evaluation</mark></span><span class="card_icon col-md-4"></span></h3>
                <div class="content">Once you submit your application, our expert team evaluates your profile on education, work exp. &amp; objectives</div><a href="javascript:void(0)" class="btn btn-ghost-green btn-fixed open-popup-inline">REGISTER NOW</a></div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <h3 class="card-title row"><span class="col-md-8">Admission <mark class="text-green">Guidance</mark></span><span class="card_icon col-md-4"></span></h3>
                <div class="content">Our counsellors will help you in identifying the right country, college and program or arrange mentorship from existing students</div><a href="javascript:void(0)" class="btn btn-ghost-green btn-fixed open-popup-inline">GET MENTORSHIP</a></div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <h3 class="card-title row"><span class="col-md-8">Test Prep &amp; <mark class="text-green">Webinar</mark></span><span class="card_icon col-md-4"></span></h3>
                <div class="content">Get Free Tips and Tricks to crack study abroad exams like IELTS, TOEFL, SAT, GRE, GMAT. Also get cut off scores for top universities.</div><a href="javascript:void(0)" class="btn btn-ghost-green btn-fixed open-popup-inline">REGISTER FOR WEBINAR</a></div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <h3 class="card-title row"><span class="col-md-8">Application Document <mark class="text-green">&amp; Essay</mark></span><span class="card_icon col-md-4"></span></h3>
                <div class="content">Our expert team, checks every application &amp; essay before submitting. We assist you in every step while preparing this documents.</div><a href="javascript:void(0)" class="btn btn-ghost-green btn-fixed open-popup-inline">AVAIL SERVICES</a></div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <h3 class="card-title row"><span class="col-md-8">Visa &amp;<br><mark class="text-green">Interview</mark></span><span class="card_icon col-md-4"></span></h3>
                <div class="content">With Best VISA approval rates in the industry, our team guides you for the best ways to earn a study visa at your dream destination</div><a href="javascript:void(0)" class="btn btn-ghost-green btn-fixed open-popup-inline">GET INFORMATION</a></div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <h3 class="card-title row"><span class="col-md-8">Scholarships &amp;<br><mark class="text-green">Financial Aid</mark></span><span class="card_icon col-md-4"></span></h3>
                <div class="content">Our team will also guide you in planning your expenses, getting internship, education loan and scholarships</div><a href="javascript:void(0)" class="btn btn-ghost-green btn-fixed open-popup-inline">FIND SCHOLARSHIPS</a></div>
            </div>
          </div>
        </div>
      </div>
        <div class="clearfix"></div>
      </section>

     
      <!--================================Articles/Blogs==================================-->
      <div class="row">
      
        <div class="col-12 mb-2 text-center Counselling">
          <h2>Articles/Blogs</h2>
          <hr class="mx-auto">
       
        </div>
        <div class="col-1 d-none d-md-block"></div>
        <div class="col-12 col-md-10">
          <div class="row">
            <div class="col-12 col-sm-6 col-md-4 mt-4">
              <div class="card Articles_card mx-auto">
                <img class="card-img-top" src="<?php echo base_url() ?>/assets/images/blog_img.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Study in Canada- Cost, Scholarship,<br>
                    Visa, Requirements</h5>
                  <p class="card-text">Canada are numerous however, the major one
                    being the quality of education al ...</p>
                  <a href="#" style="color:#f8931f">READ MORE...</a>
                </div>
              </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mt-4">
              <div class="card mx-auto Articles_card">
                <img class="card-img-top" src="<?php echo base_url() ?>/assets/images/blog_img.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Study in Canada- Cost, Scholarship,<br>
                    Visa, Requirements</h5>
                  <p class="card-text">Canada are numerous however, the major one
                    being the quality of education al ...</p>
                  <a href="#" style="color:#f8931f">READ MORE...</a>
                </div>
              </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mt-4 ">
              <div class="card mx-auto Articles_card">
                <img class="card-img-top" src="<?php echo base_url() ?>/assets/images/blog_img.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Study in Canada- Cost, Scholarship,<br>
                    Visa, Requirements</h5>
                  <p class="card-text">Canada are numerous however, the major one
                    being the quality of education al ...</p>
                  <a href="#" style="color:#f8931f">READ MORE...</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-1 d-none d-md-block"></div>
      </div>


      <!--================================STUDY ABROADs==================================-->
      <div class="row mt-5">
       
        <div class="col-12 mt-3 mb-4 text-center Counselling">
          <h2>STUDY ABROAD</h2>
          <hr class="mx-auto"></div>


        <div class="col-1 d-none d-md-block"></div>

        
        <div class="col-12 col-lg-10 Counselling">
         <h6 style="color:#f8a03a;"><b>ESSENTIALS TO STUDY ABROAD: A COMPLETE GUIDE FOR INTERNATIONAL STUDENTS  </b></h6>
         <p>According to UNESCO, more than 3,00,000 Indian students went abroad to pursue higher studies in the year 2017. A research conducted by the Government of India indicates that the USA, United Kingdom, Australia, and Canada are the most coveted countries to pursue further education.<br>

          Out of the total number of Indian students studying abroad (2017), a whopping 69.5% decided to choose among the nations mentioned above. The total expenditure on tuition and hostel fees made by Indian students studying in foreign countries increased rapidly by 44 percent from $1.9 billion in 2013-14 to $2.8 billion in 2017-18.</p>
          
          <h6 style="color:#1936bd;"><b>Why Study Abroad?</b></h6>
          <p>
            According to the Economic Times, since 2005, the total number of international students opting to study abroad has globally risen from 28,00,000 to 41,00,000. In 2017, 50,00,000 international students were studying in foreign countries, out of which, around 3,00,000 were from India.<br>
            
            There are innumerable reasons which encourage both students and their parents to opt for global education. Some of them are discussed below:-<br>
            
            <div class="mt-3"><b class="pt-2">Globally-Renowned Education:-</b> The most significant reason for international students to study abroad is the first-class quality of education. No matter which field students decide to pursue, studying in a foreign country offers them a large number of outstanding opportunities in terms of learning, skill-building, and professional knowledge.<br></div>
            
            <div class="mt-3"><b class="pt-2">Great Career Opportunities:-</b> From a wide range of internships to working part-time, international students are exposed to unlimited opportunities and experiences which are valuable for their careers and growth. After the completion of their studies abroad, students possess a high chance of securing better and more fulfilling working opportunities.<br></div>
            
            <div class="mt-3"><b class="pt-2">Cultural Exposure:- </b>Studying overseas offers international students a lifetime opportunity to live in an entirely new country and familiarise themselves with its culture, traditions, people, lifestyles, etc.<br></div>
            
            <div class="mt-3"><b>Discover Yourself:-</b> For many students, studying abroad might be the first time when they will be living on their own. This could be their only chance to re-discover their interests and passions. Also, it involves a lot of responsibilities which can make them into a more independent and self-sufficient individual.
            Linguistics:- Students studying in foreign countries like the USA, UK, France, Sweden and Germany need to be fluent in their native languages. Knowing a foreign language is always an added benefit in resumes as well as in personal lives.</p></div>
            <div class="study_abroad text-center">
              <button class="btn " type="button">READ MORE</button>
            </div>
            <div class="col-1 d-none d-md-block"></div> 
        </div>
        <div class="col-1 d-none d-md-block"></div>
      </div>

      
     <!--================================STUDY DESTINATION==================================-->
      <div class="row mt-5 pt-4" style="background-color: #f8931f;">
        <div class="col-12 text-center STUDY_DESTINATION">
          <h2 >STUDY ABROAD</h2>
          <hr class="mx-auto">
        </div>
        <div class="col-6 col-sm-4 col-md-2 text-center  mt-5 mb-5" >
          <a href="<?php echo base_url() ?>study-in-uk">
          <img src="<?php echo base_url() ?>/assets/images/UK.png">
          <h5 class="mt-3 text-white">UK</h5></a>
        </div>
        <div class="col-6 col-sm-4 col-md-2 text-center  mt-5 mb-5">
          <a href="#">
          <img src="<?php echo base_url() ?>/assets/images/canada.png">
          <h5 class="mt-3 text-white">CANADA</h5></a>
        </div>
        <div class="col-6 col-sm-4 col-md-2 text-center  mt-5 mb-5">
          <a href="#">
          <img src="<?php echo base_url() ?>/assets/images/australia.png">
          <h5 class="mt-3 text-white">AUSTRALIA</h5></a>
        </div>
        <div class="col-6 col-sm-4 col-md-2 text-center  mt-5 mb-5">
          <a href='#'>
          <img src="<?php echo base_url() ?>/assets/images/philippines.png">
          <h5 class="mt-3 text-white">PHILIPPINES</h5></a>
        </div>
        <div class="col-6 col-sm-4 col-md-2 text-center  mt-5 mb-5">
          <a href="#">
          <img src="<?php echo base_url() ?>/assets/images/japan.png">
          <h5 class="mt-3 text-white">JAPAN</h5></a>

        </div>
        <div class="col-6 col-sm-4 col-md-2 text-center e mt-5 mb-5">
          <a href="#">
          <img src="<?php echo base_url() ?>/assets/images/russia.png">
          <h5 class="mt-3 text-white">RUSSIA</h5></a>

        </div>
      </div>


       <!--================================Course==================================-->


      <div class="row mt-5">
        <div class="col-12 mb-2 text-center Counselling">
          <h2>Exams For Study Abroad</h2>
          <hr class="mx-auto">
          </div>
        <div class="col-1 d-none d-md-block"></div>

        <div class="col-12 col-lg-10">
          <div class="row ">

            <div class="col-12 col-sm-6 col-md-4  text-center mt-3">
              <div class="border_line p-3">
                <h5>International English Language Testing<br> 
                  System [IELTS]</h5>
                  <p class="text-muted">International English Language Testing System(IELTS)
                    is an international standardized test that measures 
                   the level...
                   </p>
                   <div class="row">
                    <div class="col-6 " style="color:#1936bd;">
                      <b>IELTS REGISTRATION</b>
                    </div>
                    <div class="col-6 text-right" style="color:#f8931f;">
                      <b>read more</b>
                    </div>
                   </div>
                  </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mt-3">
              <div class="border_line p-3">
                <h5>International English Language Testing<br> 
                  System [IELTS]</h5>
                  <p class="text-muted">International English Language Testing System(IELTS)
                    is an international standardized test that measures 
                   the level...
                   </p>
                   <div class="row">
                    <div class="col-6 " style="color:#1936bd;">
                      <b>IELTS REGISTRATION</b>
                    </div>
                    <div class="col-6 text-right" style="color:#f8931f;">
                      <b>read more</b>
                    </div>
                   </div>
                  </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mt-3">
              <div class="border_line p-3">
                <h5>International English Language Testing<br> 
                  System [IELTS]</h5>
                  <p class="text-muted">International English Language Testing System(IELTS)
                    is an international standardized test that measures 
                   the level...
                   </p>
                   <div class="row">
                    <div class="col-6 " style="color:#1936bd;">
                      <b>IELTS REGISTRATION</b>
                    </div>
                    <div class="col-6 text-right" style="color:#f8931f;">
                      <b>read more</b>
                    </div>
                   </div>
                  </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mt-3">
              <div class="border_line p-3">
                <h5>International English Language Testing<br> 
                  System [IELTS]</h5>
                  <p class="text-muted">International English Language Testing System(IELTS)
                    is an international standardized test that measures 
                   the level...
                   </p>
                   <div class="row">
                    <div class="col-6 " style="color:#1936bd;">
                      <b>IELTS REGISTRATION</b>
                    </div>
                    <div class="col-6 text-right" style="color:#f8931f;">
                      <b>read more</b>
                    </div>
                   </div>
                  </div>
            </div>


            <div class="col-12 col-sm-6 col-md-4 mt-3">
              <div class="border_line p-3">
                <h5>International English Language Testing<br> 
                  System [IELTS]</h5>
                  <p class="text-muted">International English Language Testing System(IELTS)
                    is an international standardized test that measures 
                   the level...
                   </p>
                   <div class="row">
                    <div class="col-6 " style="color:#1936bd;">
                      <b>IELTS REGISTRATION</b>
                    </div>
                    <div class="col-6 text-right" style="color:#f8931f;">
                      <b>read more</b>
                    </div>
                   </div>
                  </div>
            </div>


            <div class="col-12 col-sm-6 col-md-4 mt-3">
              <div class="border_line p-3">
                <h5>International English Language Testing<br> 
                  System [IELTS]</h5>
                  <p class="text-muted">International English Language Testing System(IELTS)
                    is an international standardized test that measures 
                   the level...
                   </p>
                   <div class="row">
                    <div class="col-6 " style="color:#1936bd;">
                      <b>IELTS REGISTRATION</b>
                    </div>
                    <div class="col-6 text-right" style="color:#f8931f;">
                      <b>read more</b>
                    </div>
                   </div>
                  </div>
            </div>

          </div>
        </div>

        <div class="col-1 d-none d-md-block"></div>
      </div>


     <!--================================Course==================================-->
     <div class="row  pb-5">


      <div class="col-12 course  m-0 ">
        <h2 class=" text-center ">COURSES</h2>
        <hr class="hr-course mx-auto">
        <p class="text-center text-secondary">Explore Every Universities/Colleges in India </p>
        <p class="text-center pb-sm-5 pl-5 pr-5"><strong style="color:#1b1464">Admission Target</strong> is an all-embracing universe of Information and free consultation for students<br>
          Search among the plethora of Colleges and Universities, Explore and Analyse the space of education for the best-suited campus and decide the avenue for your education
            </p>
      </div>
    </div>   
      <!--================================Courses===================================-->
    
          <div class="container">
              <div class="row ">
                <?php foreach ($streams as $stream): ?>
                  <div class="col-3 text-center course_icon pt-4 ">
                    <?php $link = url_title($stream->degree_name, 'dash', true); ?> 
                  <a href="<?php echo base_url('abroad/'.$stream->id.'/stream/'.$link) ?>">
                  <img src="<?php echo base_url() ?>/assets/images/icons/<?php echo $stream->icon ?>">
                  <h5 class="pt-2"><?php echo $stream->degree_name ?></h5>
                  <hr class="hr-course mx-auto"></a>
                </div>
                <?php endforeach ?>
                
               </div>
    </div>
          

    
 
    
   
     <!--================================RATINGS===================================-->

      
</div>
<?php include 'common/footer.php'; ?>
<script type="text/javascript">
  $('#suggestions').hide();
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
</script>