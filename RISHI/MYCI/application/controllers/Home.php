<?php
	
class Home extends CI_Controller
{
	function demo1()
	{
		$this->load->view("about");
	}
	function demo2()
	{
		$this->load->view("help");
	}
	function demo3()
	{
		$this->load->view("contact");
	}
}	


?>
