<?php
	// With thanks to Lynsay A. Shepherd
	// NOTE: do not push this to public with ur real creds
	$servername = "lochnagar.abertay.ac.uk";
	$usernameSQL = "sql1901124";
	$passwordSQL = "tHvLZSxWZ4ex";
	$dbname = "sql1901124";
	
	// connection to lochnagar
	$conn = mysqli_connect($servername, $usernameSQL, $passwordSQL, $dbname);
	
	//TODO: Add ability to delete user account
	
	mysqli_close($conn);
