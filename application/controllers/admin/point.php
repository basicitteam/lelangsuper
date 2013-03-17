<?php
Class point extends CI_Controller{
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
		$data['data_paket'] = $this->M_paketpoint->get_paket();
		$data['menu'] = 'admin';
		$header['nav'] = 'paket';
		$this->load->view('admin/templates/header',$header);
		$this->load->view('admin/paket/paket_point',$data);
		$this->load->view('admin/templates/footer');
	}
	
	
	public function edit($id)
	{							
		$data['data_paket_point'] = $this->M_paketpoint->get($id);
		$data['menu'] = 'admin';
		$header['nav'] = 'paket';
		$this->load->view('admin/templates/header',$header);
		$this->load->view('admin/paket/edit',$data);
		$this->load->view('admin/templates/footer');
	}
	
	public function add_paket()
	{
		$nama = $this->input->post('nama');
        $harga = $this->input->post('harga');
        $saldo = $this->input->post('saldo');
        $paket_point = array(
        'nama_paket' => $nama,
        'harga_paket' => $harga,
        'point_utama'=> $saldo,
		 );
        $this->M_paketpoint->add_paket($paket_point);
		$this->session->set_flashdata('msg', '<p class="alert alert-success"><a class="close" data-dismiss="alert"><i class="icon-remove"></i></a> Paket <b>'.$this->input->post('nama').'</b> Berhasil ditambahkan </p>');
		redirect('admin/point');
				
    }
	
	
	public function delete($id)
	{
		$this->M_paketpoint->delete($id);
		$this->session->set_flashdata('msg', '<p class="alert alert-success"><a class="close" data-dismiss="alert"><i class="icon-remove"></i></a> Paket <b>'.$this->input->post('nama').'</b> Berhasil di delete!</p>');
		redirect('admin/point');
	}
	
	
	public function update()
	{				
        $nama = $this->input->post('nama');
		$saldo = $this->input->post('saldo');
		$harga = $this->input->post('harga');
        $data = array(
        'nama_paket' => $nama,
        'harga_paket' => $harga,
        'point_utama'=> $saldo,
		 );
        $this->M_paketpoint->update($data,$this->input->post('idt_paket'));
		$this->session->set_flashdata('msg', '<p class="alert alert-success"><a class="close" data-dismiss="alert"><i class="icon-remove"></i></a> Paket <b>'.$this->input->post('nama').'</b> Berhasil dirubah </p>');
		redirect('admin/point');
	}
}
