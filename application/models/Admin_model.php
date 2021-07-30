<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_Model
{
public function register_degree_md($user_data)
{
  $query =  $this->db->insert('course_degree',$user_data);
if($query){
return true;
}
else{
return false;
}
}
public function register_course_md($user_data)
{
$query =  $this->db->insert('courses',$user_data);

if($query){
return true;
}
else{
return false;
}
}
public function register_specialization_md($user_data)
{
$query =  $this->db->insert('specialization',$user_data);

if($query){
return true;
}
else{
return false;
}
}
public function register_details_md($user_data)
{
$query =  $this->db->insert('course_details',$user_data);
if($query){
return true;
}
else{
return false;
}
}
public function getCountries()
{
  $query = $this->db->query("SELECT * FROM countries");
return $query->result();
}
public function getDegrees()
{
$query = $this->db->query("SELECT * FROM course_degree");
return $query->result();
}
public function getSpecs()
{
$query = $this->db->query("SELECT * FROM specialization");
return $query->result();
}
public function getCourses()
{
$query = $this->db->query("SELECT * FROM courses");
return $query->result();
}
public function getSpecialization()
{
$query = $this->db->query("SELECT * FROM specialization");
return $query->result();
}
public function getCollege()
{
$query = $this->db->query("SELECT * FROM colleges");
return $query->result();
}
public function getCourseinfo($id)
{
$query = $this->db->query("SELECT * FROM courses where id = $id");
return $query->result();
}
public function getCollegeinfo($id)
{
$query = $this->db->query("SELECT * FROM colleges where id = $id");
return $query->result();
}
public function getCatinfo($id)
{
$query = $this->db->query("SELECT * FROM categories where id = $id");
return $query->result();
}
public function getPostinfo($id)
{
$query = $this->db->query("SELECT * FROM posts where id = $id");
return $query->result();
}
public function getCourseDetails($id)
{
$query = $this->db->query("SELECT * FROM course_details where id = $id");
return $query->result();
}
public function getCourseDetailsBycollegeid($id)
{
$query = $this->db->query("SELECT * FROM course_details where college = $id");
return $query->result();
}
public function getDegreeinfo($id)
{
$query = $this->db->query("SELECT * FROM course_degree where id = $id");
return $query->result();
}

public function get_states($country_id)
{
  $query = $this->db->query("SELECT * FROM states where country_id = '$country_id'");
return $query->result_array();
}
public function get_ajax_course($stream_id)
{
$id = implode(',', $stream_id);
$query = $this->db->query("SELECT * FROM courses where course_degree IN ($id)");
return $query->result_array();
}
public function get_city($state)
{
  $query = $this->db->query("SELECT * FROM cities where state_id = '$state' ");
return $query->result_array();
}
public function get_venue($venue)
{
  $query = $this->db->query("SELECT * FROM venues where venue_name like '%$venue%' ");
return $query->result();
}
public function get_artist($artist)
{
$query = $this->db->query("SELECT * FROM users where user_role = 'comedian' AND name like '%$artist%' ");
return $query->result();
}
public function getUserinfo($userid)
{
$query = $this->db->query("SELECT * FROM users where id = '$userid'");
return $query->result();
}
public function getComedystyle()
{
$query = $this->db->query("SELECT * FROM comedy_style ");
return $query->result();
}
public function getVenues($id)
{
$query = $this->db->query("SELECT * FROM venues where id ='$id'");
$res =  $query->row_array();
return $res['venue_name'];
}
public function getArtist($id)
{
$query = $this->db->query("SELECT * FROM users where id ='$id'");
$res =  $query->row_array();
return $res['name'].' '.$res['last_name'];
}
public function updateUserinfo($user_data ,$user_id)
{
$this->db->where('id',$user_id);
$query =  $this->db->update('users',$user_data);
if($query){
return true;
}
else{
return false;
}
}
public function updateCollege($user_data ,$coll_id)
{
$this->db->where('id',$coll_id);
$query =  $this->db->update('colleges',$user_data);
if($query){
return true;
}
else{
return false;
}
}
public function update_details_md($user_data ,$id)
{
$this->db->where('id',$id);
$query =  $this->db->update('course_details ',$user_data);
if($query){
return true ;
}
else{
return false;
}
}
public function update_post_md($user_data ,$id)
{
$this->db->where('id',$id);
$query =  $this->db->update('posts ',$user_data);
if($query){
return true ;
}
else{
return false;
}
}
public function registerCollege($user_data )
{
$query =  $this->db->insert('colleges',$user_data);

if($query){
return true;
}
else{
return false;
}
}
public function update_course_md($data ,$id)
{
$this->db->where('id',$id);
$query =  $this->db->update('courses',$data);
if($query){
return true;
}
else{
return false;
}
}
public function update_course_degree_md($data ,$id)
{
$this->db->where('id',$id);
$query =  $this->db->update('course_degree',$data);
if($query){
return true;
}
else{
return false;
}
}
public function getUsers()
{
$this->db->where('user_role' , 'user');
$query =  $this->db->get('users');
return $query->result();
}
public function getUsercount()
{
$this->db->where('user_role' , 'user');
$query =  $this->db->get('users');
return $query->num_rows();
}
public function getStreamcount()
{

$query =  $this->db->get('course_degree');
return $query->num_rows();
}
public function getCoursecount()
{

$query =  $this->db->get('courses');
return $query->num_rows();
}
public function getCollegecount()
{

$query =  $this->db->get('colleges');
return $query->num_rows();
}
public function getCategories()
{

$query =  $this->db->get('categories');
return $query->result();
}
public function getPosts()
{

$query =  $this->db->get('posts');
return $query->result();
}
public function registerPost_md($user_data)
{
$query =  $this->db->insert('posts',$user_data);
if($query){
return true;
}
else{
return false;
}
}
}