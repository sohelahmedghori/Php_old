
<?php

class Admindashboard extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
		$this->backdoor();
	}
	function backdoor()
	{
		if(! $this->session->userdata("is_admin_logged_in"))
		{
			redirect("home");
		}
	}
	function index()
	{
		$this->load->view("admin/dash");
	}
	function view_users()
	{
		$this->load->model("usermodel");
		$result=$this->usermodel->select_all();
		$pagedata = array("result"=>$result);
		$this->load->view("admin/view_users", $pagedata);
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect("home");
	}
	function user_detail($a)
	{
		$this->load->model("usermodel");
		$result=$this->usermodel->select_by_id($a);
		$pagedata=array("result"=>$result);
		$this->load->view("admin/user_detail", $pagedata);
	}
	function change_status($a, $b)
	{
		if($b==1)
			$data['status']=0;
		else
			$data['status']=1;
		$this->load->model("usermodel");
		$this->usermodel->update($a, $data);
		redirect("admindashboard/view_users");

	}
}

?>