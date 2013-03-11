			<!-- Content Span9 -->
			<div class="span9">
				<?php echo $this->session->flashdata('msg'); ?>
				<!-- Content lelang sedang berlangsung -->
				<div class="row">
					<!--<div class="span9"> -->
				<h3 class="btn btn-warning" style="width: 94%;margin-left: 30px;box-shadow: 0px -2px 7px #ccc;">Lelang Sedang Berlangsung</h3>
				<hr>
				<ul class="thumbnails" style="background-color: white;">
				<?php
				foreach ($lelang as $key) {
				?>
				<li class="span3">
				    <div class="thumbnail">
						  <img class="lelanghome" src="<?php echo base_url('assets/uploads/lelang/'.$key['foto_lelang']); ?>"  alt="<?php echo $key['nama_lelang']; ?>" style="height:90px;">
						  <h5><?php echo $key['nama_lelang']; ?></h5>
				      <hr>
				      <div class="caption">
						  <a class="btn btn-warning" href="<?php echo site_url('user/lelang/join/'.$key['id_lelang']); ?>">
							<?php
							if(is_user()){
								?>
							Join
								<?php
							}
							else{
								?>
							Detail
								<?php
							}
							?>
						  </a>
						  <hr>
						  <div class="countdown btn btn-warning" data-time="<?php echo $key['waktu_selesai'] - time(); ?>" style="width: 217px;"><?php echo date('H:i d M Y',$key['waktu_selesai']); ?></div>
						  <p style="text-align: justify;"><?php echo substr($key['deskripsi_lelang'], 0, 100); ?></p>
					  </div>
					</div>
				  </li>
				<?php
				}
				?>
				</ul>
				
				</div>
				<!--</div> End Row span9 Content Lelang Sedang Berlangsung-->

			
			</div><!-- End Content Span9-->
</div><!-- End Row Main Content -->
