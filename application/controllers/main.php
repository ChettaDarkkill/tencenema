<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class main extends SecureController {
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_movie');
	}
	public function index()
	{   
		$get_movie = $this->m_movie->get_movie();
		$data['movie_detail'] = $get_movie;

		$this->load->view('include/header');
		$this->load->view('main',$data);
		$this->load->view('include/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */