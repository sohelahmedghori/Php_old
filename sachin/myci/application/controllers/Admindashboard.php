	<?php
class Admindashboard extends CI_Controller
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
		if(! $this->session->userdata("is_addmin_logged_in"))
		{
			redirect("admin");
		}
	}
	function index()
	{
		$this->load->view("admin/dash");
	}
	function logout()
	{
	$this->session->sess_destroy();
	redirect("admin");
    }
    function view_user()
    {
    	$this->load->model("usermodel");
    	$result=$this->usermodel->select_all();
    	$pagedata =array("result"=>$result);
    	$this->load->view("admin/view_user",$pagedata);
    	
    }
    function user_detail($a)
    {
    	$this->load->model("usermodel");
    	$result=$this->usermodel->select_by_id($a);
    	$pagedata = array("result"=>$result,);
    	$this->load->view("admin/user_detail", $pagedata);
    }
    function change_status($a,$b)
    {
    	if($b==1)
    	$data['status']=0;
    	else
    		$data['status']=1;
    		$this->load->model("usermodel");
    		$this->usermodel->update($a,$data);
    		redirect("Admindashboard/view_user");
    	
    }
}
 ?>