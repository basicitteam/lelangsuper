<?php
Class lelang extends CI_Controller{

	public function arsip_tawar($offset = 0){
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
		$data['menang'] = $this->M_menang_lelang->get_menang_lelang($id_menang);
		$this->load->view('templates/header');
		$this->load->view('templates_user/sidebar_account');
		$this->load->view('user/topup/konfirm_menang',$data);
		$this->load->view('templates/footer');
	}

	public function proses_konfirm_menang(){
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
		//cek apakah lagi masa absensi atau sedang berlangsung
			if($lelang['waktu_selesai'] > time()){
				//masih waktu absensi

				//get bidder yg udah absen
				$absen = $this->M_lelang->get_absensi($id);
				//format currency jadi di frontend tinggal tampilin aja
				for ($i=0; $i < count($absen); $i++) { 
					$absen[$i]['bid'] = $this->cart->format_number($absen[$i]['bid']);
				}
				$response['status'] = 'true';
				$response['msg'] = 'masa absensi';
				$response['bidder'] = $absen;

				//get harganya & waktu sisa absen
				$lelang = $this->M_lelang->get_lelang($id);
				$response['time'] = $lelang['waktu_selesai'];
			}//end if lelang waktu selesai
			else{
				//lelang sedang berlangsung
					//cek apakah sudah ada periode
					if($this->M_lelang->is_periode_exist($id)){
						//periode sudah ada
						//get periode terbaru
						$periode = $this->M_lelang->get_periode_terbaru($id);
						//cek periode masih berlaku atau ngga
						if($periode['expired'] > time()){
							//periode masih berlaku
							$response['periode'] = 'masih berlaku '.$periode['id_periode_lelang'].' '.$periode['periode'];
							//get bidder yg ngebid di periode itu
							$bidder = $this->M_lelang->get_bidder($periode['id_periode_lelang']);
							$response['status'] = 'true';
							$response['msg'] = 'periode masih berlaku';
							$response['bidder'] = $bidder;
							//get harganya dan siswa waktu periode
							//get harganya & waktu sisa waktu periode
							$lelang = $this->M_lelang->get_lelang($id);
							$response['time'] = $periode['expired'];
						}//end if periode expired
						else{
							//periode sudah habis
							//cek jumlah org yg ada di periode, jika cuman ada 1 org berarti selesai
							if($this->M_lelang->get_jmlh_bidder_periode($periode['id_periode_lelang']) < 2){
								//hanya ada 1 orang, selesai lelangnya

								//get bidder yg ngebid
								$bidder = $this->M_lelang->get_bidder($periode['id_periode_lelang']);
								$response['status'] = 'true';
								$response['msg'] = 'lelang berakhir';
								$response['bidder'] = $bidder;

								//get harganya & waktu sisa waktu periode
								$lelang = $this->M_lelang->get_lelang($id);
								$response['time'] = $periode['expired'];

								//cek apakah ada pemenang?
								if($this->M_lelang->get_pemenang($id) != false){
									$pemenang = $this->M_lelang->get_pemenang($id);
									//cek apakah sudah di insert
									if($this->M_menang_lelang->is_pemenang_exist($id,$pemenang['id_user']) == false){
										//belum di insert
										$response['msg'] = 'ok';
										$ikut_lelang = $this->M_ikut_lelang->get_ikut_lelang($id,$pemenang['id_user']);
										//insert ke tabel menang lelang
										$menang = array(
											'id_ikut_lelang' => $ikut_lelang['id_ikut_lelang'],
											'harga' => $lelang['harga_min'],
											);
										$this->M_menang_lelang->insert($menang);
									}
								}
							}
							else{
								//ada lebih dari 1 orang di periode tsb, buat periode baru
								//lama waktunya jumlah orang di periode tsb * 6 detik
								$jmlh_bidder = $this->M_lelang->get_jmlh_bidder_periode($periode['id_periode_lelang']);
								//$jmlh_bidder = 3;
								$expired = time() + 6 * $jmlh_bidder;
								$data = array(
									'periode' => $periode['periode'] + 1,
									'expired' => $expired,
									'id_lelang' => $id
									);
								$this->M_lelang->insert_periode($data);
								//get bidder yg ngebid
								$bidder = $this->M_lelang->get_bidder($periode['id_periode_lelang']);
								$response['status'] = 'true';
								$response['msg'] = 'periode '.$periode['id_periode_lelang'].' habis, buat periode '.$data['periode'];
								$response['bidder'] = $bidder;

								//get harganya & waktu sisa waktu periode
								$lelang = $this->M_lelang->get_lelang($id);
								$response['time'] = $expired;
							}
						}//end else periode expired
					}//end if periode exist
					else{
						//periode belum ada, maka buat periode baru
						//get jumlah orang yg absen * 600
						$jmlah_absen = $this->M_lelang->get_jmlh_absen($id);
						$expired = time() + 6 * $jmlah_absen;
						$data = array(
							'periode' => 1,
							'expired' => $expired,
							'id_lelang' => $id
							);
						$this->M_lelang->insert_periode($data);
						//get periode terbaru
						$periode = $this->M_lelang->get_periode_terbaru($id);
						//get bidder yg ngebid
						$bidder = $this->M_lelang->get_bidder($periode['id_periode_lelang']);
						$response['status'] = 'true';
						$response['msg'] = 'buat periode';
						$response['bidder'] = $bidder;

						//get harganya & waktu sisa waktu periode
						$lelang = $this->M_lelang->get_lelang($id);
						$response['time'] = $periode['expired'];
					}//end else periode exist
			}//end else lelang waktu selesai
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
			if($lelang['waktu_selesai'] > time()){
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
						$harga_baru = $lelang['harga_min'] + $lelang['kenaikan_harga'];
						//cek harga yg naik < harga max
						if($harga_baru < $lelang['harga_max']){
							//update harganya
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
					//get periode terbaru
					$periode = $this->M_lelang->get_periode_terbaru($id);
					//cek periode masih aktif atau ngga
					if($periode['expired'] > time()){
						//jika bukan periode 1
						if($periode['periode'] != 1){
							//cek apakah user ada di periode sebelumnya
							$periode_sebelumnya = $this->M_lelang->get_periode_sebelumnya($periode['periode'],$id);
							if($this->M_lelang->is_user_exist_on_periode($periode_sebelumnya['id_periode_lelang'],$this->session->userdata('id_user'))){
								//user ada di periode sebelumnya
								//cek saldo user
								$saldo_user = $this->M_user->get_saldo($this->session->userdata('id_user'));
								if($saldo_user < $lelang['point_daftar']){
									$response['status'] = 'false';
									$response['msg'] = 'Saldo anda tidak cukup!';
								}
								else{
									//kurangi point karena ngebid
									$saldo = $saldo_user - $lelang['point_bid'];
									$data = array(
									'saldo' => $saldo,
									);
									$this->M_user->update_saldo($this->session->userdata('id_user'),$data);
									//naikkan harga sesuai kenaikan harga perbid
									$harga_baru = $lelang['harga_min'] + $lelang['kenaikan_harga'];
									//cek harga yg naik < harga max
									if($harga_baru < $lelang['harga_max']){
										//update harganya
										$update_harga = array(
											'harga_min' => $harga_baru
											);
										$this->M_lelang->update($update_harga,$id);
									}
									else{
										$harga_baru = $lelang['harga_min'];
									}
									//insert ke tabel log lelang
									//get id_ikut_lelang
									$ikut_lelang = $this->M_ikut_lelang->get_ikut_lelang($id,$this->session->userdata('id_user'));
									$log_lelang = array(
										'id_ikut_lelang' => $ikut_lelang['id_ikut_lelang'],
										'id_periode_lelang' => $periode['id_periode_lelang'],
										'bid' => $harga_baru
										);
									$this->M_lelang->insert_log_lelang($log_lelang);
									//update periode aktif + 6 detik
									$update_expired = array(
										'expired' => $periode['expired'] + 6,
										);
									$this->M_lelang->update_periode($update_expired,$periode['id_periode_lelang']);
									$response['status'] = 'true';
									$response['msg'] = 'Berhasil Bid di Periode ke '.$periode['periode'];
								}
							}
							else{
								//user ngga ada di periode sebelumnya, ga boleh ngebid
								$response['status'] = 'false';
								$response['msg'] = 'Anda Tidak Terdaftar Di Periode '.$periode_sebelumnya['id_periode_lelang'].' '.$periode_sebelumnya['periode'].' !';
							}
						}
						else{
							//baru periode 1
							//cek saldo user
							$saldo_user = $this->M_user->get_saldo($this->session->userdata('id_user'));
							if($saldo_user < $lelang['point_daftar']){
								$response['status'] = 'false';
								$response['msg'] = 'Saldo anda tidak cukup!';
							}
							else{
								//kurangi point karena ngebid
								$saldo = $saldo_user - $lelang['point_bid'];
								$data = array(
								'saldo' => $saldo,
								);
								$this->M_user->update_saldo($this->session->userdata('id_user'),$data);
								//naikkan harga sesuai kenaikan harga perbid
								$harga_baru = $lelang['harga_min'] + $lelang['kenaikan_harga'];
								//cek harga yg naik < harga max
								if($harga_baru < $lelang['harga_max']){
									//update harganya
									$update_harga = array(
										'harga_min' => $harga_baru
										);
									$this->M_lelang->update($update_harga,$id);
								}
								else{
									$harga_baru = $lelang['harga_min'];
								}
								//insert ke tabel log lelang
								//get id_ikut_lelang
								$ikut_lelang = $this->M_ikut_lelang->get_ikut_lelang($id,$this->session->userdata('id_user'));
								$log_lelang = array(
									'id_ikut_lelang' => $ikut_lelang['id_ikut_lelang'],
									'id_periode_lelang' => $periode['id_periode_lelang'],
									'bid' => $harga_baru
									);
								$this->M_lelang->insert_log_lelang($log_lelang);
								//update periode aktif + 6 detik
								$update_expired = array(
									'expired' => $periode['expired'] + 6,
									);
								$this->M_lelang->update_periode($update_expired,$periode['id_periode_lelang']);
								$response['status'] = 'true';
								$response['msg'] = 'Berhasil Bid di Periode ke '.$periode['id_periode_lelang'];
							}
						}
					}
					else{
						//periode sudah tidak aktif atau lelang sudah berakhir
						$response['status'] = 'false';
						$response['msg'] = 'Lelang Ini Sudah Berakhir!';
					}
				}
				else{
					$response['status'] = 'false';
					$response['msg'] = 'Anda belum absen';
					//belum absen
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
}
