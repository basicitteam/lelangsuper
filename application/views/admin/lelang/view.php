<style type="text/css">
  #form-edit-foto {
  max-width: 272px;
  max-height: 272px;
  }
</style>
<div class="span9">
  <div class="row">
          <!--<div class="span9"> -->
        <h3 class="btn btn-warning" style="width: 94%;margin-left: 30px;box-shadow: 0px -2px 7px #ccc;">Manage Barang Lelang</h3>
        <br></br>
        <ul class="thumbnails "  >
          <li class="span9 " style="box-shadow: 0px -2px 7px #ccc;background-color:#fcf8e3;">
<form class="form-horizontal" method="POST" action="<?php echo site_url('admin/lelang/update'); ?>" enctype="multipart/form-data">
  <br>
  <legend> <center><strong>View Barang Lelang</strong></center> </legend>
  <br>
  <div class="control-group">
    <label class="control-label" for="nama_lelang" >Nama Lelang</label>
    <div class="controls">
      <input type="hidden" value="<?php echo $lelang['id_lelang']; ?>" name="id_lelang">
      <input type="text" id="nama_lelang" name="nama_lelang" value="<?php echo $lelang['nama_lelang']; ?>" disabled="true" style="width:93%">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="foto">Foto/Gambar</label>
    <div class="controls">
      <a href="#" class="thumbnail" id="form-edit-foto">
      <img class="lelanghome" disabled="true"  src="<?php echo base_url('assets/uploads/lelang/'.$lelang['foto_lelang']); ?>"/>
      </a>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="desc">Deskripsi Lelang</label>
    <div class="controls">
      <textarea id="desc" name="deskripsi_lelang" disabled="true" style="width:93%; height:500px"><?php echo $lelang['deskripsi_lelang']; ?></textarea>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="mulai">Waktu Mulai</label>
    <div class="controls">
      <input type="text" id="mulai" name="waktu_mulai" value="<?php echo date('m/d/Y G:i',$lelang['waktu_mulai']); ?>" disabled="true" style="width:93%" class="datetimepicker">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="selesai">Waktu Selesai</label>
    <div class="controls">
      <input type="text" id="selesai" name="waktu_selesai" disabled="true" style="width:93%" value="<?php echo date('m/d/Y G:i',$lelang['waktu_selesai']); ?>" class="datetimepicker">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="harga">Harga Pasar</label>
    <div class="controls">
      <input type="text" id="harga" name="harga_pasar" value="<?php echo $lelang['harga_pasar']; ?>" disabled="true" style="width:93%">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="point_min">Harga Min</label>
    <div class="controls">
      <input type="text" id="point_min" name="harga_min" value="<?php echo $lelang['harga_min']; ?>" disabled="true" style="width:93%">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="point_max">Harga Max</label>
    <div class="controls">
      <input type="text" id="point_max" name="harga_max" value="<?php echo $lelang['harga_max']; ?>" disabled="true" style="width:93%">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="point_bid">Point Bid</label>
    <div class="controls">
      <input type="text" id="point_bid" name="point_bid" value="<?php echo $lelang['point_bid']; ?>" disabled="true" style="width:93%">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="point_bid">Point Daftar</label>
    <div class="controls">
      <input type="text" id="point_daftar" name="point_daftar" value="<?php echo $lelang['point_daftar']; ?>" disabled="true" style="width:93%">
    </div>
  </div>
  <div class="form-actions"  style="background-color:#fcf8e3;">
  <a href="<?php echo site_url('admin/lelang'); ?>" class="btn btn-danger">Back</a>
</div>
</form>
</ui>
</ul>
</div>
</div>