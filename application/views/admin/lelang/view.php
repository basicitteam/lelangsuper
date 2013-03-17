<style type="text/css">
#desc {
background-color: whitesmoke;
padding: 10px;
}
</style>
<div class="row-fluid">
<div class="span12">
    <ul class="breadcrumb">
      <li><?php echo $lelang['nama_lelang']; ?></li>
    </ul>
</div>
</div>
<div class="row-fluid">
  <div class="span12">
    <a href="<?php echo site_url('admin/lelang'); ?>" class="btn btn-primary pull-left">Back</a>
  </div>
</div>
<hr>
<div class="row-fluid">
<div class="span5">
  <a href="#" class="thumbnail">
    <img src="<?php echo base_url('assets/uploads/lelang/'.$lelang['foto_lelang']); ?>" alt="<?php echo $lelang['nama_lelang']; ?>" style="max-height : 200px;">
  </a>
</div>
<div class="span7">
  <table>
    <tbody>
      <tr>
        <td>Mulai Lelang : </td>
        <td><?php echo date('j M Y G:i:s',$lelang['waktu_mulai']); ?></td>
      </tr>
      <tr>
        <td>Selesai Lelang : </td>
        <td><?php echo date('j M Y G:i:s',$lelang['waktu_selesai']); ?></td>
      </tr>
      <tr>
        <td>Harga Pasar : </td>
        <td><?php echo 'Rp. '.$this->cart->format_number($lelang['harga_pasar']); ?></td>
      </tr>
      <tr>
        <td>Harga Maksimal : </td>
        <td><?php echo 'Rp. '.$this->cart->format_number($lelang['harga_max']); ?></td>
      </tr>
      <tr>
        <td>Point Absen : </td>
        <td><?php echo $lelang['point_daftar']; ?></td>
      </tr>
      <tr>
        <td>Point Per Tawar : </td>
        <td><?php echo $lelang['point_bid']; ?></td>
      </tr>
      <tr>
        <td>Kenaikan Harga Tawar : </td>
        <td><?php echo $lelang['kenaikan_harga']; ?></td>
      </tr>
      <tr>
        <td>Golden Periode : </td>
        <td>
        <?php 
        if($lelang['golden_periode'] != 0){
          echo date('j M Y G:i:s',$lelang['golden_periode']); 
        }
        ?>
        </td>
      </tr>
    </tbody>
  </table>
</div>
</div>
<hr>
<div class="row-fluid">
  <div class="span12" id="desc">
    <p><?php echo $lelang['deskripsi_lelang']; ?></p>
  </div>
</div>