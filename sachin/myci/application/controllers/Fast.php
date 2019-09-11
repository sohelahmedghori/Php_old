<?php
class Fast extends CI_Controller
{
	Function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");

	}
	function index()
	{
		$pagedata=array("title"=>"home","pagename"=>"fastproject/home");
		$this->load->view("fastproject/layout",$pagedata);
	}
	function login()
	{
		$pagedata=array("title"=>"home","pagename"=>"fastproject/login");
		$this->load->view("fastproject/layout",$pagedata);
	}
		function home()
	{
		$pagedata=array("title"=>"home","pagename"=>"fastproject/home");
		$this->load->view("fastproject/layout",$pagedata);
	}
		function signup()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("full_name","full name","required");
		$this->form_validation->set_rules("username","username","required");
		$this->form_validation->set_rules("password","password","required");
		$this->form_validation->set_rules("re_password","re password","required|matches[password]");
		$this->form_validation->set_rules("address","address","required");
		$this->form_validation->set_rules("city","city","required");
		$this->form_validation->set_rules("gender","gender","required");
		$this->form_validation->set_rules("contact","contact","required|numeric|exact_length[10]");

       if($this->form_validation->run()==false)
       {
		$pagedata=array("title"=>"home","pagename"=>"fastproject/signup");
		$this->load->view("fastproject/layout",$pagedata);
	    }
	    else
	  {
		$data['full_name']=$this->input->post("full_name");
		$data['username']=$this->input->post("username");
		$data['password']=$this->input->post("password");
		$data['address']=$this->input->post("address");
		$data['city']=$this->input->post("city");
		$data['gender']=$this->input->post("gender");
		$data['contact']=$this->input->post("contact");
		$this->load->model("fastmodel");
		$this->fastmodel->insert($data);

		// echo "yes";
		redirect("fast/login");


	  }
	}
	function auth()
	{
		// print_r($this->input->post());
		$u = $this->input->post("username");
		$p = $this->input->post("password");
		$this->load->model("fastmodel");
		$result = $this->fastmodel->select_by_username($u);
		if($result->num_rows()==1)
		{
			$data = $result->row_array();
			if($data['password']==$p)
			{
				$this->session->set_userdata("id",$data['id']);
				$this->session->set_userdata("full_name",$data['full_name']);
				$this->session->set_userdata("is_user_logged_in",true);
				redirect("fast/home");

			}
			else
			{
				$this->session->set_flashdata("msg",'this password is incorrect');
				redirect("fast/login");

			}
		}
		else
		{
			$this->session->set_flashdata("msg",'this username and password is incorrect');
			redirect("fast/login");
		}

	}
}

 ?>