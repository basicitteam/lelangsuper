			<!-- Content Span9 -->
			<div class="span9">
				<!-- Content lelang sedang berlangsung -->
				<div class="row">
					<!--<div class="span9"> -->
				<h3 class="btn btn-warning" style="width: 94%;margin-left: 30px;box-shadow: 0px -2px 7px #ccc;">Ubah Profile</h3>
				<?php $this->session->flashdata('msg'); ?>
				<ul class="thumbnails " >
					<hr>
				  <li class="span9 alert aler-warning" style="width:91%;" >
						<article>
						<form class="form-horizontal" action="<?php echo site_url('user/user/update_profile'); ?>" method="POST" enctype="multipart/form-data">
						<hr>
						<fieldset>
						    <h4>
							<center><strong>
							Data Pribadi
							</strong></center></h4>
							<hr>
							<div class="control-group">
								<label class="control-label" for="name">Nama Lengkap</label>
								<div class="controls">
									<input type="hidden" name="id_user" value="<?php echo $user['id_user']; ?>">
									<input type="text" class="input-large" id="name" name="nama_user" value="<?php echo $user['nama_user']; ?>">
								</div>
						    </div>
							<div class="control-group">
								<label class="control-label" for="jk">Jenis Kelamin</label>
								<div class="controls">
									<select id="jk" name="jns_kelamin">
									<option <?php if($user['jns_kelamin'] == 'Pria'){echo 'selected="true"'; }	?> value="Pria">Pria</option>
									<option <?php if($user['jns_kelamin'] == 'Wanita'){echo 'selected="true"'; }	?> value="Wanita">Wanita</option>
									</select>
								</div>
						    </div>
							<div class="control-group">
								<label class="control-label" for="tgl">Tanggal Lahir</label>
								<div class="controls">
									<input  type="text" id="datepicker" class="input-large" id="tgl" name="tgl_lahir" value="<?php echo $user['tgl_lahir'];?>">
								</div>
						    </div>
							<div class="control-group">
								<label class="control-label" for="no">No Telepon</label>
								<div class="controls">
									<input type="text" name="no_telp" value="<?php echo $user['no_telp']; ?>"/>
								</div>
						    </div>
							<div class="control-group">
								<label class="control-label" for="identitas">No KTP</label>
								<div class="controls">
									<input  type="text" class="input-large" id="identitas" name="no_ktp" value="<?php echo $user['no_ktp']; ?>">
								</div>
						    </div>
							<div class="control-group">
								<label class="control-label " for="email">Alamat Email</label>
								<div class="controls">
									<input disabled="disabled" type="text" class="input-large" id="email" name="email" value="<?php echo $user['email']; ?>">
								</div>
						    </div>
							<hr>
							<h4>
							<center><strong>
							Identitas
							</strong></center>
							</h4>
							<hr>
							<div class="control-group">
								<label class="control-label" for="address">Alamat Lengkap</label>
								<div class="controls">
									<textarea style="margin: 0px;width: 210px;height: 121px;"placeholder="Masukan Nama Lengkap Anda" type="text" class="input-large" id="address" name="alamat"><?php echo $user['alamat']; ?></textarea>
								</div>
						    </div>
							<hr>
						    <div class="form-actions alert alert-warning">
            				<input type="submit" class="btn btn-danger">
            				<a href="<?php echo site_url('user');?>" class="btn btn-warning">Cancel</a>
          					</div>
						</fieldset>
						</form>
				</article>
				  </li> 
				</ul>
				</div>
				</div>
				<!--</div> End Row span9 Content Lelang Sedang Berlangsung-->

			
			</div><!-- End Content Span9-->
</div><!-- End Row Main Content -->

