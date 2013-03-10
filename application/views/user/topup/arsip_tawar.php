			<!-- Content Span9 -->
			<div class="span9">
			<?php echo $this->pagination->create_links(); ?>
				<h3 class="btn btn-warning" style="width: 97%;margin-left: 0px;box-shadow: 0px -2px 7px #ccc;">Arsip Tawar</h3>
				<hr>
				<!-- Content review list -->
				<ul class="media-list alert alert-warning" style="box-shadow: 0px -2px 7px #ccc;">
					<?php
					if($arsip_tawar != false){
						foreach ($arsip_tawar as $key) {
						?>
						<li class="media">
					    <a class="pull-left" href="#">
					    <img class="media-object reviewlist" src="<?php echo base_url('assets/uploads/lelang/'.$key['foto_lelang']); ?>">
					  	</a>
						  <div class="media-body ">
						    <h4 class="media-heading"><?php echo $key['nama_lelang']; ?></h4>
						    <?php echo $key['deskripsi_lelang']; ?>
						  </div>
					  	</li>
						<?php		
						}
					}
					else{
						echo '<p class="alert alert-info">Anda Belum Mengikuti Lelang.</p>';
					}
					?>
				</ul>
			<?php echo $this->pagination->create_links(); ?>
			</div><!-- End Span9 Content review list -->
</div><!-- End Row Main Content -->