<?php include 'common/header.php'; ?>
<!-- System stylesheets  -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/index.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/body.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/admitcard.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/exam.css">

<!-- Body  -->

  <!-- Mobile filter  -->
  <div class="d-block d-md-none" id="mob-fil" onclick="openfp('fp-filter')">
    <i class="fa fa-filter mob-fil" aria-hidden="true"></i>
  </div>

  <!-- Full page filter  -->
  <div class="full-page d-md-none" id="fp-filter">
    <div class="fp-container">

      <div class="bg-green fil-top">
        <div class="row">
          <h4 class="mt-2">FILTER</h4>
          <button class="btn btn-default" onclick="closefp('fp-filter')">X</button>
        </div>
      </div>
      
      <div class="row fil">
        
        <div class="col-4">
          <!-- <div style="position: sticky; top: 0px;"> -->
            <nav class="nav flex-column">
              <a class="nav-link active" href="#id-1" data-toggle="tab">STREAM</a>
              <a class="nav-link" href="#id-2" data-toggle="tab">DEGREE</a>
              <a class="nav-link" href="#id-3" data-toggle="tab">LEVEL</a>
              <a class="nav-link" href="#id-4" data-toggle="tab">MODE</a>
            </nav>
          <!-- </div> -->
        </div>

        <div class="col-8" style="border-left: 1px solid black;">
          <div class="tab-content">

            <div class="tab-pane active" id="id-1">
              <div class="filter">
                <h5>STREAM</h5>
                
                <div class="filter-sec">
                  <ul class="list-unstyled">
                    <li>
                      <input type="checkbox" class="checkbox-circle" id="com-bank">
                      <label for="com-bank">Commerce and Banking</label>
                    </li>
                    <li>
                      <input type="checkbox" id="design">
                      <label for="design">Design</label>
                    </li>
                    <li>
                      <input type="checkbox" id="engineering">
                      <label for="engineering">Engineering</label>
                    </li>
                    <li>
                      <input type="checkbox" id="management">
                      <label for="management">Management</label>
                    </li>
                    <li>
                      <input type="checkbox" id="hotel-management">
                      <label for="hotel-management">Hotel Management</label>
                    </li>
                    <li>
                      <input type="checkbox" id="it">
                      <label for="it">Information Technology</label>
                    </li>
                    <li>
                      <input type="checkbox" id="mmc">
                      <label for="mmc">Media and Mass Communication</label>
                    </li>
                    <li>
                      <input type="checkbox" id="medical">
                      <label for="medical">Medical</label>
                    </li>
                    <li>
                      <input type="checkbox" id="arts-humanities">
                      <label for="arts-humanities">Arts and Humanities</label>
                    </li>
                    <li>
                      <input type="checkbox" id="law">
                      <label for="law">Law</label>
                    </li>
                    <li>
                      <input type="checkbox" id="science">
                      <label for="science">Science</label>
                    </li>
                    <li>
                      <input type="checkbox" id="vocational">
                      <label for="vocational">Vocational</label>
                    </li>
                    <li>
                      <input type="checkbox" id="others">
                      <label for="others">Others</label>
                    </li>
                    <li>
                      <input type="checkbox" id="pe">
                      <label for="pe">Physical Education</label>
                    </li>
                    <li>
                      <input type="checkbox" id="education">
                      <label for="education">Education</label>
                    </li>
                    <li>
                      <input type="checkbox" id="paramedical">
                      <label for="paramedical">Paramedical</label>
                    </li>
                    <li>
                      <input type="checkbox" id="agriculture">
                      <label for="agriculture">Agriculture</label>
                    </li>
                    <li>
                      <input type="checkbox" id="nursing">
                      <label for="nursing">Nursing</label>
                    </li>
                    <li>
                      <input type="checkbox" id="pharmacy">
                      <label for="pharmacy">Pharmacy</label>
                    </li>
                    <li>
                      <input type="checkbox" id="dental">
                      <label for="dental">Dental</label>
                    </li>
                    <li>
                      <input type="checkbox" id="arts">
                      <label for="arts">Performing Arts</label>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
    
            <div class="tab-pane fade" id="id-2">
              <div class="filter">
                <h5>DEGREE</h5>
                
                <div class="filter-sec">
                  <ul class="list-unstyled">
                    <li>
                      <input type="checkbox" class="checkbox-circle" id="MBA">
                      <label for="MBA">MBA</label>
                    </li>
                    <li>
                      <input type="checkbox" id="PGDM">
                      <label for="PGDM">PGDM</label>
                    </li>
                    <li>
                      <input type="checkbox" id="PGPM">
                      <label for="PGPM">PGPM</label>
                    </li>
                    <li>
                      <input type="checkbox" id="PGDBM">
                      <label for="PGDBM">PGDBM</label>
                    </li>
                    <li>
                      <input type="checkbox" id="M.Arch">
                      <label for="M.Arch">M.Arch</label>
                    </li>
                    <li>
                      <input type="checkbox" id="M.Tech">
                      <label for="M.Tech">M.Tech</label>
                    </li>
                    <li>
                      <input type="checkbox" id="BHMS">
                      <label for="BHMS">BHMS</label>
                    </li>
                    <li>
                      <input type="checkbox" id="BAMS">
                      <label for="BAMS">BAMS</label>
                    </li>
                    <li>
                      <input type="checkbox" id="B-Pharm">
                      <label for="B-Pharm">B.Pharm</label>
                    </li>
                    <li>
                      <input type="checkbox" id="MCA">
                      <label for="MCA">MCA</label>
                    </li>
                    <li>
                      <input type="checkbox" id="B.Tech">
                      <label for="B.Tech">B.Tech</label>
                    </li>
                    <li>
                      <input type="checkbox" id="BBA">
                      <label for="BBA">BBA</label>
                    </li>
                    <li>
                      <input type="checkbox" id="LLM">
                      <label for="LLM">LLM</label>
                    </li>
                    <li>
                      <input type="checkbox" id="MS">
                      <label for="MS">MS</label>
                    </li>
                    <li>
                      <input type="checkbox" id="LLB">
                      <label for="LLB">LLB</label>
                    </li>
                    <li>
                      <input type="checkbox" id="B.Com">
                      <label for="B.Com">B.Com</label>
                    </li>
                    <li>
                      <input type="checkbox" id="BHM">
                      <label for="BHM">BHM</label>
                    </li>
                    <li>
                      <input type="checkbox" id="BCA">
                      <label for="BCA">BCA</label>
                    </li>
                    <li>
                      <input type="checkbox" id="M-Pharm">
                      <label for="M-Pharm">M.Pharm</label>
                    </li>
                    <li>
                      <input type="checkbox" id="BSc">
                      <label for="BSc">BSc</label>
                    </li>
                    <li>
                      <input type="checkbox" id="BHMCT">
                      <label for="BHMCT">BHMCT</label>
                    </li>
                    <li>
                      <input type="checkbox" id="M.Com">
                      <label for="M.Com">M.Com</label>
                    </li>
                    <li>
                      <input type="checkbox" id="B.Arch">
                      <label for="B.Arch">B.Arch</label>
                    </li>
                    <li>
                      <input type="checkbox" id="B.Ed">
                      <label for="B.Ed">B.Ed</label>
                    </li>
                    <li>
                      <input type="checkbox" id="M.Ed">
                      <label for="M.Ed">M.Ed</label>
                    </li>
                    <li>
                      <input type="checkbox" id="M.Phil">
                      <label for="M.Phil">M.Phil</label>
                    </li>
                    <li>
                      <input type="checkbox" id="MA">
                      <label for="MA">MA</label>
                    </li>
                    <li>
                      <input type="checkbox" id="B.Des">
                      <label for="B.Des">B.Des</label>
                    </li>
                    <li>
                      <input type="checkbox" id="BA">
                      <label for="BA">BA</label>
                    </li>
                    <li>
                      <input type="checkbox" id="MFA">
                      <label for="MFA">MFA</label>
                    </li>
                    <li>
                      <input type="checkbox" id="MSc">
                      <label for="MSc">MSc</label>
                    </li>
                    <li>
                      <input type="checkbox" id="MPEd">
                      <label for="MPEd">MPEd</label>
                    </li>
                    <li>
                      <input type="checkbox" id="PhD">
                      <label for="PhD">PhD</label>
                    </li>
                    <li>
                      <input type="checkbox" id="BJMC">
                      <label for="BJMC">BJMC</label>
                    </li>
                    <li>
                      <input type="checkbox" id="MTM">
                      <label for="MTM">MTM</label>
                    </li>
                    <li>
                      <input type="checkbox" id="BA+LLB">
                      <label for="BA+LLB">BA+LLB</label>
                    </li>
                    <li>
                      <input type="checkbox" id="BMS">
                      <label for="BMS">BMS</label>
                    </li>
                    <li>
                      <input type="checkbox" id="BMMC">
                      <label for="BMMC">BMMC</label>
                    </li>
                    <li>
                      <input type="checkbox" id="B.Mus">
                      <label for="B.Mus">B.Mus</label>
                    </li>
                    <li>
                      <input type="checkbox" id="MHA">
                      <label for="MHA">MHA</label>
                    </li>
                    <li>
                      <input type="checkbox" id="BPEd">
                      <label for="BPEd">BPEd</label>
                    </li>
                  </ul>
                </div>
              </div>
            </div>      
            
            <div class="tab-pane fade" id="id-3">
              <div class="filter">
                <h5>LEVEL</h5>

                <div class="filter-sec">
                  <ul class="list-unstyled">
                    <li>
                      <input type="checkbox" class="checkbox-circle" id="PG">
                      <label for="PG">PG</label>
                    </li>
                    <li>
                      <input type="checkbox" class="checkbox-circle" id="UG">
                      <label for="UG">UG</label>
                    </li>
                    <li>
                      <input type="checkbox" class="checkbox-circle" id="PhD">
                      <label for="PhD">Ph.D</label>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
                  
            <div class="tab-pane fade" id="id-4">
              <div class="filter">
                <h5>MODE</h5>

                <div class="filter-sec">
                  <ul class="list-unstyled">
                    <li>
                      <input type="checkbox" class="checkbox-circle" id="Online">
                      <label for="Online">Online</label>
                    </li>
                    <li>
                      <input type="checkbox" class="checkbox-circle" id="Offline">
                      <label for="Offline">Offline</label>
                    </li>
                    <li>
                      <input type="checkbox" class="checkbox-circle" id="on-off">
                      <label for="on-off">Both Online & Offline</label>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

          </div>
        </div>
        
      </div>

      <div class="row text-center bg-green fixed-bottom fil-bot">
        <div class="col-6" style="border-right: 1px solid white;">
          <h5>Clear all</h5>
        </div>
        <div class="col-6">
          <h5>Apply now</h5>
        </div>
      </div>

    </div>
  </div>


  
  <div id="main">
      <div class="container my-5">
          <h3 class="txt-green">ENGINEERING EXAMS 2020-2021, DATES, APPLICATION FORM & ALERTS</h3>
      </div>

      <div class="container-fluid exam">
        <div class="row px-4">

          <div class="col-md-3 d-none d-md-block">
            <div class="bg-white side-sec">
              
              <div class="filter">
                <h5>STREAM <i class="fa fa-angle-up stream-up" aria-hidden="true" onclick="closefil('stream')"></i> <i class="fa fa-angle-down stream-down" aria-hidden="true" onclick="openfil('stream')"></i> </h5>
                
                <div class="filter-sec stream">
                  <ul class="list-unstyled">
                    <li>
                      <input type="checkbox" class="checkbox-circle" id="com-bank">
                      <label for="com-bank">Commerce and Banking</label>
                    </li>
                    <li>
                      <input type="checkbox" id="design">
                      <label for="design">Design</label>
                    </li>
                    <li>
                      <input type="checkbox" id="engineering">
                      <label for="engineering">Engineering</label>
                    </li>
                    <li>
                      <input type="checkbox" id="management">
                      <label for="management">Management</label>
                    </li>
                    <li>
                      <input type="checkbox" id="hotel-management">
                      <label for="hotel-management">Hotel Management</label>
                    </li>
                    <li>
                      <input type="checkbox" id="it">
                      <label for="it">Information Technology</label>
                    </li>
                    <li>
                      <input type="checkbox" id="mmc">
                      <label for="mmc">Media and Mass Communication</label>
                    </li>
                    <li>
                      <input type="checkbox" id="medical">
                      <label for="medical">Medical</label>
                    </li>
                    <li>
                      <input type="checkbox" id="arts-humanities">
                      <label for="arts-humanities">Arts and Humanities</label>
                    </li>
                    <li>
                      <input type="checkbox" id="law">
                      <label for="law">Law</label>
                    </li>
                    <li>
                      <input type="checkbox" id="science">
                      <label for="science">Science</label>
                    </li>
                    <li>
                      <input type="checkbox" id="vocational">
                      <label for="vocational">Vocational</label>
                    </li>
                    <li>
                      <input type="checkbox" id="others">
                      <label for="others">Others</label>
                    </li>
                    <li>
                      <input type="checkbox" id="pe">
                      <label for="pe">Physical Education</label>
                    </li>
                    <li>
                      <input type="checkbox" id="education">
                      <label for="education">Education</label>
                    </li>
                    <li>
                      <input type="checkbox" id="paramedical">
                      <label for="paramedical">Paramedical</label>
                    </li>
                    <li>
                      <input type="checkbox" id="agriculture">
                      <label for="agriculture">Agriculture</label>
                    </li>
                    <li>
                      <input type="checkbox" id="nursing">
                      <label for="nursing">Nursing</label>
                    </li>
                    <li>
                      <input type="checkbox" id="pharmacy">
                      <label for="pharmacy">Pharmacy</label>
                    </li>
                    <li>
                      <input type="checkbox" id="dental">
                      <label for="dental">Dental</label>
                    </li>
                    <li>
                      <input type="checkbox" id="arts">
                      <label for="arts">Performing Arts</label>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="filter">
                <h5>DEGREE <i class="fa fa-angle-up degree-up" aria-hidden="true" onclick="closefil('degree')"></i> <i class="fa fa-angle-down degree-down" aria-hidden="true" onclick="openfil('degree')"></i> </h5>
                
                <div class="filter-sec degree">
                  <ul class="list-unstyled">
                    <li>
                      <input type="checkbox" class="checkbox-circle" id="MBA">
                      <label for="MBA">MBA</label>
                    </li>
                    <li>
                      <input type="checkbox" id="PGDM">
                      <label for="PGDM">PGDM</label>
                    </li>
                    <li>
                      <input type="checkbox" id="PGPM">
                      <label for="PGPM">PGPM</label>
                    </li>
                    <li>
                      <input type="checkbox" id="PGDBM">
                      <label for="PGDBM">PGDBM</label>
                    </li>
                    <li>
                      <input type="checkbox" id="M.Arch">
                      <label for="M.Arch">M.Arch</label>
                    </li>
                    <li>
                      <input type="checkbox" id="M.Tech">
                      <label for="M.Tech">M.Tech</label>
                    </li>
                    <li>
                      <input type="checkbox" id="BHMS">
                      <label for="BHMS">BHMS</label>
                    </li>
                    <li>
                      <input type="checkbox" id="BAMS">
                      <label for="BAMS">BAMS</label>
                    </li>
                    <li>
                      <input type="checkbox" id="B-Pharm">
                      <label for="B-Pharm">B.Pharm</label>
                    </li>
                    <li>
                      <input type="checkbox" id="MCA">
                      <label for="MCA">MCA</label>
                    </li>
                    <li>
                      <input type="checkbox" id="B.Tech">
                      <label for="B.Tech">B.Tech</label>
                    </li>
                    <li>
                      <input type="checkbox" id="BBA">
                      <label for="BBA">BBA</label>
                    </li>
                    <li>
                      <input type="checkbox" id="LLM">
                      <label for="LLM">LLM</label>
                    </li>
                    <li>
                      <input type="checkbox" id="MS">
                      <label for="MS">MS</label>
                    </li>
                    <li>
                      <input type="checkbox" id="LLB">
                      <label for="LLB">LLB</label>
                    </li>
                    <li>
                      <input type="checkbox" id="B.Com">
                      <label for="B.Com">B.Com</label>
                    </li>
                    <li>
                      <input type="checkbox" id="BHM">
                      <label for="BHM">BHM</label>
                    </li>
                    <li>
                      <input type="checkbox" id="BCA">
                      <label for="BCA">BCA</label>
                    </li>
                    <li>
                      <input type="checkbox" id="M-Pharm">
                      <label for="M-Pharm">M.Pharm</label>
                    </li>
                    <li>
                      <input type="checkbox" id="BSc">
                      <label for="BSc">BSc</label>
                    </li>
                    <li>
                      <input type="checkbox" id="BHMCT">
                      <label for="BHMCT">BHMCT</label>
                    </li>
                    <li>
                      <input type="checkbox" id="M.Com">
                      <label for="M.Com">M.Com</label>
                    </li>
                    <li>
                      <input type="checkbox" id="B.Arch">
                      <label for="B.Arch">B.Arch</label>
                    </li>
                    <li>
                      <input type="checkbox" id="B.Ed">
                      <label for="B.Ed">B.Ed</label>
                    </li>
                    <li>
                      <input type="checkbox" id="M.Ed">
                      <label for="M.Ed">M.Ed</label>
                    </li>
                    <li>
                      <input type="checkbox" id="M.Phil">
                      <label for="M.Phil">M.Phil</label>
                    </li>
                    <li>
                      <input type="checkbox" id="MA">
                      <label for="MA">MA</label>
                    </li>
                    <li>
                      <input type="checkbox" id="B.Des">
                      <label for="B.Des">B.Des</label>
                    </li>
                    <li>
                      <input type="checkbox" id="BA">
                      <label for="BA">BA</label>
                    </li>
                    <li>
                      <input type="checkbox" id="MFA">
                      <label for="MFA">MFA</label>
                    </li>
                    <li>
                      <input type="checkbox" id="MSc">
                      <label for="MSc">MSc</label>
                    </li>
                    <li>
                      <input type="checkbox" id="MPEd">
                      <label for="MPEd">MPEd</label>
                    </li>
                    <li>
                      <input type="checkbox" id="PhD">
                      <label for="PhD">PhD</label>
                    </li>
                    <li>
                      <input type="checkbox" id="BJMC">
                      <label for="BJMC">BJMC</label>
                    </li>
                    <li>
                      <input type="checkbox" id="MTM">
                      <label for="MTM">MTM</label>
                    </li>
                    <li>
                      <input type="checkbox" id="BA+LLB">
                      <label for="BA+LLB">BA+LLB</label>
                    </li>
                    <li>
                      <input type="checkbox" id="BMS">
                      <label for="BMS">BMS</label>
                    </li>
                    <li>
                      <input type="checkbox" id="BMMC">
                      <label for="BMMC">BMMC</label>
                    </li>
                    <li>
                      <input type="checkbox" id="B.Mus">
                      <label for="B.Mus">B.Mus</label>
                    </li>
                    <li>
                      <input type="checkbox" id="MHA">
                      <label for="MHA">MHA</label>
                    </li>
                    <li>
                      <input type="checkbox" id="BPEd">
                      <label for="BPEd">BPEd</label>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="filter">
                <h5>LEVEL <i class="fa fa-angle-up level-up" aria-hidden="true" onclick="closefil('level')"></i> <i class="fa fa-angle-down level-down" aria-hidden="true" onclick="openfil('level')"></i> </h5>

                <div class="filter-sec level">
                  <ul class="list-unstyled">
                    <li>
                      <input type="checkbox" class="checkbox-circle" id="PG">
                      <label for="PG">PG</label>
                    </li>
                    <li>
                      <input type="checkbox" class="checkbox-circle" id="UG">
                      <label for="UG">UG</label>
                    </li>
                    <li>
                      <input type="checkbox" class="checkbox-circle" id="PhD">
                      <label for="PhD">Ph.D</label>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="filter">
                <h5>MODE <i class="fa fa-angle-up mode-up" aria-hidden="true" onclick="closefil('mode')"></i> <i class="fa fa-angle-down mode-down" aria-hidden="true" onclick="openfil('mode')"></i> </h5>

                <div class="filter-sec mode">
                  <ul class="list-unstyled">
                    <li>
                      <input type="checkbox" class="checkbox-circle" id="Online">
                      <label for="Online">Online</label>
                    </li>
                    <li>
                      <input type="checkbox" class="checkbox-circle" id="Offline">
                      <label for="Offline">Offline</label>
                    </li>
                    <li>
                      <input type="checkbox" class="checkbox-circle" id="on-off">
                      <label for="on-off">Both Online & Offline</label>
                    </li>
                  </ul>
                </div>
              </div>

            </div>
          </div>

          <div class="col-12 col-md-9">
            
            <!-- EXAM Section -->
            <div class="bg-white p-3 exam-section">
              
              <div class="row">   <!-- Image row -->
                <div class="col-12 col-md-6">
                  <div class="row ml-md-3 exam-logo">
                    <img src="<?php echo base_url() ?>assets/images/jee main.png" alt="" class="img-fluid d-none d-md-block">
                    <div>
                      <h4> <a href="<?php echo base_url() ?>/single-exam">JEE MAIN 2020</a></h4>
                      <p>Joint Entrance Exam Main</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 side-three">
                  <div class="row">
                    <p class="d-none d-md-block">03 SEP 19 - 02 OCT 19 <br>
                    <span>application form</span> </p>
                    <p class="d-none d-md-block pl-md-3">01 SEP 20 - 06 SEP 20 <br>
                      <span>examination</span></p>
                    <p class="pl-md-3">15 SEP 20 - 15 SEP 20 <br>
                      <span>result announce</span></p>
                  </div>
                </div>
              </div>

              <div class="text-content" style="border-bottom: 1px solid gray;">
                <p>"JEE Main 2020 is the national level undergraduate engineering entrance exam. This exam is acceptable for the admission in various B.Tech/B.E Programs."</p>
              </div>

              <div class="exam-link ">
                <ul class="list-unstyled m-0 mt-2">
                  <li><a href="#">APPLICATION PROCESS</a></li>
                  <li><a href="#">EXAM PATTERN</a></li>
                  <li><a href="#">PRACTICE PAPERS</a></li>
                  <li><a href="#">PREPARATION TIPS</a></li>
                  <li class="apply"><a href="#">APPLY NOW</a></li>
                </ul>
              </div>

            </div>

            <!-- EXAM Section -->
            <div class="bg-white p-3 mt-4 exam-section">
              
              <div class="row">   <!-- Image row -->
                <div class="col-12 col-md-6">
                  <div class="row ml-md-3 exam-logo">
                    <img src="<?php echo base_url() ?>assets/images/jee advanced.png" alt="" class="img-fluid d-none d-md-block">
                    <div>
                      <h4> <a href="#">JEE ADVANCED 2020</a></h4>
                      <p>Joint Entrance Exam Advanced</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 side-three">
                  <div class="row">
                    <p class="d-none d-md-block">15 SEP 20 - 19 SEP 20<br>
                      <span>application form</span></p>
                    <p class="d-none d-md-block pl-md-3">27 SEP 20<br>
                    <span>examination</span></p>
                    <p class="pl-md-3">01 SEP 20 - 06 SEP 20 <br>
                      <span>examination</span></p>
                  </div>
                </div>
              </div>

              <div class="text-content" style="border-bottom: 1px solid gray;">
                <p>"JEE Main 2020 is the national level undergraduate engineering entrance exam. This exam is acceptable for the admission in various B.Tech/B.E Programs."</p>
              </div>

              <div class="exam-link ">
                <ul class="list-unstyled m-0 mt-2">
                  <li><a href="#">APPLICATION PROCESS</a></li>
                  <li><a href="#">EXAM PATTERN</a></li>
                  <li><a href="#">PRACTICE PAPERS</a></li>
                  <li><a href="#">PREPARATION TIPS</a></li>
                  <li class="apply"><a href="#">APPLY NOW</a></li>
                </ul>
              </div>

            </div>

            <!-- EXAM Section -->
            <div class="bg-white p-3 mt-4 exam-section">
              
              <div class="row">   <!-- Image row -->
                <div class="col-12 col-md-6">
                  <div class="row ml-md-3 exam-logo">
                    <img src="<?php echo base_url() ?>assets/images/gate.png" alt="" class="img-fluid d-none d-md-block">
                    <div>
                      <h4> <a href="#">GATE 2021</a></h4>
                      <p>GRADUATE APTITUDE TEST IN ENGINEERING</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 side-three">
                  <div class="row">
                    <p class="d-none d-md-block">15 SEP 20 - 19 SEP 20<br>
                      <span>application form</span></p>
                    <p class="d-none d-md-block pl-md-3">27 SEP 20<br>
                    <span>examination</span></p>
                    <p class="pl-md-3">01 SEP 20 - 06 SEP 20 <br>
                      <span>examination</span></p>
                  </div>
                </div>
              </div>

              <div class="text-content" style="border-bottom: 1px solid gray;">
                <p>"GATE 2021 is an Entrance Test for PG Engineering Programs. GATE Exam is acceptable across the India for M.Tech and M.E. Admission"</p>
              </div>

              <div class="exam-link ">
                <ul class="list-unstyled m-0 mt-2">
                  <li><a href="#">APPLICATION PROCESS</a></li>
                  <li><a href="#">EXAM PATTERN</a></li>
                  <li><a href="#">PRACTICE PAPERS</a></li>
                  <li><a href="#">PREPARATION TIPS</a></li>
                  <li class="apply"><a href="#">APPLY NOW</a></li>
                </ul>
              </div>

            </div>

            <!-- EXAM Section -->
            <div class="bg-white p-3 mt-4 exam-section">
              
              <div class="row">   <!-- Image row -->
                <div class="col-12 col-md-6">
                  <div class="row ml-md-3 exam-logo">
                    <img src="<?php echo base_url() ?>assets/images/bitsat.png" alt="" class="img-fluid d-none d-md-block">
                    <div>
                      <h4> <a href="#">BITSAT 2020</a></h4>
                      <p>BIRLA INSTITUTE OF TECHNOLOGY AND SCIENCE ADMISSION TEST</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 side-three">
                  <div class="row">
                    <p class="d-none d-md-block">15 SEP 20 - 19 SEP 20<br>
                      <span>application form</span></p>
                    <p class="d-none d-md-block pl-md-3">27 SEP 20<br>
                    <span>examination</span></p>
                    <p class="pl-md-3">01 SEP 20 - 06 SEP 20 <br>
                      <span>examination</span></p>
                  </div>
                </div>
              </div>

              <div class="text-content" style="border-bottom: 1px solid gray;">
                <p>"BITSAT is a university level exam. BITSAT is conducted for admission in B.E, B.Pharma and M.Sc."</p>
              </div>

              <div class="exam-link ">
                <ul class="list-unstyled m-0 mt-2">
                  <li><a href="#">APPLICATION PROCESS</a></li>
                  <li><a href="#">EXAM PATTERN</a></li>
                  <li><a href="#">PRACTICE PAPERS</a></li>
                  <li><a href="#">PREPARATION TIPS</a></li>
                  <li class="apply"><a href="#">APPLY NOW</a></li>
                </ul>
              </div>

            </div>

            <!-- EXAM Section -->
            <div class="bg-white p-3 mt-4 exam-section">
              
              <div class="row">   <!-- Image row -->
                <div class="col-12 col-md-6">
                  <div class="row ml-md-3 exam-logo">
                    <img src="<?php echo base_url() ?>assets/images/keam.jpg" alt="" class="img-fluid d-none d-md-block">
                    <div>
                      <h4> <a href="#">KEAM 2020</a></h4>
                      <p>KERALA ENGINEERING AGRICULTURAL MEDICAL ENTRANCE EXAMINATION</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 side-three">
                  <div class="row">
                    <p class="d-none d-md-block">15 SEP 20 - 19 SEP 20<br>
                      <span>application form</span></p>
                    <p class="d-none d-md-block pl-md-3">27 SEP 20<br>
                    <span>examination</span></p>
                    <p class="pl-md-3">01 SEP 20 - 06 SEP 20 <br>
                      <span>examination</span></p>
                  </div>
                </div>
              </div>

              <div class="text-content" style="border-bottom: 1px solid gray;">
                <p>"KEAM is a state level exam conducted by the Commissioner of Entrance Examination (CEE), Kerala, for admission into the UG Engineering programs."</p>
              </div>

              <div class="exam-link ">
                <ul class="list-unstyled m-0 mt-2">
                  <li><a href="#">APPLICATION PROCESS</a></li>
                  <li><a href="#">EXAM PATTERN</a></li>
                  <li><a href="#">PRACTICE PAPERS</a></li>
                  <li><a href="#">PREPARATION TIPS</a></li>
                  <li class="apply"><a href="#">APPLY NOW</a></li>
                </ul>
              </div>

            </div>

            <!-- EXAM Section -->
            <div class="bg-white p-3 mt-4 exam-section">
              
              <div class="row">   <!-- Image row -->
                <div class="col-12 col-md-6">
                  <div class="row ml-md-3 exam-logo">
                    <img src="<?php echo base_url() ?>assets/images/wbjee.jpg" alt="" class="img-fluid d-none d-md-block">
                    <div>
                      <h4> <a href="#">WBJEE 2020</a></h4>
                      <p>WEST BENGAL JOINT ENTRANCE EXAMINATION</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 side-three">
                  <div class="row">
                    <p class="d-none d-md-block">15 SEP 20 - 19 SEP 20<br>
                      <span>application form</span></p>
                    <p class="d-none d-md-block pl-md-3">27 SEP 20<br>
                    <span>examination</span></p>
                    <p class="pl-md-3">01 SEP 20 - 06 SEP 20 <br>
                      <span>examination</span></p>
                  </div>
                </div>
              </div>

              <div class="text-content" style="border-bottom: 1px solid gray;">
                <p>"WBJEE exam is conducted for admissions in the undergraduate courses in engineering and pharmacy."
                </p>
              </div>

              <div class="exam-link ">
                <ul class="list-unstyled m-0 mt-2">
                  <li><a href="#">APPLICATION PROCESS</a></li>
                  <li><a href="#">EXAM PATTERN</a></li>
                  <li><a href="#">PRACTICE PAPERS</a></li>
                  <li><a href="#">PREPARATION TIPS</a></li>
                  <li class="apply"><a href="#">APPLY NOW</a></li>
                </ul>
              </div>

            </div>

            <!-- EXAM Section -->
            <div class="bg-white p-3 mt-4 exam-section">
              
              <div class="row">   <!-- Image row -->
                <div class="col-12 col-md-6">
                  <div class="row ml-md-3 exam-logo">
                    <img src="<?php echo base_url() ?>assets/images/jee advanced.png" alt="" class="img-fluid d-none d-md-block">
                    <div>
                      <h4> <a href="#">JEE ADVANCED 2020</a></h4>
                      <p>Joint Entrance Exam Advanced</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 side-three">
                  <div class="row">
                    <p class="d-none d-md-block">15 SEP 20 - 19 SEP 20<br>
                      <span>application form</span></p>
                    <p class="d-none d-md-block pl-md-3">27 SEP 20<br>
                    <span>examination</span></p>
                    <p class="pl-md-3">01 SEP 20 - 06 SEP 20 <br>
                      <span>examination</span></p>
                  </div>
                </div>
              </div>

              <div class="text-content" style="border-bottom: 1px solid gray;">
                <p>"JEE Main 2020 is the national level undergraduate engineering entrance exam. This exam is acceptable for the admission in various B.Tech/B.E Programs."</p>
              </div>

              <div class="exam-link ">
                <ul class="list-unstyled m-0 mt-2">
                  <li><a href="#">APPLICATION PROCESS</a></li>
                  <li><a href="#">EXAM PATTERN</a></li>
                  <li><a href="#">PRACTICE PAPERS</a></li>
                  <li><a href="#">PREPARATION TIPS</a></li>
                  <li class="apply"><a href="#">APPLY NOW</a></li>
                </ul>
              </div>

            </div>

            <!-- EXAM Section -->
            <div class="bg-white p-3 mt-4 exam-section">
              
              <div class="row">   <!-- Image row -->
                <div class="col-12 col-md-6">
                  <div class="row ml-md-3 exam-logo">
                    <img src="<?php echo base_url() ?>assets/images/jee advanced.png" alt="" class="img-fluid d-none d-md-block">
                    <div>
                      <h4> <a href="#">JEE ADVANCED 2020</a></h4>
                      <p>Joint Entrance Exam Advanced</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 side-three">
                  <div class="row">
                    <p class="d-none d-md-block">15 SEP 20 - 19 SEP 20<br>
                      <span>application form</span></p>
                    <p class="d-none d-md-block pl-md-3">27 SEP 20<br>
                    <span>examination</span></p>
                    <p class="pl-md-3">01 SEP 20 - 06 SEP 20 <br>
                      <span>examination</span></p>
                  </div>
                </div>
              </div>

              <div class="text-content" style="border-bottom: 1px solid gray;">
                <p>"JEE Main 2020 is the national level undergraduate engineering entrance exam. This exam is acceptable for the admission in various B.Tech/B.E Programs."</p>
              </div>

              <div class="exam-link ">
                <ul class="list-unstyled m-0 mt-2">
                  <li><a href="#">APPLICATION PROCESS</a></li>
                  <li><a href="#">EXAM PATTERN</a></li>
                  <li><a href="#">PRACTICE PAPERS</a></li>
                  <li><a href="#">PREPARATION TIPS</a></li>
                  <li class="apply"><a href="#">APPLY NOW</a></li>
                </ul>
              </div>

            </div>

            <!-- EXAM Section -->
            <div class="bg-white p-3 mt-4 exam-section">
              
              <div class="row">   <!-- Image row -->
                <div class="col-12 col-md-6">
                  <div class="row ml-md-3 exam-logo">
                    <img src="<?php echo base_url() ?>assets/images/jee advanced.png" alt="" class="img-fluid d-none d-md-block">
                    <div>
                      <h4> <a href="#">JEE ADVANCED 2020</a></h4>
                      <p>Joint Entrance Exam Advanced</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 side-three">
                  <div class="row">
                    <p class="d-none d-md-block">15 SEP 20 - 19 SEP 20<br>
                      <span>application form</span></p>
                    <p class="d-none d-md-block pl-md-3">27 SEP 20<br>
                    <span>examination</span></p>
                    <p class="pl-md-3">01 SEP 20 - 06 SEP 20 <br>
                      <span>examination</span></p>
                  </div>
                </div>
              </div>

              <div class="text-content" style="border-bottom: 1px solid gray;">
                <p>"JEE Main 2020 is the national level undergraduate engineering entrance exam. This exam is acceptable for the admission in various B.Tech/B.E Programs."</p>
              </div>

              <div class="exam-link ">
                <ul class="list-unstyled m-0 mt-2">
                  <li><a href="#">APPLICATION PROCESS</a></li>
                  <li><a href="#">EXAM PATTERN</a></li>
                  <li><a href="#">PRACTICE PAPERS</a></li>
                  <li><a href="#">PREPARATION TIPS</a></li>
                  <li class="apply"><a href="#">APPLY NOW</a></li>
                </ul>
              </div>

            </div>

            <!-- EXAM Section -->
            <div class="bg-white p-3 mt-4 exam-section">
              
              <div class="row">   <!-- Image row -->
                <div class="col-12 col-md-6">
                  <div class="row ml-md-3 exam-logo">
                    <img src="<?php echo base_url() ?>assets/images/jee advanced.png" alt="" class="img-fluid d-none d-md-block">
                    <div>
                      <h4> <a href="#">JEE ADVANCED 2020</a></h4>
                      <p>Joint Entrance Exam Advanced</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 side-three">
                  <div class="row">
                    <p class="d-none d-md-block">15 SEP 20 - 19 SEP 20<br>
                      <span>application form</span></p>
                    <p class="d-none d-md-block pl-md-3">27 SEP 20<br>
                    <span>examination</span></p>
                    <p class="pl-md-3">01 SEP 20 - 06 SEP 20 <br>
                      <span>examination</span></p>
                  </div>
                </div>
              </div>

              <div class="text-content" style="border-bottom: 1px solid gray;">
                <p>"JEE Main 2020 is the national level undergraduate engineering entrance exam. This exam is acceptable for the admission in various B.Tech/B.E Programs."</p>
              </div>

              <div class="exam-link ">
                <ul class="list-unstyled m-0 mt-2">
                  <li><a href="#">APPLICATION PROCESS</a></li>
                  <li><a href="#">EXAM PATTERN</a></li>
                  <li><a href="#">PRACTICE PAPERS</a></li>
                  <li><a href="#">PREPARATION TIPS</a></li>
                  <li class="apply"><a href="#">APPLY NOW</a></li>
                </ul>
              </div>

            </div>
              
          </div>

        </div>
      </div>
      
  </div>
<?php include 'common/footer.php'; ?>
<script  src="<?php echo base_url() ?>assets/js/index.js"></script>