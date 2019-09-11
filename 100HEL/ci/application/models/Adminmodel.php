<?php
class Adminmodel extends CI_model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function insert($data) 
	{
		$this->db->insert("admin", $data); 
	}
	function select_by_admin_username($username)
	{
		$this->db->where("username" , $username);
		$result=$this->db->get("admin");
		return $result;
	}

}
?>