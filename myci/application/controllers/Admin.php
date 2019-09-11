<?php
class Admin extends CI_Controller{

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
		// print_r($this->input->post());die;
		$u = $this->input->post("username");
		$p = sha1($this->input->post("pass"));
		$this->load->model("adminmodel");	
		$result=$this->adminmodel->select_by_username($u);
		if($result->num_rows()==1)
		{
			$data = $result->row_array();
			if($data['password']==$p)
			{
				$this->session->set_userdata("id", $data['id']);
				$this->session->set_userdata("is_admin_logged_in", true);
				// redirect("admindashboard");
				echo "yes";
			}
			else
			{
				$this->session->set_flashdata("msg", 'This Password is Incorrect');
				redirect("admin");		
			}
		}
		else
		{
			$this->session->set_flashdata("msg", 'This Username and Password is Incorrect');
			redirect("admin");
		}
	}

}
?>