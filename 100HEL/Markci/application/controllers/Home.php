<?php

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
		// $this->backdoor();
	}
	function index()
	{
		$pagedata=array("title"=>"Home Page", "pagename"=>"home");
		$this->load->view("layout", $pagedata);
	}
	function backdoor()
	{
		if (! $this->session->userdata("is_user_logged_in"))
		{
			redirect("home");
		}
	}
	function signin()
	{
		$pagedata=array("title"=>"Signin Page", "pagename"=>"signin");
		$this->load->view("layout", $pagedata);
	}
	function admin()
	{
		$this->load->view("admin");
	}
	function signup()
	{
		// print_r($this->input->post());die;
		$this->load->library("form_validation");
		$this->form_validation->set_rules("full_name", "Full Name", "required");
		$this->form_validation->set_rules("username", "Username", "required|valid_email");
		$this->form_validation->set_rules("pass", "Password", "required");
		$this->form_validation->set_rules("re-pass", "Re-Password", "required|matches[pass]");
		$this->form_validation->set_rules("gender", "Gender", "required");
		$this->form_validation->set_rules("address", "Address", "required");
		$this->form_validation->set_rules("city", "City", "required");
		$this->form_validation->set_rules("contact", "Contact", "required|numeric|exact_length[10]");
		if ($this->form_validation->run()==false)
		{
			$pagedata=array("title"=>"Signup Page", "pagename"=>"signup");
			$this->load->view("layout", $pagedata);
		}
		else
		{
			$data['full_name']=$this->input->post("full_name");
			$data['username']=$this->input->post("username");
			$data['password']=sha1($this->input->post("pass"));
			$data['gender']=$this->input->post("gender");
			$data['address']=$this->input->post("address");
			$data['city']=$this->input->post("city");
			$data['contact']=$this->input->post("contact");

			$this->load->model("useradmin");
			$this->useradmin->insert($data);
			redirect('home/signin');
		}
	}
	function auth()
	{
		// print_r($this->input->post());die;
		$username=$this->input->post("username");
		$password=$this->input->post("password");
		$this->load->model("useradmin");
		$result=$this->useradmin->select_by_username($username);
		if ($result->num_rows()==1)
		{
			$data=$result->row_array();
			if ($data['password']=sha1($password))
			{
				$this->session->set_userdata("user_type", $data['user_type']);
				$this->session->set_userdata("id", $data['id']);
				$this->session->set_userdata("name", $data['full_name']);
				$this->session->set_userdata("is_user_logged_in", true);

				if($data['user_type'] == 'user')
				{	
					redirect("home");
				}
				else
				{
					redirect("home/admin");
				}
			}
			else
			{
				$this->session->set_flashdata("msg", "This Password is Incorrect");
				redirect("home/signin");
			}
		}
		else
		{
			$this->session->set_flashdata("msg", "This Username and Password is Incorrect");
			redirect("home/signin");
		}	
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect("home");
	}

}



?>