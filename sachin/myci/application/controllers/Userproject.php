<?php
class Userproject extends CI_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
		$this->backdoor();

	}
	function backdoor()
	{
		if(!$this->session->userdata('is_user_logged_in'))
		{
			redirect('project/signup');
		}
	}
	function logout()
		{
			$this->session->sess_destroy();
			redirect("project/login");
		}
    function profile()
	{
		$pagedata=array("title"=>"home","pagename"=>"project/profile");
		$this->load->view("project/layout",$pagedata);
	}
}

 ?>