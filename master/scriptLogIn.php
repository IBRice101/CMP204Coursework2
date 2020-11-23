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
	
	// NOTE: do not push this to public with ur real creds
	$servername = "lochnagar.abertay.ac.uk";
	$usernameSQL = "sql1901124";
	$passwordSQL = "tHvLZSxWZ4ex";
	$dbname = "sql1901124";
	
	// connection to lochnagar
	$conn = mysqli_connect($servername, $usernameSQL, $passwordSQL, $dbname);
	
	if (!$conn) {
		die("Connection failed:" . mysqli_connect_error());
	}
	
	// login functionality
	
	mysqli_close($conn);
