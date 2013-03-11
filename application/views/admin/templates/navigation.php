<div class="row"><!-- Start Main Content 1-->

		<div class="span3 sidebar">
				<div  style="box-shadow: 0px -2px 7px #ccc;background-color:#fcf8e3;">
					<ul class="nav nav-pills nav-stacked">
					  <li <?php if(isset($nav)){ if($nav == 'lelang'){ echo 'class="active"'; }} ?>>
					  	<a href="<?php echo site_url('admin/lelang'); ?>">Manage Barang Lelang</a>
					  </li>
					  <li <?php if(isset($nav)){ if($nav == 'rule'){ echo 'class="active"'; }} ?>>
					  	<a href="<?php echo site_url('admin/rule'); ?>">Manage Rule</a>
					  </li>
					  <li <?php if(isset($nav)){ if($nav == 'users'){ echo 'class="active"'; }} ?>>
					  	<a href="<?php echo site_url('admin/user'); ?>">Manage Users</a>
					  </li>
					  <!--<li>
					  	<a href="<?php //echo site_url('admin/content'); ?>">Manage Content</a>
					  </li>-->
					  <li <?php if(isset($nav)){ if($nav == 'voucher'){ echo 'class="active"'; }} ?>>
					  	<a href="<?php echo site_url('admin/voucher'); ?>">Manage Voucher</a>
					  </li>
					  <li <?php if(isset($nav)){ if($nav == 'paket'){ echo 'class="active"'; }} ?>>
					  	<a href="<?php echo site_url('admin/point'); ?>">Manage Paket Point</a>
					  </li>
					  <li <?php if(isset($nav)){ if($nav == 'approve'){ echo 'class="active"'; }} ?>>
					  	<a href="<?php echo site_url('admin/app_beli_point'); ?>">Approve Pembelian Point</a>
					  </li>
					</ul>
				</div>
		</div>
