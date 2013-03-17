<?php
Class user extends CI_Controller
{
	public function __construct()
   	{
        parent::__construct();
        if(is_admin() == false){
        	$this->session->set_flashdata('msg','<p class="alert alert-danger">Anda Belum Login!</p>');
        	redirect('admin/login');
        }
   	}
    
	public function index($offset = 0)
	{
		$config['base_url'] = site_url('admin/user/index/');
		$config['total_rows'] = $this->M_user->get_num_rows();
		$config['per_page'] = 20; 
		$config['uri_segment'] = 4;

		$this->pagination->initialize($config); 
		$data['no'] = $offset + 1;
		$data['users'] = $this->M_user->get($config['per_page'],$offset);
		$data['menu'] = 'admin';
		$header['nav'] = 'users';
		$this->load->view('admin/templates/header',$header);
		$this->load->view('admin/user/user',$data);
		$this->load->view('admin/templates/footer');
	}

	public function view($id_user){
		$data['user'] = $this->M_user->get_user($id_user);
		$data['menu'] = 'admin';
		$header['nav'] = 'users';
		$this->load->view('admin/templates/header',$header);
		$this->load->view('admin/user/detail_user',$data);
		$this->load->view('admin/templates/footer');
	}

	public function banned($id_user){
		$data['user'] = $this->M_user->get_user($id_user);
		$data['menu'] = 'admin';
		$header['nav'] = 'users';
		$this->load->view('admin/templates/header',$header);
		$this->load->view('admin/user/form_banned',$data);
		$this->load->view('admin/templates/footer');
	}

	public function proses_banned(){
		$data = array(
			'tanggal_awal' => strtotime($this->input->post('tanggal_awal')),
			'tanggal_akhir' => strtotime($this->input->post('tanggal_akhir')),
			'keterangan' => $this->input->post('keterangan'),
			'id_admin' => $this->session->userdata('id_admin')
			);
		$this->M_user->update($this->input->post('id_user'),$data);
		redirect('admin/user/view/'.$this->input->post('id_user'));
	}
}