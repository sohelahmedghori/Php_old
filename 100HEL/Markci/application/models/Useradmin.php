<?php

class Useradmin extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function insert($data)
	{
		$this->db->insert("user", $data);
	}
	function update()
	{

	}
	function select()
	{
		
	}
	function delete()
	{

	}
	function select_by_username($username)
	{
		$this->db->where("username", $username);
		$result=$this->db->get("user");
		return $result;
	}
}

?>