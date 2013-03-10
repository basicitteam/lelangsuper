<?php
Class M_beli_paket extends CI_Model{
	public function insert($data){
		$this->db->insert('t_beli_paket',$data);
		return $this->db->insert_id();
	}

	public function get_tagihan($id){
		$this->db->join('t_paket','t_paket.id_paket = t_beli_paket.id_paket');
		$query = $this->db->get_where('t_beli_paket',array('id_beli_paket' => $id));
		return $query->row_array();
	}

	public function get_tagihan_user($id_user){
		$this->db->order_by('t_beli_paket.waktu','DESC');
		$this->db->join('t_paket','t_paket.id_paket = t_beli_paket.id_paket');
		$query = $this->db->get_where('t_beli_paket',array('t_beli_paket.id_user' => $id_user));
		return $query->result_array();
	}

	public function get($limit = 100, $offset = 0){
		$this->db->where('t_beli_paket.konfirmasi','1');
		$this->db->order_by("waktu", "desc"); 
		$this->db->join('t_user','t_user.id_user = t_beli_paket.id_user');
		$this->db->join('t_paket','t_paket.id_paket = t_beli_paket.id_paket');
		$query = $this->db->get('t_beli_paket',$limit,$offset);
		return $query->result_array();	
	}

	public function get_num_rows(){
		$this->db->order_by("waktu", "desc"); 
		$this->db->join('t_user','t_user.id_user = t_beli_paket.id_user');
		$this->db->join('t_paket','t_paket.id_paket = t_beli_paket.id_paket');
		$query = $this->db->get('t_beli_paket');
		return $query->num_rows();
	}

	public function update_validasi($id){
		$data = array(
			'validasi' => '1'
			);
		$this->db->where('id_beli_paket', $id);
		return $this->db->update('t_beli_paket', $data); 
	}

	public function update_konfirmasi($id,$data){
		$this->db->where('id_beli_paket', $id);
		return $this->db->update('t_beli_paket', $data); 
	}

	public function get_list_bank(){
		$query = $this->db->get('t_rekening');
		return $query->result_array();
	}

	public function insert_log($data){
		return $this->db->insert('t_log_saldo',$data);
	}
}