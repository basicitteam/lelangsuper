			<!-- Content Span9 -->
			<div class="span9">
				<!-- Content lelang sedang berlangsung -->
				<div class="row">
					<!--<div class="span9"> -->
				<h3 class="btn btn-warning" style="width: 94%;margin-left: 30px;box-shadow: 0px -2px 7px #ccc;">Profile</h3>
				<div class="span9">
					<br>
						<table class="table table-striped" style="box-shadow: 0px -2px 7px #ccc;background-color:#fcf8e3;">
								<thead>
									<tr>
										<th><h4>LEVEL</h4></th>
										<th></th>
										<TH></TH>
									</tr>
								</thead>
								<tbody>
								  <tr>
									<td>Level Anda saat ini</td>
									<td>=</td>
									<td><?php echo $level ?></td>
								  </tr>
								  <tr>
									<td>Hak Akses</td>
									<td>=</td>
									<td>Terbuka</td>
								  </tr>
								 
								  <tr>	
									  <td>
										  <br></br>
											<h4 ><strong><em><center>Terdaftar menjadi anggota</center></em></strong></h4>
										  <br></br>
									  </td>
									  <td>
									  
									  </td>
									  <td>
									  
									  </td>
								  </tr>
								  <tr>
									  <td><strong>
										LelangSuper.com 			 		
									  </strong></td>
									  <td>
										=
									  </td>
									  <td>
										<?php echo $user['tanggal_daftar']; ?>
									  </td>
								  </tr>
								  <tr>
								  	<td><strong>
										Saldo Point			 		
									  </strong></td>
								  	<td>=</td>
								  	<td>
								  		<?php echo $user['saldo']; ?>
								  	</td>
								  </tr>
								</tbody>
							  </table>
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