<?php
Class konfirmasi extends CI_Controller{
	
	public function index()
	{
		$data['tagihan'] = $this->M_beli_paket->get_tagihan_user($this->session->userdata('id_user'));
		$this->load->view('templates/header');
		$this->load->view('templates_user/sidebar_account');
		$this->load->view('user/topup/konfirmasi_bayar',$data);
		$this->load->view('templates/footer');
	}

	public function konfirmasi_bayar($id){
		$data['id'] = $id;
		$data['bank'] = $this->M_beli_paket->get_list_bank();
		$this->load->view('templates/header');
		$this->load->view('templates_user/sidebar_account');
		$this->load->view('user/topup/form_konfirmasi_bayar',$data);
		$this->load->view('templates/footer');	
	}

	public function proses_konfirm(){
		$data = array(
			'nama_bank' => $this->input->post('bank_pengirim'),
			'no_rekening' => $this->input->post('no_rekening'),
			'atas_nama' => $this->input->post('atas_nama'),
			'tanggal_transfer' => $this->input->post('tanggal_transfer'),
			'no_referensi' => $this->input->post('no_referensi'),
			'konfirmasi' => '1',
			'id_rekening' => $this->input->post('bank'),
			'bayar' => $this->input->post('bayar')
			);
		$this->M_beli_paket->update_konfirmasi($this->input->post('id_beli_paket'),$data);
		echo '<pre>';
		print_r($data);
		echo '</pre>';
		redirect('user/konfirmasi/');
	}
}