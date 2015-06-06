<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class main extends SecureController {
	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('include/header');
		$this->load->view('main');
		$this->load->view('include/footer');
	}
	public function test()
	{
		$this->load->helper('test_method');
		echo test_method('Hello World www');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */