<?php
Class login extends CI_Controller{
	public function index(){
		$data['nama_admin'] = $this->session->userdata('nama_admin');
		$this->load->view('templates/header',$data);
		$this->load->view('admin/login');
		$this->load->view('templates/footer');
	}

	public function proses(){
		if($this->M_admin->cek_akun($this->input->post('username'),$this->input->post('password'))){
			$info = $this->M_admin->get_by_username($this->input->post('username'));
			$newdata = array(
				'logged_in' => 'true',
				'id_admin' => $info['id_admin'],
				'username_admin' => $info['username_admin'],
				'nama_admin' => $info['nama_admin'],
				'role' => 'admin'
				);
			$this->session->set_userdata($newdata);
			print_r($this->session->all_userdata());
			redirect('admin/lelang');
		}
		else
		{
			$this->session->set_flashdata('msg','<p class="alert alert-danger">Username/Password Salah!</p>');
			redirect('admin/login');
		}
	}
}
