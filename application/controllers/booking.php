<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class booking extends SecureController {
	function __construct()
	{
		parent::__construct();
	}
	public function get_booking($id)
	{
		$this->load->view('include/header');
		$this->load->view('booking');
		$this->load->view('include/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */