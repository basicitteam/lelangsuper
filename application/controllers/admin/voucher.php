<?php
Class voucher extends CI_Controller{
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('admin/templates/navigation');
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