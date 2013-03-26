<?php
Class M_chat extends CI_Model{
	
	public function get_setting(){
	$this->db->where('id_chat_setting',1);
	$query = $this->db->get('chat_setting');
	$return = $query->row_array();
	return $return['status'];
	}

	public function update_setting($status){
		$data = array(
			'status' => $status,
			);
		$this->db->where('id_chat_setting',1);
		return $this->db->update('chat_setting',$data);
	}
}