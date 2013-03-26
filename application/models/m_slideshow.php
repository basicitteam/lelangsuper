<?php
Class M_slideshow extends CI_Model{

	 public function insert($data){
	 	return $this->db->insert('slideshow',$data);
	 }

	 public function get_num_slideshow(){
	 	$query = $this->db->get('slideshow');
	 	return $query->num_rows();
	 }

	 public function get(){
	 	$this->db->order_by('urutan','ASC');
	 	$query = $this->db->get('slideshow');
	 	return $query->result_array();
	 }

	 public function get_slideshow($id){
	 	$this->db->where('id_slideshow',$id);
	 	$query = $this->db->get('slideshow');
	 	return $query->row_array();
	 }
}