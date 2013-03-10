<div class="row"><!-- Start Main Content -->
			<!-- Sidebar Span3 -->
			<div class="span3">
				<!-- Sidebar recent lelang -->
				<div class="row">
				<div class="span3 sidebar">
				<h4 class="btn btn-warning" style="width:90%;box-shadow: 0px -2px 7px #ccc;">Recent Lelang</h4>
				<hr>
					<div class="accordion" id="accordion2" style="box-shadow: 0px -2px 7px #ccc;">
				<?php 
				if (isset($recent_lelang)) {
				foreach ($recent_lelang as $key) {
				?>
				
					  <div class="accordion-group">
					    <div class="accordion-heading">
					      <a class="accordion-toggle btn btn-warning" data-toggle="collapse" data-parent="#accordion2" href="#recent<?php echo $key['id_lelang']; ?>">
					         <?php echo $key['nama_lelang']; ?>
					      </a>
					    </div>
					    <div id="recent<?php echo $key['id_lelang']; ?>" class="accordion-body collapse">
					      <div class="accordion-inner">
					        <a class="pull-left" href="#">
							    <img class="media-object" src="<?php echo base_url('assets/uploads/lelang/'.$key['foto_lelang']); ?>">
							  </a>
							    <p>Dimenangkan oleh :<?php echo substr($key['username'],0,50); ?></p>
					      </div>
					    </div>
					  </div>
				<!-- End Span 3 Sidebar recent lelang -->
				<?php
				}//end foreach
				}//end if
				?>
					</div>
				</div>
				
				</div>
				<hr>
				<div class="row">
				<!-- Sidebar Hot Chat -->
				<div class="span3 sidebar">
					<h4 class="btn btn-warning" style="width:90%;box-shadow: 0px -2px 7px #ccc;">Hot Chat</h4>
					<hr>
					<div id="chatbox_janedoe" class="chatbox" style="bottom: 0px; right: 252px; display: block;box-shadow: 0px -2px 7px #ccc;">

					<div class="chatboxhead chatboxblink" >
						<div class="chatboxtitle">Tyo</div>
						<div class="chatboxoptions">
							<a href="javascript:void(0)" onclick="javascript:toggleChatBoxGrowth('janedoe')">-</a> 
							<a href="javascript:void(0)" onclick="javascript:closeChatBox('janedoe')">X</a></div>
							<br clear="all">
					</div>
						<div class="chatboxcontent">
							<div class="chatboxmessage">
								<span class="chatboxmessagefrom">Adit:&nbsp;&nbsp;</span>
								<span class="chatboxmessagecontent">Gimana lu dah dapet apa aj?</span>
							</div>
							<div class="chatboxmessage">
								<span class="chatboxinfo">Sent at 10:33AM Feb 03rd</span>
							</div>
							<div class="chatboxmessage">
								<span class="chatboxmessagefrom">Roger:&nbsp;&nbsp;</span>
								<span class="chatboxmessagecontent">udah cuy, lu gmn?</span>
							</div>
							<div class="chatboxmessage">
								<span class="chatboxinfo">Sent at 10:35AM Feb 03rd</span>
							</div>
							<div class="chatboxmessage">
								<span class="chatboxmessagefrom">Tyo:&nbsp;&nbsp;</span>
								<span class="chatboxmessagecontent">Gw barusan dapet mobil cuy,</span>
							</div>
							<div class="chatboxmessage">
								<span class="chatboxinfo">Sent at 10:40AM Feb 03rd</span>
							</div>
						</div>
						<div class="chatboxinput">
							<textarea class="chatboxtextarea" >
							</textarea>
						</div>
				</div>
				
				</div>
				<!-- End Span 3 Sidebar Hot Chat -->
				</div>
				<hr>
				<div class="row">
				<!-- Sidebar Wiki Lelang -->
				<div class="span3 sidebar">
				<h4 class="btn btn-warning" style="width:90%;box-shadow: 0px -2px 7px #ccc;">Wiki Lelang</h4>
				<hr>
					<div class="accordion" id="accordion2" style="box-shadow: 0px -2px 7px #ccc;">
					  <div class="accordion-group">
					    <div class="accordion-heading">
					      <a class="accordion-toggle btn btn-warning" data-toggle="collapse" data-parent="#accordion2" href="#wikiOne">
					         Point Tawar dan Initial Point
					      </a>
					    </div>
					    <div id="wikiOne" class="accordion-body collapse in">
					      <div class="accordion-inner">
					        <p style="text-align: justify;">Setiap Anda klik tawar, point Anda akan berkurang sejumlah bid point yang 
 		 berlaku saat itu. Penuruan Bid Point dapat dilakukan oleh Admin dan akan
		diumumkan pada saat lelang berlangsung. Initial Point atau Point Absen yaitu, point yang dipotong pertama kali melakukan klik TAWAR pada satu lelang.
         Keterangan lebih lanjut mengenai Bid Point dan Initial Point silahkan klik di </p>
					      </div>
					    </div>
					  </div>
					  <div class="accordion-group">
					    <div class="accordion-heading">
					      <a class="accordion-toggle btn btn-warning" data-toggle="collapse" data-parent="#accordion2" href="#wikiTwo">
					         Maksimal Harga Lelang
					      </a>
					    </div>
					    <div id="wikiTwo" class="accordion-body collapse">
					      <div class="accordion-inner">
					        <p style="text-align: justify;">Merupakan harga maximum yang diterapkan untuk suatu barang lelang tertentu.
	     jika harga barang telah mencapai harga maximum, harga tidak akan naik lagi.
          Keterangan lebih lanjut mengenai Max Price silahkan klik di </p>
					      </div>
					    </div>
					  </div>
					  <div class="accordion-group">
					    <div class="accordion-heading">
					      <a class="accordion-toggle btn btn-warning" data-toggle="collapse" data-parent="#accordion2" href="#wikiThree">
					          Harga Tawar dan Reserved Price
					      </a>
					    </div>
					    <div id="wikiThree" class="accordion-body collapse">
					      <div class="accordion-inner">
					        <p style="text-align: justify;">Harga Tawar, yaitu kenaikan harga tiap kali ada yang melakukan klik TAWAR. 
        Reserved Price yaitu pencapaian harga TAWAR di tiap lelang, dimana jika Reserved Price tidak tercapai maka lelang dinyatakan "Berakhir Gagal" 
        dan Point Customer yang terpakai akan di kembalikan.  
        Keterangan lebih lanjut mengenai Bid Price dan Reserved Price silahkan klik di </p>
					      </div>
					    </div>
					  </div>
					  <div class="accordion-group">
					    <div class="accordion-heading">
					      <a class="accordion-toggle btn btn-warning" data-toggle="collapse" data-parent="#accordion2" href="#wikiFour">
					          Golden Periode
					      </a>
					    </div>
					    <div id="wikiFour" class="accordion-body collapse">
					      <div class="accordion-inner">
					        <p style="text-align: justify;">Penerapan golden period pada lelang diterapkan oleh admin setelah lelang berlangsung lebih dari 1 jam dan akan diumumkan kepada bidder 
        pada saat diterapkan. Keterangan lebih lanjut mengenai Golden Period silahkan klik di </p>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
				<!-- End Span3 Sidebar Wiki Lelang -->
				</div>
				<hr>
				<div class="row">
				<!-- Sidebar testi Lelang -->
				<?php 
				if(isset($testimoni)){
				?>
				<div class="span3 sidebar">
				<h4 class="btn btn-warning" style="width:90%;box-shadow: 0px -2px 7px #ccc;">Testimoni</h4>
				<hr>
					<div class="accordion" id="accordiontesti" style="box-shadow: 0px -2px 7px #ccc;" >
				<?php
				foreach ($testimoni as $testi) {
				?>
				<div class="accordion-group">
				    <div class="accordion-heading">
				      <a class="accordion-toggle btn btn-warning" data-toggle="collapse" data-parent="#accordiontesti" href="#testi<?php echo $testi['id_menang_lelang'] ?>">
				          <?php echo $testi['nama_lelang']; ?>
				      </a>
				    </div>
				    <div id="testi<?php echo $testi['id_menang_lelang'] ?>" class="accordion-body collapse">
				      <div class="accordion-inner">
				       <a class="pull-right thumbnail" href="#">
			                <img src="<?php echo base_url('assets/uploads/lelang/'.$testi['foto_lelang']); ?>">
			           </a>
				        <p style="text-align: justify;">
				        	<p style="text-align: justify;"><?php echo $testi['username']; ?></p>
				        	<hr>
				        	<p style="text-align: justify;"><?php echo substr($testi['testimoni'], 0,50); ?></p>
				        </p>
				      </div>
				    </div>
				  </div>
				<?php
				}
				?>
				</div>
				</div><!-- End Span3 Sidebar Testi Lelang -->
				<?php
				}
				?>
			</div>
				<hr>
			</div><!-- End Span 3 Sidebar -->
