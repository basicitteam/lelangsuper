<?php
Class chat extends CI_Controller{
	
	public function index(){
	if(is_user() == false){
    	$response['status'] = 'false';
    	$response['msg'] = 'Anda Belum Login!';
    }
    else{
    	if(strlen($this->input->post('chatmsg')) < 15){
    		$data = array(
    		'id_user' => $this->session->userdata('id_user'),
    		'msg' => $this->input->post('chatmsg')
    		);
	    	$this->db->insert('chat',$data);
	    	$response['status'] = 'true';
    	}
    	else{
    		$response['status'] = 'false';
    		$response['msg'] = 'Max 15 karakter';
    	}
    }
    echo json_encode($response);
	}

	public function get(){
		$this->db->order_by('chat.chat_timestamp','DESC');
		$this->db->select('t_user.username, chat.msg, chat.chat_timestamp');
		$this->db->join('t_user','t_user.id_user = chat.id_user');
		$query = $this->db->get('chat',5);
		$response = $query->result_array();
		echo json_encode($response);
	}
}