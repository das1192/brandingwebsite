<?php
require_once("../includes/initialize.php");
if (!$session->is_logged_in()) { redirect_to("login.php");}	
$category = select_all_category();
date_default_timezone_set('Asia/Dhaka');
?>


 <!DOCTYPE html>
<!-- Template by html.am -->
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>TECNOTRON PHOTO MANAGEMENT SYSTEM </title>
		<link href="style/style.css" media = "all" rel ="stylesheet" type = "text/css" />
		<link href="style/links.css" media = "all" rel ="stylesheet" type = "text/css" />
		<link href="style/jquery-ui.css" media = "all" rel ="stylesheet" type = "text/css" />
		<link rel="icon" href="images/icon.jpg" type="image/gif" sizes="16x16"> 
		  <script src="scripts/jquery.min.js"></script>
		  <script src="scripts/jquery-ui.min.js"></script>
		

	</head>
	
	<body>		

		<header id="header">
			 
			<div id="logo">

				<img src="images/header.png" alt="header" style="width:100%;height:100%;">

			</div>
		</header>
				
		<main>
			<div class="innertube">