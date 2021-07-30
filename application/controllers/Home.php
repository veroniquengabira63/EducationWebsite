<?php
class Home extends CI_Controller 
{

  public function __construct() 
  {
    parent::__construct();
    $this->load->model('home_model');
    $this->load->helper('ckeditor_helper');
     $this->load->library('CKEditor');
    $this->load->library('CKFinder');
  }

  /*===============end __construct ==========================*/

  public function index() 
  {
    $q = $this->db->get('home_setting');
    $data['streams'] = $this->home_model->getStreams();
    $data['courses'] = $this->home_model->getCourses();
    $data['home_setting'] = $q->result();
    $this->load->view('index' , $data );
  }

  /*===============end index ==========================*/
  public function colleges() 
  {
    $data['streams'] = $this->home_model->fetch_filter_type('course_degrees');
    $data['cities'] = $this->home_model->fetch_filter_type('city');
    
    $this->load->view('colleges' , $data);
  }
  public function fetch_data() 
  {
    $streams = $this->input->post('streams');
    $courses = $this->input->post('courses');
    $cities = $this->input->post('cities');
    $states = $this->input->post('states');
    $countries = $this->input->post('countries');
    $archive = $this->input->post('archive');
    $college_types = $this->input->post('college_types');
    $arpage = $this->input->post('arpage');
    if($this->input->post('id'))
      {
        $id = $this->input->post('id');
      }
    else{
      $id ='';
    }

    $this->load->library('pagination');
    $config = array();
    $config['base_url'] = '#';
    $config['total_rows'] = $this->home_model->count_all($streams , $courses , $cities , $states , $college_types , $countries , $archive , $arpage , $id);
    $config['per_page'] = 10;
    $config['uri_segment'] = 3;
    $config['use_page_numbers'] = TRUE;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
    $config['first_tag_close'] = '</span></li>';
    $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
    $config['last_tag_close'] = '</span></li>';
    $config['next_link'] = '<i class="fa fa-arrow-right"></i>';
    $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
    $config['next_tag_close'] = '</span></li>';
    $config['prev_link'] = '<i class="fa fa-arrow-left"></i>';
    $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
    $config['prev_tag_close'] = '</span></li>';
    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
    $config['cur_tag_close'] = '</li></a>';
    $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
    $config['num_tag_close'] = '</span></li>';
    $config['num_links'] = 3;

    $this->pagination->initialize($config);

    $page = $this->uri->segment(3);
    $start = ($page - 1) * $config['per_page'];
    $output = array(
      'pagination_link' => $this->pagination->create_links() ,
      'college_list' => $this->home_model->fetch_data($config['per_page'] , $start , $streams , $courses , $cities , $states  , $college_types , $countries , $archive , $arpage , $id)

     );

    echo json_encode($output);
  }

  public function autocomplete()
  {
    $search_data = $this->input->post('search_data');
    $query =  $this->home_model->get_autocomplete($search_data);
   

    echo json_encode($query);



  }

  /*===============start contact ==========================*/
  public function contact() 
  {
    
    $this->load->view('contact');
  }
  public function shows() 
  {
    
    $this->load->view('shows');
  }
  public function single_comedian() 
  {
    $name =  $this->uri->segment(2);
    $id = $this->uri->segment(3);
    $data['singles'] = $this->home_model->getSingle($id);
    $this->load->view('single-comedian' , $data);
  }
  public function single_venue() 
  {
    
    $this->load->view('single-venue');
  }
  public function venue_map() 
  {
    
    $this->load->view('venue-map');
  }
  public function single_show() 
  {
    
    $this->load->view('single-show');
  }

  /*===============end index ==========================*/

  public function logout() 
  {
    $this->session->unset_userdata('login_data');
    $this->session->set_flashdata('successmsg' , 'Logout Succesfully!!');
    redirect(base_url("login"));
  }

