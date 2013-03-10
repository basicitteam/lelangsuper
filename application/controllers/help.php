<?php
Class help extends CI_Controller{
	
	public function index()
	{	
		$head['menu'] = 'help';
		$this->load->view('templates/header',$head);
		$this->load->view('templates/sidebar_web');
		$this->load->view('web/help/help');
		$this->load->view('templates/footer');
	}
	public function help_pengiriman()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar_web');
		$this->load->view('web/help/help_pengiriman');
		$this->load->view('templates/footer');
	}
	
	public function help_pembayaran()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar_web');
		$this->load->view('web/help/help_pembayaran');
		$this->load->view('templates/footer');
	}
	
	public function help_keluhan()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar_web');
		$this->load->view('web/help/help_keluhan');
		$this->load->view('templates/footer');
	}
	
	public function help_account()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar_web');
		$this->load->view('web/help/help_account');
		$this->load->view('templates/footer');
	}
	
	public function help_problem()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar_web');
		$this->load->view('web/help/help_problem');
		$this->load->view('templates/footer');
	}
	
	public function help_tnc()
	{
		$this->load->view('templates/header');
		$this->load->view('web/help/help_tnc');
		$this->load->view('templates/footer');
	}

	public function help_memulai_lelang()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar_web');
		$this->load->view('web/help/help_memulai_lelang');
		$this->load->view('templates/footer');
	}

	public function help_lelang()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar_web');
		$this->load->view('web/help/help_lelang');
		$this->load->view('templates/footer');
	}

	public function help_hot_wiki()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar_web');
		$this->load->view('web/help/help_hot-wiki');
		$this->load->view('templates/footer');
	}

	public function help_tawar()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar_web');
		$this->load->view('web/help/help_tawar');
		$this->load->view('templates/footer');
	}

	
}
