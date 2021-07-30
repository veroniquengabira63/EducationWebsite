              <?php foreach ($college_data as $college): ?>
                <style type="text/css">
                #myBtn {
                display: block;
                position: fixed;
                bottom: 20px;
                right: 30px;
                z-index: 99;
                border: none;
                outline: none;
                background-color: #008938;
                color: white;
                cursor: pointer;
                padding: 10px;
                border-radius: 10px;
                font-size: 13px;
                box-shadow: 1px 3px 10px #000;
                text-shadow: 1px 3px 2px #343a40;

                }
                </style>
                <div class="col-md-3">
                  <div class="college-page-sidebar my-3">
                    <div class="apply-block sidebar-box-border mb-3">
                      <a href="#"><span><i class="fa fa-envelope"></i></span> apply now </a>
                      <?php if(!empty($login)): ?>
                      <a href="<?php echo base_url().'/assets/files/brochure/'.$college->brochure ?>" target="_blank"><span><i class="fa fa-cloud-download"></i></span> Download Brochure </a>
                      <?php else: ?>
                        <a href="<?php echo base_url().'/login' ?>" target="_blank"><span><i class="fa fa-cloud-download"></i></span> Download Brochure </a>
                    <?php endif ; ?>
                    </div>
                 <div class="notification-box sidebar-box-border mb-3">
                                  <h4 class="sidebar-title"><i class="fa fa-book"></i> Top Courses </h4>

                                  <div class="notification-snippet bg-white">
                                    <?php if(count($course_details) > 0 ): ?>
                                       <ul class="notification-box list-unstyled mb-0">
                                        
                                        <?php $i = 1; ?>
                                        <?php foreach ($course_details as $details): ?>
                                          <li class="p-3">
                                              <a class="courses-content" href="#">
                                                  <div class="courses-price mb-0">
                                                     <?php echo getCourse($details->course_name); ?>
                                                      <span class="text-green text-lowercase">₹ <?php echo $details->fees; ?></span>
                                                  </div>
                                                  <div class="courses-years">
                                                      <span class="text-green" style="white-space: nowrap;"><?php echo $details->duration; ?></span>
                                                  </div>
                                              </a>
                                          </li>
                                          <?php if ($i++ == 4) break; ?>
                                            <?php endforeach ?>
                                            
                                            
                                         
                                       </ul>

                                       <div class="w-100 text-center py-3"><a class="btn button-yellow text-uppercase">view more courses[<?php echo count($course_details); ?>]</a></div>
                                       <?php else: ?>
                                              <ul class="notification-box list-unstyled mb-0">
                                              <li class="p-3">
                                                <div class="alert alert-info">No Courses Found!</div>
                                              </li>
                                            </ul>
                                       <?php endif ?>
                                  </div>
                             </div>
                    <div class="notification-box sidebar-box-border mb-3">
                      <h4 class="sidebar-title"><i class="fa fa-newspaper-o"></i> NEWS </h4>
                      <div class="notification-snippet bg-white">
                        <ul class="notification-box list-unstyled mb-0">
                           <?php foreach ($college_post as $post): ?>
                          <li class="p-3">
                            <a href="#">
                              
                              <div class="notification-snippet-title">
                                <h5><?php echo $post->title ?></h5>
                              
                              </div>
                            </a>
                          </li>
                          <?php endforeach; ?>
                        </ul>
                      </div>
                    </div>
                   
                  </div>
                </div>
              </div>
          </div>
     </div>
</div>
 <?php if($this->session->userdata('login_data')): ?>
    <?php $login = $this->session->userdata('login_data'); ?>
      <?php if ($login['user_role'] == 'admin') : ?>
        <a id="myBtn" target="_blank" href="<?php echo base_url() ?>/admin/editCollege/<?php echo $college->id; ?>"><i class="fa fa-edit"></i> Edit College</a>
        <?php if($this->uri->segment(1) == 'gallery'): ?>
          <a id="myBtn" target="_blank" href="<?php echo base_url() ?>/admin/edit_media/<?php echo $college->id; ?>"><i class="fa fa-edit"></i> Edit Gallery</a>
          <?php elseif($this->uri->segment(1) == 'courses'): ?>
             <a id="myBtn" target="_blank" href="<?php echo base_url() ?>/admin/course_details/<?php echo $college->id; ?>"><i class="fa fa-edit"></i> Edit Courses</a>
        <?php endif; ?>
      <?php endif ; ?>
      <?php endif ; ?>
<?php endforeach ?>