  /*===============end logout ==========================*/
   public function user_login() 
  {
    $this->load->view('user_login');
  }
   public function user_registration() 
    {
      $this->load->view('user_registration');
    }
   public function resend_email_verification() 
    {
      $this->load->view('resend_email_verification');
    }
    public function email_exists()
  {
    if (array_key_exists('email',$_POST))
    {
      if ( $this->home_model->email_exists2($this->input->post('email')) == TRUE )
      {
        //echo json_encode(FALSE);
        echo json_encode(true);
      }
      else
      {
        echo json_encode(false);
        //echo true;
      }
    }
  }
   public function resendEmail() 
    {
      $email =  $this->input->post('email');
      $set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $code = substr(str_shuffle($set), 0, 12);
    $user_data = array(
    'code' =>$code
    );
    
    //set up email
      $config = array(
          'protocol' => 'smtp',
          'smtp_host' => 'mail.admissiontarget.com',
          'smtp_port' => 465,
          'smtp_user' => 'info@admissiontarget.com', // change it to yours
          'smtp_pass' => 'admission!@#$%', // change it to yours
          'mailtype' => 'html',
          'charset' => 'iso-8859-1',
          'wordwrap' => TRUE
      );
      $this->db->where('email' , $email); 
      $query =  $this->db->update('users',$user_data);
       
       if($query)
       {
                  $this->db->where('email' , $email); 
           $id =  $this->db->get('users')->row()->id;
       
      $message =  "
            <html>
            <head>
              <title>Verification Code</title>
            </head>
            <body>
              <h2>Thank you for Registering.</h2>
              <p>Your Account:</p>
              <p>Email: ".$email."</p>
              <p>Password: <i>Your Choosen Password</i></p>
              <p>Please click the link below to activate your account.</p>
              <h4><a href='".base_url()."/home/activate/".$id."/".$code."'>Activate My Account</a></h4>
            </body>
            </html>
            ";
 
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('info@admissiontarget.com');
        $this->email->to($email);
         $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
        $this->email->set_header('Content-type', 'text/html');
        $this->email->subject('Signup Verification Email');
        $this->email->message($message);
 
      //sending email
        if($this->email->send()){
         $this->session->set_flashdata('successmsg', '<div class="alert alert-success">You are Register Successfully Please Check Your Email at '.$email.' For Activation Link</div>');
      redirect(base_url('home'));
        }
        else{
          $this->session->set_flashdata('successmsg', $this->email->print_debugger());
          redirect(base_url('home'));
 
        }
      }
      else
      {
           return false;
       }

    }
   
  public function validation() 
  {
    
      $email = $this->input->post('user_email');
      $password = $this->input->post('user_password');

      $pass = md5($password);
      $condition = "email =" . "'" . $email. "' AND " . "password =" . "'" . $pass . "'";
      $this->db->select('*');
      $this->db->from('users');
      $this->db->where($condition);
      $this->db->limit(1);
      $query = $this->db->get();
      
      
      if ($query->num_rows() == 1) 
      {
        $res = $query->row_array();
        if($res['user_role'] == 'admin'){
          
          $newdata = array(
            'id'  => $res['id'],
            'username'  => $res['name'],
             'profile'  => $res['profile_pic'],
            'email'     => $res['email'],
            'user_role'     => $res['user_role'],
            'logged_in' => TRUE
            );
            $this->session->set_userdata('login_data' , $newdata);
            redirect(base_url('admin'));
        }
        if($res['active'] == 1)
        {
            $newdata = array(
            'id'  => $res['id'],
            'username'  => $res['name'],
             'profile'  => $res['profile_pic'],
            'email'     => $res['email'],
            'user_role'     => $res['user_role'],
            'logged_in' => TRUE
            );
            $this->session->set_userdata('login_data' , $newdata);
            //$url = $this->session->userdata('url');
           
            $this->session->set_flashdata('successmsg' , '<div class="alert alert-success">You are Successfully Logged In</div>');
            redirect(base_url('login'));
            
        }
        elseif ($res['active'] == 2) {
          $this->session->set_flashdata('errormsg' , 'Your Account is Blocked By <b>ADMIN</b> Please Contact Admin For Unblock!!');
          redirect(base_url('home'));
        }
        else{
            $this->session->set_flashdata('errormsg' , '<div class="alert alert-danger">Your Account is Not Active Please Check Your Registered Email Address for Verification</div>');
            redirect(base_url('home'));
        }

      }
      else
      {
        $this->session->set_flashdata('errormsg' , 'Invalid UserID and Password');
        redirect(base_url('login'));
      }
 
    
  }


