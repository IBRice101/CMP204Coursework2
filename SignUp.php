<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Sign Up - Daft Punk</title>
		<meta name="description" content="Daft Punk fansite for CMP204 coursework">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
		
		<!--Styles-->
		<link rel="stylesheet"
		      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
		      crossorigin="anonymous">
		<link rel="stylesheet" href="styles/mainStyle.css">
		
		<!--Scripts-->
		<script src="https://code.jquery.com/jquery-3.5.1.js"
                integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="scripts/themeChange.js"></script>
	</head>
	<body>
		<?php include 'master/header.php'?>
		
        <br/>
        
		<?php
            //TODO: Speak to Lynsay and ask if this is bad practice
			// Global variables
			$firstName = $lastName = $email = $pword = $pwordConfirm = "";
			
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			    $firstName = validateText($_POST["firstName"]);
				$lastName = validateText($_POST["lastName"]);
				$email = validateEmail($_POST["email"]);
				$pword = validatePassword($_POST["pword"]);
				$pwordConfirm = validatePassword($_POST["pwordConfirm"]);
            }
			
			function validateText($info) {
				//check if string is empty
			    if ($info == "") {
					echo "<p class='error'>Please input your name</p>";
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
			
			function strip($info) {
			    // done to avoid XSS and SQLi
				$info = trim($info); // removes extra space, tab, newline, etc
				$info = stripslashes($info); // removes slashes
				$info = htmlspecialchars($info); // removes &,",',<,>
                
                return $info;
            }
		?>
        
        <div class="container">
            <h1>Sign Up</h1>
            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                <div class="form-group">
                    <label for="firstName" class="formLabel">First Name:</label>
                    <input type="text" class="form-control" id="firstName" name="firstName"
                           value="<?php echo $firstName ?>" placeholder="Forename">
                </div>
                <div class="form-group">
                    <label for="lastName" class="formLabel">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="lastName"
                           value="<?php echo $lastName ?>" placeholder="Surname">
                </div>
                <div class="form-group">
                    <label for="email" class="formLabel">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email ?>"
                           placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="pword" class="formLabel">Password</label>
                    <input type="password" class="form-control" id="pword" name="pword" value="<?php echo $pword ?>"
                           aria-describedby="pwordAssist" placeholder="Password">
                    <small id="pwordAssist" class="form-text text-muted">Please make your password longer than 8
                        characters, with at least 1 number and 1 special character.</small>
                </div>
                <div class="form-group">
                    <label for="pwordConfirm" class="formLabel">Confirm Password</label>
                    <input type="password" class="form-control" id="pwordConfirm" name="pwordConfirm"
                           value="<?php echo $pwordConfirm ?>" placeholder="Confirm">
                </div>
                <button type="submit" id="submit">Submit</button>
                <button type="reset" id="reset">Reset</button>
            </form>
            <br/>
            <p>Already have an account?</p>
            <a href="LogIn.php">Log In</a>
            <br/>
        </div>
        
		<?php include 'master/footer.php'?>
	</body>
</html>
