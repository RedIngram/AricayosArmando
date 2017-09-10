<!DOCTYPE html>
<html lang="en">
<html>
<head>
<title><?php echo $title?></title>
	<meta name="viewport" content="width=device-width; intial-scale=1.0"/>
	<meta name="author" content="Team Bah"/>
	<meta name="description" content="the description of website"/>

	<link href="<?php echo base_url ('bootstrap/css/bootstrap.css');?>" rel="stylesheet" />
	<link href="<?php echo base_url ('bootstrap/css/bootstrap-theme.css');?>" rel="stylesheet" />
	<link href="<?php echo base_url ('assets/css/myboots.css');?>" rel="stylesheet" />

	<script src="<?php echo base_url ('bootstrap/js/jquery.min.js');?>"></script>
	<script src="<?php echo base_url ('bootstrap/js/bootstrap.min.js');?>"></script>
</head>
<body>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 header1">	
			<h3> Student Management System </h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-xs-4 col-sm-4 column">
			<p class="lead">Menu</p>
			<a href="<?php echo base_url('boots');?>"><p class="nav">Students</p></a>
			<a href="<?php echo base_url('boots/courses');?>"><p class="nav">Course</p></a>
		</div>
	