<?php
class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
	}
	function index()
	{
		$this->load->view("admin/login");

	}
	function auth()
	{
		$a = $this->input->post("username");
		$b = $this->input->post("password");
		$this->load->model("adminmodel");
		$result=$this->adminmodel->select_by_username($a);
		if($result->num_rows()==1)
		{
			$data = $result->row_array();
			if($data['password']==$b)
			{
				$this->session->set_userdata("id",$data['id']);
				$this->session->set_userdata("is_addmin_logged_in",true);
				redirect("admindashboard");
				// echo "yes";

			}
			else
			{
				$this->session->set_flashdata("msg","This password is incorrect");
				redirect("admin");
			}
		}
		else
		{
			$this->session->set_flashdata("msg","This username and password is incorrect");
			redirect("admin");
		}


	}
}
 ?>