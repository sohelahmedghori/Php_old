<?php

/**
     1. Each table contain own only one Model file but we can use different different query inside modelPage(Usermodel.php) in different functions

     2. For making Connection Btwn CI project and Database we have to make change in CI->Application(folder)->config->database.php->set hostname,username,password and database name then save file
 */
class Usermodel extends CI_Model
{
	function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}

	function insert($data) //Here insert is a function '$data' is can any i take same name.
	{
        $this->db->insert("user", $data);  //For Insert Data into Database

        // This query for inserting data into the database.
        //Above 'db' is fixed name for database, 'insert' is keyword which can't be change and "user" is db <table name> and '$data' is Associative array calling value's inside it like-db column name and form name attribute and here we write always array name after <table nae>. 
	}
	
	function select_by_username($email)
	{
		$this->db->where("username", $email);
		$result = $this->db->get("user");
		return $result;
	}
	function select_by_userid($id)
	{
		$this->db->where("id", $id);
		$result = $this->db->get("user");
		return $result;
	}
}
?>