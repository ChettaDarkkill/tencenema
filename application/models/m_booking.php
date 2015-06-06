<?

class m_booking extends CI_Model
{
	public function insert_booking($data,$name7)
	{
		$this->db->set('cdate', 'NOW()', FALSE);
        $this->db->set('udate', 'NOW()', FALSE);
		$this->db->insert('booking', $data); 

		$insert_id = $this->db->insert_id();

		   $data = array(
				   'id' 		    => '',
				   'fk_booking_id'  => $insert_id ,
				   'status'         => 'complete',
				   'price'          => $name7
			  );
		$this->db->set('cdate', 'NOW()', FALSE);
        $this->db->set('udate', 'NOW()', FALSE);
		$this->db->insert('payment', $data); 
	}
	public function get_movie_user_booking($id)
	{
		$movie_id = $id;
		$user_id =  $this->session->userdata('logged_in')['id'];
		$sql  = "select seatzone from booking where fk_movies_id = $movie_id";
        $result = $this->db->query($sql);
        $result = $result->result_array();
        return $result ; 
	}
	public function get_movie_history_booking() 
	{
		$user_id =  $this->session->userdata('logged_in')['id'];
		$sql  = "
		      select * from booking a 
		      left join movies b on a.fk_movies_id = b.id
		      where fk_user_id = $user_id";
        $result = $this->db->query($sql);
        $result = $result->result_array();
        return $result ; 
	}
}