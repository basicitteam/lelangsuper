<?php
Class topup extends CI_Controller{
	
	public function __construct()
   	{
        parent::__construct();
        if(is_user() == false){
        	$this->session->set_flashdata('msg','<p class="alert alert-danger">Anda Belum Login!</p>');
        	redirect('web');
        }
   	}
   	
	public function index()
	{	
		$head['menu'] = 'my_account';
		$data['paketpoint'] = $this->M_paketpoint->get_paket();
		$this->load->view('templates/header',$head);
		$this->load->view('templates_user/sidebar_account');
		$this->load->view('user/topup/topup',$data);
		$this->load->view('templates/footer');
	}

	public function beli(){
		$data = array(
			'id_paket' => $this->input->post('id_paket'),
			'id_user' => $this->session->userdata('id_user'),
			);
		$id = $this->M_beli_paket->insert($data);
		redirect('user/topup/success/'.$id);
	}

	public function success($id){
		$data['tagihan'] = $this->M_beli_paket->get_tagihan($id);
		$this->load->view('templates/header');
		$this->load->view('templates_user/sidebar_account');
		$this->load->view('user/topup/infotagihan',$data);
		$this->load->view('templates/footer');
	}

	public function voucher()
	{
		$data['paketpoint'] = $this->M_paketpoint->get_paket();
		$this->load->view('templates/header');
		$this->load->view('templates_user/sidebar_account');
		$this->load->view('user/topup/voucher');
		$this->load->view('templates/footer');
	}
}
