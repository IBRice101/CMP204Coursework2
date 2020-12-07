<?php
	// Global Variables
	$email = $pword = "";
	$firstname = $lastname = $id = "";
	$sqlPassword = "";
	
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
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$email = validateEmail($_POST["email"]);
		$pword = validatePassword($_POST["pword"]);
		
		// Salt and hash password
		//$pword = password_hash($pword, PASSWORD_DEFAULT);
		
		// With thanks to Lynsay A. Shepherd
		// NOTE: do not push this to public with ur real creds
		$servername = "lochnagar.abertay.ac.uk";
		$usernameDB = "sql1901124";
		$passwordDB = "tHvLZSxWZ4ex";
		$dbname = "sql1901124";
		
		// connection to lochnagar
		$conn = mysqli_connect($servername, $usernameDB, $passwordDB, $dbname);
		
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		
		$sql = "SELECT id, firstname, lastname, email, password FROM myUsers WHERE email = ?";
		
		if ($stmt = mysqli_prepare($conn, $sql)) {
			mysqli_stmt_bind_param($stmt, "s", $email);
			
			if (mysqli_stmt_execute($stmt)) {
				mysqli_stmt_store_result($stmt);
				
				if (mysqli_stmt_num_rows($stmt) == 1) {
					mysqli_stmt_bind_result($stmt, $id, $firstname, $lastname, $email, $sqlPassword);
					
					if (mysqli_stmt_fetch($stmt)) {
						if (password_verify($pword, $sqlPassword)) {
							session_start();
							
							$_SESSION["loggedIn"] = true;
							$_SESSION["id"] = $id;
							$_SESSION["email"] = $email;
							$_SESSION["firstname"] = $firstname;
							$_SESSION["lastname"] = $lastname;
							
							
							
							header("location: ../../index.php");
						} else {
							echo '
							<head>
							<link rel="stylesheet" href="styles/mainStyle.css">
							</head>
							<body>
							<h1>Password is invalid</h1>
							</body>';
						}
					}
				} else {
					echo '<head>
						<link rel="stylesheet" href="styles/mainStyle.css">
						</head>
						<body>
						<h1>There is no account associated with that email address</h1>
						</body>';
				}
			} else {
				echo '<head>
						<link rel="stylesheet" href="styles/mainStyle.css">
						</head>
						<body>
						<h1>Unknown Error</h1>
						</body>';
			} mysqli_stmt_close($stmt);
		} mysqli_close($conn);
	}
	
	
