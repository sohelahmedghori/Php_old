<?php

class Home extends CI_Controller
{
	function __construct()
	{
		parent ::__construct();
		$this->load->helper("url");
		$this->load->library("session");
	}
	function index()
	{
		$pageview = array("title"=>"Home Page", "pagename"=>"home");
		$this ->load->view("layout", $pageview);
	}
	function about()
	{
		$pageview = array("title"=>"About Page", "pagename"=>"about");
		$this ->load->view("layout", $pageview);

		//Here function name about() and view("about") is not meditory to same, both can be different.
	}
	function contact()
	{
		$pageview = array("title"=>"Contact Page", "pagename"=>"contact");
		$this ->load->view("layout", $pageview);
	}
	function help()
	{
		$pageview = array("title"=>"Help Page", "pagename"=>"help");
		$this ->load->view("layout", $pageview);
	}
	function signup()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("full_name","Full Name","required");
		$this->form_validation->set_rules("username","Email Id","required|valid_email");
		$this->form_validation->set_rules("pass","Password","required");
	    $this->form_validation->set_rules("re_pass","Re-Password","required|matches[pass]");
	    $this->form_validation->set_rules("add","Address","required");
	    $this->form_validation->set_rules("city","City","required");
	    $this->form_validation->set_rules("gender","Gender","required");
	    $this->form_validation->set_rules("contact","Contact","required|numeric|exact_length[10]");

	    
		if ($this->form_validation->run()==false)
		{
			$pageview=array("title"=>"Signup Page","pagename"=>"signup");
			$this->load->view("layout",$pageview);
		}
		else
		{
		
			// $a = $_POST['full_name'];
			// This Type was used in Core PHP but in CI we do all using functions and always store all values in only one(1) Associative Array format.

			$data['full_name'] = $this->input->post("full_name");
			//Remember $data['full_name'], 'full_name' should be match table column name, And 'post' in small letter also inside comes from ->form input type 'name Attribute'.
			$data['username'] = $this->input->post("username");
			$data['password'] = sha1($this->input->post("pass"));
			$data['address'] = $this->input->post("add");
			$data['gender'] = $this->input->post("gender");
			$data['city'] = $this->input->post("city");
			$data['contact'] = $this->input->post("contact");

			$this->load->model("usermodel"); 

			//Here we are including model file in controller(Home.php), means Controler and Model Communicate Each other and pass associative array values using 'post' fn.

			$this->usermodel->insert($data);

			//Here 'usermodel' is comes from model file name, and 'insert' is pre-defined function and $data is working as parameterized fn parameter value.

			// header("location:login.php"); It was used in php, but

			redirect("home/signin");  // In CI we redirectiong to login page.

			// echo "yes";

		
		}
	}
	function signin()
	{
		$pageview = array("title"=>"Login Page", "pagename"=>"signin");
		$this ->load->view("layout", $pageview);

	}
	function authi()
	{
		// print_r($this->input->post());  //This is working like $_POST['name'];

		$email = $this->input->post('username');
		$password = sha1($this->input->post('password'));
		$this->load->model('usermodel');
		$result = $this->usermodel->select_by_username($email);

		if($result->num_rows()==1)
		{
			$data = $result->row_array();

			if($data['password']==$password)
			{
				$this->session->set_userdata("id", $data['id']);
				$this->session->set_userdata("name", $data['full_name']);
				$this->session->set_userdata("is_user_logged_in", true);
				redirect("user");
			}
			else
			{
				$this->session->set_flashdata("msg", "This Password is Incorrect !");
				redirect("home/signin");
			}
		}
		else
		{
			$this->session->set_flashdata("msg", "The Username And Password is Incorrect !");
			redirect("home/signin");
		}

	}
}

?>