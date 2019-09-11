<?php

class Home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
	}
	function index()
	{
		$pagedata=array("title"=>"Home Page", "pagename"=>"home");
		$this->load->view("layout", $pagedata);
	}
	function signin()
	{
		$pagedata=array("title"=>"Signin Page", "pagename"=>"signin");
		$this->load->view("layout", $pagedata);
	} 
	function signup()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("full_name", "Full Name", "required");
		$this->form_validation->set_rules("username", "Username", "required|valid_email");
		$this->form_validation->set_rules("password", "Password", "required");
		$this->form_validation->set_rules("re-password", "Re-Password", "required|matches[password]");
		$this->form_validation->set_rules("gender", "Gender", "required");
		$this->form_validation->set_rules("address", "Address", "required");
		$this->form_validation->set_rules("city", "city", "required");
		$this->form_validation->set_rules("contact", "Contact", "required");

		if ($this->form_validation->run()==false) 
		{
			$pagedata=array("title"=>"Signup Page", "pagename"=>"signup");
			$this->load->view("layout", $pagedata);
		}
		else
		{
			$data['fullname']=$this->input->post('full_name');
			$data['username']=$this->input->post('username');
			$data['password']=sha1($this->input->post('password'));
			$data['gender']=$this->input->post('gender');
			$data['address']=$this->input->post('address');
			$data['city']=$this->input->post('city');
			$data['contact']=$this->input->post('contact');

			$this->load->model("usermodel");
			$this->usermodel->insert($data);
			redirect("home/signin");
		}
	}
	function auth()
	{
		// print_r($this->input->post());die;
		$username=$this->input->post("username");
		$password=$this->input->post("password");
		$this->load->model("usermodel");
		$result=$this->usermodel->select_by_username($username);
		if ($result->num_rows()==1)
		{
			$data=$result->row_array();
			if ($data['password']==sha1($password))
			{
				$this->session->set_userdata('id', $data['id']);
				$this->session->set_userdata('name', $data['full_name']);
				$this->session->set_userdata('is_user_logged_in', true);
				redirect("user");
			}
			else
			{
				$this->session->set_flashdata('msg', "This Password is incorrect");
				redirect("home/signin");
			}
		}
		else
		{
			$this->session->set_flashdata('msg', "This Username or Password is incorrect");
			redirect("home/signin");
		}
	}
}
?>