<?php
Class lelang extends CI_Controller{
	public function __construct()
   	{
        parent::__construct();
        if(is_admin() == false){
        	$this->session->set_flashdata('msg','<p class="alert alert-danger">Anda Belum Login!</p>');
        	redirect('admin/login');
        }
   	}
	public function index($offset = 0){

		$config['base_url'] = site_url('admin/lelang/index/');
		$config['total_rows'] = $this->M_lelang->get_num_rows();
		$config['per_page'] = 10; 
		$config['uri_segment'] = 4;

		$this->pagination->initialize($config); 
		$head['menu'] = 'admin';
		$data['nav'] = 'lelang';
		$data['lelang'] = $this->M_lelang->get($config['per_page'],$offset);
		$this->load->view('templates/header',$head);
		$this->load->view('admin/templates/navigation',$data);
		$this->load->view('admin/lelang/lelang',$data);
		$this->load->view('templates/footer');
	}

	public function add(){
		$data['menu'] = 'admin';
		$data['nav'] = 'lelang';
		$this->load->view('templates/header',$data);
		$this->load->view('admin/templates/navigation',$data);
		$this->load->view('admin/lelang/add');
		$this->load->view('templates/footer');	
	}

	public function add_proses(){
		$this->form_validation->set_rules('id_admin', 'ID Admin', 'required');
		$this->form_validation->set_rules('nama_lelang', 'Nama Barang Lelang', 'required');
		$this->form_validation->set_rules('deskripsi_lelang', 'Deskripsi', 'required');
		$this->form_validation->set_rules('waktu_mulai', 'Mulai Lelang', 'required');
		$this->form_validation->set_rules('waktu_selesai', 'Selesai Lelang', 'required');
		$this->form_validation->set_rules('harga_pasar', 'Harga Pasar', 'required');
		$this->form_validation->set_rules('harga_max', 'Harga Maksimal', 'required');
		$this->form_validation->set_rules('point_bid', 'Point Bidding', 'required');
		$this->form_validation->set_rules('point_daftar', 'Point Daftar', 'required');
		$this->form_validation->set_rules('kenaikan_harga', 'Kenaikan Harga', 'required');
		$this->form_validation->set_error_delimiters('<p class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>', '</p>');
		
		if($this->input->post('golden_periode')){
			$golden_periode = strtotime($this->input->post('golden_periode'));
		}
		else{
			$golden_periode = 0;	
		}

		if($this->form_validation->run() != FALSE){
			$config['upload_path'] = './assets/uploads/lelang/';
			$config['allowed_types'] = 'gif|jpg|png';
			$this->upload->initialize($config);
			if($this->upload->do_upload())
			{
				$foto = $this->upload->data();
				$data = array(
					'id_admin' => $this->input->post('id_admin'),
					'nama_lelang' => $this->input->post('nama_lelang'),
					'deskripsi_lelang' => $this->input->post('deskripsi_lelang'),
					'waktu_mulai' => strtotime($this->input->post('waktu_mulai')),
					'waktu_selesai' => strtotime($this->input->post('waktu_selesai')),
					'harga_pasar' => $this->input->post('harga_pasar'),
					'harga_min' => 0,
					'harga_max' => $this->input->post('harga_max'),
					'point_bid' => $this->input->post('point_bid'),
					'point_daftar' => $this->input->post('point_daftar'),
					'foto_lelang' => $foto['file_name'],
					'kenaikan_harga' => $this->input->post('kenaikan_harga'),
					'golden_periode' => $golden_periode
					);
				$this->M_lelang->insert($data);
				$this->session->set_flashdata('msg','<p class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>Tambah Barang Lelang Berhasil!</p>');
			}
			else
			{
				$this->session->set_flashdata('msg','<p class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>Tambah Barang Lelang Gagal!</p>'.$this->upload->display_errors());
			}	
		}
		else{
			$this->session->set_flashdata('msg','<p class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>Tambah Barang Lelang Gagal! '.validation_errors().'</p>');
		}
		redirect('admin/lelang');
	}

	public function view($id){
		$data['menu'] = 'admin';
		$data['nav'] = 'lelang';
		$data['lelang'] = $this->M_lelang->get_lelang($id);
		$this->load->view('templates/header',$data);
		$this->load->view('admin/templates/navigation',$data);
		$this->load->view('admin/lelang/view',$data);
		$this->load->view('templates/footer');	
	}

	public function edit($id){
		$data['menu'] = 'admin';
		$data['nav'] = 'lelang';
		$data['lelang'] = $this->M_lelang->get_lelang($id);
		$this->load->view('templates/header',$data);
		$this->load->view('admin/templates/navigation',$data);
		$this->load->view('admin/lelang/edit',$data);	
		$this->load->view('templates/footer');	
	}

	public function update(){
		$this->form_validation->set_rules('nama_lelang', 'Nama Barang Lelang', 'required');
		$this->form_validation->set_rules('deskripsi_lelang', 'Deskripsi', 'required');
		$this->form_validation->set_rules('waktu_mulai', 'Mulai Lelang', 'required');
		$this->form_validation->set_rules('waktu_selesai', 'Selesai Lelang', 'required');
		$this->form_validation->set_rules('harga_pasar', 'Harga Pasar', 'required');
		$this->form_validation->set_rules('kenaikan_harga', 'Kenaikan Harga', 'required');
		$this->form_validation->set_rules('harga_max', 'Harga Maksimal', 'required');
		$this->form_validation->set_rules('point_bid', 'Point Bidding', 'required');
		$this->form_validation->set_rules('point_daftar', 'Point Daftar', 'required');
		$this->form_validation->set_rules('id_lelang', 'ID Lelang', 'required');
		$this->form_validation->set_error_delimiters('<p class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>', '</p>');

		if($this->input->post('golden_periode')){
			$golden_periode = strtotime($this->input->post('golden_periode'));
		}
		else{
			$golden_periode = 0;	
		}

		if($this->form_validation->run() != FALSE){
			$config['upload_path'] = './assets/uploads/lelang/';
			$config['allowed_types'] = 'gif|jpg|png';

			$this->upload->initialize($config);
			$data = array(
				'nama_lelang' => $this->input->post('nama_lelang'),
				'deskripsi_lelang' => $this->input->post('deskripsi_lelang'),
				'waktu_mulai' => strtotime($this->input->post('waktu_mulai')),
				'waktu_selesai' => strtotime($this->input->post('waktu_selesai')),
				'harga_pasar' => $this->input->post('harga_pasar'),
				'harga_max' => $this->input->post('harga_max'),
				'point_bid' => $this->input->post('point_bid'),
				'point_daftar' => $this->input->post('point_daftar'),
				'kenaikan_harga' => $this->input->post('kenaikan_harga'),
				'golden_periode' => $golden_periode
				);

			if($this->upload->do_upload())
			{
				$foto = $this->upload->data();
				$data['foto_lelang'] = $foto['file_name'];
			}
			
			$this->M_lelang->update($data,$this->input->post('id_lelang'));
			$this->session->set_flashdata('msg','<p class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>Update Barang Lelang id : '.$this->input->post('id_lelang').' Berhasil!</p>');
		}
		else{
			$this->session->set_flashdata('msg','<p class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>Tambah Barang Lelang Gagal! '.validation_errors().'</p>');
		}
		redirect('admin/lelang');
	}

	public function delete($id){
		if($this->M_lelang->get_pemenang($id) == false){
			$this->session->set_flashdata('msg','<p class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>Delete Barang Lelang id : '.$id.' Berhasil!</p>');
			$this->M_lelang->delete($id);
		}
		else{
			$this->session->set_flashdata('msg','<p class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>Delete Gagal, lelang tersebut sudah berlangsung!</p>');
		}
		redirect('admin/lelang');
	}
}
