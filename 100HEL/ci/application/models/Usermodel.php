<?php
class Usermodel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function insert($data) /*here we take insert as a function name but we change it and take it what we want. same as data but this come in array formate from controller home page data array
	we take insert name b/c we fire insert query */
	{
		$this->db->insert("user", $data); /*here insert work as insert query put data in user table and $data take same as above function $data*/ 
	}

	function update($id, $data)
	{
		$this->db->where("id", $id);
		$this->db->update("user", $data);
	}

	function select_all()
	{
		$result=$this->db->get('user');
		return $result;
	}

	function delete()
	{

	}
	function select_by_email($email)
	{
		// SELECT * FROM user WHERE username = '$email'
		$this->db->where("email", $email);
		$result=$this->db->get("user");
		return $result;
	}
	function select_by_id($id)
	{
		// SELECT * FROM user WHERE id = '$id'
		$this->db->where("id", $id);
		$result=$this->db->get("user");
		return $result;
	}
}
?>