			<!-- Content Span9 -->
			<div class="span9">
				<!-- Content lelang sedang berlangsung -->
				<div class="row">
				<!--<div class="span9"> -->
				<h3 class="btn btn-warning" style="width: 94%;margin-left: 30px;box-shadow: 0px -2px 7px #ccc;">Konfirmasi Bayar</h3>
				</div>
				<div class="row">
					<div class="span9">
						<table class="table">
							<tr>
								<th>No.</th>
								<th>Nama Paket</th>
								<th>Tagihan</th>
								<th>Tanggal Beli</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
							<?php
							$no = 1;
							foreach ($tagihan as $key) {
							?>
							<tr>
								<td><?php echo $no++; ?>.</td>
								<td><?php echo $key['nama_paket']; ?></td>
								<td>Rp. <?php echo $this->cart->format_number($key['harga_paket']); ?></td>
								<td><?php echo $key['waktu']; ?></td>
								<td>
								<?php 
								if($key['validasi'] == '1'){
								?>
								<button class="btn btn-success">Approved</button>
								<?php
								}
								else
								{
								?>
								<button class="btn btn-warning">Pending</button>
								<?php
								}
								?></td>
								<td>
								<?php
								if($key['konfirmasi'] == '1'){
								?>
								<button class="btn btn-success">Sudah Konfirmasi</button>
								<?php
								}
								else{
								?>
								<a href="<?php echo site_url('user/konfirmasi/konfirmasi_bayar/'.$key['id_beli_paket']); ?>" class="btn btn-info">Konfirmasi</a>
								<?php
								}
								?>
								</td>
							</tr>
							<?php
							}
							?>
						</table>
					</div>
				</div>
				<!--</div> End Row span9 Content Lelang Sedang Berlangsung-->
			</div><!-- End Content Span9-->
</div><!-- End Row Main Content -->
