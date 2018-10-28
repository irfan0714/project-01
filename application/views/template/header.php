<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("bootstrap/css/bootstrap.min.css");?>">
	<script type="text/javascript" src="<?php echo base_url("bootstrap/js/jquery-3.3.1.min.js"); ?>"></script> 
	<script type="text/javascript" src="<?php echo base_url("bootstrap/js/bootstrap.min.js");?>"></script>
	<style>
		#loading{
			position: fixed;
			left: 0px;
			top: 0px;
			width: 100%;
			height: 100%;
			z-index: 999;
			background: url('assets/img/loader.gif')50% 50% no-repeat #ede9df;
		}
	</style>
</head>
<body>
 <div id="loading"></div>
 <nav class="navbar navbar-fixed-top navbar-inverse">
 	<div class="container">
 		<div class="navbar-header">
 			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
 				<span class="sr-only">Toggle navigation</span>
 				<span class="icon-bar"></span>
 				<span class="icon-bar"></span>
 				<span class="icon-bar"></span>
 			</button>
 			<a href="#" class="navbar-brand" title="">Pencari Kerja</a>
 		</div>
 		<div id="navbar" class="collapse navbar-collapse">
 			<ul class="nav navbar-nav">
 				<li class="active"><a href="<?php echo site_url(); ?>" title="">Home</a></li>
 				<li><a href="<?php echo site_url("daftar");?>" title="">Daftar Kerja</a></li>
 				<li><a href="<?php echo site_url("pendaftarkerja");?>" title="">Pendaftar Kerja</a></li>
 				<li><a href="<?php echo site_url("tentang");?>" title="">Tentang</a></li>
 				<li><a href="<?php echo site_url("contact");?>" title="">Contact</a></li>
 			</ul>
 		</div>
 	</div>
 </nav>
 <br><br>