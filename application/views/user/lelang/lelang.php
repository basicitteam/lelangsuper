<style type="text/css">
#hargalelang {
font-size: 30px;
}
#penawartertinggi {
font-size: 20px;
}
#thumbnail-lelang {
max-height: 430px;
}
#info-lelang {
background-color: rgba(0, 0, 0, 0.75);
color: white;
position: absolute;
top: 0px;
width: 100%;
height: 100%;
}
#info-lelang-inner {
margin: 40px;
}
#thumbnail-container {
position: relative;
}
.highlight {
color: red;
}
</style>
<!-- Untuk Ajax! -->
<input type="hidden" id="id_lelang" data-id="<?php echo $lelang['id_lelang']; ?>"/>
<!-- /Untuk Ajax! -->
<!-- Start row main content -->
<div class="row">
	<!-- Content Lelang -->
	<div id="contentlelang" class="span9">
	<!-- Header Content Lelang -->
	<div class="row">
		<div class="span9">
	<h4 class="btn btn-warning" style="width:97%;box-shadow: 0px -2px 7px #ccc;">Data Barang</h4>
		</div>
	</div>
	<div class="row">
		<div class="span9">
			<h4 class="center"><?php echo $lelang['nama_lelang']; ?></h4>
		</div>
	</div>
	<hr>
	<!-- /Header Content Lelang -->
	<!-- inner Content Lelang -->
	<div class="row">
		<!-- Foto lelang -->
		<div class="span5" id="thumbnail-container">
			<a href="#" class="thumbnail">
                <img id="thumbnail-lelang" src="<?php echo base_url('assets/uploads/lelang/'.$lelang['foto_lelang'])?>" alt="<?php echo $lelang['nama_lelang']; ?>">
            </a>
            <div id="info-lelang">
            	<div id="info-lelang-inner">
            	<p>Point Per Tawar : <?php echo $lelang['point_bid']; ?></p>
            	<p>Masa Absensi Hingga : <?php echo date('d F Y H:i:s',$lelang['waktu_selesai']); ?></p>
            	<p>Point Absen : <?php echo $lelang['point_daftar']; ?></p>
            	<p>Kenaikan Harga Tawar : <?php echo $lelang['kenaikan_harga']; ?></p>
            	<p>Harga Maksimal : Rp. <?php echo $this->cart->format_number($lelang['harga_max']); ?></p>
            	</div>
            </div>
		</div>
		<!-- /Foto lelang -->
		<!-- Info lelang -->
		<div class="span4">
			<!-- Hemat -->
			<div class="row" id="hemat">
				<div class="span4">
				<table class="table">
					<tr>
						<td>Harga Pasaran : </td>
						<td>Rp.</td>
						<td><?php echo $this->cart->format_number($lelang['harga_pasar']); ?></td>
					</tr>
					<tr>
						<td>Harga Lelang : </td>
						<td>Rp.</td>
						<td class="hargalelang"></td>
					</tr>
					<tr>
						<td>Penghematan : </td>
						<td>Rp.</td>
						<td id="penghematan"></td>
					</tr>
				</table>
				</div>
			</div><!-- /Hemat -->
			<hr>
			<!-- Sisa Waktu -->
			<div class="row">
				<div class="span4">
					<p>Waktu Tersisa : </p>
				</div>
				<div class="span4" id="countdownlelang">
				</div>
			</div>
			<hr>
			<!-- /Sisa Waktu -->
			<!-- Harga -->
			<div class="row">
				<div class="span4">
					<p>Harga Lelang : </p>
				</div>
				<div class="span4" id="hargalelang">
				</div>
			</div>
			<hr>
			<!-- /harga -->
			<!-- Penawar Tertinggi -->
			<div class="row">
				<div class="span4">
					<p>Penawar Tertinggi : </p>
				</div>
				<div class="span4" id="penawartertinggi">
					-
				</div>
			</div>
			<hr>
			<!-- /Penawar Tertinggi -->
			<div class="row">
				<div class="span4">
					<div class="btn-group">
					  <button class="btn btn-primary" id="tawar" data-id="<?php echo $lelang['id_lelang']; ?>">Tawar</button>
					  <button class="btn btn-info" id="btn-info"><i class="icon-search"></i></button>
					</div>
		            <a class="btn btn-warning" href="<?php echo site_url();?>">Back</a>
				</div>
			</div>
		</div><!-- /Info lelang -->
	</div><!-- end row inner Content Lelang -->
	</div>
	<!-- /Content Lelang -->

	<!-- Sidebar Bidder -->
	<div id="daftarbidder" class="span3">
	<h4 class="btn btn-warning" style="width:97%;box-shadow: 0px -2px 7px #ccc;">Daftar Pemain</h4>
	<div class="row">
		<div class="span3">
			<table class="table table-hover" id="list-bidder">

			</table>
		</div>
	</div>
	</div>
	<!-- /Sidebar Bidder -->
</div>
<hr>
<pre>
	<?php print_r($lelang); ?>
</pre>