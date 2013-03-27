<!DOCTYPE html>
<html>
  <head>
    <title>Lelang Super</title>
    <!-- Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/favico.png'); ?>">
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet" media="screen">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" media="screen">
    <link href="<?php echo base_url('assets/css/bootstrap-responsive.min.css'); ?>" rel="stylesheet" media="screen">
    <link href="<?php echo base_url('assets/css/chat.css'); ?>" rel="stylesheet" media="screen">
    <link href="<?php echo base_url('assets/css/jquery.countdown.css'); ?>" rel="stylesheet" media="screen">
    <style type="text/css">
    .gmbrlelang{
    	max-height: 173px;
    }
    li.span3 .thumbnail {
	max-height: auto;
	min-height: 400px;
	box-shadow: 0px -2px 7px #ccc;
	}
	div#sidebar-recentlelang.span3 div.media .media-object {
	max-width: 64px;
	max-height: 64px;
	box-shadow: 0px -2px 7px #ccc;
	}
	.media-object.reviewlist {
	max-width: 250px;
	box-shadow: 0px -2px 7px #ccc;
	}
	.bidheader{
	border-bottom:15px solid #fce587;
	background:#FFFFFF;
	width:100%;
	margin:0 auto;
	-moz-box-shadow: 0px -2px 7px #ccc; /* Firefox */
	-webkit-box-shadow: 0px -2px 7px #ccc; /* Safari and Chrome */
	box-shadow: 0px -2px 7px #ccc;
	}
	.bidfooter{
	border-top:15px solid #fce587;
	background:#FFFFFF;
	width:100%;
	margin:0 auto;
	-moz-box-shadow: 0px -2px 7px #ccc; /* Firefox */
	-webkit-box-shadow: 0px -2px 7px #ccc; /* Safari and Chrome */
	box-shadow: 0px -2px 7px #ccc;
	}
	.bidfooter ul.footnav {
	margin:0 auto;
	width:980px;
	text-align: center;
	}
	.bidfooter ul.footnav li {
		float:left;
		display:block;
		width:180px;
		text-align: center;
		
	}
	.bidfooter ul.footnav li p.ftitle{
		font-weight:bold;
		display:block;
		color:#000;
		margin-bottom:10px;
		font-size:12px;
	}
	.bidfooter ul.footnav li p {
		margin-bottom:2px;
		display:block;
	}
	.bidfooter ul.footnav li a{
		color:#fe9001;
		text-decoration:none;
	}
	.bidfooter ul.footnav li a:hover{
		color:rgb(0, 245, 255);
	}
	.lelanghome {
	max-height: 250px;
	}
	.center {
	text-align: center;
	}
	#chatcontent {
	min-height: 200px;
	}
    </style>
  </head>
  <body>
    <div class="container">
    	<div id="bidheader" class="row" >
    		<div class="span12">
    			<h2>Lelang Super</h2>
    		</div>
    	</div><!-- End Row Header -->
    	<hr>
    	<div class="row" >
    	<div class="span12" >
    	<div class="navbar" >
		  <div class="navbar-inner" style="background:#fdd467;box-shadow: 0px -2px 7px #ccc;">
		    <div class="container">
		 
		      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
		      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </a>
		      <!-- Everything you want hidden at 940px or less, place within here -->
		      <div class="nav-collapse collapse">
		        <ul class="nav">
			      <li <?php if(isset($menu)){ if($menu == 'home'){ echo 'class="active"'; }}?>><a href="<?php echo site_url('web'); ?>">Home</a></li>
			      <li <?php if(isset($menu)){ if($menu == 'help'){ echo 'class="active"'; }}?>><a href="<?php echo site_url('help'); ?>">Help</a></li>
			      <li <?php if(isset($menu)){ if($menu == 'review_list'){ echo 'class="active"'; }}?>> <a href="<?php echo site_url('web/reviewlist'); ?>">Review List</a></li>
			      <?php
			      if(is_user()){
			      	?>
			      	<li <?php if(isset($menu)){ if($menu == 'my_account'){ echo 'class="active"'; }}?>><a href="<?php echo site_url('user/topup'); ?>">My Account</a></li>
			      	<?php
			      }
			      elseif(is_admin())
			      {
			      	?>
			      	<li <?php if(isset($menu)){ if($menu == 'admin'){ echo 'class="active"'; }}?>><a href="<?php echo site_url('admin'); ?>">Admin Panel</a></li>
			      	<?php
			      }
			      else{
			      	?>
			      	<li <?php if(isset($menu)){ if($menu == 'registrasi'){ echo 'class="active"'; }}?>><a href="<?php echo site_url('web/registrasi'); ?>">Registrasi</a></li>
			      	<?php	
			      }
			      ?>
			    </ul>
			    
			    <ul class="nav pull-right">
					<li class="divider-vertical"></li>
					 <?php
			      if(is_user()){
			      	?>
			      	<li class=""><h4 style="color:#ff6600;">Selamat Datang <?php echo 'User'; echo" -- "; echo $this->session->userdata('username'); ?></h4></li>
			      	<?php
			      }
			      elseif(is_admin())
			      {
			      	?>
			      	<li class=""><h4 style="color:#ff3300;">Selamat Datang <?php echo 'Admin'; echo" -- "; echo $this->session->userdata('username_admin'); ?></h4></li>
			      	<?php
			      }
			      ?>
			    	
			    	<li class="divider-vertical"></li>
			    	<?php
			      if(is_user() || is_admin()){
			      	?>
			      	<li><a href="<?php echo site_url('web/logout'); ?>">Logout</a></li>
			      	<?php
			      }
			      else
			      {
			      	?>			      	
			      	<li class="dropdown" >
					    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
					      Login
					      <b class="caret"></b>
					    </a>
					    
					    <ul class="dropdown-menu" >
					    	
					     <form action="<?php echo site_url('web/login'); ?>" method="POST" class="form-inline" style="padding-left:10px;padding-right:10px;">
						  <input type="text" class="search-query" name="username" placeholder="Username">
						  <br></br>
						  <input type="password" class="search-query" name="password" placeholder="Password">
						   <br></br>
						  <button type="submit" class="btn btn-danger pull-right">Sign in</button>
						</form>
						 
					    </ul>
					   
					  </li>
			      	<?php
			      }
			      ?>
			    </ul>
		      </div>
		    </div>
		  </div>
		</div><!-- End NAVBAR -->
		</div>
		</div><!-- End row Navbar -->
