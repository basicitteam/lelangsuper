 <div class="row-fluid">
<div class="span12">
    <ul class="breadcrumb">
      <li>Kelola Paket Point</li>
    </ul>
</div>
</div>
<div class="row-fluid">
  <div class="span12">
    <?php echo $this->session->flashdata('msg'); ?>
    <a data-toggle="modal" href="#tambah" class="btn btn-primary pull-right"><i class="icon-gift"></i> Tambah Paket</a>
  </div>
</div>
<hr>
<div class="row-fluid">
<div class="span12">
  <table class="table table-hover">
    <thead>
	 <tr>
		<th>No.</th>
		<th>Nama Paket</th>
		<th>Harga</th>
		<th>Saldo</th>
		<th colspan='2'>Action</th>
	 </tr>
	</thead>
	<tbody>
	 <?php 
	 $no = 1;
	 foreach ($data_paket as $paket) { ?>
	  <tr>				
		<td><?php echo $no++; ?>.</td>
		<td><?php echo $paket['nama_paket'] ?></td>
		<td>Rp. <?php echo $this->cart->format_number($paket['harga_paket']) ?></td>
		<td><?php echo $paket['point_utama'] ?></td>
		<td>
		  	<a class="btn btn-info" href="<?php echo site_url('admin/point/edit/'.$paket['id_paket']);?>">
			  <i class="icon-edit"></i>
			  Edit
			</a>
			<a class="btn btn-danger" href="<?php echo site_url('admin/point/delete/'.$paket['id_paket']);?>">
			  <i class="icon-remove"></i>
			  Delete
			</a>                    
		</td>
	  </tr>
	 <?php } ?>
   </tbody>
  </table>
</div>
</div>
<div class="row-fluid">
  <div class="span12 center paging">
    <?php echo $this->pagination->create_links(); ?>
  </div>
</div>

<!-- Modal -->
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