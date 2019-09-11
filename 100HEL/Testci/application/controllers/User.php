<?php
class User extends CI_Controller
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
		if (! $this->session->userdata("is_user_logged_in"))
		{
			redirect("home");
		}
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect("home");
	}
	function index()
	{
		$pagedata=array("title"=>"Home Page", "pagename"=>"home");
		$this->load->view("layout", $pagedata);
	}
	function profile()
	{
		$id=$this->session->userdata("id");
		$this->load->model("usermodel");
		$result=$this->usermodel->select_by_id($id);

		$pagedata=array("title"=>"Profile Page", "pagename"=>"user/profile", "result"=>$result);
		$this->load->view("layout", $pagedata);
	}
	function profile_pic()
	{
		// print_r($_FILES);die;
		$config['allowed_types']="jpg|jpeg|png|gif";
		$config['max_size']=1024;
		$config['upload_path']="image/";
		$config['encrypt_name']=true;

		$this->load->library("upload", $config);
		if ($this->upload->do_upload()==false)
		{
			$err_msg=$this->upload->display_errors();
			$this->session->set_flashdata("msg", $err_msg);
			redirect("user/profile");
		}
		else
		{
			$id=$this->session->userdata("id");
			$data['image_name']=$this->upload->data("file_name");
			$this->load->model("usermodel");
			$this->usermodel->update($id, $data);
			redirect("user/profile");
		}
	}
	function edit()
	{
		$id=$this->session->userdata("id");
		$this->load->model("usermodel");
		$result=$this->usermodel->select_by_id($id);

		$pagedata=array("title"=>"Edit Page", "pagename"=>"user/edit", "result"=>$result);
		$this->load->view("layout", $pagedata);
	}
	function update()
	{
		$id=$this->session->userdata("id");

		$data['fullname']=$this->input->post("full_name");
		$data['gender']=$this->input->post("gender");
		$data['address']=$this->input->post("address");
		$data['city']=$this->input->post("city");
		$data['contact']=$this->input->post("contact");

		$this->load->model('usermodel');
		$this->usermodel->update($id, $data);
		redirect("user/profile");
	}
}
?>