<?php
	
	$albums = array("Homework", "Discovery", "Human After All", "Random Access Memories", "Alive 1997", "Alive 2007",
		"Tron", "Other", "homework", "discovery", "human after all", "random access memories", "alive 1997",
		"alive 2007", "tron", "other");
	
	$query = $_REQUEST["album"];
	
	$result = array_search($query, $albums);
	
	if ($result === 0 || $result === 8) {
		echo '
		<h1 class="center">Homework</h1>
		<br/>
		<img src="media/Homework/Homework.jpg" alt="Homework Album Cover" width="500" height="500"
		class="center">
		<iframe src="https://open.spotify.com/embed/album/5uRdvUR7xCnHmUW8n64n9y" width="300" height="380"
		allowtransparency="true" allow="encrypted-media" class="center"></iframe>
		<br/>
		<h2 class="center"><a href="Homework.php">Our page on Homework</a></h2>';
	} elseif ($result === 1 || $result === 9) {
		echo '
		<h1 class="center">Discovery</h1>
		<br/>
		<img src="media/Discovery/Discovery.jpg" alt="Discovery Album Cover" width="500" height="500"
		class="center">
		<iframe src="https://open.spotify.com/embed/album/2noRn2Aes5aoNVsU6iWThc" width="300" height="380"
		allowtransparency="true" allow="encrypted-media" class="center"></iframe>
		<h2 class="center"><a href="Discovery.php">Our page on Discovery</a></h2>';
	} elseif ($result === 2 || $result === 10) {
		echo '
		<h1 class="center">Human After All</h1>
		<br/>
		<img src="media/HumanAfterAll/HumanAfterAll.jpg" alt="Human After All Album Cover" width="500"
		height="500" class="center">
		<iframe src="https://open.spotify.com/embed/album/2T7DdrOvsqOqU9bGTkjBYu" width="300" height="380"
        allowtransparency="true" allow="encrypted-media" class="center"></iframe>
		<h2 class="center"><a href="HumanAfterAll.php">Our page on Human After All</a></h2>';
	} elseif ($result === 3 || $result === 11) {
		echo '
		<h1 class="center">Random Access Memories</h1>
		<br/>
		<img src="media/RandomAccessMemories/RandomAccessMemories.jpg" alt="Random Access Memories Album Cover"
		width="500" height="500" class="center">
		<iframe src="https://open.spotify.com/embed/album/4m2880jivSbbyEGAKfITCa" width="300" height="380"
        allowtransparency="true" allow="encrypted-media" class="center"></iframe>
		<h2 class="center"><a href="RandomAccessMemories.php">Our page on Random Access Memories</a></h2>';
	} elseif ($result === 4 || $result === 12) {
		echo '
		<h1 class="center">Alive 1997</h1>
		<br/>
		<img src="media/Live/Alive1997.jpg" alt="Alive 1997 Album Cover" width="500" height="500" class="center">
		<iframe src="https://open.spotify.com/embed/album/3Z7mPCcnwAzU7GtsRYf0HA" width="300" height="100"
        allowtransparency="true" allow="encrypted-media" class="center"></iframe>
		<h2 class="center"><a href="Live.php">Our page on Daft Punks Live albums</a></h2>';
	} elseif ($result === 5 || $result === 13) {
		echo '
		<h1 class="center">Alive 2007</h1>
		<br/>
		<img src="media/Live/Alive2007.jpg" alt="Alive 2007 Album Cover" width="500" height="500" class="center">
		<iframe src="https://open.spotify.com/embed/album/3Bz2QPL8NLBn1d03jXtNkT" width="300" height="380"
        allowtransparency="true" allow="encrypted-media" class="center"></iframe>
		<h2 class="center"><a href="Live.php">Our page on Daft Punks Live albums</a></h2>';
	} elseif ($result === 6 || $result === 14) {
		echo '
		<h1 class="center">Tron: Legacy Soundtrack</h1>
		<br/>
		<img src="media/Other/Tron.jpg" alt="Tron: Legacy Album Cover" width="500" height="500" class="center">
		<iframe src="https://open.spotify.com/embed/album/2GC8kfyiyPjyheUUWyEY8F" width="300" height="380"
		allowtransparency="true" allow="encrypted-media" class="center"></iframe>
		<h2 class="center"><a href="OtherProjects.php">Our page on Daft Punks Miscellaneous other projects</a></h2>';
	} elseif ($result === 7 || $result === 15) {
		echo '
		<h1 class="center">Other</h1>
		<br/>
		<img src="media/Other/LeKnightClub.jpg" alt="Le Knight Club Album Cover" width="500" height="500"
		class="center">
		<iframe src="https://open.spotify.com/embed/playlist/6Z8R4FZzNayv3Pv6jmheGA" width="300"
        height="380" allowtransparency="true" allow="encrypted-media" class="center"></iframe>
		<h2 class="center"><a href="OtherProjects.php">Our page on Daft Punks Miscellaneous other projects</a></h2>';
	} else {
		echo '<h1 class="center"> What album would you like to listen to? </h1>';
	}