<div class="span9">
	<div class="row">
          <!--<div class="span9"> -->
        <h3 class="btn btn-warning" style="width: 94%;margin-left: 30px;box-shadow: 0px -2px 7px #ccc;">Manage Paket Point</h3>
        <br></br>
        <div class="span9">
	<?php echo $this->pagination->create_links(); ?>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>No Tagihan</th>
				<th>Username</th>
				<th>Saldo User</th>
				<th>Paket</th>
				<th>Point Utama</th>
				<th>Jumlah</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			foreach ($tagihan as $key) {
			?>
			<tr>
				<td><?php echo $no++; ?>.</td>
				<td><?php echo $key['id_beli_paket']; ?></td>
				<td><?php echo $key['username']; ?></td>
				<td><?php echo $key['saldo']; ?></td>
				<td><?php echo $key['nama_paket']; ?></td>
				<td><?php echo $key['point_utama']; ?></td>
				<td>Rp. <?php echo $this->cart->format_number($key['harga_paket']); ?></td>
				<?php
				if($key['validasi'] == '0'){
				?>
				<td><a class="btn btn-primary" href="<?php echo site_url('admin/app_beli_point/approve/'.$key['id_beli_paket']); ?>">Approve</a></td>
				<td><a class="btn btn-danger">Delete</a></td>
				<?php
				}
				else{
				?>
				<td colspan="2"><button class="btn btn-success">Approved</button></td>
				<?php
				}
				?>
			</tr>
			<?php
			}
			?>
		</tbody>
	</table>
	<?php echo $this->pagination->create_links(); ?>
</div>
</div>
</div>