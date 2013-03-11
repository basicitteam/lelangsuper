<?php
Class voucher extends CI_Controller{
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