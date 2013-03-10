<div class="span9">
  <div class="row">
          <!--<div class="span9"> -->
        <h3 class="btn btn-warning" style="width: 94%;margin-left: 30px;box-shadow: 0px -2px 7px #ccc;">Manage Barang Lelang</h3>
        <br></br>
        <ul class="thumbnails "  >
          <li class="span9 " style="box-shadow: 0px -2px 7px #ccc;background-color:#fcf8e3;">
<form class="form-horizontal"  method="POST" action="<?php echo site_url('admin/lelang/add_proses'); ?>" enctype="multipart/form-data">
  <br>
  <legend> <center><strong>Tambah Barang Lelang</strong></center> </legend>
  <br>
  <div class="control-group">
    <label class="control-label" for="nama_lelang">Nama Lelang</label>
    <div class="controls">
      <input type="hidden" value="<?php echo $this->session->userdata('id_admin') ?>" name="id_admin">
      <input type="text" id="nama_lelang" placeholder="nama barang lelang" name="nama_lelang">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="foto">Foto/Gambar</label>
    <div class="controls">
      <input type="file" name="userfile">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="desc" >Deskripsi Lelang</label>
    <div class="controls" >
      <textarea id="desc" placeholder="Deskripsi" name="deskripsi_lelang" ></textarea>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="mulai">Waktu Mulai</label>
    <div class="controls">
      <input type="text" id="mulai" placeholder="Waktu Mulai" name="waktu_mulai" class="datetimepicker">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="selesai">Waktu Selesai</label>
    <div class="controls">
      <input type="text" id="selesai" placeholder="Waktu Selesai" name="waktu_selesai" class="datetimepicker">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="harga">Harga Pasar</label>
    <div class="controls">
      <input type="text" id="harga" placeholder="Harga Pasar" name="harga_pasar">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="point_min">Harga Min</label>
    <div class="controls">
      <input type="text" id="point_min" placeholder="Harga Minimal" name="harga_min">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="harga_max">Harga Max</label>
    <div class="controls">
      <input type="text" id="point_max" placeholder="Harga Maksimal" name="harga_max">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="point_bid">Point Bid</label>
    <div class="controls">
      <input type="text" id="point_bid" placeholder="Point Bidding" name="point_bid">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="point_bid">Point Daftar</label>
    <div class="controls">
      <input type="text" id="point_daftar" placeholder="Point Daftar" name="point_daftar">
    </div>
  </div>
  <div class="form-actions" style="background-color:#fcf8e3;">
  <button type="submit" class="btn btn-warning">Save changes</button>
  <a href="<?php echo site_url('admin/lelang'); ?>" class="btn btn-danger">Cancel</a>
</div>
</form>
</ui>
</ul>
</div>
</div>