<?php
Class M_voucher extends CI_Model{
	public function insert($data){
		return $this->db->insert_batch('t_voucher', $data); 
	}

	public function get($limit = 100, $offset = 0){
		$this->db->where('id_voucher not in (select id_voucher from t_beli_voucher)');
		$query = $this->db->get('t_voucher',$limit, $offset);
		return $query->result_array();
	}

	public function get_num_rows(){
		$this->db->where('id_voucher not in (select id_voucher from t_beli_voucher)');
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

	//cek apakah voucher valid (status voucher sudah terjual)
	public function is_voucher_valid($kode_voucher){
		$query = $this->db->get_where('t_voucher',array('kode_voucher' => $kode_voucher,'status' => 1));
		if($query->num_rows() == 1){
			return true;
		}
		else{
			return false;
		}
	}

	//cek apakah voucher sudah pernah digunakan
	public function is_used($kode_voucher){
		$this->db->join('t_voucher','t_voucher.id_voucher = t_beli_voucher.id_voucher');
		$query = $this->db->get_where('t_beli_voucher',array('t_voucher.kode_voucher' => $kode_voucher,'status' => 1));
		if($query->num_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}

	public function get_by_kode($kode_voucher){
		$query = $this->db->get_where('t_voucher',array('kode_voucher' => $kode_voucher));
		return $query->row_array();
	}

	public function beli_voucher($data){
		return $this->db->insert('t_beli_voucher',$data);
	}

	public function get_arsip($limit = 100, $offset = 0){
		$this->db->select('t_user.username, t_voucher.kode_voucher, t_voucher.saldo, t_beli_voucher.tanggal_beli');
		$this->db->join('t_user','t_user.id_user = t_beli_voucher.id_user');
		$this->db->join('t_voucher','t_voucher.id_voucher = t_beli_voucher.id_voucher');
		$query = $this->db->get('t_beli_voucher',$limit, $offset);
		return $query->result_array();
	}

	public function get_arsip_num_rows(){
		$this->db->select('t_user.username, t_voucher.kode_voucher, t_voucher.saldo, t_beli_voucher.tanggal_beli');
		$this->db->join('t_user','t_user.id_user = t_beli_voucher.id_user');
		$this->db->join('t_voucher','t_voucher.id_voucher = t_beli_voucher.id_voucher');
		$query = $this->db->get('t_beli_voucher');
		return $query->num_rows();
	}
}