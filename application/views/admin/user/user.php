<div class="span9">
  <div class="row">
    <div class="span9">
          <!--<div class="span9"> -->
        <h3 class="btn btn-warning" style="width: 94%;box-shadow: 0px -2px 7px #ccc;">Manage User</h3>
      </div>
  </div>
  <div class="row">
    <div class="span9">
      <?php echo $this->pagination->create_links(); ?>
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
          $no = 1;
          foreach ($users as $user) {
          ?>
          <tr>
            <td><?php echo $no++; ?></td>
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
      <?php echo $this->pagination->create_links(); ?>
    </div>
  </div>
</div>  