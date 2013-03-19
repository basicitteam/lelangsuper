<?php
Class rule extends CI_Controller
{
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
		$data['articles'] = $this->M_help->get();
		$data['no'] = 1;
		$header['nav'] = 'rule';
		$this->load->view('admin/templates/header',$header);
		$this->load->view('admin/rule/rule',$data);
		$this->load->view('admin/templates/footer');
	}

	public function edit($id){
		$data['article'] = $this->M_help->get_help($id);
		$header['nav'] = 'rule';
		$this->load->view('admin/templates/header',$header);
		$this->load->view('admin/rule/edit',$data);
		$this->load->view('admin/templates/footer');	
	}

	public function update(){
		$this->M_help->update($this->input->post('id_article'),$this->input->post('article'));
		$this->session->set_flashdata('msg','<p class="alert alert-success"><strong>'.$this->input->post('subject').'</strong> Berhasil Di Update!</p>');
		redirect('admin/rule');
	}
}