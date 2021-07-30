<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home_model extends CI_Model
{
    public function register_user($user_data)
    {
       $query =  $this->db->insert('users',$user_data);
       
       if($query){
           return $this->db->insert_id();
       }
       else{
           return false;
       }
    
    }
    function email_exists2($email)
   {
     $this->db->where('email', $email);
    $query = $this->db->get('users');
     
    if( $query->num_rows() > 0 )
     { 
       return TRUE; 
     } 
    else 
     { 
       return FALSE; 
     }
   }

   public function getUser($id){
    $query = $this->db->get_where('users',array('id'=>$id));
    return $query->row_array();
  }
  public function getCourseDeatils($id){
    $query = $this->db->get_where('course_details',array('college'=>$id));
    return $query->result();
  } 
  public function getCollegePost($id){
    $query = $this->db->get_where('posts', array('colleges'=>$id));
    return $query->result();
  } 
  public function getCourseDeatilsSpecs($id){
    $query = $this->db->get_where('specs_details',array('college'=>$id));
    return $query->result();
  }
  public function activate($data, $id){
    $this->db->where('users.id', $id);
    return $this->db->update('users', $data);
  }
  public function getStreams(){
  
    $query = $this->db->get('course_degree');
    return $query->result();
  } 
  public function getCourses(){
  
    $query = $this->db->get('courses');
    return $query->result();
  } 
  public function getSingle($id){
    $where = array('users.id' => $id, 'active' => 1);
    $this->db->where($where);
    $query = $this->db->get('users');
    if ($query->num_rows() > 0) {
      return $query->result();
    }
    else
    {
      redirect(base_url('home'),'refresh');
    }
    
  }

  public function fetch_filter_type_from_courses($type , $arpage )
  {
    $this->db->select('*');
     $this->db->from('course_details');
    return $this->db->get();
  }
  public function fetch_filter_type($type , $arpage , $archive ,$id)
  {
    $this->db->select($type);
    if($arpage == 'abroad'):
    $this->db->where('college_category' , 'STUDY ABROAD');
  elseif($arpage == 'distance'):
     $this->db->where('college_category' , 'DISTANCE EDUCATION');
  elseif($arpage == 'india'):
      $this->db->where('college_category' , 'UNIVERSITY/COLLEGES IN INDIA');
    
   endif;
  //  if($archive == 'stream'):
  //   $this->db->like('course_degrees' , $id);
  // elseif($archive == 'course'):
  //    $this->db->like('courses' , $id);
  //  elseif($archive == 'city'):
  //    $this->db->like('city' , $id);
  //  elseif($archive == 'state'):
  //    $this->db->like('state' , $id);
  // elseif($archive == 'country'):
  //    $this->db->like('country' , $id);
  
  //  endif;

    $this->db->from('colleges');
    return $this->db->get();
  }

  public function make_query($streams , $courses , $cities , $states , $college_types , $countries , $archive , $arpage , $id)
  {

   
   // if($archive == 'distance')
   // {

   //  $query = "SELECT * FROM colleges WHERE status = 1 AND college_category = 'DISTANCE EDUCATION' ";
   // }
   // elseif($archive == 'courses')
   // {
   //  if ($arpage == 'abroad') {
   //    $query = "SELECT * FROM colleges WHERE status = 1 AND college_category = 'STUDY ABROAD'  AND courses  LIKE '%".$id."%'";
   //  }
   //  else{
   //    $query = "SELECT * FROM colleges WHERE status = 1 AND college_category = 'UNIVERSITY/COLLEGES IN INDIA ' AND courses   LIKE '%".$id."%'";
   //  }

    
   // }
   // elseif($archive == 'mbbs')
   // {

   //  $query = "SELECT * FROM colleges WHERE status = 1 AND college_category = 'MBBS ABROAD'";
   // }
   // elseif($archive == 'streams')
   // {
   //  if ($arpage == 'abroad') {
   //    $query = "SELECT * FROM colleges WHERE status = 1 AND college_category = 'STUDY ABROAD'  AND course_degrees  LIKE '%".$id."%'";
   //  }
   //  else{
   //    $query = "SELECT * FROM colleges WHERE status = 1 AND college_category = 'UNIVERSITY/COLLEGES IN INDIA ' AND course_degrees  LIKE '%".$id."%'";
   //  }

   
   // }
  
    if ($arpage == 'abroad') {
      $query = "SELECT * FROM colleges WHERE status = 1 AND college_category = 'STUDY ABROAD' ";
    }
    elseif($arpage == 'distance')
    {
      $query = "SELECT * FROM colleges WHERE status = 1 AND college_category = 'DISTANCE EDUCATION' ";
    }
    else{
      $query = "SELECT * FROM colleges WHERE status = 1 AND college_category = 'UNIVERSITY/COLLEGES IN INDIA'";
    }

  

    if(isset($streams) && !empty($streams)){

      $stream_filter = implode(',', $streams);
      $split_stream = explode( ',' ,$stream_filter);

      $query .= "AND ";
      $len = count($split_stream);
      for ($i=0; $i < count($split_stream) ; $i++) {
        if(count($split_stream) == 1){

          $query .= "course_degrees LIKE '%".$split_stream[$i]."%' ";
        }
        elseif($i == $len - 1){
        $query .= "course_degrees LIKE '%".$split_stream[$i]."%'";
      }
      else{
        $query .= "course_degrees LIKE '%".$split_stream[$i]."%' AND ";
      }
      }
   
    }
    if(isset($courses) && !empty($courses)){

      $course_filter = implode(',', $courses);
      $split_course = explode( ',' ,$course_filter);

      $query .= "AND ";
      $len = count($split_course);
      for ($i=0; $i < count($split_course) ; $i++) {
        if(count($split_course) == 1){

          $query .= "courses LIKE '%".$split_course[$i]."%' ";
        }
        elseif($i == $len - 1){
        $query .= "courses LIKE '%".$split_course[$i]."%'";
      }
      else{
        $query .= "courses LIKE '%".$split_course[$i]."%' AND ";
      }
      }
   
    }
    if(isset($college_types) && !empty($college_types)){

      for ($i=0; $i < count($college_types) ; $i++) {
    
        $query .= "AND college_type = '".$college_types[$i]."'";
      
      }

    }

    if (isset($cities) && !empty($cities)) {

      $city_filter = implode(' ,', $cities);
      $query .= "AND city IN(". $city_filter.")";
      
    }
    if (isset($states) && !empty($states)) {

      $city_filter = implode(' ,', $states);
      $query .= "AND states IN(". $city_filter.")";
      
    }
    if (isset($countries) && !empty($countries)) {

      $country_filter = implode(' ,', $countries);
      $query .= "AND country IN(". $country_filter.")";
      
    }
  
    return $query;

  }

  public function count_all($streams , $courses , $cities , $states , $college_types , $countries , $archive , $arpage , $id)
  {
    $query = $this->make_query($streams , $courses , $cities , $states , $college_types , $countries , $archive , $arpage , $id);

    $data = $this->db->query($query);

    return $data->num_rows();

  }
  public function fetch_data($limit , $start , $streams , $courses , $cities , $states , $college_types , $countries , $archive , $arpage , $id)
  {
    $query = $this->make_query($streams , $courses , $cities , $states  , $college_types , $countries   , $archive , $arpage , $id);
   $login_data = $this->session->userdata('login_data' );


    $query .= ' LIMIT '.$start.', '. $limit ;

    $data = $this->db->query($query);
    $output ='';

   if($data->num_rows() > 0){

    foreach ($data->result_array() as $row) {
      $link = url_title($row['college_name'] , 'dash', true);
      if (!empty($login_data)) {
        $output .= '
      <div class="col-sm-4 course_grid js-clg-snippet">
    <div class="listing-block">
        <div class="top-block">
            <img class="snippet-banner" src="'. base_url() .'/assets/images/cover/'.$row['cover_photo'].'" />
            <div class="img-overlay"></div>
           
           
            <div class="clg-name-address">
                <a href="'.base_url().'/single/'.$row['id'].'/'.$link.'" class="college_name"><h3>'.$row['college_name'].'</h3></a>
            </div>
        </div>
        <div class="course_bottom">
            <div class="clg-head">
                <div class="clg-logo">
                    <img src="'. base_url() .'/assets/images/profile/'.$row['profile_photo'].'" class="img-responsive bg-logo"/>
                </div>
                <span class="location-badge">
                    <span><i class="fa fa-map-marker"></i>
                        '.get_state($row['states']).' , '.get_city($row['city']).'
                    </span>
                </span>
            </div>
            <div class="course-price-container">
                <div class="course">
                    <a target="_blank"   href=""  class="course-name"title="M.Sc Computational Science and Engineering"> M.Sc Computational Scie..  </a>
                    <div class="course-price">$ 55K/Yr</div>
                    <div class="exam-name">GRE <span class="exam-score"> 292 </span></div>
                    <div class="exam-name more-exam">TOEFL <span class="exam-score"> 100 </span></div>
                </div>
                <div class="course">
                    <a target="_blank" href="" class="course-name" title="M.Sc Applied Computation">
                        M.Sc Applied Computatio..
                    </a>
                    <div class="course-price">$ 55K/Yr</div>
                    <div class="exam-name">GRE <span class="exam-score"> 292 </span></div>
                    <div class="exam-name more-exam">TOEFL <span class="exam-score"> 100 </span></div>
                </div>
            </div>
        </div>
        <div class="clg-links">
            <a href="" target="_blank" class="course_tab first_tab">Admission </a>
            <a href="#" target="_blank" class="course_tab first_tab" >Courses </a>
            <a href="#" target="_blank" class="course_tab first_tab" >Reviews </a>
            
        </div>
        <a class="btnapply apply-now-button listing-btn" type="button" class="btn btn-primary" data-college="'.$row['college_name'].'" data-img="'. base_url() .'/assets/images/profile/'.$row['profile_photo'].'" data-toggle="modal" data-target="#applynowModal"> Apply Now </a>
        <a class="btnbrochure apply-now-button  listing-btn"  href="">Brochure</a>
        
        <div class="clearfix"></div>
    </div>
</div>

      ';
      }
      else{
      $output .= '
       <div class="col-sm-4 course_grid js-clg-snippet">
    <div class="listing-block">
        <div class="top-block">
            <img class="snippet-banner" src="'. base_url() .'/assets/images/cover/'.$row['cover_photo'].'" />
            <div class="img-overlay"></div>
            
            <div class="clg-name-address">
                <a href="'.base_url().'/single/'.$row['id'].'/'.$link.'" class="college_name"><h3>'.$row['college_name'].'</h3></a>
            </div>
        </div>
        <div class="course_bottom">
            <div class="clg-head">
                <div class="clg-logo">
                    <img src="'. base_url() .'/assets/images/profile/'.$row['profile_photo'].'" class="img-responsive bg-logo"/>
                </div>
                <span class="location-badge">
                    <span>
                        '.get_state($row['states']).' , '.get_city($row['city']).'
                    </span>
                </span>
            </div>
            <div class="course-price-container">
                <div class="course">
                    <a    href=""  class="course-name"title="M.Sc Computational Science and Engineering"> M.Sc Computational Scie..  </a>
                    <div class="course-price">$ 55K/Yr</div>
                    <div class="exam-name">GRE <span class="exam-score"> 292 </span></div>
                    <div class="exam-name more-exam">TOEFL <span class="exam-score"> 100 </span></div>
                </div>
                <div class="course">
                    <a  href="" class="course-name" title="M.Sc Applied Computation">
                        M.Sc Applied Computatio..
                    </a>
                    <div class="course-price">$ 55K/Yr</div>
                    <div class="exam-name">GRE <span class="exam-score"> 292 </span></div>
                    <div class="exam-name more-exam">TOEFL <span class="exam-score"> 100 </span></div>
                </div>
            </div>
        </div>
        <div class="clg-links">
            <a href="" target="_blank" class="course_tab first_tab">Admission </a>
            <a href="#" target="_blank" class="course_tab first_tab" >Courses </a>
            <a href="#" target="_blank" class="course_tab first_tab" >Reviews </a>
           
        </div>
        <a class="btnapply apply-now-button listing-btn"  type="button" class="btn btn-primary" data-college="'.$row['college_name'].'" data-img="'. base_url() .'/assets/images/profile/'.$row['profile_photo'].'" data-toggle="modal" data-target="#applynowModal"> Apply Now </a>
        <a class="btnbrochure apply-now-button  listing-btn"  href="">Brochure</a>
        
        <div class="clearfix"></div>
    </div>
</div>';
      }
    }

   }
   else{

    $output .= '<h3> No data found </h3>';

   }
   return $output;

  }

 
  public function get_autocomplete($search_data)
    {
        $this->db->select('college_name');
        $this->db->like('college_name', $search_data);
        $data =  $this->db->get('colleges', 10);
        $output ='';
        if($data->num_rows() > 0){

          foreach ($data->result_array() as $row) {
            $output .= "
            <li><a href='" . base_url() . "'>" . $row['college_name'] . "</a></li>";
          }

         }
         else{

          $output .= '<h3> No data found </h3>';

         }
         return $output;
   }

}