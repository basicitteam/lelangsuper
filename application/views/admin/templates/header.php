<!DOCTYPE html>
<html>
  <head>
    <title>Lelang Super</title>
    <!-- Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/favico.png'); ?>">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" media="screen">
    <link href="<?php echo base_url('assets/css/bootstrap-responsive.min.css'); ?>" rel="stylesheet" media="screen">
    <style type="text/css">
    #header {
	margin-bottom: 20px;
	}

	.nav.nav-tabs.nav-stacked {
background-color: white;
}

.breadcrumb {
border: 1px solid #3c4049;
color: #fff;
background-color: #4e525d;
background-image: -moz-linear-gradient(top, #4e525d, #3c4049);
background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#4e525d), to(#3c4049));
background-image: -webkit-linear-gradient(top, #4e525d, #3c4049);
background-image: -o-linear-gradient(top, #4e525d, #3c4049);
background-image: linear-gradient(to bottom, #4e525d, #3c4049);
filter: progid:dximagetransform.microsoft.gradient(startColorstr='#4e525d', endColorstr='#3c4049', GradientType=0);
-webkit-border-radius: 2px;
-moz-border-radius: 2px;
border-radius: 2px;
}

.nav.nav-tabs.nav-stacked li.active a {
background-color: #0088cc;
color: #ffffff;
}

.center {
text-align: center;
}
	
    </style>
  </head>
  <body>
  	<div id="header">
  	<div class="navbar navbar-static-top">
  	<div class="navbar-inner">
  	<div class="container-fluid">
    <a class="brand" href="#">Admin Panel Lelang Super</a>
    <ul class="nav pull-right">
    <li><a href="<?php echo site_url(); ?>"><i class="icon-home"></i> LelangSuper</a></li>
    <li><a href="<?php echo site_url('web/logout'); ?>"><i class="icon-search icon-off"></i> Logout</a></li>
    </ul>
	</div>
	</div>
	</div>
	</div>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span2">
				<ul class="nav nav-tabs nav-stacked">
				  <li <?php if(isset($nav)){ if($nav == 'lelang'){ echo 'class="active"'; }} ?>>
					  	<a href="<?php echo site_url('admin/lelang'); ?>"><i class="icon-tags"></i> <span class="hidden-tablet">Lelang</span></a></li>
				  <li <?php if(isset($nav)){ if($nav == 'rule'){ echo 'class="active"'; }} ?>>
					  	<a href="<?php echo site_url('admin/rule'); ?>"><i class="icon-ok-circle"></i> <span class="hidden-tablet">Rules</span></a></li>
				  <li <?php if(isset($nav)){ if($nav == 'users'){ echo 'class="active"'; }} ?>>
					  	<a href="<?php echo site_url('admin/user'); ?>"><i class="icon-user"></i> <span class="hidden-tablet">Users</span></a></li>
				  <li <?php if(isset($nav)){ if($nav == 'voucher'){ echo 'class="active"'; }} ?>>
					  	<a href="<?php echo site_url('admin/voucher'); ?>"><i class="icon-file"></i> <span class="hidden-tablet">Voucher</span></a></li>
				<li <?php if(isset($nav)){ if($nav == 'arsip_voucher'){ echo 'class="active"'; }} ?>><a href="<?php echo site_url('admin/arsip_voucher'); ?>"><i class="icon-book"></i> <span class="hidden-tablet">Arsip Voucher</span></a></li>
				  <li <?php if(isset($nav)){ if($nav == 'paket'){ echo 'class="active"'; }} ?>>
					  	<a href="<?php echo site_url('admin/point'); ?>"><i class="icon-th-large"></i> <span class="hidden-tablet">Paket Point</span></a></li>
				  <li <?php if(isset($nav)){ if($nav == 'approve'){ echo 'class="active"'; }} ?>>
					  	<a href="<?php echo site_url('admin/app_beli_point'); ?>"><i class="icon-shopping-cart"></i> <span class="hidden-tablet">Pembelian Point</span></a></li>
				</ul>
			</div>
			<div class="span10" id="content">