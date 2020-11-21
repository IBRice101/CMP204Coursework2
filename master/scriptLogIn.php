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
