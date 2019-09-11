<?php
class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
	}
	function index()
	{
		$pagedata = array("title"=>"Homepage")
		$this->load->view("home" , $pagedata);
	}
	function about1()
	{
		$pagedata = array("title"=>"Aboutpage",)
		$this->load->view("layout",$pagedata);
	}
	function contact1()
	{
		$pagedata = array("title"=>"Contactpage")
		$this->load->view("layout",$pagedata);
	}
	function help()
	{
		$pagedata = array("title"=>"HelpPage")
		$this->load->view("layout",$pagedata);
	}

}


?>