<?php
class Admin extends CI_Controller
{
public function __construct()
{
parent::__construct();
$this->load->model('admin_model');
$this->load->helper('ckeditor_helper');
$this->load->library('CKEditor');
$this->load->library('CKFinder');
}
/*===============end __construct ==========================*/
/*===============ADMIN LOGIN FORM ==========================*/
public function index()
{
if($this->session->userdata('login_data')){
$data['user_count'] = $this->admin_model->getUsercount();
$data['stream_count'] = $this->admin_model->getStreamcount();
$data['course_count'] = $this->admin_model->getCoursecount();
$data['college_count'] = $this->admin_model->getCollegecount();
$this->load->view('admin-dashboard/index' , $data );
}
else{
$this->load->view('admin-dashboard/login' );
}
}
/*===============END ADMIN LOGIN FORM ==========================*/
/*=============== ADMIN DASHBOARD ==========================*/
public function dashboard()
{
  $data['user_count'] = $this->admin_model->getUsercount();
$data['stream_count'] = $this->admin_model->getStreamcount();
$data['course_count'] = $this->admin_model->getCoursecount();
$data['college_count'] = $this->admin_model->getCollegecount();
$this->load->view('admin-dashboard/index' ,$data );
}
public function validation()
{
if($this->input->post('submit'))
{
$email=$this->input->post('username');
$password=$this->input->post('password');
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

$newdata = array(
'id'  => $res['id'],
'username'  => $res['name'].' '.$res['last_name'],
'profile'  => $res['profile_pic'],
'email'     => $res['email'],
'user_role'     => $res['user_role'],
'logged_in' => TRUE
);
$this->session->set_userdata('login_data' , $newdata);
$url = $this->session->userdata('url');
if($res['user_role'] == 'admin')
{
$this->session->set_flashdata('login_success' , 'You are Successfully Logged In');
redirect(base_url('admin/dashboard'));
}
else
{
$this->session->set_flashdata('login_success' , 'You are Successfully Logged In');
redirect(base_url('home'));
}
}
else
{
$this->session->set_flashdata('invalid' , 'Invalid UserID and Password');
}
}
redirect(base_url('admin'));
}
/*===============END ADMIN DASHBOARD ==========================*/
/*===============COURSE STREAM ==========================*/
public function add_course_stream()
{
$userdata = $this->session->userdata('login_data');
$userid = $userdata['id'];
$data['countries'] = $this->admin_model->getCountries($userid);
$this->load->view('admin-dashboard/add-course-stream' ,$data );
}
public function editStream()
{
$id = $this->uri->segment(3);
$data['degree_info'] = $this->admin_model->getDegreeinfo($id);
$this->load->view('admin-dashboard/edit-course-stream', $data );
}
public function update_course_stream()
{
if ($_FILES['stream_icon']['size'] == 0 && $_FILES['stream_icon']['error'] == 0) {
$stream_icon = $this->input->post('old_icon');
}
else{
$config['upload_path'] = './assets/images/icons';
$config['allowed_types'] = 'jpg|png|jpeg|svg';
$config['max_size'] = '2000'; // max size in KB
$config['max_width'] = '20000'; //max resolution width
$config['max_height'] = '20000';  //max resolution height
$this->load->library('upload', $config , 'iconupload');
$this->iconupload->initialize($config);
if(!$this->iconupload->do_upload('stream_icon')){
$errors = array('error' => $this->iconupload->display_errors());
$stream_icon = $this->input->post('old_icon');
print_r($errors);
}
else
{
$data = array('upload_data' => $this->iconupload->data());
$stream_icon = $_FILES['stream_icon']['name'];
}
}
$user_data = array(
'degree_name' =>$this->input->post('stream_name'),
'description' =>$this->input->post('description'),
'icon' => $stream_icon
);
$id = $this->input->post('id');
$result = $this->admin_model->update_course_degree_md($user_data , $id);
if($result == true)
{
$this->session->set_flashdata('add_success', 'Stream Updated Successfully');
redirect(base_url('admin/view_course_stream'));
}
else
{
$this->session->set_flashdata('errormsg', 'Something Wrong!!');
$this->load->view('admin/view_course_stream');
}
}
public function view_course_stream()
{
$data['streams'] = $this->admin_model->getDegrees();
$this->load->view('admin-dashboard/view_course_stream' , $data);
}
public function deleteStream()
{
$id = $this->uri->segment(3);
$query = $this->db->delete('course_degree', array('id' => $id));
if ($query) {
$this->session->set_flashdata('add_success', 'Stream Deleted Successfully');
}
$data['streams'] = $this->admin_model->getDegrees();
$this->load->view('admin-dashboard/view_course_stream' , $data );
}
public function register_course_stream()
{
$config['upload_path'] = './assets/images/icons';
$config['allowed_types'] = 'jpg|png|jpeg|svg';
$config['max_size'] = '2000'; // max size in KB
$config['max_width'] = '20000'; //max resolution width
$config['max_height'] = '20000';  //max resolution height
$this->load->library('upload', $config , 'iconupload');
$this->iconupload->initialize($config);
if(!$this->iconupload->do_upload('stream_icon')){
$errors = array('error' => $this->coverupload->display_errors());
print_r($errors);
}
else
{
$data = array('upload_data' => $this->iconupload->data());
$stream_icon = $_FILES['stream_icon']['name'];
}
$user_data = array(
'degree_name' =>$this->input->post('stream_name'),
'description' =>$this->input->post('description'),
'icon' => $stream_icon
);
$result = $this->admin_model->register_degree_md($user_data);
if($result == true)
{
$this->session->set_flashdata('add_success', 'Stream Added Successfully');
redirect(base_url('admin/add_course_stream'));
}
else
{
$this->session->set_flashdata('errormsg', 'Something Wrong!!');
$this->load->view('admin/add_course_stream');
}
}
/*=============== END COURSE STREAM ==========================*/
/*===============  COURSE ========== ==========================*/
public function add_course()
{
$data['course_degrees'] = $this->admin_model->getDegrees();
$this->load->view('admin-dashboard/add-course' ,$data );
}
public function view_course()
{
$data['courses'] = $this->admin_model->getCourses();
$this->load->view('admin-dashboard/view_course' , $data);
}
public function editCourse()
{
$id = $this->uri->segment(3);

$data['course_info'] = $this->admin_model->getCourseinfo($id);
$data['course_degrees'] = $this->admin_model->getDegrees();


$this->load->view('admin-dashboard/edit_course', $data );
}
public function update_course()
{
$user_data = array(
'course_name' =>$this->input->post('course_name'),
'category' =>$this->input->post('category'),
'course_degree' =>$this->input->post('course_degree'),
'featured' =>$this->input->post('featured')
);
$id = $this->input->post('id');
$result = $this->admin_model->update_course_md($user_data , $id);
if($result == true)
{
$this->session->set_flashdata('add_success', 'Course Updated Successfully');
redirect(base_url('admin/view_course'));
}
else
{
$this->session->set_flashdata('errormsg', 'Something Wrong!!');
$this->load->view('admin/view_course');
}
}
public function deleteCourse()
{
$id = $this->uri->segment(3);
$query = $this->db->delete('courses', array('id' => $id));
if ($query) {
$this->session->set_flashdata('add_success', 'Course Deleted Successfully');
}
$data['courses'] = $this->admin_model->getCourses();
$this->load->view('admin-dashboard/view_course' , $data );
}
public function register_course()
{
$user_data = array(
'course_name' =>$this->input->post('course_name'),
'category' =>$this->input->post('category'),
'course_degree' =>$this->input->post('course_degree'),
'featured' =>$this->input->post('featured')
);
$result = $this->admin_model->register_course_md($user_data);
if($result == true)
{
$this->session->set_flashdata('add_success', 'Course Added Successfully');
redirect(base_url('admin/add_course'));
}
else
{
$this->session->set_flashdata('errormsg', 'Something Wrong!!');
$this->load->view('admin/add_course');
}
}
/*=============== END  COURSE ========== ==========================*/
/*===============   COURSE Specialization ========== ==========================*/
public function add_specialization()
{
$this->load->view('admin-dashboard/add-course-specialization' );
}
public function register_specialization()
{
$user_data = array(
'specialization_name' =>$this->input->post('specialization_name'),

);
$result = $this->admin_model->register_specialization_md($user_data);
if($result == true)
{
$this->session->set_flashdata('add_success', 'Course Added Successfully');
redirect(base_url('admin/add_specialization'));
}
else
{
$this->session->set_flashdata('errormsg', 'Something Wrong!!');
$this->load->view('admin/add_specialization');
}
}
public function view_specialization()
{
$data['specialization'] = $this->admin_model->getSpecialization();
$this->load->view('admin-dashboard/view_specialization' , $data);
}
/*=============== end  COURSE Specialization ========== ==========================*/
public function add_college()
{
$userdata = $this->session->userdata('login_data');
$userid = $userdata['id'];
$data['countries'] = $this->admin_model->getCountries($userid);
$data['course_degrees'] = $this->admin_model->getDegrees();
$data['courses'] = $this->admin_model->getCourses();
$this->load->view('admin-dashboard/add-college' , $data );
}
public function view_college()
{
$data['colleges'] = $this->admin_model->getCollege();
$this->load->view('admin-dashboard/view_college' , $data);
}
public function edit_media()
{
$id = $this->uri->segment(3);
$data['college_info'] = $this->admin_model->getCollegeinfo($id);
$this->load->view('admin-dashboard/edit-gallery' , $data);
}
public function editCourseDetail()
{
$id = $this->uri->segment(3);
$data['course'] = $this->admin_model->getCourseDetails($id);
$data['course_specs'] = $this->admin_model->getSpecs();
$this->load->view('admin-dashboard/edit-course-details' , $data);
}
public function editCollegeSpecsDetail()
{
$id = $this->uri->segment(3);
$whr = array('id' =>  $id);
$q = $this->db->get_where('specs_details' , $whr);
$data['details'] = $q->result();
$data['course_specs'] = $this->admin_model->getSpecs();
$this->load->view('admin-dashboard/edit-collegespecs' , $data);
}
public function course_details()
{
$id = $this->uri->segment(3);
$data['details'] = $this->admin_model->getCourseDetailsBycollegeid($id);
$data['college_info'] = $this->admin_model->getCollegeinfo($id);
$this->load->view('admin-dashboard/view-course-details' , $data);
}
public function addCourseDetails()
{
$id = $this->uri->segment(3);
$data['college_info'] = $this->admin_model->getCollegeinfo($id);
$data['course_specs'] = $this->admin_model->getSpecs();

$this->load->view('admin-dashboard/add-course-details' , $data);
}
public function viewSpecs()
{
$college_id = $this->uri->segment(3);
$id = $this->uri->segment(4);
$fecth = array('college' => $college_id ,'detail_id' => $id );
$q = $this->db->get_where('specs_details' , $fecth);
$data['details'] = $q->result();
$data['details_id'] = $id;
$data['college_id'] = $college_id;
$this->load->view('admin-dashboard/view-college-specs' , $data);
}
public function addSpecs()
{
$college_id = $this->uri->segment(3);
$id = $this->uri->segment(4);
$fecth = array('id' => $id );
$q = $this->db->get_where('course_details' , $fecth);
$data['details_data'] = $q->result();
$data['college_id'] = $college_id;
$data['course_specs'] = $this->admin_model->getSpecs();

$this->load->view('admin-dashboard/add-college-specs' , $data);
}
public function registerCourseDetails()
{
$id = $this->input->post('college');
$user_data = array(
'course_name' =>$this->input->post('course_name'),
'college' =>$this->input->post('college'),
'fees' =>$this->input->post('fees'),
'exams' =>implode(", ", $this->input->post('exams')),
'eligibility' =>$this->input->post('eligibility'),
'course_type' =>$this->input->post('course_type'),
'type_of_course' =>$this->input->post('type_of_course'),
'place' =>$this->input->post('place'),
'duration' =>$this->input->post('duration'),
);
$result = $this->admin_model->register_details_md($user_data);
if($result == true)
{
$this->session->set_flashdata('add_success', 'Course Details Added Successfully');
redirect(base_url('admin/course_details/'.$id.''));
}
else
{
$this->session->set_flashdata('errormsg', 'Something Wrong!!');
$this->load->view('admin/course_details/'.$id.'');
}
}
public function registerCollegeSpecs()
{
$college_id = $this->input->post('college');
$details_id = $this->input->post('detail_id');
$user_data = array(
'name' =>$this->input->post('course_name'),
'college' =>$this->input->post('college'),
'detail_id' =>$this->input->post('detail_id'),
'specialization' =>$this->input->post('specialization'),
'fee' =>$this->input->post('fee'),
'duration' =>$this->input->post('duration'),
);
$result = $this->db->insert('specs_details', $user_data);
if($result == true)
{
$this->session->set_flashdata('add_success', 'Course Details Added Successfully');
redirect(base_url('admin/viewSpecs/'.$college_id.'/'.$details_id));
}
else
{
$this->session->set_flashdata('errormsg', 'Something Wrong!!');
edirect(base_url('admin/viewSpecs/'.$college_id.'/'.$details_id));
}
}
public function updateCourseDetails()
{
$id = $this->input->post('detail_id');
$coll_id = $this->input->post('college');
$user_data = array(
'fees' =>$this->input->post('fees'),
'exams' => implode(", ", $this->input->post('exams')),
'eligibility' =>$this->input->post('eligibility'),
'course_type' =>$this->input->post('course_type'),
'type_of_course' =>$this->input->post('type_of_course'),
'place' =>$this->input->post('place'),
'duration' =>$this->input->post('duration'),
);
$result = $this->admin_model->update_details_md($user_data , $id);
if($result == true)
{
$this->session->set_flashdata('add_success', 'Course Details Update Successfully');
redirect(base_url('admin/course_details/'.$coll_id.''));
}
else
{
$this->session->set_flashdata('errormsg', 'Something Wrong!!');
$this->load->view('admin/course_details/'.$coll_id.'');
}
}
public function UpdateCollegeSpecs()
{
$id = $this->input->post('main_id');
$college_id = $this->input->post('college');
$details_id = $this->input->post('detail_id');
$user_data = array(
'fee' =>$this->input->post('fee'),
'duration' =>$this->input->post('duration'),
);
$this->db->where('id' , $id);
$result = $this->db->update('specs_details' , $user_data );
if($result == true)
{
$this->session->set_flashdata('add_success', 'Course Details Update Successfully');
redirect(base_url('admin/viewSpecs/'.$college_id.'/'.$details_id));
}
else
{
$this->session->set_flashdata('errormsg', 'Something Wrong!!');
redirect(base_url('viewSpecs/'.$college_id.'/'.$details_id));
}
}

