<?php
Class M_help extends CI_Model{
	
	public function get($limit = 100, $offset = 0){
		$query = $this->db->get('t_article',$limit, $offset);
		return $query->result_array();
	}

	public function get_help($id){
		$query = $this->db->get_where('t_article',array('id_article' => $id));
		return $query->row_array();
	}

	public function update($id,$article){
		$data = array(
			'article' => $article
			);
		$this->db->where('id_article', $id);
		return $this->db->update('t_article', $data); 
	}
}