<?php
class Submittest extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->library('grocery_crud');  
		$this->load->library('form_validation');
		$this->load->library('session');
	    $this->load->helper('form');
	    $this->load->helper('url');
	}
	public function index($msg="")
	{
		$output = "";
		if($msg == 'success'){
			$output['msg'] =  "success";
		}
		$this->template->set_template('default_inner');
		$this->template->write_view('content', 'submittest/uploader',$output);
		$this->template->render();
	}
	
}
?>