<?php
	class Instrument_model extends CI_Model{
		
		
		public function instrument_data_submit($data){
			$data = [
				'instrument_name' => $data['instrument_name'],
				'instrument_type' => $data['instrument_type'],
		];
				if ($this->db->insert('instruments', $data)) {
					
					return $data;
				
				} else {
					return false;
				}
			}

	  public function instrument_view()
		{
		$result = $this->db->query("SELECT * FROM `instruments`");
		if ($result->num_rows() > 0) {
				return $result->result();
			} else {
				return 0;
			}
		}


	  public function instrument_delete($id)
		{
			$this->db->where('id', $id);
			return $this->db->delete('instruments');
		}


		public function instrument_update_data($data){
			echo("hi");
			$newdata = [
				'instrument_name' => $data['instrument_name'],
				'instrument_type' => $data['instrument_type'],
				
		];
		print_r($newdata);
		$this->db->where('id', $data['id']);
			if ($this->db->update('instruments', $newdata)) {
			
				return $newdata;
			} else {
				return false;
			}
		}


		public function instrument_edit($id)
		{
			
		$result = $this->db->query("SELECT * FROM `instruments` where id=$id");
		if ($result->num_rows() > 0) {
				return $result->result();
			} else {
				return 0;
			}
		}


		public function role_fetch()
		{
			
			$role_data = $this->db->query("SELECT * FROM `roles`");
	
			$fetch = $role_data->num_rows();
			if ($fetch > 0) {
				return $fetch = $role_data->result_array();
				
			} else {
				return false;
			}
		}

	}
