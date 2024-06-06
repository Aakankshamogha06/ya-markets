<?php
class Welcome_bonus_model extends CI_Model
{
	public function add_user($data)
	{
	   
		$this->db->insert('claim_bonus', $data);
		return $this->db->insert_id();
	}
}


?>