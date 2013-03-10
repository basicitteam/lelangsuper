<div class="span9">
  <div class="row">
          <!--<div class="span9"> -->
        <h3 class="btn btn-warning" style="width: 94%;margin-left: 30px;box-shadow: 0px -2px 7px #ccc;">Manage Barang Lelang</h3>
        <br></br>
        <ul class="thumbnails " >
          <li class="span9 " >
  <a class="btn btn-warning" style="box-shadow: 0px -2px 7px #ccc;" href="<?php echo site_url('admin/lelang/add'); ?>">Tambah Barang Lelang</a>
  <hr>
  <?php echo $this->session->flashdata('msg'); ?>
  <?php echo $this->pagination->create_links(); ?>
  <table class="table" style="box-shadow: 0px -2px 7px #ccc;background-color:#fcf8e3;">
    <thead>
    <tr>
      <th>No.</th>
      <th>Nama Barang</th>
      <th>Harga Pasar</th>
      <th>Mulai</th>
      <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      foreach ($lelang as $key) {
      ?>
      <tr>
      <td><?php echo $no++; ?>.</td>
      <td><?php echo $key['nama_lelang']; ?></td>
      <td>Rp. <?php echo $this->cart->format_number($key['harga_pasar']); ?></td>
      <td><?php echo date('m/d/Y G:i',$key['waktu_mulai']); ?></td>
      <td><a href="<?php echo site_url('admin/lelang/view/'.$key['id_lelang']); ?>" class="btn btn-warning">View</a></td>
      <td><a href="<?php echo site_url('admin/lelang/edit/'.$key['id_lelang']); ?>" class="btn btn-success">Edit</a></td>
      <td><a href="<?php echo site_url('admin/lelang/delete/'.$key['id_lelang']); ?>" class="btn btn-danger">Delete</a></td>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
  <?php echo $this->pagination->create_links(); ?>
</ui>
</ul>
</div>
</div>
</div><!-- End Row Main Content -->