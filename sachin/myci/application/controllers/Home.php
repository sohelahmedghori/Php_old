 <?php
class Home extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
	}
	function index()
	{
		$pagedata = array("title"=>"Home Page", "pagename"=>"home","page_name"=>"Welcome");
		$this->load->view("layout", $pagedata);
	}
	function about()
	{
		$pagedata = array("title"=>"About Page", "pagename"=>"about","page_name"=>"about me");
		$this->load->view("layout", $pagedata);
	}
	
	function contact()
	{
		$pagedata = array("title"=>"Contact Page", "pagename"=>"contact" ,"page_name"=>"your contact");
		$this->load->view("layout", $pagedata);
	
	}
    function help()
    {
        $pagedata = array("title"=>"help page","pagename"=>"help","page_name"=>"help");

        $this->load->view("layout",$pagedata);
    } 
    function login()
	{
		$pagedata = array("title"=>"Login Page", "pagename"=>"login","page_name"=>"login");
		$this->load->view("layout", $pagedata);
	}
	function signup()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("full_name","full_name","required");
		$this->form_validation->set_rules("username","username","required|valid_email");
		$this->form_validation->set_rules("pass","password","required");
		$this->form_validation->set_rules("re_pass","Ree password","required|matches[pass]");
		$this->form_validation->set_rules("add","address","required");
		$this->form_validation->set_rules("city","city","required");
		$this->form_validation->set_rules("contact","contact","required|numeric|exact_length[10]");
		$this->form_validation->set_rules("gender","gender","required");


		if($this->form_validation->run()==false)
		{
		$pagedata = array("title"=>"Signup Page", "pagename"=>"signup" , "page_name"=>"signup");
		$this->load->view("layout", $pagedata);
	   }
	   else
	   {
	   	$data['full_name']=$this->input->post("full_name");
	   	$data['username']=$this->input->post("username");
	   	$data['pass']=sha1($this->input->post("pass"));
	   	$data['add']=$this->input->post("add");
	   	$data['city']=$this->input->post("city");
	   	$data['contact']=$this->input->post("contact");
	   	$data['gender']=$this->input->post("gender");

	   	$this->load->model("usermodel");
	   	$this->usermodel->insert($data);

	   	redirect("home/login");

	   }
	}
	function auth()
	{
		$u = $this->input->post("username");
		$p =sha1($this->input->post("pass"));
		// print_r($this->input->post());die;
		$this->load->model("usermodel");
		$result=$this->usermodel->select_by_username($u);

		if($result->num_rows()==1)
		{
			$data=$result->row_array();
			if($data['pass']==$p)
			{

				$this->session->set_userdata("id",$data['id']);
				$this->session->set_userdata("name",$data['full_name']);
				$this->session->set_userdata("is_user_logged_in",true);
				redirect("user");
				// echo "yes";
			}
			else
			{
				$this->session->set_flashdata("msg","this password is incorrect");
				redirect("home/login");
			}


		}
		else
		{
			$this->session->set_flashdata("msg","this username and password is incorrect");
			redirect("home/login");
		}

	}
}
