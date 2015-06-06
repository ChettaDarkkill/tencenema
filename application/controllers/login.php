<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('user');
	}
	public function index()
	{	
		$this->load->view('include/header');
		$this->load->view('login');
		$this->load->view('include/footer');
	}
	public function check_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if($username == 'admin' && $password == 'admin')
		{
			redirect('admin','refresh');
		} 
		$result = $this->user->login($username, $password);
		   if($result)
		   {
		     $sess_array = array();
		     foreach($result as $row)
		     {
		       $sess_array = array(
		         'id' 		=> $row->id,
		         'username' => $row->username,
		         'fname' 	=> $row->fname,
		         'lname'	=> $row->lname
		       );
		       $this->session->set_userdata('logged_in', $sess_array);
		     }
		     $this->session->set_flashdata('show_success_login', 'ลงชื่อเข้าใช้เรียบร้อย');
		     redirect('main','refresh');
		   }
		   else
		   {
		   	 $this->session->set_flashdata('cannot_login', 'username หรือ password ผิด');
		     redirect('login','refresh');
		   }
	}
	public function logout()
	 {
	   $this->session->unset_userdata('logged_in');
	   redirect(site_url("main/index"));
	 }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */