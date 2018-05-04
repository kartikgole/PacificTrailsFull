<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome to Pacific Trails Website!</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/pacific.css">
	<script href="<?php echo base_url(); ?>javascript/script.js"></script>
</head>

<body>

<div id="wrapper">
	<header><h1>Pacific Trails Resort</h1></header>
		<nav>
				<span class="boldtext"><a href="<?php echo base_url(); ?>">Home</a></span><br>
				<span class="boldtext"><a href="<?php echo site_url('home/yurts'); ?>">Yurts</a></span><br>
				<span class="boldtext"><a href="<?php echo site_url('home/activities'); ?>">Activities</a></span><br>
				<span class="boldtext"><a href="<?php echo site_url('home/reservations'); ?>">Reservations</a></span><br>
				<span class="boldtext"><a href="<?php echo site_url('home/myreservations'); ?>">My Reservations</a></span><br>
				<span class="boldtext"><a href="<?php echo site_url('home/shop'); ?>">Shop</a></span><br>
			</nav>