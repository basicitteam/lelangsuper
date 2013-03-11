<div class="span9">
	<div class="row">
          <!--<div class="span9"> -->
        <h3 class="btn btn-warning" style="width: 94%;margin-left: 30px;box-shadow: 0px -2px 7px #ccc;">Manage Paket Point</h3>
        <br></br>
        <div class="span9">
   <br>
  <legend style="box-shadow: 0px -2px 7px #ccc;background-color:#fcf8e3;"> <center><strong>Tambah Barang Lelang</strong></center> </legend>
  <br>
  <center>
	  <a data-toggle="modal" href="#tambah" class="btn btn-warning btn-large"><i class="icon-gift"></i> Tambah Paket</a>
  </center>
  <hr>
  <?php echo $this->session->flashdata('msg'); ?>
  <hr>
  <table class="table table-striped" style="box-shadow: 0px -2px 7px #ccc;background-color:#fcf8e3;">
    <thead>
	 <tr>
		<th><center>No.</center></th>
		<th><center>Nama Paket</center></th>
		<th><center>Harga</center></th>
		<th><center>Saldo</center></th>
		<th colspan='1'><center>Action</center></th>
	 </tr>
	</thead>
	<tbody>
	 <?php 
	 $no = 1;
	 foreach ($data_paket as $paket) { ?>
	  <tr>				
		<td><center><?php echo $no++; ?></center></td>
		<td><center><?php echo $paket['nama_paket'] ?></center></td>
		<td><center>Rp. <?php echo $this->cart->format_number($paket['harga_paket']) ?></center></td>
		<td><center><?php echo $paket['point_utama'] ?></center></td>
		<td>
		 <center>
		  	<a class="btn btn-info" href="<?php echo site_url('admin/point/edit/'.$paket['id_paket']);?>">
			  <i class="icon-edit"></i>
			  Edit
			</a>
			<a class="btn btn-danger" href="<?php echo site_url('admin/point/delete/'.$paket['id_paket']);?>">
			  <i class="icon-remove"></i>
			  Delete
			</a>                    
		 </center>
		</td>
	  </tr>
	 <?php } ?>
   </tbody>
  </table>
  
  <form class="form-horizontal" action="<?php echo site_url('admin/point/add_paket'); ?>" method="POST" enctype="multipart/form-data">
	<div id="tambah" class="modal fade out" style="display: none;" >
	  <legend><center>Tambah Paket Point</center></legend>
			<div class="control-group">
				<label class="control-label" for="nama">Nama Paket</label>
				<div class="controls">
					<input type="text" class="input-xlarge" id="nama" name="nama">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="harga">Harga</label>
				<div class="controls">
					<input type="text" class="input-xlarge" id="harga" name="harga" >				
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="saldo">Saldo</label>
				<div class="controls">
					<input type="text" class="input-xlarge" id="saldo" name="saldo">
				</div>
			</div>
			<div class="form-actions alert alert-warning">			
				<button type="submit" class="btn btn-danger"> Tambah Paket </button>
				<a href="<?php echo site_url('admin/point'); ?>" class="btn btn-warning" data-dismiss="modal">Cancel</a>
			</div>
	</div>
  </form>
  
	<div id="edit" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel">View Materi</h3>
	  </div>
	  <div class="modal-body">
			
	  </div>
	  <div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	  </div>
	</div>
</div>
	</div>
</div>	
	
