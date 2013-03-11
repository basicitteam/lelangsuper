			<!-- Content Span9 -->
			<div class="span9">
				<!-- Content lelang sedang berlangsung -->
				<div class="row">
					<!--<div class="span9"> -->
				<h3 class="btn btn-warning" style="width: 94%;margin-left: 30px;box-shadow: 0px -2px 7px #ccc;">Konfirmasi Pembayaran</h3>
				<div class="span9">
						<article>
						
						<form class="form-horizontal" action="<?php echo site_url('user/konfirmasi/proses_konfirm'); ?>" method="POST" enctype="multipart/form-data">
						<hr>
						<fieldset>
							
						    <h4>
							<center><strong>
							Konfirmasi
							</strong></center></h4>
							<hr>
							<div class="control-group">
								<label class="control-label">Nomor Tagihan</label>
								<div class="controls">
									<input type="text" disabled="true" value="<?php echo $id; ?>" class="input-large" >
									<input type="hidden" value="<?php echo $id; ?>" name="id_beli_paket">
								</div>
						    </div>
							<div class="control-group">
								<label class="control-label" for="bank">Bank Tujuan</label>
								<div class="controls">
									<select id="bank" name="bank">  
										<option>-Pilih Nama Bank-</option>
										<?php
										foreach ($bank as $key) {
										?>
										<option value="<?php echo $key['id_rekening']; ?>"><?php echo $key['nama_bank']; ?></option>
										<?php
										}
										?>
									</select>
								</div>
						    </div>
						    <div class="control-group">
								<label class="control-label">Bank Pengirim</label>
								<div class="controls">
									<input placeholder="Bank Pengirim" type="text" class="input-large" name="bank_pengirim">
								</div>
						    </div>
							<div class="control-group">
								<label class="control-label">Nomor Rekening Pengirim</label>
								<div class="controls">
									<input placeholder="Nomor Rekening Pengirim" type="text" class="input-large" name="no_rekening">
								</div>
						    </div>
							<div class="control-group">
								<label class="control-label">Nama Pemilik Rekekning Pengirim</label>
								<div class="controls">
									<input placeholder="Masukan Nama Lengkap Pengirim" type="text" class="input-large" name="atas_nama">
								</div>
						    </div>
							<div class="control-group">
								<label class="control-label"for="tgl">Tanggal Transfer</label>
								<div class="controls">
									<input type="text" class="input-large datetimepicker" name="tanggal_transfer">
								</div>
						    </div>
						    <div class="control-group">
								<label class="control-label">Jumlah Transfer</label>
								<div class="controls">
									<input placeholder="Jumlah Transfer" type="text" class="input-large" name="bayar">
								</div>
						    </div>
							<div class="control-group">
								<label class="control-label">No Referensi (Jika Ada)</label>
								<div class="controls">
									<input placeholder="Masukan No Referensi" type="text" class="input-large" name="no_referensi">
								</div>
						    </div>
							 <div class="form-actions alert alert-warning">
            				<button type="submit" class="btn btn-warning">Konfirmasi</button>
          					</div>
						</fieldset>
						</form>
				</article>
				  </div>
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