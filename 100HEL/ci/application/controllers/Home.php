<?php
class Home extends CI_Controller{
	function __construct()
	{
		parent:: __construct();
		$this->load->helper("url");
		$this->load->library("session");
	}
	function index()
	{
		$pagedata=array("title"=>"Home page", "pagename"=>"home" );
		$this->load->view("layout", $pagedata);
	}
	function about()
	{
		$pagedata = array("title"=>"About Page", "pagename"=>"about");
		$this->load->view("layout", $pagedata);
	}
	function contact()
	{
		$pagedata = array("title"=>"Contact Page", "pagename"=>"contact");
		$this->load->view("layout", $pagedata);
	}
	function help()
	{
		$pagedata = array("title"=>"Help Page", "pagename"=>"help");
		$this->load->view("layout", $pagedata);
	}
	function login()
	{
		$pagedata = array("title"=>"Login Page", "pagename"=>"login");
		$this->load->view("layout", $pagedata);
	}
	function signup()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("full_name","Full Name","required");
		$this->form_validation->set_rules("email","Email","required|valid_email");
		$this->form_validation->set_rules("pass","Password","required|min_length[8]");
		$this->form_validation->set_rules("re_pass","Re-Password","required|matches[pass]");
		$this->form_validation->set_rules("gender","Gender","required");
		$this->form_validation->set_rules("add","Address","required");
		$this->form_validation->set_rules("city","City","required");
		$this->form_validation->set_rules("contact","Contact","required|numeric|exact_length[10]");

		if($this->form_validation->run()==false)
		{
			$pagedata = array("title"=>"Signup Page", "pagename"=>"signup");
			$this->load->view("layout", $pagedata);
		}
		else
		{
			$data['full_name'] = $this->input->post("full_name");
			$data['email'] = $this->input->post("email");
			$data['password'] = sha1($this->input->post("pass"));
			$data['gender'] = $this->input->post("gender");
			$data['address'] = $this->input->post("add");
			$data['city'] = $this->input->post("city");
			$data['contact'] = $this->input->post("contact");

			$this->load->model("usermodel");
			$this->usermodel->insert($data);

			redirect("home/login");
		}
	}
	function auth()
	{
		// print_r($this->input->post());die;
		$email=$this->input->post("email");
		$password=$this->input->post("password");
		$this->load->model("usermodel");
		$result=$this->usermodel->select_by_email($email);
		if($result->num_rows()==1)
		{
			$data=$result->row_array();
			if($data['password']==sha1($password))
			{
				if($data['status']==1)
				{
					$this->session->set_userdata("id", $data['id']);
					$this->session->set_userdata("name", $data['full_name']);
					$this->session->set_userdata("is_user_logged_in", true);
					redirect("user");
				}
				else
				{
					$this->session->set_flashdata("msg", "You are Deactive Now.....");
					redirect("home/login");
				}
			}
			else
			{
				$this->session->set_flashdata("msg", "This Password is Incorrect");
				redirect("home/login");
			}
		}
		else
		{
			$this->session->set_flashdata("msg", "This Email or Password is Incorrect");
			redirect("home/login");
		}
	}
}
?>