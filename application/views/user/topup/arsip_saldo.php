		<!-- Content Span9 -->
			<div class="span9">
				<!-- Content lelang sedang berlangsung -->
				<div class="row">
					<!--<div class="span9"> -->
				<h3 class="btn btn-warning" style="width: 94%;margin-left: 30px;box-shadow: 0px -2px 7px #ccc;">Arsip Saldo</h3>
				<br></br>
				<ul class="thumbnails " >
				  <li class="span9 " >
				    
						<table class="table table-striped" style="box-shadow: 0px -2px 7px #ccc;background-color:#fcf8e3;">
								<thead>
								  <tr>
									<th><center>Tanggal Pembelian</center></th>
									<th><center>Jenis Paket</center></th>
									<th><center>harga</center></th>
									<th><center>Point Utama </center></th>
								  </tr>
								</thead>
								<tbody>
								<?php
								foreach ($arsip_saldo as $key) {
								?>
								<tr>
									<td><?php echo $key['waktu']; ?></td>
									<td style="text-align:right;"><?php echo $key['nama_paket']; ?></td>
									<td style="text-align:right">Rp. <?php echo $this->cart->format_number($key['harga']); ?></td>
									<td style="text-align:right;"><?php echo $key['point_utama']; ?></td>
								</tr>
								<?php
								}
								?>
								</tbody>
							  </table>
					
				  </li>
				</ul>
				</div>
				</div>
				<!--</div> End Row span9 Content Lelang Sedang Berlangsung-->

			
			</div><!-- End Content Span9-->
</div><!-- End Row Main Content -->

<form class="form-horizontal" action="<?php echo site_url('user'); ?>" method="POST" enctype="multipart/form-data">
					<div id="beli" class="modal hide fade" style="display: none;box-shadow: 0px -2px 7px #ccc;background-color:#fcf8e3;">
						
						<div class="modal-body">
						<button class="close" data-dismiss="modal"><i class="icon-remove"></i></button>
							<h3>Apakah Anda Yakin Membeli Point ini?</h3>
							
						</div>
						<div class="modal-footer"style="background-color:#fcf8e3;">
							<a href="<?php echo site_url('user');?>" class="btn btn-danger" data-dismiss="modal">Cancel</a>
							<button type="submit" name="btn" value="beli" class="btn btn-warning" ><i class="icon-check"></i> Beli</button>
					</div>
				</form>	
