 <div class="row-fluid">
<div class="span12">
    <ul class="breadcrumb">
      <li>Kelola User</li>
    </ul>
</div>
</div>
<div class="row-fluid">
  <div class="span12">
    <?php echo $this->session->flashdata('msg'); ?>
  </div>
</div>
<hr>
<div class="row-fluid">
<div class="span12">
  <table class="table table-hover">
<thead>
  <tr>
    <th>No.</th>
    <th>Username</th>
    <th>Point</th>
    <th>Ikut Lelang</th>
    <th>Menang Lelang</th>
    <th>Status</th>
    <th>Action</th>
  </tr>
</thead>
<tbody>
  <?php
  foreach ($users as $user) {
  ?>
  <tr>
    <td><?php echo $no++ ?>.</td>
    <td><?php echo $user['username']; ?></td>
    <td><?php echo $user['saldo']; ?></td>
    <td><?php 
    if($user['jmlh_ikut'] != null){
      echo $user['jmlh_ikut']; 
    }
    else{
      echo '0';
    }
    ?></td>
    <td><?php 
    if($user['jmlh_menang'] != null){
      echo $user['jmlh_menang']; 
    }
    else{
      echo '0';
    }
    ?></td>
    <td>
    <?php
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
    <td><a href="<?php echo site_url('admin/user/view/'.$user['id_user']); ?>" class="btn btn-primary">View</a></td>
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