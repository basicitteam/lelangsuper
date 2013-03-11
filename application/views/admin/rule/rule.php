<div class="span9">
	<div class="row">
          <!--<div class="span9"> -->
        <h3 class="btn btn-warning" style="width: 94%;margin-left: 30px;box-shadow: 0px -2px 7px #ccc;">Manage Rule</h3>
        <br></br>
        <div class="span9">
   <br>
  <legend style="box-shadow: 0px -2px 7px #ccc;background-color:#fcf8e3;"> <center><strong>RULE</strong></center> </legend>
  <br>
  
  <center>
	  <a data-toggle="modal" href="#" class="btn btn-warning btn-small"><i class="icon-gift"></i>Cara</a>
	  <a data-toggle="modal" href="#" class="btn btn-warning btn-small"><i class="icon-gift"></i>Terms and Condition</a>
    <a data-toggle="modal" href="#" class="btn btn-warning btn-small" ><i class="icon-gift"></i>FAQ</a>
  </center>
  <hr>
  <br>
  <legend style="box-shadow: 0px -2px 7px #ccc;background-color:#fcf8e3;"> <center><strong>SIDE BAR</strong></center> </legend>
  <br>
  <center>
    <a data-toggle="modal" href="#" class="btn btn-warning btn-small"><i class="icon-gift"></i>Keluhan</a>
    <a data-toggle="modal" href="#" class="btn btn-warning btn-small"><i class="icon-gift"></i>Sistem Pembayaran</a>
    <a data-toggle="modal" href="#" class="btn btn-warning btn-small"><i class="icon-gift"></i>Pengiriman Barang</a>
  </center>
  <hr>
  <br>
  <legend style="box-shadow: 0px -2px 7px #ccc;background-color:#fcf8e3;"> <center><strong>Cara Bermain</strong></center> </legend>
  <br>
  <p style="text-align: justify;">
              
                Daftarkan diri kamu! Gratis kok!.Cuma perlu beberapa menit saja untuk daftar gratis. Tidak perlu kartu kredit, yang penting kamu sudah diatas 18 tahun. Beli Point untuk ikutan TAWAR di game LelangSuper. Segera beli point, gadget-gadget canggih siap kamu bawa pulang.Point untuk apa? Setiap kamu melakukan TAWAR kamu harus menggunakan point.beli Point cukup aman, karena pembayarannya bisa menggunakan transfer bank BCA atau Mandiri atau bisa gunakan kartu kredit kamu via Paypal.Paket point yang lebih besar pastinya akan menguntungkan buat kamu, karena banyak bonus pointnya.
              <a href="#">[Edit]</a></p>
  
        <hr>
          <div class="accordion" id="accordion2" style="box-shadow: 0px -2px 7px #ccc;">
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle btn btn-warning" data-toggle="collapse" data-parent="#accordion2" href="#recentOne">
                   Mulai Lelang
                </a>
              </div>
              <div id="recentOne" class="accordion-body collapse in">
                <div class="accordion-inner">
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle btn btn-warning" data-toggle="collapse" data-parent="#accordion2" href="#recentTwo">
                   Lelang
                </a>
              </div>
              <div id="recentTwo" class="accordion-body collapse">
                <div class="accordion-inner">
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle btn btn-warning" data-toggle="collapse" data-parent="#accordion2" href="#recentThree">
                  Hot Wiki
                </a>
              </div>
              <div id="recentThree" class="accordion-body collapse">
                <div class="accordion-inner">
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle btn btn-warning" data-toggle="collapse" data-parent="#accordion2" href="#recentFour">
                 Tawar
                </a>
              </div>
              <div id="recentFour" class="accordion-body collapse">
                <div class="accordion-inner">
                </div>
              </div>
            </div>
          </div>
        
        
        </div>
        <center>
    <a data-toggle="modal" href="#add_rule" class="btn btn-warning btn-small"><i class="icon-gift"></i>Tambah Rule Cara Bermain</a>
  </center>
  </div>

<div id="add_rule" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Silahkan tambah rule</h3>
  </div>
  <div class="modal-body">
   <form class="form-horizontal" action="#" method="POST" enctype="multipart/form-data">
    <fieldset>
        <div class="control-group">
          <label class="control-label">Nama Rule</label>
            <div class="controls">
              <input placeholder="Masukan Nama Rule"  class="input-large" type="text">
            </div>
        </div>
    </fieldset>
   </form>  
  </div>
  <div class="modal-footer">
    <form id="form-belipoint" method="post" action="<?php echo site_url('admin/rule'); ?>">
  <input id="id" type="hidden" name="id_paket" value=""/>
  <button type="submit" class="btn btn-danger">Tambah</button>
  <button class="btn btn-warning" data-dismiss="modal" aria-hidden="true">Cancel</button>
  </form>
  </div>
</div>
  </div>
</div>  