			<!-- Content Span9 -->
			<div class="span9">
				<!-- Content lelang sedang berlangsung -->
				<div class="row">
					<!--<div class="span9"> -->
				<h3 class="btn btn-warning" style="width: 94%;margin-left: 30px;box-shadow: 0px -2px 7px #ccc;">Voucher Lelang</h3>
				<div class="span9">
					<br>
					<?php echo $this->session->flashdata('msg'); ?>
					<form action="<?php echo site_url('user/topup/validasi_voucher'); ?>" method="POST">
						<table class="table table-striped" style="box-shadow: 0px -2px 7px #ccc;background-color:#fcf8e3;">
								<tbody>
									<tr>
										<td>Masukan No Voucher</td>
										<td>
											<input class="input-large" name="no_voucher" type="text" placeholder="Masukan No Voucher"> 
										</td>
									</tr>
									<tr>
										<td></td>
										<td><?php echo $img; ?> </td>
									</tr>
									<tr>
										<td>Captcha</td>
										<td>
											<input class="input-large" name="captcha" type="text" placeholder="Captcha"> 
										</td>
									</tr>
								</tbody>
						</table>
						<button class="btn btn-primary" type="submit">Submit</button>
					</form>
				 </div>
				</div>
				</div>
				<!--</div> End Row span9 Content Lelang Sedang Berlangsung-->
			
			</div><!-- End Content Span9-->
</div><!-- End Row Main Content -->

