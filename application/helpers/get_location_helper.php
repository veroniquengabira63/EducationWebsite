<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	function get_country($id)
	{
		$ci=& get_instance();
	$ci->load->database();
	$sql = "SELECT * FROM countries WHERE id='$id'";
	$query = $ci->db->query($sql);
	$row = $query->row_array();
	return $row['name'];
	}
	function get_state($id)
	{
		$ci=& get_instance();
	$ci->load->database();
	$sql = "SELECT * FROM states WHERE id='$id'";
	$query = $ci->db->query($sql);
	$row = $query->row_array();
	return $row['name'];
	}
	function get_city($id)
	{
		$ci=& get_instance();
	$ci->load->database();
	$sql = "SELECT * FROM cities WHERE id='$id'";
	$query = $ci->db->query($sql);
	$row = $query->row_array();
	return $row['name'];
	}
?>