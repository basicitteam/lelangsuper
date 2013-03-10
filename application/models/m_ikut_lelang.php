<?php
Class M_ikut_lelang extends CI_Model{
	public function cek_absen($id_lelang,$id_user){
		$query = $this->db->get_where('t_ikut_lelang',array('id_user' => $id_user,'id_lelang' => $id_lelang));
		if($query->num_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}

	public function insert($data){
		return $this->db->insert('t_ikut_lelang',$data);
	}

	public function get_ikut_lelang($id_lelang,$id_user){
		$query = $this->db->get_where('t_ikut_lelang',array('id_user' => $id_user,'id_lelang' => $id_lelang));
		return $query->row_array();
	}
}