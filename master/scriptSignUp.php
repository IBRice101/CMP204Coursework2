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
	
	// validation
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
	    die("Connection failed:" . mysqli_connect_error());
    }

	// Insertion of user information
	$sql = "INSERT INTO MyUsers (firstname, lastname, email, password) VALUES ($firstName, $lastName, $email, $pword)";

	if (mysqli_query($conn, $sql)) {
	    echo "New user created successfully";
    } else {
	    echo "<p class='error'> There was an error </p>";
	    echo "Error: " . $sql . mysqli_error($conn);
    }

	mysqli_close($conn);
	
