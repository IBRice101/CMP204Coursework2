<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Log in - Daft Punk</title>
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
	<script type="text/javascript" src="scripts/themeChange.js"></script>
	<script type="text/javascript" src="scripts/albumFinder.js"></script>
</head>
<body>
<?php include 'master/header.php'?>

<br/>

<div class="container">
	<h1>Album Finder</h1>
	<br>
	<p>Type in a Daft Punk song and this page will tell you which album it came from</p>
	<form action="">
		<label for="song">Song:</label>
		<input type="text" id="song" name="song" placeholder="Daft Punk Song">
		<button type="submit" id="submitSong" onclick="findSong(this.value)">Submit Song</button>
	</form>
</div>

<?php include "master/scriptAlbumFinder.php"?>

<br/>

<?php include 'master/footer.php'?>
</body>
</html>