 <div class="row-fluid">
<div class="span12">
    <ul class="breadcrumb">
      <li><?php echo $article['subject']; ?></li>
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
<form action="<?php echo site_url('admin/rule/update'); ?>" method="POST">
<input type="hidden" name="subject" value="<?php echo $article['subject']; ?>">
<input type="hidden" name="id_article" value="<?php echo $article['id_article']; ?>">
<textarea name="article" class="span12" rows="20"><?php echo $article['article']; ?></textarea>
<div class="form-actions">
  <button type="submit" class="btn btn-primary">Save changes</button>
  <a href="<?php echo site_url('admin/rule'); ?>" class="btn">Cancel</a>
</div>
</form>
</div>
</div>