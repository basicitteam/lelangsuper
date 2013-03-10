<!DOCTYPE html>
<html>
  <head>
    <title>Lelang Super</title>
    <!-- Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/favico.png'); ?>">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" media="screen">
    <link href="<?php echo base_url('assets/css/bootstrap-responsive.min.css'); ?>" rel="stylesheet" media="screen">
     <link href="<?php echo base_url('assets/css/chat.css'); ?>" rel="stylesheet" media="screen">
    <style type="text/css">
    .gmbrlelang{
    	max-height: 173px;
    }
    li.span3 .thumbnail {
	max-height: 400px;
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
		        <ul class="nav" >
		        	<li class="active"><a href="<?php echo site_url('admin'); ?>">Home</a></li>
			      <li><a href="<?php echo site_url('admin/setting'); ?>">Setting Lelang</a></li>
			    </ul>
			    <ul class="nav pull-right">
			    	<li class="dropdown">

					    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:white;">
					      Hay Admin . . . , 
					      <b class="caret"></b>
					    </a>
					    
					    <ul class="dropdown-menu" style="opacity:0.7;">
					    	
					     <form class="form-inline" style="padding-left:20px;padding-right:20px;">
					     	<dl class="dl-horizontal">
					     		<dt>Admin Manage Lelang Super 1</dt>
					            <dd><em>Online<em></dd>
					            <hr>
					            <dt>Admin Manage Lelang Super 1</dt>
					            <dd><em>Offline<em></dd>
					            <hr>
					            <dt>Admin Manage Lelang Super 1</dt>
					            <dd><em>Online<em></dd>
					          </dl>
						  <a type="submit" class="btn btn-danger pull-right" href="<?php echo site_url('web')?>">Log Out</a>
						</form>
						 
					    </ul>
					   
					  </li>
			    </ul>
		      </div>
		    </div>
		  </div>
		</div><!-- End NAVBAR -->
		</div>
		</div><!-- End row Navbar -->