			<!-- Content Span9 -->
			<div class="span9">
				<!-- Content lelang sedang berlangsung -->
				<div class="row">
					<!--<div class="span9"> -->
				<h3 class="btn btn-warning" style="width: 94%;margin-left: 30px;box-shadow: 0px -2px 7px #ccc;">Ubah Password</h3>				 
				<div class="span9">
				  	<form action="<?php echo site_url('user/user/update_password'); ?>" method="POST">
						<table class="table table-striped" style="box-shadow: 0px -2px 7px #ccc;background-color:#fcf8e3;">
						<hr>
						<?php echo $this->session->flashdata('msg'); ?>
								<thead>
								  <h4>
								  <center>
									<strong>
										Ubah Password Anda
									</strong>
								  </center>
								  </h4>
								  <hr>
								</thead>
								<tbody>
									<tr>
										<td>
											Masukan Password lama
										</td>
										<td>
											<input type="password" placeholder="Password Lama" name="password_lama"> 
											</input>
										</td>
									</tr>
									<tr>
										<td>
											Masukan Password Baru
										</td>
										<td>
											<input type="password" placeholder="Password Baru" name="password_baru"> 
											</input>
										</td>
									</tr>
									<tr>
										<td>
											Konfimasi Password Baru
										</td>
										<td>
											<input type="password" placeholder="Konfimasi Password Baru" name="passconf"> 
											</input>
										</td>
									</tr>
								</tbody>
						</table>
						<button class="btn btn-warning" type="submit">Save</button>
						</form>
				 </div>
				</div>
				</div>
				<!--</div> End Row span9 Content Lelang Sedang Berlangsung-->

			
			</div><!-- End Content Span9-->
</div><!-- End Row Main Content -->

