<?php
Class arsip_voucher extends CI_Controller{
	public function __construct()
   	{
        parent::__construct();
        if(is_admin() == false){
        	$this->session->set_flashdata('msg','<p class="alert alert-danger">Anda Belum Login!</p>');
        	redirect('admin/login');
        }
   	}
	public function index($offset = 0){
		$config['base_url'] = site_url('admin/arsip_voucher/index/');
		$config['total_rows'] = $this->M_voucher->get_arsip_num_rows();
		$config['per_page'] = 10; 
		$config['uri_segment'] = 4;

		$this->pagination->initialize($config); 
		$data['no'] = $offset + 1;
		$data['arsip_voucher'] = $this->M_voucher->get_arsip();
		$header['nav'] = 'arsip_voucher';
		$this->load->view('admin/templates/header',$header);
		$this->load->view('admin/arsip_voucher/arsip_voucher',$data);
		$this->load->view('admin/templates/footer');
	}
}