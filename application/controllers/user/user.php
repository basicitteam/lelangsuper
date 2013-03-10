<?php
Class user extends CI_Controller{
	
	public function edit_profile(){
		$data['user'] = $this->M_user->get_user($this->session->userdata('id_user'));
		$this->load->view('templates/header');
		$this->load->view('templates_user/sidebar_account');
		$this->load->view('user/topup/ubah_profile',$data);
		$this->load->view('templates/footer');
	}

	public function update_profile(){
		$this->form_validation->set_rules('nama_user', 'Nama User', 'required');
		$this->form_validation->set_rules('no_ktp', 'Nomor KTP', 'required');
		$this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('jns_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('id_user', 'ID User', 'required');
		$this->form_validation->set_error_delimiters('<p class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>', '</p>');

		if($this->form_validation->run() != FALSE){
		$data = array(
			'nama_user' => $this->input->post('nama_user'),
			'no_ktp' => $this->input->post('no_ktp'),
			'no_telp' => $this->input->post('no_telp'),
			'alamat' => $this->input->post('alamat'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'jns_kelamin' => $this->input->post('jns_kelamin')
			);
		$this->M_user->update($this->input->post('id_user'),$data);
		$this->session->set_flashdata('msg','<p class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>Update Berhasil!</p>');
		}
		else{
			$this->session->set_flashdata('msg','<p class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>Update Profile Gagal!</p>'.validation_errors());
		}
		
		redirect('user/user/edit_profile');
	}

	public function edit_password(){
		$this->load->view('templates/header');
		$this->load->view('templates_user/sidebar_account');
		$this->load->view('user/topup/ubah_password');
		$this->load->view('templates/footer');
	}

	public function update_password(){
		$this->form_validation->set_rules('password_lama', 'Username', 'required');
		$this->form_validation->set_rules('password_baru', 'Password', 'required');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password_baru]');
		if ($this->form_validation->run() != FALSE){
			if($this->M_user->cek_password($this->input->post('password_lama'))){
				$data = array(
					'password' => md5($this->input->post('password_baru'))
					);
				$this->M_user->update($this->session->userdata('id_user'),$data);
				$this->session->set_flashdata('msg','<p class="alert alert-success"><a class="close" data-dismiss="alert"><i class="icon-remove"></i></a> Ubah Password Berhasil!</p>');
				redirect('user/user/edit_password');
			}
			else
			{
				$this->session->set_flashdata('msg','<p class="alert alert-danger"><a class="close" data-dismiss="alert"><i class="icon-remove"></i></a> Edit Password Gagal! Password Lama salah atau kurang karakter di Password Baru</p>');
			}
		}
		else{
			echo validation_errors();
		}		
		redirect('user/user/edit_password');
	}
}
