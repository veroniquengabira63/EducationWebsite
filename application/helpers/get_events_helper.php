<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



if (!function_exists('get_events'))

{

	function get_events($id)

	{

		$ci=& get_instance();

	    $ci->load->database(); 



	    $sql = "SELECT * FROM events WHERE created_by ='$id'"; 



	    $query = $ci->db->query($sql);

	    $row = $query->result();

	    return $row;

	}

}



?>