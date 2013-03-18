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
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($voucher as $key) {
                ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php var_dump($key[0]); ?></td>
                  <td><?php echo $key[1]; ?></td>
                  <td><?php echo $key[2]; ?></td>
                  <td><?php echo $key[3]; ?></td>
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