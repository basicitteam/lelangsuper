<?php
Class M_admin extends CI_Model{
	public function cek_akun($username,$password){
		$query = $this->db->get_where('t_admin',array('username_admin' => $username, 'password_admin' => md5($password)));
		if($query->num_rows() == 1){
			return true;
		}
		else
		{
			return false;
		}
	}

	public function get_by_username($username){
		$query = $this->db->get_where('t_admin',array('username_admin' => $username));
		if($query->num_rows() == 1){
			return $query->row_array();
		}
		else
		{
			return false;
		}
	}	
}