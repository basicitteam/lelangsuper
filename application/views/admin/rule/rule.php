 <div class="row-fluid">
<div class="span12">
    <ul class="breadcrumb">
      <li>Kelola Help Page</li>
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
<table class="table table-hover">
<thead>
  <tr>
    <th>No.</th>
    <th>Subject</th>
    <th class="hidden-tablet">Content</th>
    <th>Action</th>
  </tr>
</thead>
<tbody>
  <?php
  foreach ($articles as $key) {
  ?>
  <tr>
  <td><?php echo $no++ ?>.</td>
  <td><?php echo $key['subject']; ?></td>
  <td class="hidden-tablet"><?php echo substr($key['article'], 0, 100); ?></td>
  <td><a href="<?php echo site_url('admin/rule/edit/'.$key['id_article']); ?>" class="btn btn-info">Edit</a></td>
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