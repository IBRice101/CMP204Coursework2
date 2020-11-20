<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Log in - Daft Punk</title>
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
					echo "<p class='error'>Please choose a password</p>";
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
		?>
        
        <div class="container">
            <h1>Log In</h1>
            <form action="master/check.php" method="post">
                <div class="form-group">
                    <label for="email" class="formLabel">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email ?>"
						   placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="password" class="formLabel">Password</label>
                    <input type="password" class="form-control" id="password" name="pword" value="<?php echo $pword ?>"
						   placeholder="Password">
                </div>
                <button type="submit" id="submit">Submit</button>
				<button type="reset" id="reset">Reset</button>
            </form>
            <br/>
            <p>Don't have an account?</p>
            <a href="SignUp.php">Sign Up now!</a>
        </div>
  
		<?php include 'master/footer.php'?>
	</body>
</html>
