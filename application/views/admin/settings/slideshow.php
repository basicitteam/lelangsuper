        <div class="row-fluid">
        <div class="span12">
            <ul class="breadcrumb">
              <li>Slideshow Settings</li>
            </ul>
        </div>
        </div>
        <div class="row-fluid">
        <div class="span12">
          <?php echo $this->session->flashdata('msg'); ?>
         <button data-toggle="modal" data-target="#modal-tambah" class="btn btn-primary pull-right">Tambah Slideshow</button>
        </div>
        </div>
        <hr>
        <div class="row-fluid">
        <div class="span12">
         <table class="table">
          <thead>
            <th>No.</th>
            <th>Gambar</th>
            <th>Urutan</th>
            <th>Action</th>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($slideshow as $key) {
            ?>
            <tr>
              <td><?php echo $no++; ?>.</td>
              <td><a href="#" class="thumbnail slideshowthumb-cont"><img class="slideshowthumb" src="<?php echo base_url('assets/uploads/slideshow/'.$key['gambar']); ?>" alt="<?php echo $key['gambar']; ?>"></a></td>
              <td><?php echo $key['urutan']; ?></td>
              <td><a href="<?php echo site_url('admin/settings/delete_slideshow/'.$key['id_slideshow']); ?>" class="btn btn-warning">Delete<a></td>
            </tr>
            <?php
            }
            ?>
          </tbody>
         </table>
        </div>
        </div>
<!-- Modal -->
<div id="modal-tambah" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Tambah Slideshow</h3>
  </div>
  <div class="modal-body">
    <form class="form form-horizontal" action="<?php echo site_url('admin/settings/add_slideshow'); ?>" method="POST" enctype="multipart/form-data">
      <div class="control-group">
      <label class="control-label" for="slideshow">Gambar Slideshow</label>
      <div class="controls">
        <input type="file" name="userfile" id="slideshow">
        <span class="help-block">Max size 100kb, Height 300px, Width 1170px</span>
      </div>
      </div>
      <div class="control-group">
      <label class="control-label" for="urutan">Urutan</label>
      <div class="controls">
        <select name="urutan" id="urutan">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </div>
      </div>
  </div>
  <div class="modal-footer">
    <button class="btn btn-primary">Save changes</button>
    </form>
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>