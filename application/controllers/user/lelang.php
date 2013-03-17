<?php
Class lelang extends CI_Controller{

	public function arsip_tawar($offset = 0){
		//login check
		if(is_user() == false){
        	$this->session->set_flashdata('msg','<p class="alert alert-danger">Anda Belum Login!</p>');
        	redirect('web');
        }

		$config['base_url'] = site_url('user/lelang/arsip_tawar');
		$config['total_rows'] = $this->M_user->get_arsip_tawar_num_rows($this->session->userdata('id_user'));
		$config['per_page'] = 5; 
		$config['uri_segment'] = 4;

		$this->pagination->initialize($config); 

		$data['arsip_tawar'] = $this->M_user->get_arsip_tawar($this->session->userdata('id_user'),$config['per_page'],$offset);
		$this->load->view('templates/header');
		$this->load->view('templates_user/sidebar_account');
		$this->load->view('user/topup/arsip_tawar',$data);
		$this->load->view('templates/footer');	
	}

	public function arsip_menang($offset = 0){
		//login check
		if(is_user() == false){
        	$this->session->set_flashdata('msg','<p class="alert alert-danger">Anda Belum Login!</p>');
        	redirect('web');
        }

		$config['base_url'] = site_url('user/lelang/arsip_menang');
		$config['total_rows'] = $this->M_user->get_arsip_menang_num_rows($this->session->userdata('id_user'));
		$config['per_page'] = 5; 
		$config['uri_segment'] = 4;

		$this->pagination->initialize($config); 

		$data['arsip_menang'] = $this->M_user->get_arsip_menang($this->session->userdata('id_user'),$config['per_page'],$offset);
		$this->load->view('templates/header');
		$this->load->view('templates_user/sidebar_account');
		$this->load->view('user/topup/arsip_menang',$data);
		$this->load->view('templates/footer');	
	}

	public function konfirmasi_menang($id_menang){
		//login check
		if(is_user() == false){
        	$this->session->set_flashdata('msg','<p class="alert alert-danger">Anda Belum Login!</p>');
        	redirect('web');
        }

		$data['menang'] = $this->M_menang_lelang->get_menang_lelang($id_menang);
		$this->load->view('templates/header');
		$this->load->view('templates_user/sidebar_account');
		$this->load->view('user/topup/konfirm_menang',$data);
		$this->load->view('templates/footer');
	}

	public function proses_konfirm_menang(){
		//login check
		if(is_user() == false){
        	$this->session->set_flashdata('msg','<p class="alert alert-danger">Anda Belum Login!</p>');
        	redirect('web');
        }
        
		$this->form_validation->set_rules('ktp', 'KTP', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('testimoni', 'Testimoni', 'required');
		if ($this->form_validation->run() != FALSE){
			$data = array(
			'ktp' => $this->input->post('ktp'),
			'email' => $this->input->post('email'),
			'alamat' => $this->input->post('alamat'),
			'testimoni' => $this->input->post('testimoni'),
			'konfirmasi' => 1
			);
			$this->M_menang_lelang->update_konfirmasi($data,$this->input->post('id_menang_lelang'));
			$this->session->set_flashdata('msg','<p class="alert alert-success">konfirmasi berhasil!</p>');
			redirect('user/lelang/arsip_menang');
		}
		else{
			$this->session->set_flashdata('msg','<p class="alert alert-danger">konfirmasi gagal!</p>');	
			redirect('user/lelang/konfirmasi_menang/'.$this->input->post('id_menang_lelang'));
		}
	}

	public function join($id){
		$data['lelang'] = $this->M_lelang->get_lelang($id);
		$this->load->view('templates/header');
		$this->load->view('user/lelang/lelang',$data);
		//$this->load->view('user/lelang/sidebar');
		$this->load->view('templates/footer');
	}

	//ajax, responsenya json status lelang tsb
	public function get_status($id){
		$lelang = $this->M_lelang->get_lelang($id);
		$response['status'] = 'true';
		//cek apakah lagi masa absensi atau sedang berlangsung
			if($lelang['waktu_selesai'] - 600 > time()){
				//masih waktu absensi

				//get bidder yg udah absen
				$absen = $this->M_lelang->get_absensi($id);
				//format currency jadi di frontend tinggal tampilin aja
				for ($i=0; $i < count($absen); $i++) { 
					$absen[$i]['tawar'] = $this->cart->format_number($absen[$i]['bid']);
				}
				$response['msg'] = 'Masa Absensi';
				$response['bidder'] = $absen;
				$response['time'] = $lelang['waktu_selesai'] - time();
			}//end if lelang['waktu_selesai'] - 600 > time()
			else{
				//bukan masa absensi
				//cek apakah golden periode atau bukan ?
				if($lelang['golden_periode'] < time() && $lelang['golden_periode'] != 0){
					//golden periode

					//cek apakah user sudah dapat point golden periode
					if($this->M_lelang->get_user_point_gp_null($id) != false){
						//insert point golden
						$this->_insert_point_golden($id,$lelang['point_bid']);
					}

					//cek golden periode masih aktif atau ngga
					if(time() < $lelang['golden_periode'] + 600){
						//golden periode masih aktif
						$response['msg'] = 'Golden Periode';
					}
					else{
						//golden periode sudah ngga aktif, lelang selesai
						//cek apakah harga lelang sudah mencapai harga minimal
						if($lelang['harga_min'] >= $lelang['harga_max']){
							//lelang valid
							//cek apakah ada pemenang?
							if($this->M_lelang->get_pemenang($id) != false){
							//insert pemenang
							$this->_insert_pemenang($id,$lelang['harga_min']);
							}
							$response['msg'] = 'Lelang Berakhir';
						}
						else{
							//lelang dibatalkan
							//kembalikan semua point user
							$this->_rollback_point($id,$lelang['point_bid']);
							//hapus dari database ikut lelang, tawar & menang
							$this->M_lelang->clean_lelang($id);
							//set harga lelang jadi 0 lagi
							$this->_update_harga_lelang($id,0);
							$response['msg'] = 'Lelang Dibatalkan';
						}
					}//end else golden periode ngga aktif
					$response['time'] = $lelang['golden_periode'] + 600 - time();
				}
				else{
					//bukan golden periode
					//cek apakah sudah berakhir
					if($lelang['waktu_selesai'] < time()){
						//lelang selesai
						//set golden periode ke 0
						//cek apakah harga lelang sudah mencapai harga minimal
						if($lelang['harga_min'] >= $lelang['harga_max']){
							//lelang valid
							//cek apakah ada pemenang?
							if($this->M_lelang->get_pemenang($id) != false){
							//insert pemenang
							$this->_insert_pemenang($id,$lelang['harga_min']);
							}
						}
						else{
							//lelang dibatalkan
							//kembalikan semua point user
							$this->_rollback_point($id,$lelang['point_bid']);
							//hapus dari database ikut lelang, tawar & menang
							$this->M_lelang->clean_lelang($id);
							//set harga lelang jadi 0 lagi
							$this->_update_harga_lelang($id,0);
							$response['msg'] = 'Lelang Dibatalkan';
						}
					}
					else{
						$response['msg'] = 'Lelang Sedang Berlangsung';
					}
					$response['time'] = $lelang['waktu_selesai'] - time();
				}
				//get bidder
				$bidder = $this->M_lelang->get_bidder($id);
				//format currency jadi di frontend tinggal tampilin aja
				for ($i=0; $i < count($bidder); $i++) { 
					$bidder[$i]['tawar'] = $this->cart->format_number($bidder[$i]['tawar']);
				}
				$response['bidder'] = $bidder;
			}
		$response['harga'] = $this->cart->format_number($lelang['harga_min']);
		$response['hemat'] = $this->cart->format_number($lelang['harga_pasar'] - $lelang['harga_min']);
		$response['pemenang'] = $this->M_lelang->get_pemenang($id);
		echo json_encode($response);
	}

	//ajax, response json
	public function tawar($id){
		//cek udah login atau belum
		if(is_user()){
			$lelang = $this->M_lelang->get_lelang($id);
			if($lelang['waktu_selesai'] - 600 > time()){
				//masih waktu absensi
				if($this->M_ikut_lelang->cek_absen($id,$this->session->userdata('id_user')) != 'true'){
					//absen!
					//cek saldo user
					$saldo_user = $this->M_user->get_saldo($this->session->userdata('id_user'));
					if($saldo_user < $lelang['point_daftar']){
						$response['status'] = 'false';
						$response['msg'] = 'Saldo anda tidak cukup!';
					}
					else{
						//kurangi saldo user untuk daftar
						$saldo = $saldo_user - $lelang['point_daftar'];
						$data = array(
						'saldo' => $saldo,
						);
						$this->M_user->update_saldo($this->session->userdata('id_user'),$data);

						//naikkan harga sesuai kenaikan harga per bid
						if($lelang['harga_min'] < $lelang['harga_max']){
							$harga_baru = $lelang['harga_min'] + $lelang['kenaikan_harga'];
							$update_harga = array(
								'harga_min' => $harga_baru
								);
							$this->M_lelang->update($update_harga,$id);
						}
						else{
							$harga_baru = $lelang['harga_min'];
						}

						//insert ke tabel ikut lelang untuk absen
						$absen = array(
							'id_user' => $this->session->userdata('id_user'),
							'id_lelang' => $id,
							'bid' => $harga_baru
							);
						$this->M_ikut_lelang->insert($absen);

						//insert ke tabel tawar lelang
						$ikut_lelang = $this->M_ikut_lelang->get_ikut_lelang($id,$this->session->userdata('id_user'));
						$tawar = array(
							'id_ikut_lelang' => $ikut_lelang['id_ikut_lelang'],
							'tawar' => $harga_baru,
							'waktu_tawar' => time(),
							'golden_periode' => 0
							);
						$this->M_lelang->insert_tawar($tawar);
						
						//sudah absen!
						$response['status'] = 'true';
						$response['msg'] = 'Absen Berhasil!';
					}
				}
				else{
					//sudah absen!
					$response['status'] = 'false';
					$response['msg'] = 'Anda sudah Absen!';
				}
			}
			else{
				//lelang sudah dimulai (nge-bid)
				//cek apakah user udah absen
				if($this->M_ikut_lelang->cek_absen($id,$this->session->userdata('id_user')) == true){
					//sudah absen
					//cek apakah golden periode atau bukan ?
					if($lelang['golden_periode'] < time() && $lelang['golden_periode'] != 0){
						//golden periode
						//cek golden periode masih aktif atau ngga
						if(time() < $lelang['golden_periode'] + 600){
							//golden periode masih aktif
							//cek saldo point golden user
							$ikut_lelang = $this->M_ikut_lelang->get_ikut_lelang($id,$this->session->userdata('id_user'));
							$saldo_golden = $this->M_lelang->get_saldo_golden($ikut_lelang['id_ikut_lelang']);
							if($saldo_golden < $lelang['point_bid']){
								//saldo ngga cukup
								$response['status'] = 'false';
								$response['msg'] = 'Saldo Golden Tidak Cukup!';
							}
							else{
								//saldo cukup
								//kurangi saldo golden
								$saldo = $saldo_golden - $lelang['point_bid'];
								$this->M_lelang->update_point_golden($ikut_lelang['id_ikut_lelang'],$saldo);
								//naikkan harga sesuai kenaikan harga per bid
								if($lelang['harga_min'] <= $lelang['harga_max']){
									$harga_baru = $lelang['harga_min'] + $lelang['kenaikan_harga'];
									$this->_update_harga_lelang($id,$harga_baru);
								}
								else{
									$harga_baru = $lelang['harga_min'];
								}

								//insert ke tabel tawar lelang
								$ikut_lelang = $this->M_ikut_lelang->get_ikut_lelang($id,$this->session->userdata('id_user'));
								$tawar = array(
									'id_ikut_lelang' => $ikut_lelang['id_ikut_lelang'],
									'tawar' => $harga_baru,
									'waktu_tawar' => time(),
									'golden_periode' => 1
									);
								$this->M_lelang->insert_tawar($tawar);
								$response['status'] = 'true';
								$response['msg'] = 'Tawar Berhasil di Golden Periode';
							}
						}
						else{
							//golden periode sudah ngga aktif, lelang selesai
							$response['status'] = 'false';
							$response['msg'] = 'Golden Periode Selesai! Lelang Ini Sudah Berakhir!';
						}
					}
					else{
						//bukan golden periode
						//cek apakah sudah berakhir
						if($lelang['waktu_selesai'] < time()){
							//lelang selesai
							$response['status'] = 'false';
							$response['msg'] = 'Lelang Ini Sudah Berakhir!';
						}//end if lelang waktu selesai
						else{
							//lelang masih berjalan
							//cek saldo user
							$saldo_user = $this->M_user->get_saldo($this->session->userdata('id_user'));
							if($saldo_user < $lelang['point_bid']){
								//saldo ngga cukup
								$response['status'] = 'false';
								$response['msg'] = 'Saldo anda tidak cukup!';
							}//end if cek saldo user
							else{
								//saldo cukup
								//kurangi saldo user
								$saldo = $saldo_user - $lelang['point_bid'];
								$data_saldo = array(
								'saldo' => $saldo,
								);
								$this->M_user->update_saldo($this->session->userdata('id_user'),$data_saldo);

								//naikkan harga sesuai kenaikan harga per bid
								if($lelang['harga_min'] <= $lelang['harga_max']){
									$harga_baru = $lelang['harga_min'] + $lelang['kenaikan_harga'];
									$this->_update_harga_lelang($id,$harga_baru);
								}
								else{
									$harga_baru = $lelang['harga_min'];
								}

								//cek apakah lelang berakhir tinggal 9m 53d
								if($lelang['waktu_selesai'] - 593 < time()){
									//update waktu lelang + 6s
									$update_waktu = $lelang['waktu_selesai'] + 6;
									$this->M_lelang->update(array('waktu_selesai' => $update_waktu),$id);
								}

								//insert ke tabel tawar lelang
								$ikut_lelang = $this->M_ikut_lelang->get_ikut_lelang($id,$this->session->userdata('id_user'));
								$tawar = array(
									'id_ikut_lelang' => $ikut_lelang['id_ikut_lelang'],
									'tawar' => $harga_baru,
									'waktu_tawar' => time(),
									'golden_periode' => 0
									);
								$this->M_lelang->insert_tawar($tawar);

								$response['status'] = 'true';
								$response['msg'] = 'Tawar Berhasil';

							}//end else cek saldo user
						}//end else lelang waktu selesai < time()
					}//end else golden periode
				}//end if user absen
				else{
					//belum absen
					$response['status'] = 'false';
					$response['msg'] = 'Anda belum absen';
				}
			}
		}
		else{
			//belum login!
			$response['status'] = 'false';
			$response['msg'] = 'Anda belum Login!';
		}
		echo json_encode($response);
	}

	public function get_time(){
		$now = new DateTime(); 
		echo $now->format("M j, Y H:i:s O")."\n"; 
	}

	public function clean($id){
		$this->M_lelang->clean_lelang($id);
	}

	private function _insert_pemenang($id,$harga_min){
		$pemenang = $this->M_lelang->get_pemenang($id);
		//cek apakah sudah di insert
		if($this->M_menang_lelang->is_pemenang_exist($id,$pemenang['id_user']) == false){
			//belum di insert
			$response['msg'] = 'ok';
			$ikut_lelang = $this->M_ikut_lelang->get_ikut_lelang($id,$pemenang['id_user']);
			//insert ke tabel menang lelang
			$menang = array(
				'id_ikut_lelang' => $ikut_lelang['id_ikut_lelang'],
				'harga' => $harga_min,
				);
			$this->M_menang_lelang->insert($menang);
		}
	}

	private function _insert_point_golden($id,$point_bid){
		$list_user = $this->M_lelang->get_user_point_gp_null($id);
		//kasi masing2 user point golden periode
		foreach ($list_user as $key) {
			$point_terpakai = $point_bid * $this->M_lelang->get_jumlah_bid_user($key['id_ikut_lelang']);
			$point_golden = round($point_terpakai * 30 / 100);
			//update point golden ke tabel ikut lelang
			$this->M_lelang->update_point_golden($key['id_ikut_lelang'],$point_golden);
		}
	}

	private function _rollback_point($id,$point_bid){
		//get bidder yg udah absen
		$ikut_lelang = $this->M_lelang->get_ikut_lelang($id);
		//foreach masing2 user
		foreach ($ikut_lelang as $key) {
			$point_terpakai = $point_bid * $this->M_lelang->get_jumlah_bid_user($key['id_ikut_lelang']);
			$saldo_user = $this->M_user->get_saldo($key['id_user']);
			$update_saldo = array(
				'saldo' => $saldo_user + $point_terpakai
				);
			$this->M_user->update_saldo($key['id_user'],$update_saldo);
		}
	}

	private function _update_harga_lelang($id,$harga){
		$update_harga = array(
						'harga_min' => $harga
						);
		$this->M_lelang->update($update_harga,$id);
	}
}
