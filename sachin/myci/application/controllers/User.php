<?php

class User extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");

		$this->backdoor();

	}
	function backdoor()
	{
		if(! $this->session->userdata('is_user_logged_in'))
		{
			redirect('home');
		}
	}



	function index()
	{
		$pagedata = array("title"=>"Dashboard Page", "pagename"=>"user/dash","page_name"=>"Home");
		$this->load->view("layout", $pagedata);
	}




	function profile()
	{
		$id = $this->session->userdata("id");
		$this->load->model("usermodel");
		$result=$this->usermodel->select_by_id($id);






		$pagedata = array("title"=>"User Profile Page", "pagename"=>"user/profile","page_name"=>"My Profile", "result"=>$result);
		$this->load->view("layout", $pagedata);
	}
	function edit()
	{
		$id = $this->session->userdata("id");
		$this->load->model("usermodel");
		$result=$this->usermodel->select_by_id($id);






		$pagedata = array("title"=>"edit Profile Page", "pagename"=>"user/edit","page_name"=>"Edit", "result"=>$result);
		$this->load->view("layout", $pagedata);
	}



	function logout()
	{
		$this->session->sess_destroy();
		redirect("home");
	}
	function update()
	{
		$id = $this->session->userdata("id");
		// print_r($this->input->post());die;
		$data['full_name']= $this->input->post("full_name");
		$data['add']=$this->input->post("add");
		$data['city']=$this->input->post("city");
		$data['gender']=$this->input->post("gender");
		$data['contact']=$this->input->post("contact");

		$this->load->model('usermodel');
		$this->usermodel->update($id,$data);
		redirect("user");
	}
	function change_password()
	{
		$pagedata = array("title"=>"change password","pagename"=>"user/change_password","page_name"=>"Change  Password");
		$this->load->view("layout",$pagedata);
	}
	function update_password()
	{
		$id=$this->session->userdata("id");
		
		// print_r($this->input->post());die;
		$a = sha1($this->input->post("c_pass"));
		$b =$this->input->post("n_pass");
		$c=$this->input->post("cn_pass");
	    $this->load->model("usermodel");
		$result= $this->usermodel->select_by_id($id);
		$arr=$result->row_array();
		if($arr['pass']==$a)
		{
			if($b==$c)
			{
				$data['pass']=sha1($b);
				$this->usermodel->update($id,$data);
				redirect("user");

			}
			else
			{
				$this->session->set_flashdata("msg","The new password and confirm password are not match");
				redirect("user/change_password");

			}
		}
			else
			{
				$this->session->set_flashdata("msg","The corrent password are not match");
				redirect("user/change_password");
			}
		

	}
	function pic_upload()
	{
		$config["allowed_types"]="png|jpg|jpeg|gif";
		$config["max_size"]=1024; //KB
		$config["upload_path"]="image/";

		$config['encrypt_name']=true;

		$this->load->library("upload", $config);
		if($this->upload->do_upload()==false)
		{
			$a = $this->upload->display_errors();
			$this->session->set_flashdata("msg", $a);
			redirect("user/profile");
		}
		else
		{
			$id = $this->session->userdata("id");
			$data['image_name']=$this->upload->data("file_name");
			$this->load->model("usermodel");
			$this->usermodel->update($id, $data);
			redirect("user/profile");
		}

		
	}

}
?>