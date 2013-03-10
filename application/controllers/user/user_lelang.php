<?php
Class user_lelang extends CI_Controller{

	public function lelang1()
	{
		$this->load->view('templates/header');
		$this->load->view('user/lelang/lelang1');
		$this->load->view('user/lelang/sidebar');
		$this->load->view('templates/sidebar_lelang');
		$this->load->view('user/detail_lelang_berlangsung1');
		$this->load->view('templates/footer');
	}
	public function lelang2()
	{
		$this->load->view('templates/header');
		$this->load->view('user/lelang/lelang2');
		$this->load->view('user/lelang/sidebar');
		$this->load->view('templates/sidebar_lelang');
		$this->load->view('user/detail_lelang_berlangsung2');
		$this->load->view('templates/footer');
	}

	public function lelang3()
	{
		$this->load->view('templates/header');
		$this->load->view('user/lelang/lelang3');
		$this->load->view('user/lelang/sidebar');
		$this->load->view('templates/sidebar_lelang');
		$this->load->view('user/detail_lelang_berlangsung3');
		$this->load->view('templates/footer');
	}

	public function lelang7()
	{
		$this->load->view('templates/header');
		$this->load->view('user/lelang/lelang7');
		$this->load->view('user/lelang/sidebar');
		$this->load->view('templates/sidebar_lelang');
		$this->load->view('user/detail_lelang_baru1');
		$this->load->view('templates/footer');
	}

	public function lelang8()

	{
		$this->load->view('templates/header');
		$this->load->view('user/lelang/lelang8');
		$this->load->view('user/lelang/sidebar');
		$this->load->view('templates/sidebar_lelang');
		$this->load->view('user/detail_lelang_baru2');
		$this->load->view('templates/footer');
		
	}
	public function lelang9()

	{
		$this->load->view('templates/header');
		$this->load->view('user/lelang/lelang9');
		$this->load->view('user/lelang/sidebar');
		$this->load->view('templates/sidebar_lelang');
		$this->load->view('user/detail_lelang_baru3');
		$this->load->view('templates/footer');
		
	}

	public function lelangberlangsung($id = '1')
	{
		$this->load->view('templates/header');
		$this->load->view('templates/slideshow');
		$this->load->view('templates/sidebar');
		switch ($id) {
				case '1':
					$this->load->view('user/detail_lelang_berlangsung1');
				break;
				case '2':
					$this->load->view('user/detail_lelang_berlangsung2');
				break;
				case '3':
					$this->load->view('user/detail_lelang_berlangsung3');
				break;
				case '4':
					$this->load->view('user/detail_lelang_baru1');
				break;
				case '5':
					$this->load->view('user/detail_lelang_baru2');
				break;
				case '6':
					$this->load->view('user/detail_lelang_baru3');
				break;
				default:
					$this->load->view('user/detail_lelang_berlangsung1');
				break;
		}
		$this->load->view('templates/footer');
	
	}
}