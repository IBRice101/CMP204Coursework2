<?php
	session_start();
	if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true){
?>
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
	<?php session_start(); include 'master/header.php'?>
	
	<br/>
	
	<div class="container">
		<div class="row">
			<h1><?php echo htmlspecialchars($_SESSION["firstname"]); ?>'s account</h1>
		</div>
		<div class="col">
			<h2>Change user info</h2>
			<a href="scripts/php/UserAccount/ChangePassword.php" class="usrAcc" >Change your Password</a>
		</div>
		<div class="col">
			<h2>Delete account</h2>
			<a href="scripts/php/UserAccount/DeleteAccount.php" class="usrAcc" >Delete your Account</a>
		</div>
		<div class="row">
			<div class="col">
				<h2>Sign Out</h2>
				<a href="scripts/php/UserAccount/LogOut.php" class="usrAcc">Log Out</a>
			</div>
		</div>
	</div>
	
	<?php include ('master/footer.php') ?>
	</body>
</html>
<?php } else {
		echo "Access denied";
	}