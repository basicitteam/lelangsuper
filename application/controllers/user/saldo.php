<?php
Class saldo extends CI_Controller{
	public function index(){
		$data['user'] = $this->M_user->get_user($this->session->userdata('id_user'));
		$data['level'] = $this->M_user->cek_level($this->session->userdata('id_user'));
		$this->load->view('templates/header');
		$this->load->view('templates_user/sidebar_account');
		$this->load->view('user/topup/profile',$data);
		$this->load->view('templates/footer');
	}

	public function arsip(){
		$data['arsip_saldo'] = $this->M_user->get_arsip_saldo($this->session->userdata('id_user'),20);
		$this->load->view('templates/header');
		$this->load->view('templates_user/sidebar_account');
		$this->load->view('user/topup/arsip_saldo',$data);
		$this->load->view('templates/footer');	
	}
}