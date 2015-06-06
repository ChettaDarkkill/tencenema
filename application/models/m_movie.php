<?

class m_movie extends CI_Model
{
	public function get_movie($data = "")
	{   
		$sql  = "select * from movies ";
        $result = $this->db->query($sql);
        $result = $result->result_array();
        return $result ; 
	}
}