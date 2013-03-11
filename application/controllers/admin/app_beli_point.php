<?php
Class app_beli_point extends CI_Controller{

	public function __construct()
   	{
        parent::__construct();
        if(is_admin() == false){
        	$this->session->set_flashdata('msg','<p class="alert alert-danger">Anda Belum Login!</p>');
        	redirect('admin/login');
        }
   	}

	public function index($offset = 0){
		$config['base_url'] = site_url('admin/app_beli_point/index/');
		$config['total_rows'] = $this->M_beli_paket->get_num_rows();
		$config['per_page'] = 10; 
		$config['uri_segment'] = 4;

		$this->pagination->initialize($config); 

		$data['tagihan'] = $this->M_beli_paket->get($config['per_page'],$offset);
		$data['menu'] = 'admin';
		$data['nav'] = 'approve';
		$this->load->view('templates/header',$data);
		$this->load->view('admin/templates/navigation',$data);
		$this->load->view('admin/app_beli_point/app_beli_point',$data);
		$this->load->view('templates/footer');
	}

	public function approve($id){
		$tagihan = $this->M_beli_paket->get_tagihan($id);
		$saldo_user = $this->M_user->get_saldo($tagihan['id_user']);
		//itung saldo
		//saldo utama += point_utama
		//bonus saldo += point_bonus
		$data = array(
			'saldo' => $saldo_user += $tagihan['point_utama'],
			);
		$this->M_beli_paket->update_validasi($id);
		$this->M_user->update_saldo($tagihan['id_user'],$data);
		//insert ke tabel log_saldo
		$log_saldo = array(
			'id_beli_paket' => $tagihan['id_beli_paket'],
			'harga' => $tagihan['harga_paket']
			);
		$this->M_beli_paket->insert_log($log_saldo);
		redirect('admin/app_beli_point');
	}
}