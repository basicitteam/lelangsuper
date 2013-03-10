<?php
Class content extends CI_Controller{
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('admin/templates/navigation');
		$this->load->view('admin/content/content');
		$this->load->view('templates/footer');
	}
}