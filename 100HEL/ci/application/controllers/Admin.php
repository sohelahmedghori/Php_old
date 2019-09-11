<?php
class Admin extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
		
	}
	function index()
	{
		$this->load->view("admin/admin_login");
	}
	function admin_auth()
	{
		// print_r($this->input->post());die;
		$username=$this->input->post("username");
		$password=sha1($this->input->post("password"));
		$this->load->model("adminmodel");
		$result=$this->adminmodel->select_by_admin_username($username);
		if($result->num_rows()==1)
		{
			$data=$result->row_array();
			if($data['password']==$password)
			{
				$this->session->set_userdata("id", $data['id']);
				$this->session->set_userdata("is_admin_logged_in", true);
				redirect("admin_dashboard");
			}
			else
			{
				$this->session->set_flashdata("msg", "Password is Incorrect");
				redirect("admin");
			}
		}
		else
		{
			$this->session->set_flashdata("msg", "This Email or Password is Incorrect");
			redirect("admin");
		}
	}
}
?>