  /*===============end validation ==========================*/

  public function userRegister() 
  {
    $user_password =  $this->input->post('password');
    $email =  $this->input->post('email');
    $set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $code = substr(str_shuffle($set), 0, 12);
    $password= md5($user_password);
    $user_data = array(
    'name' =>$this->input->post('full_name'),
    'email' =>$this->input->post('email'),
    'code' =>$code,
    'user_role' =>'user',
    'password' =>$password ,
    'show_password' =>$user_password,
    'profile_pic' => 'profile.jpg'

    );
    
    //set up email
      $config = array(
          'protocol' => 'smtp',
          'smtp_host' => 'mail.admissiontarget.com',
          'smtp_port' => 465,
          'smtp_user' => 'info@admissiontarget.com', // change it to yours
          'smtp_pass' => 'admission!@#$%', // change it to yours
          'mailtype' => 'html',
          'charset' => 'iso-8859-1',
          'wordwrap' => TRUE
      );
      $id = $this->home_model->register_user($user_data);
      $message =  "
            <html>
            <head>
              <title>Verification Code</title>
            </head>
            <body>
              <h2>Thank you for Registering.</h2>
              <p>Your Account:</p>
              <p>Email: ".$email."</p>
              <p>Password: <i>Your Choosen Password</i></p>
              <p>Please click the link below to activate your account.</p>
              <h4><a href='".base_url()."/home/activate/".$id."/".$code."'>Activate My Account</a></h4>
            </body>
            </html>
            ";
 
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('info@admissiontarget.com');
        $this->email->to($email);
         $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
        $this->email->set_header('Content-type', 'text/html');
        $this->email->subject('Signup Verification Email');
        $this->email->message($message);
 
      //sending email
        if($this->email->send()){
         $this->session->set_flashdata('successmsg', '<div class="alert alert-success">You are Register Successfully Please Check Your Email at '.$email.' For Activation Link</div>');
      redirect(base_url('home'));
        }
        else{
          $this->session->set_flashdata('successmsg', $this->email->print_debugger());
          redirect(base_url('home'));
 
        }

  }

  /*===============end do_register ==========================*/

  public function activate(){
    $id =  $this->uri->segment(3);
    $code = $this->uri->segment(4);
 
    //fetch user details
    $user = $this->home_model->getUser($id);
 
    //if code matches
    if($user['code'] == $code){
      //update user active status
      $data['active'] = 1;
      $query = $this->home_model->activate($data, $id);
 
      if($query){
        $this->session->set_flashdata('successmsg', 'User activated successfully');
      }
      else{
        $this->session->set_flashdata('successmsg', 'Something went wrong in activating account');
      }
    }
    else{
      $this->session->set_flashdata('successmsg', 'Cannot activate account. Code didnt match');
    }
 
    redirect('home');
 
  }
  /*===============end do_register ==========================*/

  public function dashboard()
  {
    $this->load->view('dashboard/index');
  }
  public function study_abroad()
  {
    $data['streams'] = $this->home_model->getStreams();
    $data['courses'] = $this->home_model->getCourses();
    $data['title'] = 'Study in Abroad Education';
    $this->load->view('study-abroad' , $data);
  }
 
