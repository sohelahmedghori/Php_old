<?php 
class Aaa extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");

	}
	function index()
	{
		$pagedata = array("pagename"=>"best/home");
		$this->load->view("best/layout",$pagedata);

	}
	function signup()
	{
		$pagedata = array("pagename"=>"best/signup");
		$this->load->view("best/signup",$pagedata);

	}
	

}

 ?>