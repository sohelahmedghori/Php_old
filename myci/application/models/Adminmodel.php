<?php
class Adminmodel extends CI_Model{


	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function insert($data)
	{
		$this->db->insert("admin", $data);
	}


	function update($id, $data)
	{
		$this->db->where("id", $id);
		$this->db->update("admin", $data);
	}
	function select_all()
	{

	}
	function delete()
	{

	}
	function select_by_username($u)
	{
		
		// SELECT * FROM user WHERE username = '$u'
		$this->db->where("username", $u);
		$result=$this->db->get("admin");
		return $result;
	}
	function select_by_id($id)
	{
		// SELECT * FROM user WHERE id = '$id'
		$this->db->where("id", $id);
		$result=$this->db->get("admin");
		return $result;
	}


}


?>