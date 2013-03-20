<?php
Class M_voucher extends CI_Model{
	public function insert($data){
		return $this->db->insert_batch('t_voucher', $data); 
	}

	public function get($limit = 100, $offset = 0){
		$query = $this->db->get('t_voucher',$limit, $offset);
		return $query->result_array();
	}

	public function get_num_rows(){
		$query = $this->db->get('t_voucher');
		return $query->num_rows();
	}

	public function is_voucher_exist($kode_voucher){
		$query = $this->db->get_where('t_voucher',array('kode_voucher' => $kode_voucher));
		if($query->num_rows() == 1){
			return true;
		}
		else{
			return false;
		}
	}

	public function get_voucher($id){
		$query = $this->db->get_where('t_voucher',array('id_voucher' => $id));
		return $query->row_array();
	}

	public function set_status($id,$status){
		$data = array(
			'status' => $status
			);
		$this->db->where('id_voucher', $id);
		return $this->db->update('t_voucher', $data); 
	}
}