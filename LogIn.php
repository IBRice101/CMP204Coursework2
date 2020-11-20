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
        
        <div class="container">
            <h1>Log In</h1>
            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                <div class="form-group">
                    <label for="email" class="formLabel">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="password" class="formLabel">Password</label>
                    <input type="password" class="form-control" id="password" name="pword" placeholder="Password">
                </div>
                <button type="submit" id="submit">Submit</button>
				<button type="reset" id="reset">Reset</button>
            </form>
            <br/>
            <p>Don't have an account?</p>
            <a href="SignUp.php">Sign Up now!</a>
			<br/>
			<?php include 'master/scriptLogIn.php'?>
			<br/>
        </div>
  
		<?php include 'master/footer.php'?>
	</body>
</html>
