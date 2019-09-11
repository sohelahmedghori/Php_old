<?php

class User extends CI_Controller
{
	
	function __construct()
	{
		parent :: __construct();
		$this->load->helper("url");
		$this->load->library("session");
	}

	function index()
	{
		$pageview = array("title"=>"Dashboard Page", "pagename"=>"user/dash");
		$this->load->view("layout", $pageview);
	}

	function backdoor()
	{
		if(! $this->session->userdata('is_user_logged_in'))
		{
			redirect('home');
		}
	}

	function profile()
	{
		$id = $this->session->userdata("id");
		$this->load->model('usermodel');
		$this->usermodel->select_by_userid($id);

		$pageview = array("title"=>"Dashboard Page", "pagename"=>"user/dash");
		$this->load->view("layout", $pageview);
	}

	function edit()
	{
		$id = $this->session->userdata("id");
		$this->load->model('usermodel');
		$result = $this->usermodel->select_by_userid($id);

		$pageview = array("title"=>"Edit Profile Page", "pagename"=>"user/edit_pro", "result"=>$result);
		$this->load->view("layout", $pageview);
	}

	function user_profile()
	{
		$id = $this->session->userdata("id");
		$this->load->model('usermodel');
		$result = $this->usermodel->select_by_userid($id);

		$pageview = array ("title"=>"User Profile", "pagename"=>"user/profile", "result"=>$result);
		$this->load->view("layout", $pageview);
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect("home");
	}
}
?>