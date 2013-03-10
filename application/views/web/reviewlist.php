			<!-- Content Span9 -->
			<div class="span9">
				<h3 class="btn btn-warning" style="width: 97%;margin-left: 0px;box-shadow: 0px -2px 7px #ccc;">User Testimoni</h3>
				<hr>
				<!-- Content review list -->
				<ul class="media-list" style="box-shadow: 0px -2px 7px #ccc;">
				<?php
				foreach ($list_testimoni as $key) {
				?>
				<hr>
				  <li class="media">
				    <a class="pull-left" href="#">
				    <img class="media-object reviewlist" src="<?php echo base_url('assets/uploads/lelang/'.$key['foto_lelang']); ?>">
				  </a>
				  <div class="media-body">
				    <h4 class="media-heading"><?php echo $key['nama_lelang']; ?></h4>
				    <hr>
				    <p>Pemenang : <?php echo $key['username']; ?></p>
				    <p>Harga : Rp. <?php echo $this->cart->format_number($key['harga']); ?></p>
				    <p><?php echo $key['testimoni']; ?></p>
				  </div>
				  </li>
				<hr>
				<?php
				}
				?>
				</ul>
			</div><!-- End Span9 Content review list -->
</div><!-- End Row Main Content -->