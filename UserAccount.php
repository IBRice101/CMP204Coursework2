<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Your Account - Daft Punk</title>
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
</head>
<body>
<?php include 'master/header.php'?>

<br/>

<div class="container">
	<div class="row">
		<h1>[firstname]'s Account</h1>
	</div>
	<div class="row">
		<div class="col">
			<h2>Change user info</h2>
			<button class="usrInfo" id="changeName">Change your Name</button>
			<button class="usrInfo" id="changeEmail">Change your Email</button>
			<button class="usrInfo" id="changePassword">Change your Password</button>
		</div>
		<div class="col">
			<h2>Delete account</h2>
			<button class="usrInfo" id="deleteAccount">Delete your Account</button>
		</div>
	</div>
</div>

<?php include 'master/footer.php'?>
</body>
</html>