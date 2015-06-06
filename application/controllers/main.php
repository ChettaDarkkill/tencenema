<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class main extends SecureController {
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_movie');
		$this->load->model('m_booking');
	}
	public function index()
	{   
		$get_movie = $this->m_movie->get_movie();
		$data['movie_detail'] = $get_movie;
		$data['history'] = $this->m_booking->get_movie_history_booking();
		$this->load->view('include/header');
		$this->load->view('main',$data);
		$this->load->view('include/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */