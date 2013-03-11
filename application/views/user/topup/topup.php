			<!-- Content Span9 -->
			<div class="span9">
				<!-- Content lelang sedang berlangsung -->
				<div class="row">
					<!--<div class="span9"> -->
				<h3 class="btn btn-warning" style="width: 94%;margin-left: 30px;box-shadow: 0px -2px 7px #ccc;">Pembelian Point</h3>
				<br></br>
				<div class="span9">
						<table class="table table-striped" style="box-shadow: 0px -2px 7px #ccc;background-color:#fcf8e3;">
						<thead>
						  <tr>
							<th>Jenis Paket</th>
							<th><center>Harga Paket</center></th>
							<th><center>Point Utama</center></th>
							<th><center>Top Up</center></th>
						  </tr>
						</thead>
						<tbody>
						<?php
						foreach ($paketpoint as $point) {
						?>
						<tr>
						<td><?php echo $point['nama_paket']; ?></td>
						<td style="text-align:right;"><center>Rp. <?php echo $this->cart->format_number($point['harga_paket']); ?></center></td>
						<td style="text-align:right;"><center><?php echo $point['point_utama']; ?></center></td>
						<td>
							<center>
								<button class="btn btn-danger belipoint" data-id="<?php echo $point['id_paket']; ?>" data-toggle="modal" data-target="#modal-belipoint">Beli</button>
							</center>
						</td>
						</tr>
						<?php
						}
						?>
						</tbody>
						</table>
				</div>
				</div>
				</div>
				<!--</div> End Row span9 Content Lelang Sedang Berlangsung-->

			<h2 ><strong><center>
				KAMI MENERIMA PEMBAYARAN SECARA AMAN
			</strong></center></h2>
			<br></br>
			<center><ul class="media media-list " >
				<li class="span2">
					<img class="media-object" src="<?php echo base_url('assets/img/bca.png'); ?>" ><a href="#">BCA</a></img>
				</li>
				<li class="span2">
					<img class="media-object" src="<?php echo base_url('assets/img/mandiri.png'); ?>"><a href="#">Mandiri</a></img>
				</li>
				<li class="span2 pull-right" >
					<img class="media-object" src="<?php echo base_url('assets/img/bni.png'); ?>" ><a href="#">BNI</a></img>
				</li>
				<li class="span2 pull-right">
					<img class="media-object" src="<?php echo base_url('assets/img/bri.png'); ?>" ><a href="#">BRI</a></img>
				</li>
			</ul></center>
			</div><!-- End Content Span9-->
</div><!-- End Row Main Content -->
<!-- Modal Beli Point -->
<div id="modal-belipoint" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
    <h3 id="myModalLabel">Konfirmasi Pembelian Paket</h3>
  </div>
  <div class="modal-body">
    <p>Lanjutkan Pembelian Paket ?</p>
  </div>
  <div class="modal-footer">
  	<form id="form-belipoint" method="post" action="<?php echo site_url('user/topup/beli'); ?>">
	<input id="id" type="hidden" name="id_paket" value=""/>
	<button type="submit" class="btn btn-danger">Beli</button>
	<button class="btn btn-warning" data-dismiss="modal" aria-hidden="true">Cancel</button>
	</form>
  </div>
</div>
<!-- End Modal Beli Point -->
