<?php
Class web extends CI_Controller{
	public function index()
	{	
		$head['menu'] = 'home';	
		$data['recent_lelang'] = $this->M_lelang->get_recent(3);
		$data['lelang'] = $this->M_lelang->get_upcoming();
		$data['testimoni'] = $this->M_menang_lelang->get_testimoni(3);
		//$slide['slide'] = $this->M_lelang->get_imgslide();
		$head['nama_user'] = $this->session->userdata('nama_user');
		$this->load->view('templates/header',$head);
		$this->load->view('templates/slideshow',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('web/home',$data);
		$this->load->view('templates/footer');
	}

	public function reviewlist()
	{	
		$head['menu'] = 'review_list';
		$data['recent_lelang'] = $this->M_lelang->get_recent(3);
		$data['testimoni'] = $this->M_menang_lelang->get_testimoni(3);
		$data['list_testimoni'] = $this->M_menang_lelang->get_testimoni(5);
		$this->load->view('templates/header',$head);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('web/reviewlist');
		$this->load->view('templates/footer');
	}

	public function registrasi()
	{	
		$head['menu'] = 'registrasi';
		$this->load->view('templates/header',$head);
		$this->load->view('web/registrasi');
		$this->load->view('templates/footer');
	}

	public function proses_registrasi(){
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('tempatlahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('noidentitas', 'No KTP', 'required|is_unique[t_user.no_ktp]');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('userid', 'Username', 'required|is_unique[t_user.username]');
		$this->form_validation->set_rules('pass1', 'Password', 'required');
		$this->form_validation->set_rules('pass2', 'Password Confirmation', 'required|matches[pass1]');
		$this->form_validation->set_rules('email', 'email', 'required|is_unique[t_user.email]');
		$this->form_validation->set_rules('telepon', 'No Handphone', 'required');
		$this->form_validation->set_rules('tnc', 'Terms and Condition', 'required');
		$this->form_validation->set_error_delimiters('<p class="alert alert-warning">', '</p>');
		if($this->form_validation->run() != FALSE){
		$data = array(
			'nama_user' => $this->input->post('nama'),
			'no_ktp' => $this->input->post('noidentitas'),
			'no_telp' => $this->input->post('telepon'),
			'alamat' => $this->input->post('alamat'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('userid'),
			'password' => md5($this->input->post('pass1')),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'jns_kelamin' => $this->input->post('jeniskelamin'),
			'tempat_lahir' => $this->input->post('tempatlahir')
			);
			$this->M_user->insert($data);
			$this->session->set_flashdata('msg','<p class="alert alert-success">Pendaftaran Berhasil! Silahkan cek email untuk konfirmasi!</p>');
			redirect('web');
		}
		else
		{
			$this->session->set_flashdata('msg',validation_errors());
			redirect('web/registrasi');
		}
	}

	public function email(){
		$this->load->library('email');

		$this->email->from('basicteam.afe@gmail.com', 'Basic IT Team');
		$this->email->to('setiady.rogers28@gmail.com');

		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');	

		$this->email->send();

		echo $this->email->print_debugger();
	}

	public function login(){
		if($this->M_user->cek_akun($this->input->post('username'),$this->input->post('password'))){
			$user = $this->M_user->get_by_username($this->input->post('username'));
			$newdata = array(
				'username' => $this->input->post('username'),
				'email' => $user['email'],
				'id_user' => $user['id_user'],
				'nama_user' => $user['nama_user'],
				'logged_in' => 'true',
				'role' => 'user'
				);
			$this->session->set_userdata($newdata);
			$this->session->set_flashdata('msg','<p class="alert alert-success"><a class="close" data-dismiss="alert"><i class="icon-remove"></i></a> Login Berhasil!</p>');
			echo '<pre>';
			print_r($this->session->all_userdata());
			echo '</pre>';
		}
		else
		{
			echo '<pre>';
			print_r($_POST);
			echo '</pre>';
			$this->session->set_flashdata('msg','<p class="alert alert-danger"><a class="close" data-dismiss="alert"><i class="icon-remove"></i></a> Login gagal!</p>');
		}
		redirect('web');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('web');
	}


}
