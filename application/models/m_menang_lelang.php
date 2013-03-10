<?php
Class M_menang_lelang extends CI_Model{
	public function is_pemenang_exist($id_lelang,$id_user){
		$this->db->join('t_ikut_lelang','t_ikut_lelang.id_ikut_lelang = t_menang_lelang.id_ikut_lelang');
		$query = $this->db->get_where('t_menang_lelang',array('t_ikut_lelang.id_user' => $id_user,'t_ikut_lelang.id_lelang' => $id_lelang));
		if($query->num_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}

	public function insert($data){
		return $this->db->insert('t_menang_lelang',$data);
	}

	public function update_konfirmasi($data,$id){
		$this->db->where('id_menang_lelang', $id);
		return $this->db->update('t_menang_lelang', $data); 
	}

	public function get_testimoni($limit = 100,$offset = 0){
		$this->db->join('t_ikut_lelang','t_ikut_lelang.id_ikut_lelang = t_menang_lelang.id_ikut_lelang');
		$this->db->join('t_lelang','t_lelang.id_lelang = t_ikut_lelang.id_lelang');
		$this->db->join('t_user','t_user.id_user = t_ikut_lelang.id_user');
		$query = $this->db->get_where('t_menang_lelang',array('konfirmasi' => 1),$limit,$offset);
		return $query->result_array();
	}
}