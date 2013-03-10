<?php
Class user extends CI_Controller
{
	public function index($offset = 0)
	{
		$config['base_url'] = site_url('admin/user/index/');
		$config['total_rows'] = $this->M_user->get_num_rows();
		$config['per_page'] = 20; 
		$config['uri_segment'] = 4;

		$this->pagination->initialize($config); 

		$data['users'] = $this->M_user->get($config['per_page'],$offset);
		$this->load->view('templates/header');
		$this->load->view('admin/templates/navigation');
		$this->load->view('admin/user/user',$data);
		$this->load->view('templates/footer');
	}

	public function view($id_user){
		$data['user'] = $this->M_user->get_user($id_user);
		$this->load->view('templates/header');
		$this->load->view('admin/templates/navigation');
		$this->load->view('admin/user/detail_user',$data);
		$this->load->view('templates/footer');
	}

	public function banned($id_user){
		$data['user'] = $this->M_user->get_user($id_user);
		$this->load->view('templates/header');
		$this->load->view('admin/templates/navigation');
		$this->load->view('admin/user/form_banned',$data);
		$this->load->view('templates/footer');
	}

	public function proses_banned(){
		$data = array(
			'tanggal_awal' => $this->input->post('tanggal_awal'),
			'tanggal_akhir' => $this->input->post('tanggal_akhir'),
			'keterangan' => $this->input->post('keterangan'),
			'id_admin' => $this->session->userdata('id_admin')
			);
		echo '<pre>';
		print_r($data);
		echo '</pre>';
	}
}