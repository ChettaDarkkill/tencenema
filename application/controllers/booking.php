<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class booking extends SecureController {
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_movie');
	}
	public function get_booking($id)
	{   
		$data['movies'] = $this->m_movie->get_move_search($id);
		$this->load->view('include/header');
		$this->load->view('booking',$data);
		$this->load->view('include/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */