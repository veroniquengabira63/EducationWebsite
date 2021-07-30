
 <!-- System stylesheets  -->
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/index.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/body.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/admitcard.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/exam.css">

<!--============ Single Page content start ============-->
 <!--Mobile-->

    <!-- Full page overlay  -->

    <!-- overview  -->
    <div class="full-page" id="fp-overview">
      <div class="fp-container">

        <div class="bg-green">
          <div class="row">
            <h4 class="mt-2">Select an option</h4>
            <button class="btn btn-default" onclick="closefp('fp-overview')">X</button>
          </div>
        </div>

        <div class="row">
          <ul class="list-unstyled">
            <li><a href="#"> Overview </a></li>
            <li><a href="#"> Jee Advanced 2021 </a></li>
          </ul>
        </div>

      </div>
    </div>


    <!-- admit  -->
    <div class="full-page" id="fp-admit">
      <div class="fp-container">

        <div class="bg-green">
          <div class="row">
            <h4 class="mt-2">Select an option</h4>
            <button class="btn btn-default" onclick="closefp('fp-admit')">X</button>
          </div>
        </div>
        
        <div class="row">
          <ul class="list-unstyled">
            <li><a href="#"> Application & Registration </a></li>
            <li><a href="#"> Admit Card</a></li>
            <li><a href="#"> Elegibility </a></li>
            <li><a href="#">Reservation</a></li>
            <li><a href="#">Exam Centers</a></li>
            <li><a href="#">Exam Dates</a></li>
          </ul>
        </div>

      </div>
    </div>


    <!-- PATTERN & SYLLABUS   -->
    <div class="full-page" id="fp-syllabus">
      <div class="fp-container">

        <div class="bg-green">
          <div class="row">
            <h4 class="mt-2">Select an option</h4>
            <button class="btn btn-default" onclick="closefp('fp-syllabus')">X</button>
          </div>
        </div>
        
        <div class="row">
          <ul class="list-unstyled">
            <li><a href="#">Pattern & Syllabus</a></li>
            <li><a href="#">Paper Aanalysis</a></li>
            <li><a href="#">Syllabus</a></li>
          </ul>
        </div>

      </div>
    </div>


    <!-- PRACTICE PAPERS  -->
    <div class="full-page" id="fp-practice">
      <div class="fp-container">

        <div class="bg-green">
          <div class="row">
            <h4 class="mt-2">Select an option</h4>
            <button class="btn btn-default" onclick="closefp('fp-practice')">X</button>
          </div>
        </div>
        
        <div class="row">
          <ul class="list-unstyled">
            <li><a href="#">Practice Papers</a></li>
            <li><a href="#">Mock test</a></li>
          </ul>
        </div>

      </div>
    </div>

    <!-- CUTOFF  -->
    <div class="full-page" id="fp-cutoff">
      <div class="fp-container">

        <div class="bg-green">
          <div class="row">
            <h4 class="mt-2">Select an option</h4>
            <button class="btn btn-default" onclick="closefp('fp-cutoff')">X</button>
          </div>
        </div>
        
        <div class="row">
          <ul class="list-unstyled">
            <li><a href="#">Cutoff</a></li>
            <li><a href="#">Expected cutoff</a></li>
          </ul>
        </div>

      </div>
    </div>

    <!-- RESULT & COUNSELLING  -->
    <div class="full-page" id="fp-result">
      <div class="fp-container">

        <div class="bg-green">
          <div class="row">
            <h4 class="mt-2">Select an option</h4>
            <button class="btn btn-default" onclick="closefp('fp-result')">X</button>
          </div>
        </div>
        
        <div class="row">
          <ul class="list-unstyled">
            <li><a href="#">Result & Counselling</a></li>
            <li><a href="#">OMR AND Answer Sheet</a></li>
            <li><a href="#">Counselling </a></li>
          </ul>
        </div>
      </div>
    </div>


