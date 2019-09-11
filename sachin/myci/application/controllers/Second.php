<?php
class Second extends CI_Controller
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
		if(! $this->session->userdata("is_user_logged_in"))
		{
			redirect('fast/login');
		}
	}
	function index()
	{
		$pagedata = array("title"=>"home","pagenme"=>"home");
		$this->load->view("fast/layout",$pagedata);
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect("fast/login");
	}
	function profile()
	{
		$id = $this->session->userdata("id");
		$this->load->model("fastmodel");
		$result = $this->fastmodel->select_by_id($id);


		$pagedata = array("title"=>"mpprofie","pagename"=>"fastproject/profile","result"=>$result);
		$this->load->view("fastproject/layout",$pagedata);
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
			redirect("fastproject/profile");
		}
		else
		{
			$id = $this->session->userdata("id");
			$data['image_name']=$this->upload->data("file_name");
			$this->load->model("fastmodel");
			$this->fastmodel->update($id, $data);
			redirect("fastproject/profile");
		}

	}
	function edit()
	{
		$pagedata =array("titile"=>"edit","pagename"=>"fastproject/edit");
		$this->load->view("fastproject/layout",$pagedata);
	}
}


 ?>