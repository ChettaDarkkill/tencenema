<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class register extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_register');
	}
	public function insert_user()
	{
		$fname 		= $this->input->post('firstname');
		$lname 		= $this->input->post('lastname');
		$username	= $this->input->post('username');
		$password   = md5($this->input->post('password'));

		$data = array(
		   'id' 		=> '',
		   'fname'   	=> $fname,
		   'lname'   	=> $lname,
		   'username'	=> $username,
		   'password'	=> $password,
		);
		$this->m_register->insert_user($data);
		$this->session->set_flashdata('show_success', 'บันทึกข้อมูลเรียบร้อย');
		redirect('','refresh');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */