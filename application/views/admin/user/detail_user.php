<div class="row"><!-- Start Main Content -->

<div class="span9 pull-left">
          <div>
              <h4 class="btn btn-warning" style="width:97%;box-shadow: 0px -2px 7px #ccc;">View User</h4>
              <hr>
          </div>
          <div class="row">
            <div class="span5">
              <table class="table">
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
            <div class="span4">
              <p class="center">Informasi Status User</p>
              <table class="table">
                <tr>
                  <td>Status</td>
                  <td><?php echo $user['status']; ?></td>
                </tr>
                <tr>
                  <td>Waktu Banned</td>
                  <td>Mulai <?php echo $user['tanggal_awal'].' - '.$user['tanggal_akhir']; ?> </td>
                </tr>
                <tr>
                  <td>Keterangan Banned</td>
                  <td><?php echo $user['keterangan']; ?></td>
                </tr>
                <tr>
                  <td>Di Banned Oleh : </td>
                  <td><?php echo $user['id_admin']; ?></td>
                </tr>
                <tr>
                  <td><a href="<?php echo site_url('admin/user/banned/'.$user['id_user']); ?>" class="btn btn-danger btn-large">Banned User</a></td>
                  <td><a href="<?php echo site_url('admin/user/'); ?>" class="btn btn-primary btn-large">Back</a></td>
                </tr>
              </table>
            </div>
          </div>
      </div>
