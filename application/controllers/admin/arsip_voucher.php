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
	public function index()
	{
		$header['nav'] = 'arsip_voucher';
		$this->load->view('admin/templates/header',$header);
		$this->load->view('admin/arsip_voucher/arsip_voucher');
		$this->load->view('admin/templates/footer');
	}
}