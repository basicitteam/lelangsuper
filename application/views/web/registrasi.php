    <link href="<?php echo base_url('assets/css/registrasi.css'); ?>" rel="stylesheet" media="screen"> 
	<div class="container" style="box-shadow: 0px -2px 7px #ccc;"><!--Content Container-->
	  <div class="span12"  style="width:96%;" ><!-- Content Span10 -->
	    <?php echo $this->session->flashdata('msg'); ?>
		  <form action="<?php echo site_url('web/proses_registrasi'); ?>" id="FormRegistrasi" method="post" name="FormRegistrasi">
		    <div id="formReg">
			  <div id="form">
			    <h1>Data Personal</h1>
				  <table border="0" cellpadding="0" cellspacing="0">
				    <tbody>
				      <tr>
						<td width="200">Nama Lengkap <span style="color:red;">*</span> </td>
						<td><input name="nama" type="text" id="nama" maxlength="50" placeholder="Nama Sesuai dengan identitas">
						  <br>
							<div></div>
							  <div class="noted notecustid"> 
							    <div class="notedbox2content" style="text-align: justify;" >
										Nama Lengkap sesuai dengan nama yang tertera di Identitas anda
								</div>
							  </div>
						</td>
					  </tr>
					  <tr>
					    <td>Jenis Kelamin</td>
						<td>
						  <select name="jeniskelamin" id="jeniskelamin">
						    <option value="Pria">Pria</option>
						    <option value="Wanita">Wanita</option>
						  </select>
						</td>
					  </tr>
					  <tr>
					    <td>Tempat Lahir <span style="color:red;">*</span></td>
							  <td><input name="tempatlahir" type="text" id="tempatlahir" maxlength="50" placeholder="Tempat Lahir sesuai dengan Identitas"></td>
							</tr>
							<tr>
							  <td>Tanggal Lahir <span style="color:red;">*</span></td>
							  <td>
							<input name="tgl_lahir" id="datepicker"/>							  
								<div></div>
							<div class="noted notecustid"> 
							    <div class="notedbox2content" style="text-align: justify;" >
										Umur minimal 18 tahun keatas
								</div>
							  </div>	
							  </td>
							</tr>
							<tr>
								<hr>
							  <td>No KTP <span style="color:red;">*</span></td>
							  <td><input name="noidentitas" type="text" id="no_ktp" maxlength="125"></td>
							</tr>
							<tr>
								<hr>
							  <td>Alamat <span style="color:red;">*</span></td>
							  <td><textarea name="alamat"></textarea></td>
							</tr>
							</tbody></table>
							</div>
				
				
				
			<div id="form">
				<h1>Informasi Login</h1>
				<table border="0" cellpadding="0" cellspacing="0">
				<tbody>
				  <tr>
				  <td width="200">User Name <span style="color:red;">*</span></td>
				  <td>
				  <input name="userid" id="userid" type="text" maxlength="16">
				  <div id="hasilcekID"></div>
				  <div class="noted notecustid"> 
							    <div class="notedbox2content" style="text-align: justify;">
								  Username minimal <span style="font-size:12px">
								  <strong>6</strong>
								</span> dan maksimal <span style="font-size:12px">
								<strong>15</strong>
							</span> karakter. Hanya dapat diisi huruf a-z dan angka 0-9
								</div>
							  </div>
				    </td>
				</tr>
				<tr>
				  <td>Password <span style="color:red;">*</span></td>
				  <td><span class="losspass">
					<input name="pass1" id="pass1" type="password" value="">
				  </span></td>
				</tr>
				<tr>
				  <td>Ketik Ulang Password <span style="color:red;">*</span></td>
				  <td><span class="losspass">
					<input name="pass2" id="pass2" type="password" value="">
				  </span></td>
				</tr>
				<tr>
				  <td>Alamat Email <span style="color:red;">*</span></td>
				  <td><input name="email" type="text" id="email" maxlength="40">
					<div class="noted notecustid"> 
							    <div class="notedbox2content" style="text-align: justify;">
										Isi email dengan benar, kami akan melakukan verifikasi email anda.
								</div>
							  </div>
				  </td>
				</tr>
				<tr>
				  <td>No Handphone <span style="color:red;">*</span></td>
				  <td><input name="telepon" type="text" id="telepon" maxlength="15"><br>
				  <span id="hasilcekTelp"></span></td>
				</tr>
				<tr>
				  <td height="10" colspan="2" valign="bottom">&nbsp;</td>
				  </tr>
				
				<tr>
				  <td height="10" colspan="2" class="noborder">&nbsp;</td>
				</tr>
				<tr>
				  <td height="40" colspan="2">Tanda <span style="font-size:14px color:red;">*</span> adalah kolom yang harus diisi</td>
				</tr>
				<tr>
				  <td height="20" colspan="2" class="noborder"><input name="newsletter" type="checkbox" id="newsletter" checked="checked">
					Saya ingin menerima notifikasi via <b>SMS</b> atau <b>email</b></td>
				</tr>
				<tr>
				  <td height="20" colspan="2" class="noborder"><input name="tnc" type="checkbox" id="cbox">
					Saya setuju dengan <a href="tnc.php" class="popup" style="cursor:pointer; color:#0066FF">Peraturan &amp; Tata Tertib</a> www.lelangsuper.com</td>
				</tr>
				<tr>
					<td height="20" colspan="2" valign="bottom"></td>
				</tr>
				<tr>
					<hr>
					<td>
				  <button class="btn btn-danger" type="submit">Lanjutkan</button>
				</center>
				 </td>
				</tr>
				</tbody></table>
				</div>
				<div class="clear"></div>
				<div id="Resform"></div>
				</div>
				</form>
				
			</div><!-- End Content Span10-->
		</div><!-- End Content Container-->
</div><!-- End Row Main Content -->