<div class="scrolling-wrapper d-md-none">
  <div class="card idk">
  <button onclick="openfp('fp-overview')" class="dropdown-btn text-success active">OVERVIEW
    <i class="fa fa-caret-down ml-2 mt-1"></i>
  </button>

  </div>
  <div class="card idk">
   <button class="dropdown-btn text-success" onclick="openfp('fp-admit')">Application & Registration
    <i class="fa fa-caret-down ml-2 mt-1"></i>
  </button>
 
  </div>
  <div class="card idk">
   <button class="dropdown-btn text-success" onclick="openfp('fp-syllabus')">PATTERN & SYLLABUS 
    <i class="fa fa-caret-down ml-2 mt-1"></i>
  </button>

  </div>
  <div class="card idk">
   <button class="dropdown-btn text-success" onclick="openfp('fp-practice')">PRACTICE PAPERS
    <i class="fa fa-caret-down ml-2 mt-1"></i>
  </button>
 
  </div>
  <div class="card idk">
   <button class="dropdown-btn text-success" onclick="openfp('fp-cutoff')">CUTOFF
    <i class="fa fa-caret-down ml-2 mt-1"></i></button>
  </div>

  <div class="card idk">
   <button class="dropdown-btn text-success" onclick="openfp('fp-result')">RESULT & COUNSELLING
    <i class="fa fa-caret-down ml-2 mt-1"></i></button>
  </div>

  <div class="card idk">
  <button class="dropdown-btn text-success">NEWS</button>
  </div>

</div>

<!-- Jumbotron  -->
<div data-aos="fade-down" class="jumbotron jumbotron-fluid jumbotron-image" 
style="background-image: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .7)), url(<?php echo base_url() ?>/assets/images/study.jpg);">
  
        <div class="container ">
            <h1 class="display-5 mt-4" style="color: white;"><strong>JEE ADVANCED 2020</strong></h1>
            <p class="lead ml-4" style="color: white;"><strong>NATIONAL LEVEL ONLINE TEST</strong></p>
        </div>
     </div> 
      
   
     </div>
  
      <!--dektop topsubnav-->
      <div class="d-none d-md-block mb-4 slide-lg"> 
<div class="navbar1 mt-0" >
  <div class="dropdown1">
    <button class="dropbtn1 small active">OVERVIEW
      <i class="fa fa-caret-down ml-1 mt-1"></i>
    </button>
    <div class="dropdown-content1 ">
       <a href="#">JEE ADVANCE 2021</a>
    </div>
  </div> 
  <div class="dropdown1 ">
    <button class="dropbtn1 small">Application & Registration
      <i class="fa fa-caret-down ml-1 mt-1"></i>
     </button>
    <div class="dropdown-content1">
      <a href="#">ADMIT CARD</a>
      <a href="#">ELIGIBILITY</a>
      <a href="#">RESERVATION</a>
      <a href="#">EXAM CENTRES</a>
      <a href="#">EXAM DATES</a> 
     
    </div>
  </div> 
  <div class="dropdown1">
    <button class="dropbtn1 small">PATTERN & SYLLABUS 
      <i class="fa fa-caret-down ml-1 mt-1"></i>
    </button>
    <div class="dropdown-content1">
      <a href="#">PAPER ANALYSIS</a>
      <a href="#">SYLLABUS</a>
     
    </div>
  </div>
   <div class="dropdown1">
    <button class="dropbtn1 small">PRACTICE PAPERS
      <i class="fa fa-caret-down ml-1 mt-1"></i>
    </button>
    <div class="dropdown-content1">
      <a href="#">MOCK TEST</a>
  
    </div>
  </div> 
   <div class="dropdown1">
    <button class="dropbtn1 small">CUTOFF
      <i class="fa fa-caret-down ml-1 mt-1"></i>
    </button>
    <div class="dropdown-content1">
      <a href="#">EXPECTED CUTOFF</a>
      
    </div>
  </div> 
   <div class="dropdown1">
    <button class="dropbtn1 small ">RESULT & COUNSELLING
      <i class="fa fa-caret-down ml-1 mt-1"></i>
    </button>
    <div class="dropdown-content1">
      <a href="#">OMR SHEET AND ANSWER KEY</a>
      <a href="#">COUNSELLING</a>
       </div>
  </div> 
   <div class="dropdown1">
    <button class="dropbtn1 small">NEWS
      
    </button>
    <div class="dropdown-content1">
      </div>
  </div> 
 
     </div>
   </div>
</div>
<div class="container-fluid my-3">
  <div class="row">