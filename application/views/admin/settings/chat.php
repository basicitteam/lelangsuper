        <div class="row-fluid">
        <div class="span12">
            <ul class="breadcrumb">
              <li>Chat Settings</li>
            </ul>
        </div>
        </div>
        <div class="row-fluid">
        <div class="span12">
          <p class="alert alert-info">Fitur Chat <strong><?php if($setting == 1){ echo 'ON'; }else{ echo 'OFF'; } ?></strong></p>
          <a href="<?php echo site_url('admin/settings/set_chat'); ?>" class="btn btn-primary"><?php if($setting == 1){ echo 'Matikan'; }else{ echo 'Aktifkan'; } ?></a>
        </div>
        </div>