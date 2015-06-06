<?

class m_register extends CI_Model
{
	public function insert_user($data = "")
	{   
		$this->db->set('cdate', 'NOW()', FALSE);
        $this->db->set('udate', 'NOW()', FALSE);
		$this->db->insert('user', $data); 
	}
}