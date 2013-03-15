<?php
Class M_lelang extends CI_Model{
	public function insert($data){
		return $this->db->insert('t_lelang',$data);
	}

	public function get($limit = 100, $offset = 0){
		$query = $this->db->get('t_lelang',$limit, $offset);
		return $query->result_array();
	}

	//num rows buat paging
	public function get_num_rows(){
		$query = $this->db->get('t_lelang');
		return $query->num_rows();
	}

	public function get_upcoming($limit = 100, $offset = 0){
		$this->db->order_by("waktu_selesai", "asc"); 
		$this->db->where('waktu_selesai > ',time());
		$query = $this->db->get('t_lelang',$limit, $offset);
		return $query->result_array();	
	}

	public function get_recent($limit = 100, $offset = 0){
		$this->db->order_by("waktu_selesai", "asc"); 
		$this->db->where('waktu_selesai < ',time());
		$this->db->join('t_ikut_lelang','t_ikut_lelang.id_lelang = t_lelang.id_lelang');
		$this->db->join('t_user','t_user.id_user = t_ikut_lelang.id_user');
		$this->db->join('t_menang_lelang','t_menang_lelang.id_ikut_lelang = t_ikut_lelang.id_ikut_lelang');
		$query = $this->db->get('t_lelang',$limit, $offset);
		return $query->result_array();	
	}
	
	/*public function get_imgslide($limit = 50, $offset = 0){
		$this->db->order_by("waktu_mulai", "asc"); 
		$this->db->where('waktu_selesai > ',time());
		$query = $this->db->get('t_lelang',$limit, $offset);
		return $query->row_array();	
	}*/

	public function get_lelang($id){
		$query = $this->db->get_where('t_lelang',array('id_lelang' => $id));
		return $query->row_array();	
	}

	public function update($data,$id){
		$this->db->where('id_lelang', $id);
		return $this->db->update('t_lelang', $data); 
	}

	public function get_absensi($id){
		$this->db->order_by('waktu_daftar','DESC');
		$this->db->select('t_user.username, t_ikut_lelang.bid');
		$this->db->join('t_user','t_user.id_user = t_ikut_lelang.id_user');
		$query = $this->db->get_where('t_ikut_lelang',array('id_lelang' => $id));
		return $query->result_array();
	}

	public function is_periode_exist($id){
		$query = $this->db->get_where('t_periode_lelang',array('id_lelang' => $id));
		if($query->num_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}

	public function get_periode_terbaru($id){
		$this->db->order_by('periode','DESC');
		$query = $this->db->get_where('t_periode_lelang',array('id_lelang' => $id));
		return $query->row_array();
	}

	public function get_jmlh_absen($id){
		$query = $this->db->get_where('t_ikut_lelang',array('id_lelang' => $id));
		return $query->num_rows();
	}

	public function insert_periode($data){
		return $this->db->insert('t_periode_lelang',$data);
	}

	public function get_bidder($id_lelang){
		$this->db->order_by('waktu_tawar','DESC');
		$this->db->select('t_user.username, t_tawar.tawar');
		$this->db->join('t_ikut_lelang','t_ikut_lelang.id_ikut_lelang = t_tawar.id_ikut_lelang');
		$this->db->join('t_user','t_user.id_user = t_ikut_lelang.id_user');
		$query = $this->db->get_where('t_tawar',array('t_ikut_lelang.id_lelang' => $id_lelang),15,0);
		return $query->result_array();
	}

	public function get_jmlh_bidder_periode($id_periode){
		$this->db->group_by("id_ikut_lelang"); 
		$query = $this->db->get_where('t_log_lelang',array('id_periode_lelang' => $id_periode));
		return $query->num_rows();
	}

	public function is_user_exist_on_periode($id_periode,$id_user){
		$this->db->join('t_ikut_lelang','t_ikut_lelang.id_ikut_lelang = t_log_lelang.id_ikut_lelang');
		$query = $this->db->get_where('t_log_lelang',array('t_log_lelang.id_periode_lelang' => $id_periode,'t_ikut_lelang.id_user' => $id_user));
		if($query->num_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}

	public function insert_tawar($data){
		return $this->db->insert('t_tawar',$data);
	}

	public function update_periode($data,$id_periode){
		$this->db->where('id_periode_lelang', $id_periode);
		return $this->db->update('t_periode_lelang', $data); 
	}

	public function get_periode_sebelumnya($periode,$id_lelang){
		$query = $this->db->get_where('t_periode_lelang',array('periode' => $periode - 1,'id_lelang' => $id_lelang));
		return $query->row_array();
	}

	public function get_pemenang($id_lelang){
		$this->db->order_by('t_tawar.waktu_tawar','DESC');
		$this->db->select('t_user.username, t_user.id_user');
		$this->db->join('t_ikut_lelang','t_ikut_lelang.id_ikut_lelang = t_tawar.id_ikut_lelang');
		$this->db->join('t_user','t_user.id_user = t_ikut_lelang.id_user');
		$query = $this->db->get_where('t_tawar',array('t_ikut_lelang.id_lelang' => $id_lelang));
		if($query->num_rows() > 0){
			return $query->row_array();
		}
		else{
			return false;
		}
	}

	public function delete($id){
		$this->db->where('id_lelang', $id);
		$this->db->delete('t_lelang');
	}

	public function get_jumlah_bid_user($id_ikut_lelang){
		$query = $this->db->get_where('t_tawar',array('id_ikut_lelang' => $id_ikut_lelang, 'golden_periode' => 0));
		return $query->num_rows();
	}

	public function get_ikut_lelang($id_lelang){
		$this->db->order_by('waktu_daftar','DESC');
		$query = $this->db->get_where('t_ikut_lelang',array('id_lelang' => $id_lelang));
		return $query->result_array();
	}

	public function clean_lelang($id_lelang){
		$this->db->where('t_ikut_lelang.id_lelang',$id_lelang);
		$query = $this->db->get('t_ikut_lelang');
		$ikut_lelang = $query->result_array();
		foreach($ikut_lelang as $key) {
			$this->delete_tawar($key['id_ikut_lelang']);
			$this->delete_menang($key['id_ikut_lelang']);
		}
		$this->db->where('t_ikut_lelang.id_lelang',$id_lelang);
		return $this->db->delete('t_ikut_lelang');
	}

	public function delete_tawar($id_ikut_lelang){
		$this->db->where('id_ikut_lelang', $id_ikut_lelang);
		return $this->db->delete('t_tawar');
	}

	public function delete_menang($id_ikut_lelang){
		$this->db->where('id_ikut_lelang', $id_ikut_lelang);
		return $this->db->delete('t_menang_lelang');
	}

	//get user yang belum dapet point golden
	public function get_user_point_gp_null($id_lelang){
		$this->db->where('point_gp IS NULL');
		$this->db->where('id_lelang',$id_lelang);
		$query = $this->db->get('t_ikut_lelang');
		if($query->num_rows() > 0){
			return $query->result_array();
		}
		else{
			return false;
		}
	}

	public function update_point_golden($id_ikut_lelang,$point_gp){
		$update_point = array(
			'point_gp' => $point_gp,
			);
		$this->db->where('id_ikut_lelang', $id_ikut_lelang);
		return $this->db->update('t_ikut_lelang', $update_point); 
	}

	public function get_saldo_golden($id_ikut_lelang){
		$this->db->where('id_ikut_lelang',$id_ikut_lelang);
		$query = $this->db->get('t_ikut_lelang');
		$result = $query->row_array();
		return $result['point_gp'];
	}

}
