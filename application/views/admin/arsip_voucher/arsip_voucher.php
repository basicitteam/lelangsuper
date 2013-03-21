<div class="row-fluid">
<div class="span12">
    <ul class="breadcrumb">
      <li>Arsip Voucher</li>
    </ul>
</div>
</div>
<div class="row-fluid">
  <div class="span12">
    <?php echo $this->session->flashdata('msg'); ?>
  </div>
</div>
<div class="row-fluid">
<div class="span12">
  <table class="table">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Kode Voucher</th>
                  <th>Username</th>
                  <th>Nominal Voucher</th>
                  <th>Tgl Digunakan</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($arsip_voucher as $key) {
                ?>
                <tr>
                  <td><?php echo $no++; ?>.</td>
                  <td><?php echo $key['kode_voucher']; ?></td>
                  <td><?php echo $key['username']; ?></td>
                  <td><?php echo $key['saldo']; ?></td>
                  <td><?php echo $key['tanggal_beli']; ?></td>
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