<?php
	// Global Variables
	$email = $pword = "";
	$firstname = $lastname = $id = "";
	$sqlPassword = "";
	
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
			echo "<p style='color: red'>Please input your password</p>";
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
		
		// With thanks to Lynsay A. Shepherd
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
		
		// prepares statement
		if ($state = mysqli_prepare($conn, $sql)) {
			mysqli_stmt_bind_param($state, "s", $email);
			
			// executes statement
			if (mysqli_stmt_execute($state)) {
				mysqli_stmt_store_result($state);
				
				// if there is exactly one user with those creds
				if (mysqli_stmt_num_rows($state) == 1) {
					mysqli_stmt_bind_result($state, $id, $firstname, $lastname, $email, $sqlPassword);
					
					// fetch the statement
					if (mysqli_stmt_fetch($state)) {
						
						//check the password entered is the same as the one in the db
						if (password_verify($pword, $sqlPassword)) {
							session_start();
							
							$_SESSION["loggedin"] = true;
							$_SESSION["id"] = $id;
							$_SESSION["email"] = $email;
							$_SESSION["firstname"] = $firstname;
							$_SESSION["lastname"] = $lastname;
							
							echo '<head>
							<link rel="stylesheet" href="../../styles/mainStyle.css"><title>Welcome!</title>
							</head>
							<body>
							<h1>Welcome to the site, you have successfully logged in!</h1>
							</body>';
							
							sleep(3);
							header("location: ../../index.php");
						} else {
							echo '<head>
							<link rel="stylesheet" href="../../styles/mainStyle.css"><title>Incorrect Password</title>
							</head>
							<body>
							<h1>Password is invalid</h1>
							</body>';
							
							sleep(3);
							header("location: ../../LogIn.php");
						}
					}
				} else {
					echo '<head>
						<link rel="stylesheet" href="../../styles/mainStyle.css"><title>Incorrect Email Address</title>
						</head>
						<body>
						<h1>There is no account associated with that email address</h1>
						</body>';
					
					sleep(3);
					header("location: ../../LogIn.php");
				}
			} else {
				echo '<head>
						<link rel="stylesheet" href="../../styles/mainStyle.css"><title>Unknown Error</title>
						</head>
						<body>
						<h1>Unknown Error</h1>
						</body>';
				
				sleep(3);
				header("location: ../../LogIn.php");
			} mysqli_stmt_close($state);
		} mysqli_close($conn);
	}
	
	
