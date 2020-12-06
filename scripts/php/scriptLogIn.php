<?php
	// Global Variables
	$email = $pword = "";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$email = validateEmail($_POST["email"]);
		$pword = validatePassword($_POST["pword"]);
	}
	function validateEmail($x) {
		if ($x == "") {
			echo "<p class='error'>Please input your email address</p>";
		} else {
			$x = strip($x);
			if (!(filter_var($x, FILTER_VALIDATE_EMAIL))) {
				echo "<p class='error'>This email address is invalid</p>";
			}
		}
		return $x;
	}
	function validatePassword($x) {
		if ($x == "") {
			echo "<p class='error'>Please input your password</p>";
		} else {
			$x = strip($x);
		}
		return $x;
	}
	
	function strip($x)
	{
		// done to avoid XSS and SQLi
		$x = trim($x); // removes extra space, tab, newline, etc
		$x = stripslashes($x); // removes slashes
		$x = htmlspecialchars($x); // removes &,",',<,>
		
		return $x;
	}
	
	// Salt and hash password
	$pword = password_hash($pword, PASSWORD_DEFAULT);
	
	// With thanks to Lynsay A. Shepherd
	// NOTE: do not push this to public with ur real creds
	$servername = "lochnagar.abertay.ac.uk";
	$usernameSQL = "sql1901124";
	$passwordSQL = "tHvLZSxWZ4ex";
	$dbname = "sql1901124";
	
	// connection to lochnagar
	$conn = mysqli_connect($servername, $usernameSQL, $passwordSQL, $dbname);
	
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	$sql = "SELECT * FROM myUsers WHERE email = '$email' AND password = '$pword'";
	$result = mysqli_query($conn, $sql);
	
	$id = "SELECT id FROM myusers WHERE email = '$email'";
	$firstname = "SELECT firstname FROM myusers WHERE email = '$email'";
	
	if (mysqli_num_rows($result) == 1) {
		echo "
		<head>
			<link rel='stylesheet' href='../../styles/mainStyle.css'/>
		</head>
		<body>
			<h1>You Have Successfully Logged in! Welcome $firstname</h1>
		</body>";
		sleep(3);
		
		$_SESSION["loggedIn"] = true;
		$_SESSION["id"] = $id;
		$_SESSION["firstname"] = $firstname;
		header("Location: ../../index.php");
	} else {
		echo "
		<head>
			<link rel='stylesheet' href='../../styles/mainStyle.css'/>
		</head>
		<body>
			<h1>Something went wrong! Are you sure you put in the right email/password?</h1>
		</body>";
		sleep(3);
		
		header("Location: ../../LogIn.php");
	}
	
	mysqli_close($conn);
