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
			echo "<p style='color: red'>Please input your first name</p>";
		} else {
			$x = strip($x);
		}
		return $x;
	}
	function validateLastName($x) {
		if ($x == "") {
			echo "<p style='color: red'>Please input your surname</p>";
		} else {
			$x = strip($x);
		}
		return $x;
	}
	function validateEmail($x) {
		if ($x == "") {
			echo "<p style='color: red'>Please input your email address</p>";
		} else {
			$x = strip($x);
			if (!(filter_var($x, FILTER_VALIDATE_EMAIL))) {
				echo "<p style='color: red'>This email address is invalid</p>";
			}
		}
		return $x;
	}
	function validatePassword($x) {
		if ($x == "") {
			echo "<p style='color: red'>Please choose a password</p>";
		} elseif (!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/', $x)) {
			echo "<p style='color: red'>Password not strong enough</p>";
		} else {
			$x = strip($x);
		}
		return $x;
	}
	function validatePasswordConfirm($x) {
		if ($x == "") {
			echo "<p style='color: red'>Please confirm your password</p>";
		} else {
			$x = strip($x);
		}
		return $x;
	}
	
	if ($pword != $pwordConfirm) {
		echo "<p style='color: red'>The passwords do not match</p>";
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
	$sql = "INSERT INTO myUsers (firstname, lastname, email, password) VALUES (?, ?, ?, ?)";
	
	if ($stmt = mysqli_prepare($conn, $sql)) {
		mysqli_stmt_bind_param($stmt, "ssss", $firstName, $lastName, $email, $pword);
		if (mysqli_stmt_execute($stmt)) {
			echo '
		<head>
			<link rel="stylesheet" href="../../styles/mainStyle.css"><title>New User Created</title>
		</head>
		<body>
			<h1>New User Created</h1>
		</body>';
			sleep(3);
			header("location: ../../LogIn.php");
		} else {
			echo "<p style='color: red'> There was an error </p>";
			echo "Error: " . $sql . mysqli_error($conn);
        }
    }

	mysqli_close($conn);
