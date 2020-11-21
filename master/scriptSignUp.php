<?php
	// Global variables
	$firstName = $lastName = $email = $pword = $pwordConfirm = "";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$firstName = validateFirstName($_POST["firstName"]);
		$lastName = validateLastName($_POST["lastName"]);
		$email = validateEmail($_POST["email"]);
		$pword = validatePassword($_POST["pword"]);
		$pwordConfirm = validatePasswordConfirm($_POST["pwordConfirm"]);
	}
	
	function validateFirstName($x) {
		//check if string is empty
		if ($x == "") {
			echo "<p class='error'>Please input your first name</p>";
		} else {
			$x = strip($x);
		}
		return $x;
	}
	function validateLastName($x) {
		if ($x == "") {
			echo "<p class='error'>Please input your surname</p>";
		} else {
			$x = strip($x);
		}
		return $x;
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
			echo "<p class='error'>Please choose a password</p>";
		} elseif (!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/', $x)) {
			echo "<p class='error'>Password not strong enough</p>";
		} else {
			$x = strip($x);
		}
		return $x;
	}
	function validatePasswordConfirm($x) {
		if ($x == "") {
			echo "<p class='error'>Please confirm your password</p>";
		} else {
			$x = strip($x);
		}
		return $x;
	}
	
	if ($pword != $pwordConfirm) {
		echo "<p class='error'>The passwords do not match</p>";
	}
	
	function strip($x) {
		// done to avoid XSS and SQLi
		$x = trim($x); // removes extra space, tab, newline, etc
		$x = stripslashes($x); // removes slashes
		$x = htmlspecialchars($x); // removes &,",',<,>
		
		return $x;
	}
