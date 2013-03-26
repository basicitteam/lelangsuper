<?php
Class settings extends CI_Controller{
	
	public function chat(){
		$data['setting'] = $this->M_chat->get_setting();
		$header['nav'] = 'chat';
		$this->load->view('admin/templates/header',$header);
		$this->load->view('admin/settings/chat',$data);
		$this->load->view('admin/templates/footer');
	}

	public function set_chat(){
		if($this->M_chat->get_setting() == 1){
			$this->M_chat->update_setting(0);
		}
		else{
			$this->M_chat->update_setting(1);	
		}
		redirect('admin/settings/chat');
	}

	public function slideshow(){
		$header['nav'] = 'chat';
		$this->load->view('admin/templates/header',$header);
		$this->load->view('admin/settings/slideshow');
		$this->load->view('admin/templates/footer');
	}
}