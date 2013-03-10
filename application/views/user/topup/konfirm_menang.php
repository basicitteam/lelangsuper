			<!-- Content Span9 -->
			<div class="span9">
			<div class="row">
				<div class="span5">
				<?php echo $this->session->flashdata('msg'); ?>
				<form class="form-horizontal" method="POST" action="<?php echo site_url('user/lelang/proses_konfirm_menang'); ?>">
				<legend>Konfirmasi Menang Lelang</legend>
				<div class="control-group">
			    <label class="control-label" for="KTP">No KTP</label>
			    <div class="controls">
			      <input type="text" id="KTP" placeholder="No Ktp Anda" name="ktp" value="<?php echo $menang['ktp']; ?>">
			      <input type="hidden" name="id_menang_lelang" value="<?php echo $menang['id_menang_lelang']; ?>">
			    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="email">Email Anda</label>
				    <div class="controls">
				      <input type="text" id="email" placeholder="Email Anda" name="email" value="<?php echo $menang['email']; ?>">
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="alamat">Alamat</label>
				    <div class="controls">
				      <textarea name="alamat" id="alamat"><?php echo $menang['alamat']; ?></textarea>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="testimoni">Testimoni</label>
				    <div class="controls">
				      <textarea name="testimoni" id="testimoni"><?php echo $menang['testimoni']; ?></textarea>
				    </div>
				  </div>
			  	<div class="form-actions">
				  <button type="submit" class="btn btn-primary">Save changes</button>
				  <a class="btn" href="<?php echo site_url('user/lelang/arsip_menang'); ?>">Cancel</a>
				</div>
				</form>
				</div>
				<div class="span4">
				<h4>Keterangan Lelang</h4>
				<p><?php echo $menang['nama_lelang']; ?></p>
				<p>Harga : Rp. <?php echo $this->cart->format_number($menang['harga']); ?></p>
				<a href="#" class="thumbnail">
					<img src="<?php echo base_url('assets/uploads/lelang/'.$menang['foto_lelang']); ?>">
				</a>
				</div>
			</div>
			
			</div><!-- End Content Span9-->
</div><!-- End Row Main Content -->