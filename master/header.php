<?php
	if(isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] == true){
		?>
		<header>
            <div class="logo">
                <a href="index.php">
                    <!-- Guy-Manuel de Homem-Christo, Public domain, via Wikimedia Commons -->
                <img src="media\Logo\Daft_Punk_Logo_Black.png" alt="Daft Punk Logo" width="70px" height="50px"/>
                </a>
            </div>
            <div class="navbar">
            	<li><a href="Search.php">Search</a></li>
                <li><a href="Homework.php">Homework</a></li>
                <li><a href="Discovery.php">Discovery</a></li>
                <li><a href="HumanAfterAll.php">Human After All</a></li>
                <li><a href="RandomAccessMemories.php">Random Access Memories</a></li>
                <li><a href="Live.php">Live work</a></li>
                <li><a href="OtherProjects.php">Other Projects</a></li>
                <li><a href="UserAccount.php"><?php echo htmlspecialchars($_SESSION["firstname"]); ?></a></li>
            </div>
        </header>
<?php
	} else {
		?>
		<header>
			<div class="logo">
				<a href="index.php">
					<!-- Guy-Manuel de Homem-Christo, Public domain, via Wikimedia Commons -->
					<img src="media\Logo\Daft_Punk_Logo_Black.png" alt="Daft Punk Logo" width="70px" height="50px"/>
				</a>
			</div>
			<div class="navbar">
				<li><a href="Search.php">Search</a></li>
				<li><a href="Homework.php">Homework</a></li>
				<li><a href="Discovery.php">Discovery</a></li>
				<li><a href="HumanAfterAll.php">Human After All</a></li>
				<li><a href="RandomAccessMemories.php">Random Access Memories</a></li>
				<li><a href="Live.php">Live work</a></li>
				<li><a href="OtherProjects.php">Other Projects</a></li>
				<li><a href="SignUp.php">Sign Up</a></li>
			</div>
		</header>
<?php
}