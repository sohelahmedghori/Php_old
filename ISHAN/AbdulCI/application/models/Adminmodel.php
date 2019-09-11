<?php

class Adminmodel extends CI_Model
{
	
	function __construct()
	{
		parent :: __construct();
		$this->load->database();
	}

	function select_by_user($email)
	{
		$this->db->where("username", $email);
		$result = $this->db->get("admin");
		return $result;
	}
}

?>