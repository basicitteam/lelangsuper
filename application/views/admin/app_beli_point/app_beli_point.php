        <div class="row-fluid">
        <div class="span12">
            <ul class="breadcrumb">
              <li>Approve Pembelian Point</li>
            </ul>
        </div>
        </div>
        <div class="row-fluid">
          <div class="span12">
            <?php echo $this->session->flashdata('msg'); ?>
          </div>
        </div>
        <div class="row-fluid">
        <div class="span12">
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
        </div>
        </div>
        <div class="row-fluid">
          <div class="span12 center paging">
            <?php echo $this->pagination->create_links(); ?>
          </div>
        </div>