  public function distance_education()
  {
    $arpage = $this->uri->segment(1);
    $id = $this->uri->segment(2);
    if(is_numeric($id)){
       $archive = $this->uri->segment(3);
       $title = str_replace('-', ' ', $this->uri->segment(4)).' Colleges in '.$arpage;
     }
     else{
      $id = ' ';
      $archive = $this->uri->segment(2);
      $title = ' All Colleges in '.$arpage;
     }
    $data['streams'] = $this->home_model->fetch_filter_type('course_degrees' , $arpage , $archive ,$id);
    $data['courses'] = $this->home_model->fetch_filter_type('courses' , $arpage , $archive ,$id);
    $data['cities'] = $this->home_model->fetch_filter_type('city' , $arpage , $archive ,$id);
    $data['states'] = $this->home_model->fetch_filter_type('states' , $arpage , $archive ,$id);
    $data['countries'] = $this->home_model->fetch_filter_type('country' , $arpage , $archive ,$id);
    //$data['exams'] = $this->home_model->fetch_filter_type_from_courses('exams' , $arpage , $archive ,$id);
    $data['title'] = $title;
    $data['id'] = $id;
    if($archive == 'course'){
      $data['archive'] = 'courses';
    }
    elseif($archive == 'city'){
      
      $data['archive'] = 'city';
    }
    elseif($archive == 'country'){
      
      $data['archive'] = 'country';
    }
    else
    {
      $data['archive'] = 'streams';

    }
    
      $data['arpage'] = 'distance';

   
    
 
    $this->load->view('archieve' , $data);
  }
  public function archieve()
  {
    $arpage = $this->uri->segment(1);
    $id = $this->uri->segment(2);
    if(is_numeric($id)){
       $archive = $this->uri->segment(3);
       $title = str_replace('-', ' ', "India's Top Distance Learning Universities Offering ".$this->uri->segment(4));
     }
     else{
      $id = ' ';
      $archive = $this->uri->segment(2);
      $title = "India's Top Distance Learning Universities";
     }
    $data['streams'] = $this->home_model->fetch_filter_type('course_degrees' , $arpage , $archive ,$id);
    $data['courses'] = $this->home_model->fetch_filter_type('courses' , $arpage , $archive ,$id);
    $data['cities'] = $this->home_model->fetch_filter_type('city' , $arpage , $archive ,$id);
    $data['states'] = $this->home_model->fetch_filter_type('states' , $arpage , $archive ,$id);
    $data['countries'] = $this->home_model->fetch_filter_type('country' , $arpage , $archive ,$id);
    //$data['exams'] = $this->home_model->fetch_filter_type_from_courses('exams' , $arpage , $archive ,$id);
    $data['title'] = $title;
    $data['id'] = $id;
    if($archive == 'course'){
      $data['archive'] = 'courses';
    }
    elseif($archive == 'city'){
      
      $data['archive'] = 'city';
    }
    elseif($archive == 'country'){
      
      $data['archive'] = 'country';
    }
    else
    {
      $data['archive'] = 'streams';

    }
    
      $data['arpage'] = 'distance';

    
    
 
    $this->load->view('archieve' , $data);
  }


  public function study_mbbs()
  {
    
    $data['streams'] = $this->home_model->fetch_filter_type('course_degrees');
    $data['cities'] = $this->home_model->fetch_filter_type('city');
    $data['title'] = 'Study MBBS';
 
    $this->load->view('study-mbbs' , $data);
  } 

   public function study_uk()
  {
    $data['streams'] = $this->home_model->getStreams();
    $data['courses'] = $this->home_model->getCourses();
    $data['title'] = 'Study in United Kingdom';
    $this->load->view('study-in-uk' , $data);
  }

  /*===============end dashboard ==========================*/

 /*====================user dashboard======================*/ 

