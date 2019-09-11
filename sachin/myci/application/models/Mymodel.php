<?php 
class Mymodel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();

	}
	function insert($data)
	{
		$this->db->insert("myproject",$data);
	}
	function select_by_username($u)
	{
		$this->db->where("username",$u);
		$result=$this->db->get("myproject");
		return $result;
	}
	function select_by_id($id)
	{
		$this->db->where("id", $id);
		$result=$this->db->get("myproject");
		return $result;
	}
}
 ?>