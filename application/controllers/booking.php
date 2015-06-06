<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class booking extends SecureController {
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_movie');
		$this->load->model('m_booking');
	}
	public function get_booking($id)
	{   
		$data['movies'] = $this->m_movie->get_move_search($id);
		$data['get_movie_user_booking'] = $this->m_booking->get_movie_user_booking($id);
		$check = array();
		foreach ($data['get_movie_user_booking']  as $key => $value) {
			array_push($check , $value['seatzone']);
		}
		$data['check'] = $check;
		$this->load->view('include/header');
		$this->load->view('booking',$data);
		$this->load->view('include/footer');
	}
	public function save_booking($id)
	{  
      $name1 = $this->input->post('name1');
      $name2 = $this->input->post('name2');
      $name3 = $this->input->post('name3');
      $name4 = $this->input->post('name4');
      $name5 = $this->input->post('name5');
      $name6 = $this->input->post('name6');
      $name7 = $this->input->post('name7');
   
	  $movies_id = $id;
	  $user_id =  $this->session->userdata('logged_in')['id'];
	  $booking  = $this->input->post('room');
	  if($this->input->post('room'))
	  {
	  	  foreach ($booking as $key => $row) {
			  $data = array(
				   'id' 		    => '',
				   'fk_user_id'   	=> $user_id,
				   'fk_movies_id'   => $movies_id,
				   'seatzone'       => $row
			  );
		  	 $this->m_booking->insert_booking($data,$name7);
	      }
	  }
	  else
	  {

	  }
	    $this->session->set_flashdata('show_success', 'บันทึกข้อมูลเรียบร้อย');
	    redirect('main','refresh');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */