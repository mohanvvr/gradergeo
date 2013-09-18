<?php
class auth extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
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
	public function signup()
	{
		$this->template->set_template('default_inner');
		$this->template->write_view('content', 'auth/signup');
		$this->template->render();
	}
	public function login()
	{
		$this->template->set_template('default_inner');
		$this->template->write_view('content', 'auth/login');
		$this->template->render();
	}
	
}
?>