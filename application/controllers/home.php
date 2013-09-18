<?php
class home extends CI_Controller
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
	public function index()
	{
		$this->template->set_template('default');
		$this->template->write_view('content', 'static/home');
		$this->template->render();
	}
	public function submittests()
	{
		$this->template->set_template('default_inner');
		$this->template->write_view('content', 'static/tests_grade');
		$this->template->render();
	}
	public function answer_sheet()
	{
		$this->template->set_template('default_inner');
		$this->template->write_view('content', 'static/answer_sheet');
		$this->template->render();
	}
	
	public function terms()
	{
		$this->template->set_template('default_inner');
		$this->template->write_view('content', 'static/terms');
		$this->template->render();
	}
	
	public function policy()
	{
		$this->template->set_template('default_inner');
		$this->template->write_view('content', 'static/policy');
		$this->template->render();
	}
	
}
?>