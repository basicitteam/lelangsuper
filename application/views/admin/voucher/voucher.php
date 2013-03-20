<style type="text/css">
#formimport {
background-color: whitesmoke;
padding: 1px;
border-radius: 4px;
}
</style>
<div class="row-fluid">
<div class="span12">
    <ul class="breadcrumb">
      <li>Kelola Voucher</li>
    </ul>
</div>
</div>
<div class="row-fluid">
  <div class="span12">
    <?php echo $this->session->flashdata('msg'); ?>
  <form id="formimport" class="form-inline pull-right" method="POST" action="<?php echo site_url('admin/voucher/import'); ?>" enctype="multipart/form-data">
  <div class="input-append">
  <input type="file" name="userfile">
  <button class="btn btn-primary" type="submit">Import</button>
  </div>
  </form>
  </div>
</div>
<div class="row-fluid">
<div class="span12">
  <table class="table">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Kode Voucher</th>
                  <th>Saldo</th>
                  <th>Jenis Voucher</th>
                  <th>Harga</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($voucher as $key) {
                ?>
                <tr>
                  <td><?php echo $no++; ?>.</td>
                  <td><?php echo $key['kode_voucher']; ?></td>
                  <td><?php echo $key['saldo']; ?></td>
                  <td><?php echo $key['jenis_voucher']; ?></td>
                  <td>Rp. <?php echo $this->cart->format_number($key['harga']); ?></td>
                  <td><?php 
                  if($key['status'] == 0){
                    ?>
                    <a href="<?php echo site_url('admin/voucher/set_status/'.$key['id_voucher']); ?>" class="btn btn-info">Tersedia</a>
                    <?php
                  }
                  else{
                  ?>
                  <a href="<?php echo site_url('admin/voucher/set_status/'.$key['id_voucher']); ?>" class="btn btn-warning">Terjual</a>
                  <?php
                  }
                  ?></td>
                </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
</div>
</div>
<div class="row-fluid">
  <div class="span12 center paging">
    <?php echo $this->pagination->create_links(); ?>
  </div>
</div>