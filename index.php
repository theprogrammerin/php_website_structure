<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>SRMMUN</title>
		
		<link rel="stylesheet" type="text/css" href="_styles/style.css" />
		
		<script src="_scripts/jquery.js" />
		<script src="_scripts/loader.js" />
	</head>
	<body>
		
		<!-- Header Start -->
		
		<?php include_once 'header.php'; ?>
		
		<!-- Header Ends -->
		
		
		<!-- Page Starts -->
		
		<?php 
		
		$url = $_GET['page'];
		$url = $url.".php";
		
		include_once $url 
		
		?>
		
		<!-- Page Ends -->
		
		
		<!-- Footer Starts  -->
		
		<?php include_once 'footer.php'; ?>
		
		<!-- Footer Ends -->
	</body>
</html>
