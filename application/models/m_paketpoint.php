<?php
Class M_paketpoint extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}
	
	public function add_paket($paket_point)
	{
		if($this->db->insert('t_paket', $paket_point))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	
	public function get($id)
	{	
		$query = $this->db->get('t_paket', $id);
		return $query->row_array();	
	}
	
	
	public function get_paket()
	{	
		$query = $this->db->get('t_paket');
		return  $query->result_array();
	}
	
	public function update($data,$id)
	{
		$this->db->where('id_paket', $id);
		$this->db->update('t_paket', $data); 
	}
		
	public function delete($id)
	{
		$this->db->where('id_paket', $id);
		$this->db->delete('t_paket'); 
	}
	
}
