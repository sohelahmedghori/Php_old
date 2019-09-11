<?php
class Project extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
	}
	function index()
	{
		$pagedata = array("title"=>"Home Page", "pagename"=>"home");
		$this->load->view("project/layout", $pagedata);
	}
	// function about()
	// {
	// 	$pagedata = array("title"=>"About Page", "pagename"=>"about");
	// 	$this->load->view("layout", $pagedata);
	// }
	// function contact()
	// {
	// 	$pagedata = array("title"=>"Contact Page", "pagename"=>"contact");
	// 	$this->load->view("layout", $pagedata);
	// }
	// function help()
	// {
	// 	$pagedata = array("title"=>"Help Page", "pagename"=>"help");
	// 	$this->load->view("layout", $pagedata);
	// }
	// function login()
	// {
	// 	$pagedata = array("title"=>"Login Page", "pagename"=>"login");
	// 	$this->load->view("layout", $pagedata);
	// }
	}
	?>