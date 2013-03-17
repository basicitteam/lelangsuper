<style type="text/css">
  #form-edit-foto {
  max-width: 272px;
  max-height: 272px;
  }
</style>
<!--
<div class="span9">
  <div class="row">
        <h3 class="btn btn-warning" style="width: 94%;margin-left: 30px;box-shadow: 0px -2px 7px #ccc;">Manage Barang Lelang</h3>
        <br></br>
        <div class="span9">
<form class="form-horizontal" method="POST" action="<?php echo site_url('admin/lelang/update'); ?>" enctype="multipart/form-data">
  <br>
  <legend> <center><strong>Edit Barang Lelang</strong></center> </legend>
  <br>
  <div class="control-group">
    <label class="control-label" for="nama_lelang">Nama Lelang</label>
    <div class="controls">
      <input type="hidden" value="<?php echo $lelang['id_lelang']; ?>" name="id_lelang">
      <input type="text" id="nama_lelang" name="nama_lelang" value="<?php echo $lelang['nama_lelang']; ?>">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="foto">Foto/Gambar</label>
    <div class="controls">
      <a href="#" class="thumbnail" id="form-edit-foto">
      <img class="lelanghome" src="<?php echo base_url('assets/uploads/lelang/'.$lelang['foto_lelang']); ?>"/>
      </a>
      <input type="file" name="userfile">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="desc">Deskripsi Lelang</label>
    <div class="controls">
      <textarea id="desc" name="deskripsi_lelang"><?php echo $lelang['deskripsi_lelang']; ?></textarea>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="mulai">Waktu Mulai</label>
    <div class="controls">
      <input type="text" id="mulai" name="waktu_mulai" value="<?php echo date('m/d/Y G:i',$lelang['waktu_mulai']); ?>" class="datetimepicker">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="selesai">Waktu Selesai</label>
    <div class="controls">
      <input type="text" id="selesai" name="waktu_selesai" value="<?php echo date('m/d/Y G:i',$lelang['waktu_selesai']); ?>" class="datetimepicker">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="harga">Harga Pasar</label>
    <div class="controls">
      <input type="text" id="harga" name="harga_pasar" value="<?php echo $lelang['harga_pasar']; ?>">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="kenaikan_harga">Kenaikan Harga Tawar</label>
    <div class="controls">
      <input type="text" id="kenaikan_harga" name="kenaikan_harga" value="<?php echo $lelang['kenaikan_harga']; ?>">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="point_max">Harga Max</label>
    <div class="controls">
      <input type="text" id="point_max" name="harga_max" value="<?php echo $lelang['harga_max']; ?>">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="point_bid">Point Bid</label>
    <div class="controls">
      <input type="text" id="point_bid" name="point_bid" value="<?php echo $lelang['point_bid']; ?>">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="point_bid">Point Daftar</label>
    <div class="controls">
      <input type="text" id="point_daftar" name="point_daftar" value="<?php echo $lelang['point_daftar']; ?>">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="golden_periode">Golder Periode</label>
    <div class="controls">
      <input type="text" id="golden_periode" name="golden_periode" class="datetimepicker" value="<?php if($lelang['golden_periode'] != 0) { echo date('m/d/Y G:i',$lelang['golden_periode']); } ?>">
      <span class="help-block">Biarkan kosong jika tidak ada Golden Periode.</span>
    </div>
  </div>
  <div class="form-actions"  style="background-color:#fcf8e3;">
  <button type="submit" class="btn btn-warning">Save changes</button>
  <a href="<?php echo site_url('admin/lelang'); ?>" class="btn btn-danger">Cancel</a>
</div>
</form>
</div>
</div>
</div>-->

<div class="row-fluid">
<div class="span12">
    <ul class="breadcrumb">
      <li>Tambah Barang Lelang</li>
    </ul>
</div>
</div>
<div class="row-fluid">
  <div class="span12">
    <?php if(isset($error)){
      echo $error;
    } ?>
  </div>