 public function user_dashboard()
  {
    $login_data = $this->session->userdata('login_data');
    $id = $login_data['id'];
    $this->db->where("id", $id);
    $data['user_info'] = $this->db->get('users');
    $this->load->view('user-dashboard/dashboard', $data);

  }
  public function profile_info()
  {
    $login_data = $this->session->userdata('login_data');
    $id = $login_data['id'];
    $this->db->where("id", $id);
    $data['user_info'] = $this->db->get('users');
    $data['country'] = $this->db->get('countries');
    $this->load->view('user-dashboard/edit-profilee', $data);

  }
  public function view_user()
  {
    
    $id = $this->input->post('id');
    $this->db->where("id", $id);
    $query = $this->db->get('users');

    echo json_encode($query->result());
    

  }
public function uploadProfilePicture()
  {
    $config['upload_path'] = './assets/images/user_profile';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size'] = '2000'; // max size in KB
    $this->load->library('upload', $config , 'userupload');
    $this->userupload->initialize($config);
    if(!$this->userupload->do_upload('profile_pic')){
    $errors = array('error' => $this->userupload->display_errors());
    print_r($errors);
    $profile_pic = 'profile.jpg';
    }
    else
    {
    $brodata = array('upload_data' => $this->userupload->data());
    $profile_pic = $_FILES['profile_pic']['name'];
    }
    $login_data = $this->session->userdata('login_data');
    $data = array('profile_pic' =>  $profile_pic , );
    $id = $login_data['id'];
    $this->db->where("id", $id);
    $this->db->update('users' ,$data);
    echo $profile_pic ;
    

  }
  public function updateBasicDetails()
    {
      
      $login_data = $this->session->userdata('login_data');
      $data = array(
        'name' =>  $this->input->post('fname') , 
        'dob' =>  $this->input->post('dob') , 
        'gender' =>  $this->input->post('gender') , 
        'mother_tongue' =>  $this->input->post('mother_tongue') , 
      );
      $id = $login_data['id'];
      $this->db->where("id", $id);
      $this->db->update('users' ,$data);


    }
    public function updateContactDetails()
    {
      
      $login_data = $this->session->userdata('login_data');
      $data = array(
        'mobile_no' =>  $this->input->post('mobile_no') , 
        'alternate_no' =>  $this->input->post('alternate_no') , 
        'country' =>  $this->input->post('country') , 
        'state' =>  $this->input->post('state') , 
        'city' =>  $this->input->post('city') , 
      );
      $id = $login_data['id'];
      $this->db->where("id", $id);
      $this->db->update('users' ,$data);


    }
    public function updatePswrd()
    {
      
      $login_data = $this->session->userdata('login_data');
      $data = array(
        'password' => md5($this->input->post('new_pass') ) , 
        
      );
      $id = $login_data['id'];
      $this->db->where("id", $id);
      $this->db->update('users' ,$data);


    }


  public function old_pass_check()
  {
    if (array_key_exists('old_pass',$_POST))
    {
      $check = md5($this->input->post('old_pass'));
      $this->db->where('password', $check);
      $query = $this->db->get('users');
     
      if( $query->num_rows() > 0 )
       { 
         echo json_encode(true) ; 
       } 
      else 
       { 
         echo json_encode(false) ;
       }
    }
  }
  public function register_email_exists()
  {
    if (array_key_exists('email',$_POST))
    {
      if ( $this->home_model->email_exists2($this->input->post('email')) == TRUE )
      {
        //echo json_encode(FALSE);
        echo json_encode(false);
      }
      else
      {
        echo json_encode(TRUE);
        //echo true;
      }
    }
  }

