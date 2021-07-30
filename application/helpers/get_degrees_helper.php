<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if (!function_exists('get_degrees'))
{
	function get_degrees($id)
	{
		$ci=& get_instance();
	$ci->load->database();
	$sql = "SELECT * FROM course_degree WHERE id='$id'";
	$query = $ci->db->query($sql);
	$row = $query->row_array();
	return $row;
	}
}
function get_specialization($id)
	{
		$ci=& get_instance();
	$ci->load->database();
	$sql = "SELECT * FROM  specialization WHERE id='$id'";
	$query = $ci->db->query($sql);
	$row = $query->row_array();
	return $row['specialization_name'];
	}
function getCourse($id)
	{
		$ci=& get_instance();
	$ci->load->database();
	$sql = "SELECT * FROM courses WHERE id='$id'";
	$query = $ci->db->query($sql);
	$row = $query->row_array();
	return $row['course_name'];
	}
	function getCourseSpecs($id , $course_id )
	{
		$ci=& get_instance();
	$ci->load->database();
	$sql = "SELECT * FROM specs_details WHERE name='$course_id' AND detail_id='$id'";
	$query = $ci->db->query($sql);
	$row = $query->result();
	return $row;
	}
function get_streams($id)
	{
		$unique = array_unique($id);
		$str_id = implode(',', $unique);
		$ci=& get_instance();
	$ci->load->database();
	$sql = "SELECT  * FROM course_degree WHERE id IN ($str_id) ";
	$query = $ci->db->query($sql);
	$data = $query->result_array();
	return $data;
	}
	function get_courses($id)
	{
		$unique = array_unique($id);
		$str_id = implode(',', $unique);
		$ci=& get_instance();
	$ci->load->database();
	$sql = "SELECT  * FROM courses WHERE id IN ($str_id) ";
	$query = $ci->db->query($sql);
	$data = $query->result_array();
	return $data;
	}
	function formCourses()
	{
		
		$ci=& get_instance();
    	$ci->load->database();
    	$sql = "SELECT  * FROM courses";
    	$query = $ci->db->query($sql);
    	$data = $query->result();
    	return $data;
	}
	function footerMenu()
	{
		
		$ci=& get_instance();
    	$ci->load->database();
    	$sql = "SELECT  * FROM home_setting";
    	$query = $ci->db->query($sql);
    	$data = $query->result();
    	return $data;
	}
	function get_colleges($id)
	{
		
		$ci=& get_instance();
	$ci->load->database();
	$sql = "SELECT  * FROM colleges WHERE id = $id ";
	$query = $ci->db->query($sql);
	$data = $query->row_array();
	return $data;
	}
	function get_filter_city($id)
	{
		$unique = array_unique($id);
		$str_id = implode(',', $unique);
		$ci=& get_instance();
	$ci->load->database();
	$sql = "SELECT * FROM cities WHERE id IN ($str_id) ";
	$query = $ci->db->query($sql);
	$data = $query->result_array();
	return $data;
	}
	function get_filter_state($id)
	{
		$unique = array_unique($id);
		$str_id = implode(',', $unique);
		$ci=& get_instance();
	$ci->load->database();
	$sql = "SELECT * FROM states WHERE id IN ($str_id) ";
	$query = $ci->db->query($sql);
	$data = $query->result_array();
	return $data;
	}
	function get_filter_country($id)
	{
		$unique = array_unique($id);
		$str_id = implode(',', $unique);
		$ci=& get_instance();
	$ci->load->database();
	$sql = "SELECT * FROM countries WHERE id IN ($str_id) ";
	$query = $ci->db->query($sql);
	$data = $query->result_array();
	return $data;
	}
	function get_filter_except_country($id)
	{
		$unique = array_unique($id);
		$str_id = implode(',', $unique);
		$ci=& get_instance();
	$ci->load->database();
	$sql = "SELECT * FROM countries WHERE id IN ($str_id) AND id NOT IN (101) ";
	$query = $ci->db->query($sql);
	$data = $query->result_array();
	return $data;
	}
	function countStreams($id)
	{
		$ci=& get_instance();
	$ci->load->database();
	$sql = "SELECT * FROM colleges WHERE course_degrees IN ($id)  ";
	$query = $ci->db->query($sql);
	$data = $query->result_array();
	return count($data);
	}
	function countData($id , $cond , $arpage)
	{
		if ($arpage == 'distance') {
			$cat = 'DiSTANCE EDUCATION';
		}
		elseif ($arpage == 'abroad') {
			$cat = 'STUDY ABROAD';
		}
		else
		{
			$cat = 'UNIVERSITY/COLLEGES IN INDIA';
		}
		$ci=& get_instance();
		$ci->load->database();
		if($cond == 'city' || $cond == 'states' || $cond == 'country')
		{
			$sql = "SELECT * FROM colleges WHERE $cond IN ($id) AND college_category = '".$cat."'  ";
		}
		else
		{
			$sql = "SELECT * FROM colleges WHERE $cond LIKE '%".$id."%' AND college_category = '".$cat."'  ";
		}
		$query = $ci->db->query($sql);
		$data = $query->result_array();
		return count($data);
	}
?>