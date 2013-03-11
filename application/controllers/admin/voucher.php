<?php
Class voucher extends CI_Controller{
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
		$data['menu'] = 'admin';
		$data['nav'] = 'voucher';
		$this->load->view('templates/header',$data);
		$this->load->view('admin/templates/navigation',$data);
		$this->load->view('admin/voucher/voucher');
		$this->load->view('templates/footer');
	}
	public function generate()
	{
		$this->load->view('templates/header');
		$this->load->view('admin/templates/navigation');
		$this->load->view('admin/voucher/generate');
		$this->load->view('templates/footer');
	}
}