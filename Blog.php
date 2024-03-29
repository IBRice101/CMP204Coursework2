<?php

?>
<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Blog - Daft Punk</title>
		<meta name="description" content="Daft Punk fansite for CMP204 coursework">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
		
		<!--Styles-->
		<link rel="stylesheet"
		      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
		      crossorigin="anonymous">
		<link rel="stylesheet" href="styles/mainStyle.css">
		
		<!--Scripts-->
		<script src="https://code.jquery.com/jquery-3.5.1.js"
		        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="scripts/js/themeChange.js"></script>
		<script type="text/javascript" src="scripts/js/blog.js"></script>
	</head>
	<body>
	
		<?php session_start(); include ('master/header.php') ?>
		
		<div class="container">
			<div id="blogSpace">
				<h1>Welcome to the Daft Punk Blog!</h1>
				<button id="load" onclick="loadBlog();"> Get the first article! </button>
			</div>
		</div>

		<div class="container">
			<button class="blogChoice" id="left" name="left" onclick="numDown(); loadBlog();"><- Previous</button>
			<p class="blogChoice">Daft Punk Blog</p>
			<button class="blogChoice" id="right" name="right" onclick="numUp(); loadBlog();">Next -></button>
		</div>
		
		<?php include ('master/footer.php') ?>
	</body>
</html>