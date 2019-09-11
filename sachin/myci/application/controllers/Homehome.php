<?php 
class Homehome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");

	}
	function index()
	{
		$this->load->view("project/home");
	}
	function signup()
	{
		$this->load->view('project/signup');
	}
} ?>	