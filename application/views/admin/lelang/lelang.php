        <div class="row-fluid">
        <div class="span12">
            <ul class="breadcrumb">
              <li>Kelola Lelang</li>
            </ul>
        </div>
        </div>
        <div class="row-fluid">
          <div class="span12">
            <?php echo $this->session->flashdata('msg'); ?>
            <a class="btn btn-primary pull-right" href="<?php echo site_url('admin/lelang/add'); ?>">Tambah Lelang</a>
          </div>
        </div>
        <hr>
        <div class="row-fluid">
        <div class="span12">
          <table class="table table-hover">
              <thead>
              <tr>
                <th>No.</th>
                <th>Nama Barang</th>
                <th class="hidden-tablet">Harga Pasar</th>
                <th class="hidden-tablet">Mulai</th>
                <th colspan="3">Action</th>
              </tr>
              </thead>
              <tbody>
                <?php
                foreach ($lelang as $key) {
                ?>
                <tr>
                <td><?php echo $no++; ?>.</td>
                <td><?php echo $key['nama_lelang']; ?></td>
                <td class="hidden-tablet">Rp. <?php echo $this->cart->format_number($key['harga_pasar']); ?></td>
                <td class="hidden-tablet"><?php echo date('m/d/Y G:i',$key['waktu_mulai']); ?></td>
                <td><a href="<?php echo site_url('admin/lelang/view/'.$key['id_lelang']); ?>" class="btn btn-warning">View</a></td>
                <td><a href="<?php echo site_url('admin/lelang/edit/'.$key['id_lelang']); ?>" class="btn btn-success">Edit</a></td>
                <td><a href="<?php echo site_url('admin/lelang/delete/'.$key['id_lelang']); ?>" class="btn btn-danger">Delete</a></td>
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