<div class="row-fluid">
<div class="span12">
    <ul class="breadcrumb">
      <li>Detail Informasi User</li>
    </ul>
</div>
</div>
<div class="row-fluid">
  <div class="span12">
    <?php echo $this->session->flashdata('msg'); ?>
  </div>
</div>
<div class="row-fluid">
<div class="span6">
<table class="table table-striped">
                <tr>
                  <td>Nama User</td>
                  <td><?php echo $user['nama_user']; ?></td>
                </tr>
                <tr>
                  <td>No KTP</td>
                  <td><?php echo $user['no_ktp']; ?></td>
                </tr>
                <tr>
                  <td>No Telp</td>
                  <td><?php echo $user['no_telp']; ?></td>
                </tr>
                <tr>
                  <td>Tanggal Lahir</td>
                  <td><?php echo $user['tgl_lahir']; ?></td>
                </tr>
                <tr>
                  <td>Saldo</td>
                  <td><?php echo $user['saldo']; ?></td>
                </tr>
                <tr>
                  <td>Tempat Lahir</td>
                  <td><?php echo $user['tempat_lahir']; ?></td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td><?php echo $user['alamat']; ?></td>
                </tr>
                <tr>
                  <td>Kode Pos</td>
                  <td><?php echo $user['kode_pos']; ?></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td><?php echo $user['email']; ?></td>
                </tr>
                <tr>
                  <td>Username</td>
                  <td><?php echo $user['username']; ?></td>
                </tr>
                <tr>
                  <td>Tanggal Daftar</td>
                  <td><?php echo $user['tanggal_daftar']; ?></td>
                </tr>
                <tr>
                  <td>Kota</td>
                  <td><?php echo $user['kota']; ?></td>
                </tr>
                <tr>
                  <td>Provinsi</td>
                  <td><?php echo $user['provinsi']; ?></td>
                </tr>
                <tr>
                  <td>Jenis Kelamin</td>
                  <td><?php echo $user['jns_kelamin']; ?></td>
                </tr>
              </table>  
</div>
<div class="span6">
              <table class="table table-striped">
                <tr>
                  <td>Status</td>
                  <td><?php
                    if(is_banned($user['id_user'])){
                    ?>
                    <button class="btn btn-danger">Banned</button>
                    <?php
                    }
                    else{
                    ?>
                    <button class="btn btn-success">Aktif</button>
                    <?php
                    }
                    ?>
                  </td>
                </tr>
                <tr>
                  <td>Waktu Banned</td>
                  <td>Mulai <?php echo date('G:i:s j M Y',$user['tanggal_awal']).'<br/>Hingga '.date('G:i:s j M Y',$user['tanggal_akhir']); ?> </td>
                </tr>
                <tr>
                  <td>Keterangan Banned</td>
                  <td><?php echo $user['keterangan']; ?></td>
                </tr>
                <tr>
                  <td>Di Banned Oleh : </td>
                  <td><?php echo $user['id_admin']; ?></td>
                </tr>
                <tr class="alert alert-warning">
                  <td colspan="2"><a href="<?php echo site_url('admin/user/banned/'.$user['id_user']); ?>" class="btn btn-danger">Banned User</a> <a href="<?php echo site_url('admin/user/'); ?>" class="btn btn-primary">Back</a></td>
                </tr>
              </table>
  </div>
</div>
<div class="row-fluid">
  <div class="span12 center paging">
    <?php echo $this->pagination->create_links(); ?>
  </div>
</div>