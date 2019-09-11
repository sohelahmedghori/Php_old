<?php
 class Usermodel extends CI_Model{
 	function __construct()
 	{

 		parent::__construct();
 		$this->load->database();
 	}
    function insert($data)
     {

         $this->db->insert("user",$data); 	
      }
      function update($id,$data)
      {
        $this->db->where("id",$id);

        $this->db->update("user",$data);




      }
      function select_all()
      {
        $result = $this->db->get("user");
        return $result;
      }





     function select_by_username($u)
      {
       	$this->db->where("username",$u);
 	    $result=$this->db->get("user");
 	    return $result;
      }
      function select_by_id($id)
      {
      	$this->db->where("id",$id);
      	$result=$this->db->get("user");
      	return $result;


      }




} ?>