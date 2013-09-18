<?php
class Support extends CI_Controller
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
		$this->template->set_template('default_inner_submenu');
		$this->template->write_view('content', 'support/faq');
		$this->template->render();
	}
	public function videos()
	{
		$this->template->set_template('default_inner_submenu');
		$this->template->write_view('content', 'support/videos');
		$this->template->render();
	}
	public function contact()
	{
		$this->template->set_template('default_inner_submenu');
		$this->template->write_view('content', 'support/contact_us');
		$this->template->render();
	}
	
	public function send_contact(){
		if($this->input->post()){
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$subject = $this->input->post('subject');
			$comments = $this->input->post('comments');
			
			$message = "";
			$message = "Dear Admin,<br /> We received request from GraderJoe. See the details below<br /><br />";
			$message .= "Name: ".$name."<br /><br />Email: ".$email."<br /><br />Subject: ".$subject."<br /><br />Comments: <br />".$comments;
			$this->load->library('email');

/*			$config['smtp_host'] = 'smtp.google.com';
			$config['smtp_user'] = 'no-reply@graderjoe.com';
			$config['smtp_pass'] = 'noReplyGJoe';
			$config['charset'] = 'iso-8859-1';
			$config['wordwrap'] = TRUE;

			$this->email->initialize($config);
*/

			$this->email->from('no-reply@graderjoe.com', 'GraderJoe-ContactUs');
			$this->email->to('support@graderjoe.com');
			
			$this->email->subject($subject);
			$this->email->message($message);
			
			if($this->email->send()){
				$this->session->set_userdata('message','Your request submited successfully! We will get back you soon.');
			}else{
				$this->session->set_userdata('message','Unable to send your request. try again later.');
			}
			
			//echo $this->email->print_debugger();	
		}else{
			$this->session->set_userdata('message','Please fill the all below fields.');
		}
		
		redirect('support/contact');
	}
	
}
?>
