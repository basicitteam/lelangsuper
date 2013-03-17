<div class="row-fluid">
<div class="span12">
    <ul class="breadcrumb">
      <li>Banned User</li>
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
<form action="<?php echo site_url('admin/user/proses_banned'); ?>" method="POST" class="form-horizontal">
        <div class="control-group">
          <label class="control-label">Username</label>
          <div class="controls">
            <input type="text" value="<?php echo $user['username']; ?>" disabled="TRUE">
            <input type="hidden" value="<?php echo $user['id_user']; ?>" name="id_user">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="start">Start Banned</label>
          <div class="controls">
            <input type="text" id="start" name="tanggal_awal" class="datetimepicker">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="end">End Banned</label>
          <div class="controls">
            <input type="text" id="end" name="tanggal_akhir" class="datetimepicker">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="ket">Keterangan Banned</label>
          <div class="controls">
            <textarea id="ket" name="keterangan"></textarea>
          </div>
        </div>
        <div class="form-actions">
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="<?php echo site_url('admin/user/view/'.$user['id_user']); ?>" type="button" class="btn">Cancel</a>
        </div>
      </form>
  </div>
</div>
<div class="row-fluid">
  <div class="span12 center paging">
    <?php echo $this->pagination->create_links(); ?>
  </div>
</div>