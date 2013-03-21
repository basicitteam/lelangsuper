<?php
Class topup extends CI_Controller{
	
	public function __construct()
   	{
        parent::__construct();
        if(is_user() == false){
        	$this->session->set_flashdata('msg','<p class="alert alert-danger">Anda Belum Login!</p>');
        	redirect('web');
        }
   	}
   	
	public function index()
	{	
		$head['menu'] = 'my_account';
		$data['paketpoint'] = $this->M_paketpoint->get_paket();
		$this->load->view('templates/header',$head);
		$this->load->view('templates_user/sidebar_account');
		$this->load->view('user/topup/topup',$data);
		$this->load->view('templates/footer');
	}

	public function beli(){
		$data = array(
			'id_paket' => $this->input->post('id_paket'),
			'id_user' => $this->session->userdata('id_user'),
			);
		$id = $this->M_beli_paket->insert($data);
		redirect('user/topup/success/'.$id);
	}

	public function success($id){
		$data['tagihan'] = $this->M_beli_paket->get_tagihan($id);
		$this->load->view('templates/header');
		$this->load->view('templates_user/sidebar_account');
		$this->load->view('user/topup/infotagihan',$data);
		$this->load->view('templates/footer');
	}

	public function voucher()
	{
		$this->load->helper('captcha');
		$vals = array(
		    'img_path'	 => 'assets/captcha/',
		    'img_url'	 => base_url().'assets/captcha/'
		    );

		$cap = create_captcha($vals);

		$data = array(
		    'captcha_time'	=> $cap['time'],
		    'ip_address'	=> $this->input->ip_address(),
		    'word'	 => $cap['word']
		    );

		$query = $this->db->insert_string('captcha', $data);
		$this->db->query($query);

		$data['img'] = $cap['image'];
		$data['paketpoint'] = $this->M_paketpoint->get_paket();
		$this->load->view('templates/header');
		$this->load->view('templates_user/sidebar_account',$data);
		$this->load->view('user/topup/voucher');
		$this->load->view('templates/footer');
	}

	public function validasi_voucher(){

		// First, delete old captchas
		$expiration = time()-7200; // Two hour limit
		$this->db->query("DELETE FROM captcha WHERE captcha_time < ".$expiration);	

		// Then see if a captcha exists:
		$sql = "SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?";
		$binds = array($_POST['captcha'], $this->input->ip_address(), $expiration);
		$query = $this->db->query($sql, $binds);
		$row = $query->row();

		if($row->count == 0)
		{
		    $this->session->set_flashdata('msg','<p class="alert alert-danger">captcha invalid!</p>');
	        redirect('user/topup/voucher');
		}
		else{
			if($this->M_voucher->is_voucher_valid($this->input->post('no_voucher')) && $this->M_voucher->is_used($this->input->post('no_voucher')) == false){
			//tambahin ke saldo user
			$voucher = $this->M_voucher->get_by_kode($this->input->post('no_voucher'));
			$saldo_user = $this->M_user->get_saldo($this->session->userdata('id_user'));
			$data = array(
			'saldo' => $saldo_user += $voucher['saldo'],
			);
			$this->M_user->update_saldo($this->session->userdata('id_user'),$data);
			//insert ke tabel beli voucher

			$beli_voucher = array(
				'id_user' => $this->session->userdata('id_user'),
				'id_voucher' => $voucher['id_voucher']
				);
			$this->M_voucher->beli_voucher($beli_voucher);

			$this->session->set_flashdata('msg','<p class="alert alert-success">Pengisian Voucher Berhasil! Saldo anda : '.$data['saldo'].'</p>');
        	redirect('user/topup/voucher');
			}
			else{
				$this->session->set_flashdata('msg','<p class="alert alert-danger">Voucher Tidak Valid!</p>');
	        	redirect('user/topup/voucher');
			}
		}
	}
}
