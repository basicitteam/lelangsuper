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
    
	public function index()
	{
		$this->load->library('excel_reader');

		$uploadpath = 'assets/uploads/files/voucher.xls';
		$this->excel_reader->read($uploadpath);
		// Read the first workbook in the file
		$worksheetrows = $this->excel_reader->worksheets[0];
		$worksheetcolumns = 4;
		/*echo "<table>";
		foreach($worksheetrows as $worksheetrow)
		{
		      echo "<tr>";
		     for($i=0; $i<$worksheetcolumns; $i++)
		    {
		           // if the field is not blank -- otherwise CI will throw warnings
		           if (isset($worksheetrow[$i]))
		                 echo "<td>".$worksheetrow[$i]."</td>";
		           // empty field
		           else
		                 echo "<td>&nbsp; </td>";
		     }
		     echo "</tr>";
		} 
		echo "</table>";*/
		$data['voucher'] = $worksheetrows;
		$header['nav'] = 'voucher';
		$this->load->view('admin/templates/header',$header);
		$this->load->view('admin/voucher/voucher',$data);
		$this->load->view('admin/templates/footer');
	}
	public function generate()
	{
		$this->load->view('templates/header');
		$this->load->view('admin/templates/navigation');
		$this->load->view('admin/voucher/generate');
		$this->load->view('templates/footer');
	}
}