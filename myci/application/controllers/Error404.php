<?php

class Error404 extends CI_Controller{

	function index()
	{
		$this->load->library("session");
		$this->load->helper("url");
		$pagedata = array("title"=>"Error", "pagename"=>"error");
		$this->load->view("layout", $pagedata);
	}
}

?>