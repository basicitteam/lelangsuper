<?php
Class M_user extends CI_Model{
	
	public function insert($data){
		return $this->db->insert('t_user', $data); 
	}

	public function cek_akun($username,$password){
		$query = $this->db->get_where('t_user',array('username' => $username, 'password' => md5($password), 'status' => '1'));
		if($query->num_rows() == 1){
			return true;
		}
		else
		{
			return false;
		}
	}

	public function get_by_username($username){
		$query = $this->db->get_where('t_user',array('username' => $username));
		if($query->num_rows() == 1){
			return $query->row_array();
		}
		else
		{
			return false;
		}	
	}

	public function update_saldo($id,$data){
		$this->db->where('id_user', $id);
		return $this->db->update('t_user', $data); 
	}

	public function get_saldo($id){
		$this->db->select('saldo');
		$query = $this->db->get_where('t_user',array('id_user' => $id));
		$user = $query->row_array();
		return $user['saldo'];
	}

	public function get_user($id){
		$query = $this->db->get_where('t_user',array('id_user' => $id));
		return $query->row_array();
	}

	public function update($id,$data){
		$this->db->where('id_user', $id);
		return $this->db->update('t_user', $data); 
	}

	public function cek_password($password){
		$query = $this->db->get_where('t_user',array('id_user' => $this->session->userdata('id_user'), 'password' => md5($password)));
		if($query->num_rows() == 1){
			return true;
		}
		else
		{
			return false;
		}
	}

	public function cek_level($id_user){
		$query = $this->db->get_where('t_ikut_lelang',array('id_user' => $id_user));
		if($query->num_rows() > 0){
			$this->db->join('t_ikut_lelang','t_ikut_lelang.id_ikut_lelang = t_menang_lelang.id_ikut_lelang');
			$menang = $this->db->get_where('t_menang_lelang',array('t_ikut_lelang.id_user' => $id_user));
			if($menang->num_rows() > 0){
				return 3;
			}
			else{
				return 2;
			}
			//return $menang->num_rows();
		}
		else
		{
			return 1;
		}
	}

	public function get_arsip_tawar($id_user,$limit = 100,$offset = 0){
		$this->db->join('t_lelang','t_lelang.id_lelang = t_ikut_lelang.id_lelang');
		$query = $this->db->get_where('t_ikut_lelang',array('id_user' => $id_user),$limit,$offset);
		if($query->num_rows() > 0){
			return $query->result_array();
		}
		else{
			return false;
		}
	}

	public function get_arsip_tawar_num_rows($id_user){
		$this->db->join('t_lelang','t_lelang.id_lelang = t_ikut_lelang.id_lelang');
		$query = $this->db->get_where('t_ikut_lelang',array('id_user' => $id_user));
		if($query->num_rows() > 0){
			return $query->num_rows();
		}
		else{
			return false;
		}
	}

	public function get_arsip_menang($id_user,$limit = 100,$offset = 0){
		$this->db->join('t_ikut_lelang','t_menang_lelang.id_ikut_lelang = t_ikut_lelang.id_ikut_lelang');
		$this->db->join('t_lelang','t_lelang.id_lelang = t_ikut_lelang.id_lelang');
		$query = $this->db->get_where('t_menang_lelang',array('t_ikut_lelang.id_user' => $id_user),$limit,$offset);
		if($query->num_rows() > 0){
			return $query->result_array();
		}
		else{
			return false;
		}
	}

	public function get_arsip_menang_num_rows($id_user){
		$this->db->join('t_ikut_lelang','t_menang_lelang.id_ikut_lelang = t_ikut_lelang.id_ikut_lelang');
		$this->db->join('t_lelang','t_lelang.id_lelang = t_ikut_lelang.id_lelang');
		$query = $this->db->get_where('t_menang_lelang',array('t_ikut_lelang.id_user' => $id_user));
		if($query->num_rows() > 0){
			return $query->num_rows();
		}
		else{
			return false;
		}
	}

	public function get_arsip_saldo($id_user,$limit = 100, $offset = 0){
		$this->db->join('t_beli_paket','t_beli_paket.id_beli_paket = t_log_saldo.id_beli_paket');
		$this->db->join('t_paket','t_paket.id_paket = t_beli_paket.id_paket');
		$query = $this->db->get_where('t_log_saldo',array('t_beli_paket.id_user' => $id_user),$limit,$offset);
		return $query->result_array();
	}

	public function get($limit = 100,$offset = 0){
		$this->db->join('(SELECT id_user, count(id_user) as jmlh_ikut FROM `t_ikut_lelang` group by id_user) as t_ikut','t_ikut.id_user = t_user.id_user','left');
		$this->db->join('(SELECT id_user, count(id_user) as jmlh_menang FROM `t_menang_lelang` join t_ikut_lelang on t_ikut_lelang.id_ikut_lelang = t_menang_lelang.id_ikut_lelang group by id_user) as t_menang','t_menang.id_user = t_user.id_user','left');
		$query = $this->db->get('t_user',$limit,$offset);
		return $query->result_array();
	}

	public function get_num_rows(){
		$this->db->join('(SELECT id_user, count(id_user) as jmlh_ikut FROM `t_ikut_lelang` group by id_user) as t_ikut','t_ikut.id_user = t_user.id_user','left');
		$this->db->join('(SELECT id_user, count(id_user) as jmlh_menang FROM `t_menang_lelang` join t_ikut_lelang on t_ikut_lelang.id_ikut_lelang = t_menang_lelang.id_ikut_lelang group by id_user) as t_menang','t_menang.id_user = t_user.id_user','left');
		$query = $this->db->get('t_user');
		return $query->num_rows();
	}

}
