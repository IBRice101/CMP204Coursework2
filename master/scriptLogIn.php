<?php
	// Global Variables
	$email = $pword = "";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$email = validateEmail($_POST["email"]);
		$pword = validatePassword($_POST["pword"]);
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
			echo "<p class='error'>Please input your password</p>";
		} else {
			$info = strip($info);
		}
		return $info;
	}
	
	function strip($info)
	{
		// done to avoid XSS and SQLi
		$info = trim($info); // removes extra space, tab, newline, etc
		$info = stripslashes($info); // removes slashes
		$info = htmlspecialchars($info); // removes &,",',<,>
		
		return $info;
	}
