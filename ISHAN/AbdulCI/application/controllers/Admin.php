<?php

/**
 * 
 */
class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent :: __construct();
		$this->load->helper("url");
		$this->load->library("session");
	}

	function index()
	{
		$this->load->view("admin/login");
	}

	function auth()
	{
		// print_r($this->input->post());

		$email = $this->input->post('username');
		$password =sha1($this->input->post('password'));

		$this->load->model('adminmodel');
		$result = $this->adminmodel->select_by_user($email);
			// print_r($data); die; 

		if($result->num_rows()==1)
		{
			$data = $result->row_array();

			if($data['password']==$password)
			{
				$this->session->set_userdata("id", $data['id']);
				$this->session->set_userdata("is_user_logged_in", true);
				
			}
			else
			{
				$this->session->set_flashdata("msg", "This Password is Incorrect !");
				redirect("admin");
			}
		}
		else
		{
			$this->session->set_flashdata("msg", "The Username And Password is Incorrect !");
				redirect("admin");
		}
	}
}

?>