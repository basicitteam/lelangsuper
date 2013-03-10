			<!-- Content Span9 -->
			<div class="span9">
			<?php echo $this->pagination->create_links(); ?>
				<!-- Content lelang sedang berlangsung -->
				<div class="row">
					<!--<div class="span9"> -->
				<h3 class="btn btn-warning" style="width: 94%;margin-left: 30px;box-shadow: 0px -2px 7px #ccc;">Arsip Saldo</h3>
				<br></br>
				<ul class="thumbnails">
				  <li class="span9">
				    <?php echo $this->session->flashdata('msg'); ?>
						<table class="table table-striped" style="box-shadow: 0px -2px 7px #ccc;background-color:#fcf8e3;">
								<thead>
								  <tr>
									<th><center>Nama Produk</center></th>
									<th><center>Tanggal</center></th>
									<th><center>Harga</center></th>
									<th><center>Hemat</center></th>
									<th>Konfirmasi</th>
								  </tr>
								</thead>
								<tbody>
									<?php
									if($arsip_menang != false){
										foreach ($arsip_menang as $key) {
									?>
									<tr>
									<td><a data-toggle="modal" href="#jazz"><?php echo $key['nama_lelang']; ?></a></td>
									<td><?php echo $key['waktu_daftar']; ?></td>
									<td>Rp. <?php echo $this->cart->format_number($key['harga_pasar']); ?></td>
									<td>Rp. <?php echo $this->cart->format_number($key['harga_pasar'] - $key['harga']); ?></td>
									<td>
									<?php 
									if($key['konfirmasi'] == 0){
									?>
									<a class="btn btn-primary" href="<?php echo site_url('user/lelang/konfirmasi_menang/'.$key['id_menang_lelang']); ?>">Konfirmasi
										</a>
									<?php
									}
									else{
									?>
									<button class="btn btn-success">Sudah Konfirmasi</button>
									<?php
									}
									?>
									</td>
								  	</tr>	
									<?php
										}
									}
									else{
										echo '<p class="alert alert-info">Anda Belum Menang Lelang.</p>';
									}
									?>
								</tbody>
							  </table>
					
				  </li>
				  
				</ul>
				</div>
				</div>
				<!--</div> End Row span9 Content Lelang Sedang Berlangsung-->

			<?php echo $this->pagination->create_links(); ?>
			</div><!-- End Content Span9-->
</div><!-- End Row Main Content -->