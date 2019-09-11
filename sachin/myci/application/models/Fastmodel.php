<?php
class Fastmodel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		// $this->load->helper("url");
		$this->load->database();
	}
	function insert($data)
	{
		$this->db->insert("rishabh",$data);

	}
	function select_by_username($u)
	{
		$this->db->where("username",$u);
		$result = $this->db->get("rishabh");
		return $result;
	}
	function select_by_id($id)
	{
		$this->db->where("id",$id);
		$result = $this->db->get("rishabh");
		return $result;
	}
	function update($id,$data)
	{
		$this->db->where("id",$id);
		$this->db->get('rishabh',$data);

	}
}

 ?>