<?php
class Admin_dashboard extends CI_Controller
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
		if(! $this->session->userdata("is_admin_logged_in"))
		{
			redirect("admin");
		}
	}
	function index()
	{
		
		$pagedata = array("title" => "Admin Dashboard" , "pagename" => "admin/dashboard");
		$this->load->view("admin/admin_layout", $pagedata);
	}
	function view_user()
	{
		$this->load->model('usermodel');
		$result=$this->usermodel->select_all();
		$pagedata = array("title" => "View Users" , "pagename" => "admin/view_user", "result"=>$result);
		$this->load->view("admin/admin_layout", $pagedata);
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect('user');
	}
	function user_detail($id)
	{
		$this->load->model('usermodel');
		$result=$this->usermodel->select_by_id($id);
		$pagedata = array("title" => "View Users" , "pagename" => "admin/user_detail", "result"=>$result);
		$this->load->view("admin/admin_layout", $pagedata);

	}
	function change_status($id, $a)
	{
		if ($a==1)
		{
			$data['status']=0;
		}
		else
		{
			$data['status']=1;
		}
		$this->load->model("usermodel");
		$this->usermodel->update($id, $data);
		redirect("admin_dashboard/view_user");
	}
}
?>