<?php
Class voucher extends CI_Controller{
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
		$config['base_url'] = site_url('admin/voucher/index/');
		$config['total_rows'] = $this->M_voucher->get_num_rows();
		$config['per_page'] = 10; 
		$config['uri_segment'] = 4;

		$data['no'] = $offset + 1;
		$this->pagination->initialize($config); 

		$data['voucher'] = $this->M_voucher->get($config['per_page'],$offset);
		$header['nav'] = 'voucher';
		$this->load->view('admin/templates/header',$header);
		$this->load->view('admin/voucher/voucher',$data);
		$this->load->view('admin/templates/footer');
	}
	public function import()
	{
		$config['upload_path'] = 'assets/uploads/files/';
		$config['allowed_types'] = 'xls|xlsx';

		$this->upload->initialize($config);

		if ($this->upload->do_upload()){

			$file = $this->upload->data();

			$this->load->library('excel');

			$uploadpath = 'assets/uploads/files/'.$file['file_name'];
			$this->load->library('excel');
			$this->excel=PHPExcel_IOFactory::load($uploadpath);
			$this->excel->setActiveSheetIndex(0);
			 
			$worksheetrows = $this->excel->getActiveSheet()->toArray(null,true,true,true);

			for($i = 2; $i<count($worksheetrows); $i++) {
	            if(!is_null($worksheetrows[$i]['A']) && $worksheetrows[$i]['A'] != ''){
	            	if($this->M_voucher->is_voucher_exist($worksheetrows[$i]['A']) == false){
	            		$status = 'Ok';
	            	}
	            	else{
	            		$status = 'Gagal, voucher sudah ada.';
	            	}
	        		$status_import[] = array(
	        		'kode_voucher' => $worksheetrows[$i]['A'],
	        		'saldo' => $worksheetrows[$i]['B'],
	        		'jenis_voucher' => $worksheetrows[$i]['C'],
	        		'harga' => $worksheetrows[$i]['D'],
	        		'status' => $status,
	        		);
	            }
	        }
	        $data['voucher'] = $status_import;



			for($i = 2; $i<count($worksheetrows); $i++) {
	            if(!is_null($worksheetrows[$i]['A']) && $worksheetrows[$i]['A'] != ''){
	            	if($this->M_voucher->is_voucher_exist($worksheetrows[$i]['A']) == false){
	            		$insert[] = array(
	            		'kode_voucher' => $worksheetrows[$i]['A'],
	            		'saldo' => $worksheetrows[$i]['B'],
	            		'jenis_voucher' => $worksheetrows[$i]['C'],
	            		'harga' => $worksheetrows[$i]['D']
	            		);
	            	}
	            }
	        }
	        if(isset($insert) && !is_null($insert)){
	        	$this->M_voucher->insert($insert);
	        }

	        $header['nav'] = 'voucher';
	        $this->load->view('admin/templates/header',$header);
			$this->load->view('admin/voucher/import',$data);
			$this->load->view('admin/templates/footer');
		}
		else{
			$this->session->set_flashdata('msg','<p class="alert alert-success">'.$this->upload->display_errors().'</p>');
        	redirect('admin/voucher');
		}
	}

	public function set_status($id){
		$voucher = $this->M_voucher->get_voucher($id);
		if($voucher['status'] == 1){
			$this->M_voucher->set_status($id,0);
		}
		else{
			$this->M_voucher->set_status($id,1);
		}
		$this->session->set_flashdata('msg','<p class="alert alert-success">Berhasil Update Status Untuk Kode Voucher '.$voucher['kode_voucher'].'</p>');
        redirect('admin/voucher');
	}
}