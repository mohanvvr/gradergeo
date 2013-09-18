<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Uploader extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		//$this->load->model('GeneralModel');
		/* Standard Libraries */
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');
		//$this->load->library('ion_auth');
		/* ------------------ */	
	}
	
	function _example_output($output = null)
	{
		$this->template->set_template('default_inner');
		$this->template->write_view('content','uploader/uploader.php',$output);
		$this->template->render();
		//$this->load->view('example.php',$output);	
	}
	
	function index($success_msg = "")
	{
		$tablename='tbl_gallery';
		$this->load->library('Image_CRUD');
		$image_crud = new Image_CRUD();
	
		$image_crud->set_primary_key_field('id');
		$image_crud->set_url_field('url');
		$image_crud->set_table($tablename)
		->set_ordering_field('priority')
		->set_image_path('assets/uploads/gallery');
			
		$output = $image_crud->render();
		$this->_example_output($output);
	}
	
	function create_folder(){
		$email = $this->input->post('email');
		$folder_name = md5($email.strtotime('now'));
		$_SESSION[$email] = $folder_name;
		$_SESSION['mohan'] = 'Venugopal';
		echo $folder_name;
		var_dump($_SESSION);
	}
	
}