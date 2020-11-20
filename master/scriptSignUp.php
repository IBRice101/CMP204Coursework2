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
	
	function validateFirstName($info) {
		//check if string is empty
		if ($info == "") {
			echo "<p class='error'>Please input your first name</p>";
		} else {
			$info = strip($info);
		}
		return $info;
	}
	function validateLastName($info) {
		if ($info == "") {
			echo "<p class='error'>Please input your surname</p>";
		} else {
			$info = strip($info);
		}
		return $info;
	}
	function validateEmail($info) {
		if ($info == "") {
			echo "<p class='error'>Please input your email address</p>";
		} else {
			$info = strip($info);
			if (!(filter_var($info, FILTER_VALIDATE_EMAIL))) {
				echo "<p class='error'>This email address is invalid</p>";
			}
		}
		return $info;
	}
	function validatePassword($info) {
		if ($info == "") {
			echo "<p class='error'>Please choose a password</p>";
		} else {
			$info = strip($info);
		}
		return $info;
	}
	function validatePasswordConfirm($info) {
		if ($info == "") {
			echo "<p class='error'>Please confirm your password</p>";
		} else {
			$info = strip($info);
		}
		return $info;
	}
	
	if (validatePassword($pword) != validatePasswordConfirm($pwordConfirm)) {
		echo "<p class='error'>The passwords do not match</p>";
	}
	
	function strip($info) {
		// done to avoid XSS and SQLi
		$info = trim($info); // removes extra space, tab, newline, etc
		$info = stripslashes($info); // removes slashes
		$info = htmlspecialchars($info); // removes &,",',<,>
		
		return $info;
	}
?>