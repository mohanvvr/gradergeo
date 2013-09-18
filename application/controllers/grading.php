<?php
class grading extends CI_Controller
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
		$this->get_file_name("sample images");
		$this->template->set_template('default_inner');
		$this->template->write_view('content', 'grading/submit');
		$this->template->render();
	}
	
	function get_file_name($destination){
		$doc_folder = './assets/answer_sheets/'.$destination."/";
		$result = get_dir_file_info($doc_folder, $top_level_only = TRUE);
		//var_dump($result);
		$arr_stu_no =  array(); $arr_qus_no = array(); $file_name = "";
		foreach($result as $val){
			if(preg_match('/(S[0-9]{1,})(Q[0-9]{1,})/',$val['name'],$arr_match)){
				if(!in_array($arr_match[1],$arr_stu_no))
				$arr_stu_no[] = $arr_match[1];
				if(!in_array($arr_match[2],$arr_qus_no))
				$arr_qus_no[] = $arr_match[2];
				$file_name[] = $val['name'];
			}
		}
		echo "<pre>";
		var_dump($file_name);
		echo "</pre><pre>";
		var_dump($arr_qus_no);
		echo "</pre><pre>";
		var_dump($arr_stu_no);
		echo "</pre>";
	}
}
?>