  /*===============end register_email_exists ==========================*/
public function contact_form()
 {

    

      $name = $this->input->post('apply_full_name');
      $course = $this->input->post('apply_course');
      $email = $this->input->post('apply_email');
      $phone = $this->input->post('apply_phone');

        $this->load->config('email');
        $this->load->library('email');
        
        $from = $this->config->item('smtp_user');
        $to = 'hsaifee1103@gmail.com';
        $subject = "New Inquiry";
        $message = " From:  ".$name.", \n Course: ".$course.", \n Email: ".$email.", \n Phone: ".$phone."";

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send()) 
    {
            $this->session->set_flashdata('successmsg' , '<div class="alert alert-success">Email Sent Succesfully!!</div>');
    redirect(base_url("home"));
        } 
    else 
    {
      $this->session->set_flashdata('errormsg' , '<div class="alert alert-danger">'.show_error($this->email->print_debugger()).'');
    redirect(base_url("home"));
            ;
    }



 }
  /*===================================Single College page===========================================================*/

  public function single_college()
  {
    $id = $this->uri->segment(2);
    $whr = array('id' => $id );
    $q = $this->db->get_where('colleges' , $whr );
    $data['college_data'] = $q->result();
    $data['course_details'] = $this->home_model->getCourseDeatils($id);
    $data['details_specs'] = $this->home_model->getCourseDeatilsSpecs($id);
     $data['college_post'] = $this->home_model->getCollegePost($id);
  	$this->load->view('single-uni-info' , $data);
  }
  public function college_course()
  {
    $id = $this->uri->segment(2);
    $whr = array('id' => $id );
    $q = $this->db->get_where('colleges' , $whr );
    $data['college_data'] = $q->result();
    $data['course_details'] = $this->home_model->getCourseDeatils($id);
    $data['details_specs'] = $this->home_model->getCourseDeatilsSpecs($id);
    $data['college_post'] = $this->home_model->getCollegePost($id);
    $this->load->view('college_courses' , $data);
  }
  public function college_admission()
  {
    $id = $this->uri->segment(2);
    $whr = array('id' => $id );
    $q = $this->db->get_where('colleges' , $whr );
    $data['college_data'] = $q->result();
    $data['course_details'] = $this->home_model->getCourseDeatils($id);
    $data['details_specs'] = $this->home_model->getCourseDeatilsSpecs($id);
    $this->load->view('admission' , $data);
  }
  public function college_scholarships()
  {
    $id = $this->uri->segment(2);
    $whr = array('id' => $id );
    $q = $this->db->get_where('colleges' , $whr );
    $data['college_data'] = $q->result();
    $data['course_details'] = $this->home_model->getCourseDeatils($id);
    $data['details_specs'] = $this->home_model->getCourseDeatilsSpecs($id);
    $this->load->view('scholarships' , $data);
  }
  public function college_placement()
  {
    $id = $this->uri->segment(2);
    $whr = array('id' => $id );
    $q = $this->db->get_where('colleges' , $whr );
    $data['college_data'] = $q->result();
    $data['course_details'] = $this->home_model->getCourseDeatils($id);
    $data['details_specs'] = $this->home_model->getCourseDeatilsSpecs($id);
    $this->load->view('placement' , $data);
  }
 public function college_gallery()
  {
    $id = $this->uri->segment(2);
    $whr = array('id' => $id );
    $q = $this->db->get_where('colleges' , $whr );
    $data['college_data'] = $q->result();
    $data['course_details'] = $this->home_model->getCourseDeatils($id);
    $data['details_specs'] = $this->home_model->getCourseDeatilsSpecs($id);
     $data['college_post'] = $this->home_model->getCollegePost($id);
    $this->load->view('gallery' , $data);
  }
  public function college_news()
  {
    $id = $this->uri->segment(2);
    $whr = array('id' => $id );
    $q = $this->db->get_where('colleges' , $whr );
    $data['college_data'] = $q->result();
    $data['course_details'] = $this->home_model->getCourseDeatils($id);
    $data['details_specs'] = $this->home_model->getCourseDeatilsSpecs($id);
    $data['college_post'] = $this->home_model->getCollegePost($id);
    $this->load->view('news' , $data);
  }
  public function exams_list()
  {
   
    $this->load->view('exams_list' );
  }
  public function allNews()
  {
   
    $this->load->view('allnews' );
  }
  
  public function search_college(){
        $searchText = $this->input->post('search');
        
        $this->db->SELECT('id'); 
        $this->db->like('course_name', $searchText); 
        $course =  $this->db->get('courses');
        $allcourse = [];
        foreach($course->result() as $scourse){
            
            array_push($allcourse , $scourse->id);
        }
          $allcourse = implode(',' , $allcourse) ;
          //echo $allcourse;
        // $this->db->SELECT('voter_name_en'); 
        // $this->db->like('voter_name_en', $searchText); 
        // $query = $this->db->get('public_data'); 
        if($allcourse == '')
        {
            $query = $this->db->query("SELECT * FROM colleges WHERE college_name LIKE '%$searchText%'  ");
        }
        else{
            $query = $this->db->query("SELECT * FROM colleges WHERE college_name LIKE '%$searchText%' OR courses LIKE '%$allcourse%'   ");
        }
        
        $availableResults =  $query->result_array();
        
        if(!empty($availableResults))
        {
            
            foreach($availableResults as $colleges)
            {
                $link = '/single/'.$colleges['id'].'/'.url_title($colleges['college_name'] , 'dash', true);
                $output = "<li>";
                $output .= "<a href='".$link."'>".$colleges['college_name']."</a>";
                $output .= "</li>";
                
            }
        }
        else{
            $output = "<li>";
                $output .= "No Data Found";
                $output .= "</li>";
        }

        echo $output; 
     }

  /*===================================Single College page===========================================================*/
  
}
?>