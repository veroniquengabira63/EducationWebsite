<?php
class Topcourses extends CI_Controller 
{

  public function __construct() 
  {
    parent::__construct();
    $this->load->model('home_model');
    $this->load->helper('ckeditor_helper');
     $this->load->library('CKEditor');
    $this->load->library('CKFinder');
  }
  public function index()
  {
  	$this->load->view('top_courses');
  }
  public function course_after_10th()
  {
    $this->load->view('course_after_10th');
  }
  public function subcourse_after_10th()
  {
    $this->load->view('subcourse_after_10th');
  }
  public function course_overview()
  {
    $this->load->view('course_overview');
  }


 } 