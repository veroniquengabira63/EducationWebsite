<?php
class Exams extends CI_Controller 
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
  	$this->load->view('exams');
  }
  
  public function single_exam_overview()
  {
    $this->load->view('single-exam');
  }
  public function subcourse_after_10th()
  {
    $this->load->view('subcourse_after_10th');
  }


 } 