<?php
	$pword = "";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$pword = $_POST["changePword"];
	}
	
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
	
	$id = $_SESSION["id"];
	$pword = password_hash($pword, PASSWORD_DEFAULT);
	
	$sql = "UPDATE myUsers SET password = ? WHERE id = ?;";
	
	if ($stmt = mysqli_prepare($conn, $sql)) {
		mysqli_stmt_bind_param($stmt, "ss", $pword, $id );
		if (mysqli_stmt_execute($stmt)) {
			echo '
		<head>
			<link rel="stylesheet" href="../../../styles/mainStyle.css"><title>Password updated</title>
		</head>
		<body>
			<h1>Password updated</h1>
		</body>';
			sleep(3);
			header("location: ../../../LogIn.php");
		} else {
			echo "<p style='color: red'> There was an error </p>";
			echo "Error: " . $sql . mysqli_error($conn);
		}
	}
	
	mysqli_close($conn);