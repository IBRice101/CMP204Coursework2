<?php
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
	
	session_start();
	
	$sql = "DELETE FROM myUsers WHERE id = ?";
	
	$id = $_SESSION["id"];
	
	if ($stmt = mysqli_prepare($conn, $sql)) {
		mysqli_stmt_bind_param($stmt, "s", $id);
		if (mysqli_stmt_execute($stmt)) {
			echo '
		<head>
			<link rel="stylesheet" href="../../../styles/mainStyle.css"><title>User Deleted</title>
		</head>
		<body>
			<h1>User Deleted</h1>
		</body>';
			sleep(3);
			header("location: ../../LogIn.php");
		} else {
			echo "<p class='error'> There was an error </p>";
			echo "Error: " . $sql . mysqli_error($conn);
		}
	}
	
	mysqli_close($conn);