public function deleteCollege()
{
$id = $this->uri->segment(3);
$query = $this->db->delete('colleges', array('id' => $id));
if ($query) {
$this->session->set_flashdata('add_success', 'College Deleted Successfully');
}
$data['colleges'] = $this->admin_model->getCollege();
$this->load->view('admin-dashboard/view_college' , $data );
}
public function deleteDetail()
{
$id = $this->uri->segment(3);
$query = $this->db->delete('course_details', array('id' => $id));
if ($query) {
$this->session->set_flashdata('add_success', 'Details Deleted Successfully');
}
}
public function deleteCollegeSpecs()
{
$id = $this->uri->segment(3);
$query = $this->db->delete('specs_details', array('id' => $id));
if ($query) {
$this->session->set_flashdata('add_success', 'Details Deleted Successfully');
}
$data['colleges'] = $this->admin_model->getCollege();
$this->load->view('admin-dashboard/view_college' , $data );
}
public function getAjaxCourses(){
$stream_id = $this->input->post('sid');

if($stream_id)
{
for ($i=0; $i < count($stream_id) ; $i++) {
$id[] = $stream_id[$i];
}
$query = $this->admin_model->get_ajax_course($id);
echo json_encode ($query);
}
else{
echo 'error';
}
}
public function editCollege()
{
$id = $this->uri->segment(3);

$data['college_info'] = $this->admin_model->getCollegeinfo($id);
$data['course_degrees'] = $this->admin_model->getDegrees();
$data['courses'] = $this->admin_model->getCourses();
$data['countries'] = $this->admin_model->getCountries();
$this->load->view('admin-dashboard/edit-college', $data );
}
public function register_college()
{
$config['upload_path'] = './assets/files/brochure';
$config['allowed_types'] = 'pdf';
$config['max_size'] = '2000'; // max size in KB
$this->load->library('upload', $config , 'broupload');
$this->broupload->initialize($config);
if(!$this->broupload->do_upload('brochure')){
$errors = array('error' => $this->broupload->display_errors());
print_r($errors);
}
else
{
$brodata = array('upload_data' => $this->broupload->data());
$brochure = $_FILES['brochure']['name'];
}
/*=================end brochure==========================*/
$config['upload_path'] = './assets/images/profile';
$config['allowed_types'] = 'jpg|png|jpeg';
$config['max_size'] = '2000'; // max size in KB
$config['max_width'] = '20000'; //max resolution width
$config['max_height'] = '20000';  //max resolution height
$this->load->library('upload', $config , 'profileupload');
$this->profileupload->initialize($config);
if(!$this->profileupload->do_upload('college_profile')){
$errors = array('error' => $this->coverupload->display_errors());
print_r($errors);
}
else
{
$prodata = array('upload_data' => $this->profileupload->data());
$profile = $_FILES['college_profile']['name'];
}
/*====================End Profile Upload---===========================*/
$config['upload_path'] = './assets/images/cover';
$config['allowed_types'] = 'jpg|png|jpeg';
$config['max_size'] = '2000'; // max size in KB
$config['max_width'] = '20000'; //max resolution width
$config['max_height'] = '20000';  //max resolution height
// load CI libarary called upload

$this->load->library('upload', $config , 'coverupload');
$this->coverupload->initialize($config);

if(!$this->coverupload->do_upload('college_cover')){
$errors1 = array('error' => $this->coverupload->display_errors());
print_r($errors1);
}
else
{
$codata = array('upload_data' => $this->coverupload->data());
$cover = $_FILES['college_cover']['name'];
}
/*===============end upload cover==================*/
// Count total files
$countfiles = count($_FILES['gallery']['name']);

// Looping all files
for($i=0;$i<$countfiles;$i++){

if(!empty($_FILES['gallery']['name'][$i])){

// Define new $_FILES array - $_FILES['file']
$_FILES['file']['name'] = $_FILES['gallery']['name'][$i];
$_FILES['file']['type'] = $_FILES['gallery']['type'][$i];
$_FILES['file']['tmp_name'] = $_FILES['gallery']['tmp_name'][$i];
$_FILES['file']['error'] = $_FILES['gallery']['error'][$i];
$_FILES['file']['size'] = $_FILES['gallery']['size'][$i];
// Set preference
$config['upload_path'] = './assets/images/gallery';
$config['allowed_types'] = 'jpg|jpeg|png|gif|JFIF';
$config['max_size'] = '5000'; // max_size in kb
$config['file_name'] = $_FILES['gallery']['name'][$i];

//Load upload library
$this->load->library('upload',$config , 'galleryupload');
$this->galleryupload->initialize($config);

// File upload
if($this->galleryupload->do_upload('file')){
// Get data about the file
$uploadData = $this->galleryupload->data();
$filename = $uploadData['file_name'];
// Initialize array
$gallery[] = $filename;
}
}
}

$user_data = array(
'college_name' =>$this->input->post('college_name'),
'course_degrees' => implode(", ",$this->input->post('course_degree')),
'courses' => implode(", ",$this->input->post('courses')),
'country' =>$this->input->post('college_country'),
'states' =>$this->input->post('college_state'),
'city' =>$this->input->post('college_city'),
'street' =>$this->input->post('college_street'),
'zipcode' =>$this->input->post('college_zipcode'),
'phone' =>$this->input->post('college_phone'),
'email' =>$this->input->post('college_email'),
'website' =>$this->input->post('college_website'),
'eshtablished' =>$this->input->post('eshatblished'),
'institute_type' =>$this->input->post('institute_type'),
'college_type' =>$this->input->post('college_type'),
'featured' =>$this->input->post('featured'),
'college_category' =>$this->input->post('category'),
'fees_per_year' =>$this->input->post('college_Fees'),
'description' =>$this->input->post('description'),
'facilities' => implode(", ",$this->input->post('facilities')),
'affiliated_by' => implode(", ",$this->input->post('affiliated_by')),
'scholarship' =>$this->input->post('scholarship'),
'news_articles' =>$this->input->post('news_article'),
'placement' =>$this->input->post('placement'),
'faq' =>$this->input->post('faq'),
'profile_photo' =>$profile,
'cover_photo' =>$cover,
'brochure' =>$brochure,
'gallery' =>implode(",",$gallery),
'added_by' =>$this->input->post('user_id'),
);
$result = $this->admin_model->registerCollege($user_data );
if($result == true)
{
$this->session->set_flashdata('successmsg', 'You Data Inserted Successfully ');
redirect(base_url('admin/add_college'));
}
else
{
$this->session->set_flashdata('errormsg', 'Something Wrong!!');
redirect(base_url('admin/add_college'));
}
}
public function update_college()
{
if ($_FILES['brochure']['size'] == 0) {
$brochure = $this->input->post('brochure');

}
else{
$config['upload_path'] = './assets/files/brochure';
$config['allowed_types'] = 'pdf';
$config['max_size'] = '2000'; // max size in KB
$this->load->library('upload', $config , 'broupload');
$this->broupload->initialize($config);
if(!$this->broupload->do_upload('brochure')){
$errors = array('error' => $this->broupload->display_errors());
$this->session->set_flashdata('errormsg', 'Error !! Please Upload Only Pdf File');
print_r($errors);
$brochure = $this->input->post('brochure');
}
else
{
$brodata = array('upload_data' => $this->broupload->data());
$brochure = $_FILES['brochure']['name'];
}
}
/*====================End Brochure Upload---===========================*/
if (empty($_FILES['college_profile'])) {
$profile = $this->input->post('profile');

}
else{
$config['upload_path'] = './assets/images/profile';
$config['allowed_types'] = 'jpg|png|jpeg';
$config['max_size'] = '2000'; // max size in KB
$config['max_width'] = '20000'; //max resolution width
$config['max_height'] = '20000';  //max resolution height
$this->load->library('upload', $config , 'profileupload');
$this->profileupload->initialize($config);
if(!$this->profileupload->do_upload('college_profile')){
$errors = array('error' => $this->profileupload->display_errors());
print_r($errors);
$profile = $this->input->post('profile');
}
else
{
$data = array('upload_data' => $this->profileupload->data());
$profile = $_FILES['college_profile']['name'];
}
}
/*====================End Profile Upload---===========================*/
if (empty($_FILES['college_cover'])) {
$cover = $this->input->post('cover');
}
else{
$temp = explode(".", $_FILES["college_cover"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
$config['upload_path'] = './assets/images/cover';
$config['allowed_types'] = 'jpg|png|jpeg';
$config['max_size'] = '2000'; // max size in KB
$config['max_width'] = '20000'; //max resolution width
$config['max_height'] = '20000';
//max resolution height
$config['file_name'] = $newfilename;  //max resolution height
// load CI libarary called upload

$this->load->library('upload', $config , 'coverupload');
$this->coverupload->initialize($config);

if(!$this->coverupload->do_upload('college_cover')){
$errors1 = array('error' => $this->coverupload->display_errors());
print_r($errors1);
$cover = $this->input->post('cover');
}
else
{
$data = array('upload_data' => $this->coverupload->data());
$cover = $newfilename ;
}
}
/*===============end upload cover==================*/
$user_data = array(
'college_name' =>$this->input->post('college_name'),
'course_degrees' => implode(", ",$this->input->post('course_degree')),
'courses' => implode(", ",$this->input->post('courses')),
'country' =>$this->input->post('college_country'),
'states' =>$this->input->post('college_state'),
'city' =>$this->input->post('college_city'),
'street' =>$this->input->post('college_street'),
'zipcode' =>$this->input->post('college_zipcode'),
'phone' =>$this->input->post('college_phone'),
'email' =>$this->input->post('college_email'),
'website' =>$this->input->post('college_website'),
'eshtablished' =>$this->input->post('eshatblished'),
'institute_type' =>$this->input->post('institute_type'),
'college_type' =>$this->input->post('college_type'),
'featured' =>$this->input->post('featured'),
'college_category' =>$this->input->post('category'),
'fees_per_year' =>$this->input->post('college_Fees'),
'description' =>$this->input->post('description'),
'facilities' => implode(", ",$this->input->post('facilities')),
'affiliated_by' => implode(", ",$this->input->post('affiliated_by')),
'scholarship' =>$this->input->post('scholarship'),
'news_articles' =>$this->input->post('news_article'),
'placement' =>$this->input->post('placement'),
'faq' =>$this->input->post('faq'),
'profile_photo' =>$profile,
'cover_photo' =>$cover,
'brochure' =>$brochure,
'gallery' =>$newgallery
);
$id = $this->input->post('college_id');
$result = $this->admin_model->updateCollege($user_data , $id );
if($result == true)
{
$this->session->set_flashdata('successmsg', 'College Updated Successfully ');
redirect(base_url('admin/view_college'));
}
else
{
$this->session->set_flashdata('errormsg', 'Something Wrong!!');
redirect(base_url('admin/view_college'));
}
}
public function update_media()
{
if (empty($_FILES['gallery'])) {
$newgallery = '';
}
else{
// Count total files
$countfiles = count($_FILES['gallery']['name']);

// Looping all files
for($i=0;$i<$countfiles;$i++){

if(!empty($_FILES['gallery']['name'][$i])){

// Define new $_FILES array - $_FILES['file']
$_FILES['file']['name'] = $_FILES['gallery']['name'][$i];
$_FILES['file']['type'] = $_FILES['gallery']['type'][$i];
$_FILES['file']['tmp_name'] = $_FILES['gallery']['tmp_name'][$i];
$_FILES['file']['error'] = $_FILES['gallery']['error'][$i];
$_FILES['file']['size'] = $_FILES['gallery']['size'][$i];
// Set preference
$config['upload_path'] = './assets/images/gallery';
$config['allowed_types'] = 'jpg|jpeg|png|gif|JFIF';
$config['max_size'] = '5000'; // max_size in kb
$config['file_name'] = $_FILES['gallery']['name'][$i];

//Load upload library
$this->load->library('upload',$config , 'galleryupload');
$this->galleryupload->initialize($config);

// File upload
if($this->galleryupload->do_upload('file')){
// Get data about the file
$uploadData = $this->galleryupload->data();
$filename = $uploadData['file_name'];
// Initialize array
$gallery[] = $filename;
$newgallery = implode(",", $gallery);
}
}
}
}
$nmedia = implode(",",$this->input->post('media'));
if (!empty($newgallery)) {
if (empty($nmedia)) {
$nmedia = $newgallery;
}
else{
$nmedia = $nmedia.','.$newgallery;
}
}
$user_data = array(
'gallery' => $nmedia
);
$id = $this->input->post('college_id');
$result = $this->admin_model->updateCollege($user_data , $id );
if($result == true)
{
$this->session->set_flashdata('successmsg', 'Media Updated Successfully ');
redirect(base_url('admin/view_college'));
}
else
{
$this->session->set_flashdata('errormsg', 'Something Wrong!!');
redirect(base_url('admin/view_college'));
}
}
/*=====================view user======================================*/
public function view_users()
{
$data['users'] = $this->admin_model->getUsers();
$this->load->view('admin-dashboard/view-users', $data);
}
public function blockUser()
{
$id = $this->uri->segment(3);
$this->db->where('id' , $id);
$query = $this->db->update('users', array('active' =>'2'));
if ($query) {
$this->session->set_flashdata('add_success', 'User Blocked Successfully');
}
$data['users'] = $this->admin_model->getUsers();
$this->load->view('admin-dashboard/view-users' , $data );
}
public function unblockUser()
{
$id = $this->uri->segment(3);
$this->db->where('id' , $id);
$query = $this->db->update('users', array('active' =>'1'));
if ($query) {
$this->session->set_flashdata('add_success', 'User Unblocked Successfully');
}
$data['users'] = $this->admin_model->getUsers();
$this->load->view('admin-dashboard/view-users' , $data );
}
/*=====================view user======================================*/
/*=====================POsts categories======================================*/
public function add_categories()
{
$userdata = $this->session->userdata('login_data');
$data['userid'] = $userdata['id'];
$this->load->view('admin-dashboard/add-categories' , $data );
}
public function view_categories()
{
$data['categories'] = $this->admin_model->getCategories();
$this->load->view('admin-dashboard/view_categories' , $data );
}
public function editCategory()
{
$id = $this->uri->segment(3);
$data['cat_info'] = $this->admin_model->getCatinfo($id);
$this->load->view('admin-dashboard/edit_category', $data );
}
public function deleteCategory()
{
$id = $this->uri->segment(3);
$query = $this->db->delete('categories', array('id' => $id));
if ($query) {
$this->session->set_flashdata('add_success', 'Categories Deleted Successfully');
}
redirect(base_url('admin/view_categories'));
}
public function update_categories()
{
$user_data = array(
'title' =>$this->input->post('category_name'),
);
$id = $this->input->post('cat_id');
$this->db->where('id' , $id);
$result = $this->db->update('categories' , $user_data );
if($result == true)
{
$this->session->set_flashdata('add_success', 'Categories Updated Successfully');
redirect(base_url('admin/view_categories'));
}
else
{
$this->session->set_flashdata('errormsg', 'Something Wrong!!');
$this->load->view('admin/view_categories');
}
}
public function register_categories()
{
$title = array('title' =>  $this->input->post('category_name') );
$query = $this->db->insert('categories' , $title);
if ($query)
{
$this->session->set_flashdata('successmsg', 'Media Updated Successfully ');
redirect(base_url('admin/view_categories'));
}
else
{
$this->session->set_flashdata('errormsg', 'Something Wrong!!');
redirect(base_url('admin/view_categories'));
}
}
/*=====================POsts categories======================================*/
/*=====================POstss======================================*/
public function add_post()
{
$userdata = $this->session->userdata('login_data');
$data['userid'] = $userdata['id'];
$data['categories'] = $this->admin_model->getCategories();
$data['colleges'] = $this->admin_model->getCollege();
$this->load->view('admin-dashboard/add-post' , $data );
}
public function view_post()
{
$data['posts'] = $this->admin_model->getPosts();
$this->load->view('admin-dashboard/view_post' , $data );
}
public function editPost()
{
$id = $this->uri->segment(3);
$data['post_info'] = $this->admin_model->getPostinfo($id);
$data['categories'] = $this->admin_model->getCategories();
$this->load->view('admin-dashboard/edit-post', $data );
}
public function deletePost()
{
$id = $this->uri->segment(3);
$query = $this->db->delete('posts', array('id' => $id));
if ($query) {
$this->session->set_flashdata('add_success', 'Post Deleted Successfully');
}
redirect(base_url('admin/view_post'));
}
public function updatePost()
{
if ($_FILES['featured_image']['size'] == 0 && $_FILES['featured_image']['error'] == 0) {
$featured_image = $this->input->post('old_image');
}
else{
$config['upload_path'] = './assets/images/post_images';
$config['allowed_types'] = 'jpg|png|jpeg|svg';
$config['max_size'] = '2000'; // max size in KB
$config['max_width'] = '20000'; //max resolution width
$config['max_height'] = '20000';  //max resolution height
$this->load->library('upload', $config , 'postimage');
$this->postimage->initialize($config);
if(!$this->postimage->do_upload('featured_image')){
$errors = array('error' => $this->postimage->display_errors());
print_r($errors);
$featured_image = $this->input->post('old_image');
}
else
{
$data = array('upload_data' => $this->postimage->data());
$featured_image = $_FILES['featured_image']['name'];
}
}
$user_data = array(
'title' =>$this->input->post('title'),
'description' =>$this->input->post('description'),
'category' =>$this->input->post('category'),
'colleges' =>$this->input->post('college'),
'featured_image' => $featured_image
);
$id = $this->input->post('post_id');
$result = $this->admin_model->update_post_md($user_data , $id);
if($result == true)
{
$this->session->set_flashdata('add_success', 'Post Updated Successfully');
redirect(base_url('admin/view_post'));
}
else
{
$this->session->set_flashdata('errormsg', 'Something Wrong!!');
$this->load->view('admin/view_post');
}
}
public function registerPost()
{
$config['upload_path'] = './assets/images/post_images';
$config['allowed_types'] = 'jpg|png|jpeg|svg';
$config['max_size'] = '2000'; // max size in KB
$config['max_width'] = '20000'; //max resolution width
$config['max_height'] = '20000';  //max resolution height
$this->load->library('upload', $config , 'postupload');
$this->postupload->initialize($config);
if(!$this->postupload->do_upload('featured_image')){
$errors = array('error' => $this->postupload->display_errors());
print_r($errors);
}
else
{
$data = array('upload_data' => $this->postupload->data());
$featured_image = $_FILES['featured_image']['name'];
}
$user_data = array(
'title' =>$this->input->post('title'),
'description' =>$this->input->post('description'),
'category' =>$this->input->post('category'),
'colleges' =>$this->input->post('college'),
'added_by' =>$this->input->post('userid'),
'featured_image' => $featured_image
);
$result = $this->admin_model->registerPost_md($user_data);
if($result == true)
{
$this->session->set_flashdata('add_success', 'Post Added Successfully');
redirect(base_url('admin/add_post'));
}
else
{
$this->session->set_flashdata('errormsg', 'Something Wrong!!');
$this->load->view('admin/add_post');
}
}
/*=====================POstss======================================*/
/*=============== edit-profile ==========================*/
public function edit_profile()
{
$userdata = $this->session->userdata('login_data');
$userid = $userdata['id'];
$data['user_info'] = $this->admin_model->getUserinfo($userid);
$this->load->view('admin-dashboard/edit_profile', $data );
}

/*===============end edit-profile ==========================*/
/*===============end event-add ==========================*/
public function search_city(){
$city = $this->input->post('city');
$query = $this->admin_model->get_city($city);
echo json_encode ($query);
}
public function getStates(){
$country_id = $this->input->post('cid');
if($country_id)
{
$query = $this->admin_model->get_states($country_id);
echo json_encode ($query);
}
else{
echo 'error';
}
}
public function getCities(){
$state_id = $this->input->post('sid');
if($state_id)
{
$query = $this->admin_model->get_city($state_id);
echo json_encode ($query);
}
else{
echo 'error';
}
}
public function search_venue()
{
$venue = $this->input->post('venue_key');
if($venue)
{
$query = $this->admin_model->get_venue($venue);
echo json_encode ($query);
}
else{
echo 'error';
}
}
public function search_admin()
{
$admin = $this->input->post('admin_key');
if($admin)
{
$query = $this->admin_model->get_admin($admin);
echo json_encode ($query);
}
else{
echo 'error';
}
}
public function updateUser()
{
$config['upload_path'] = './assets/images/profile';
$config['allowed_types'] = 'gif|jpg|png|jpeg';
$config['max_size'] = '2048000'; // max size in KB
$config['max_width'] = '20000'; //max resolution width
$config['max_height'] = '20000';  //max resolution height
// load CI libarary called upload
$this->load->library('upload', $config);
// body of if clause will be executed when image uploading is failed
if(!$this->upload->do_upload('profile_pic')){
$errors = array('error' => $this->upload->display_errors());
// This image is uploaded by deafult if the selected image in not uploaded
$image = $this->input->post('old_pic');
}
// body of else clause will be executed when image uploading is succeeded
else{
$data = array('upload_data' => $this->upload->data());
$image = $_FILES['profile_pic']['name'];


}
$user_data = array(
'name' =>$this->input->post('first_name'),
'last_name' =>$this->input->post('last_name'),
'comedy_style' =>implode(", ",$this->input->post('comedy_style')),
'bio' =>$this->input->post('bio'),
'youtube_url' =>$this->input->post('youtube_url'),
'facebook_url' =>$this->input->post('facebook_url'),
'instagram_url' =>$this->input->post('instagram_url'),
'twitter_url' =>$this->input->post('twitter_url'),
'website' =>$this->input->post('website'),
'profile_pic' => $image
);
$userid = $this->input->post('user_id');
$result = $this->admin_model->updateUserinfo($user_data ,$userid);
if($result == true)
{
$condition = "id =" . "'" . $userid. "'";
$this->db->select('*');
$this->db->from('users');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();
if ($query->num_rows() == 1)
{
$res = $query->row_array();
$newdata = array(
'id'  => $res['id'],
'username'  => $res['name'].' '.$res['last_name'],
'profile'  => $res['profile_pic'],
'email'     => $res['email'],
'user_role'     => $res['user_role'],
'logged_in' => TRUE
);
$this->session->unset_userdata('login_data');
$this->session->set_userdata('login_data' , $newdata);
$this->session->set_flashdata('successmsg', 'You Data Updated Successfully ');
redirect(base_url('admin'));
}
else
{
$this->session->set_flashdata('errormsg', 'Something Wrong!!');
redirect(base_url('admin'));
}
}
}
public function getVenues()
{
$id = $this->input->post('id1');
$data = $this->admin_model->getVenues($id);
echo $data;
}
public function getadmin()
{
$id = $this->input->post('id1');
$data = $this->admin_model->getadmin($id);
echo $data;
}
public function viewInquiry()
{
	$q = $this->db->get('inquiry_form');
	$data['inquiry_details'] = $q->result();
	$this->load->view('admin-dashboard/view_inquiry', $data);
}
public function export_csv(){ 
	// file name 
	$filename = 'inquiry_'.date('Ymd').'.csv'; 
	header("Content-Description: File Transfer"); 
	header("Content-Disposition: attachment; filename=$filename"); 
	header("Content-Type: application/csv; ");
   // get data 
	$q = $this->db->get('inquiry_form');
	$inquiryData = $q->result_array();

	// file creation 
	$file = fopen('php://output','w');
	$header = array("id","Name","Mobile No","Course" , "States" , "Date Of Enquiry"); 
	fputcsv($file, $header);
	foreach ($inquiryData as $key=>$line){ 
		fputcsv($file,$line); 
	}
	fclose($file); 
	exit; 
	}

public function deleteInquiry()
{
	$id = $this->uri->segment(3);
	$query = $this->db->delete('inquiry_form', array('id' => $id));
	if ($query) {
	$this->session->set_flashdata('add_success', 'Inquiry Deleted Successfully');
	}
	$q = $this->db->get('inquiry_form');
	$data['inquiry_details'] = $q->result();
	$this->load->view('admin-dashboard/view_inquiry' , $data );
}
public function homesetting()
{
	$q = $this->db->get('home_setting');
	$g = $this->db->get('colleges');
	$h = $this->db->get('courses');
	$data['home_setting'] = $q->result();
	$data['colleges'] = $g->result();
	$data['courses'] = $h->result();
	$this->load->view('admin-dashboard/home_setting', $data);
}
public function updatehomesetting()
{
    //print_r($this->input->post('top_colleges'));die();
	$top_colleges = implode(',' , $this->input->post('top_colleges'));
	$top_courses = implode(',' , $this->input->post('top_courses'));
	//echo $top_colleges; die();
	$this->db->update('home_setting' ,array('top_colleges' => $top_colleges ,'top_courses' => $top_courses  ));
	redirect(base_url().'admin/homesetting');
}
}
?>