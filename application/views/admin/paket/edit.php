<div class="span9">
	<div class="row">
          <!--<div class="span9"> -->
        <h3 class="btn btn-warning" style="width: 94%;margin-left: 30px;box-shadow: 0px -2px 7px #ccc;">Manage Paket Point</h3>
        <br></br>
        <ul class="thumbnails "  >
          <li class="span9 " style="box-shadow: 0px -2px 7px #ccc;background-color:#fcf8e3;">
	<form class="form-horizontal" action="<?php echo site_url('admin/point/update'); ?>" method="POST" enctype="multipart/form-data">
	<br>
  <legend> <center><strong>Edit Paket Point</strong></center> </legend>
  <br>
			<div class="control-group">
				<label class="control-label" for="nama">Nama</label>
				<div class="controls">
					<input type="hidden" value="<?php echo $data_paket_point['id_paket']; ?>" name="idt_paket">
					<input type="text" class="input-xlarge" id="nama" name="nama" value="<?php echo $data_paket_point['nama_paket'];?>">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="harga">Harga</label>
				<div class="controls">
					<input type="text" class="input-xlarge" id="harga" name="harga" value="<?php echo $data_paket_point['harga_paket'];?>">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="saldo">Saldo</label>
				<div class="controls">
					<input type="text" class="input-xlarge" id="saldo" name="saldo" value="<?php echo $data_paket_point['point_utama'];?>">
				</div>
			</div>
			<div class="form-actions alert alert-warning">
				 <button type="submit" class="btn btn-danger">Save changes</button>
				 <a href="<?php echo site_url('admin/point'); ?>" class="btn btn-warning" data-dismiss="modal">Cancel</a>
			</div>
	</form>
</ui>
</ul>
</div>
</div>
