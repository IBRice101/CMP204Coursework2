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
        
        <div class="container">
            <h1>Sign Up</h1>
            <form action="master/scriptSignUp.php" method="post">
                <div class="form-group">
                    <label for="firstName" class="formLabel">First Name:</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Forename">
                </div>
                <div class="form-group">
                    <label for="lastName" class="formLabel">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Surname">
                </div>
                <div class="form-group">
                    <label for="email" class="formLabel">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="pword" class="formLabel">Password</label>
                    <input type="password" class="form-control" id="pword" name="pword" aria-describedby="pwordAssist"
						   placeholder="Password">
                    <small id="pwordAssist" class="form-text text-muted">Please make your password longer than 8
                        characters, with at least 1 number and 1 special character.</small>
                </div>
                <div class="form-group">
                    <label for="pwordConfirm" class="formLabel">Confirm Password</label>
                    <input type="password" class="form-control" id="pwordConfirm" name="pwordConfirm"
						   placeholder="Confirm">
                </div>
                <button type="submit" id="submit">Submit</button>
                <button type="reset" id="reset">Reset</button>
            </form>
            <br/>
            <p>Already have an account?</p>
            <a href="LogIn.php">Log In</a>
            <br/>
			<br/>
        </div>
        
		<?php include 'master/footer.php'?>
	</body>
</html>
