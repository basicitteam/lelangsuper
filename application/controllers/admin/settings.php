<?php
Class settings extends CI_Controller{
	
	public function __construct()
   	{
        parent::__construct();
        if(is_admin() == false){
        	$this->session->set_flashdata('msg','<p class="alert alert-danger">Anda Belum Login!</p>');
        	redirect('admin/login');
        }
   	}
   	
	public function chat(){
		$data['setting'] = $this->M_chat->get_setting();
		$header['nav'] = 'chat';
		$this->load->view('admin/templates/header',$header);
		$this->load->view('admin/settings/chat',$data);
		$this->load->view('admin/templates/footer');
	}

	public function set_chat(){
		if($this->M_chat->get_setting() == 1){
			$this->M_chat->update_setting(0);
		}
		else{
			$this->M_chat->update_setting(1);	
		}
		redirect('admin/settings/chat');
	}

	public function slideshow(){
		$data['slideshow'] = $this->M_slideshow->get();
		$header['nav'] = 'slideshow';
		$this->load->view('admin/templates/header',$header);
		$this->load->view('admin/settings/slideshow',$data);
		$this->load->view('admin/templates/footer');
	}

	public function add_slideshow(){

		$this->form_validation->set_rules('urutan', 'Urutan', 'required|is_unique[slideshow.urutan]');

		$config['upload_path'] = 'assets/uploads/slideshow/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_width']  = '1170';
		$config['max_height']  = '300';
		$config['max_size']	= '100';

		$this->upload->initialize($config);
		if($this->M_slideshow->get_num_slideshow() <= 5){
			if($this->form_validation->run() && $this->upload->do_upload())
			{
				$file = $this->upload->data();
				$data = array(
					'gambar' => $file['file_name'],
					'urutan' => $this->input->post('urutan')
					);
				$this->M_slideshow->insert($data);
				$this->session->set_flashdata('msg','<p class="alert alert-success">Slideshow berhasil di input.</p>');
				redirect('admin/settings/slideshow/');
			}
			else{
				$this->session->set_flashdata('msg',$this->upload->display_errors('<p class="alert alert-danger">','</p>'));
				redirect('admin/settings/slideshow/');
			}
		}
		else{
			$this->session->set_flashdata('msg','<p class="alert alert-danger">Jumlah Maksimum Slideshow 5!</p>');
			redirect('admin/settings/slideshow/');
		}
	}

	public function delete_slideshow($id){
		$slideshow = $this->M_slideshow->get_slideshow($id);
		unlink('assets/uploads/slideshow/'.$slideshow['gambar']);
		$this->db->where('id_slideshow',$id);
		$this->db->delete('slideshow');
		$this->session->set_flashdata('msg','<p class="alert alert-success">Delete Slideshow Berhasil.</p>');
		redirect('admin/settings/slideshow/');
	}
}