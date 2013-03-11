<?php
Class rule extends CI_Controller
{
	public function index()
	{
		$data['menu'] = 'admin';
		$data['nav'] = 'rule';
		$this->load->view('templates/header',$data);
		$this->load->view('admin/templates/navigation',$data);
		$this->load->view('admin/rule/rule');
		$this->load->view('templates/footer');
	}
}