</div>
<div class="row-fluid">
  <div class="span12">
  <form class="form-horizontal" method="POST" action="<?php echo site_url('admin/lelang/update'); ?>" enctype="multipart/form-data">
  <div class="control-group">
    <label class="control-label" for="nama_lelang">Nama Lelang</label>
    <div class="controls">
      <input type="hidden" value="<?php echo $this->session->userdata('id_admin') ?>" name="id_admin">
      <input class="input-xlarge" type="text" id="nama_lelang" placeholder="nama barang lelang" name="nama_lelang" value="<?php echo $lelang['nama_lelang']; ?>">
      <?php echo form_error('nama_lelang'); ?>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="foto">Foto/Gambar</label>
    <div class="controls">
      <a href="#" class="thumbnail" id="form-edit-foto">
    <img class="lelanghome" src="<?php echo base_url('assets/uploads/lelang/'.$lelang['foto_lelang']); ?>"/>
    </a>
      <input type="file" name="userfile">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="desc" >Deskripsi Lelang</label>
    <div class="controls" >
      <textarea class="input-xlarge" id="desc" placeholder="Deskripsi" name="deskripsi_lelang" ><?php echo $lelang['deskripsi_lelang']; ?></textarea>
      <?php echo form_error('deskripsi_lelang'); ?>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="mulai">Waktu Mulai</label>
    <div class="controls">
      <input type="text" id="mulai" placeholder="Waktu Mulai" name="waktu_mulai" class="datetimepicker input-xlarge" value="<?php echo date('m/d/Y G:i',$lelang['waktu_mulai']); ?>">
      <?php echo form_error('waktu_mulai'); ?>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="selesai">Waktu Selesai</label>
    <div class="controls">
      <input type="text" id="selesai" placeholder="Waktu Selesai" name="waktu_selesai" class="datetimepicker input-xlarge" value="<?php echo date('m/d/Y G:i',$lelang['waktu_selesai']); ?>">
      <?php echo form_error('waktu_selesai'); ?>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="point_bid">Point Bid</label>
    <div class="controls">
      <input class="input-xlarge" type="text" id="point_bid" placeholder="Point Bidding" name="point_bid" value="<?php echo $lelang['point_bid']; ?>">
      <?php echo form_error('point_bid'); ?>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="point_bid">Point Daftar</label>
    <div class="controls">
      <input class="input-xlarge" type="text" id="point_daftar" placeholder="Point Daftar" name="point_daftar" value="<?php echo $lelang['point_daftar']; ?>">
      <?php echo form_error('point_daftar'); ?>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="golden_periode">Golder Periode</label>
    <div class="controls">
      <input type="text" id="golden_periode" name="golden_periode" class="datetimepicker input-xlarge" value="<?php if($lelang['golden_periode'] != 0) { echo date('m/d/Y G:i',$lelang['golden_periode']); } ?>">
      <span class="help-block">Biarkan kosong jika tidak ada Golden Periode.</span>
      <?php echo form_error('golden_periode'); ?>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="harga">Harga Pasar</label>
    <div class="controls">
      <div class="input-prepend input-append">
      <span class="add-on">Rp.</span>
      <input class="input-large" type="text" id="harga" placeholder="Harga Pasar" name="harga_pasar" value="<?php echo $lelang['harga_pasar']; ?>">
      </div>
      <?php echo form_error('harga_pasar'); ?>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="kenaikan_harga">Kenaikan Harga Tawar</label>
    <div class="controls">
      <div class="input-prepend input-append">
      <span class="add-on">Rp.</span>
      <input class="input-large" type="text" id="kenaikan_harga" placeholder="Kenaikan Harga Tawar" name="kenaikan_harga" value="<?php echo $lelang['kenaikan_harga']; ?>">
      </div>
      <?php echo form_error('kenaikan_harga'); ?>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="harga_max">Harga Max</label>
    <div class="controls">
      <div class="input-prepend input-append">
      <span class="add-on">Rp.</span>
      <input class="input-large" type="text" id="point_max" placeholder="Harga Maksimal" name="harga_max" value="<?php echo $lelang['harga_max']; ?>">
      </div>
      <?php echo form_error('harga_max'); ?>
    </div>
  </div>
  <div class="form-actions">
  <button type="submit" class="btn btn-primary">Save changes</button>
  <a href="<?php echo site_url('admin/lelang'); ?>" class="btn">Cancel</a>
</div>
</form>
</div>
</div>