<?php
	
	$q = (isset($_GET['q']) ? $_GET['q'] : '');
	
	function check($query) {
		$homework = array("Daftendirekt", "WDPK 83.7 FM", "Revolution 909", "Da Funk", "Phoenix", "Fresh",
			"Around The World", "Rollin' & Scratchin'", "Teachers", "High Fidelity", "Rock'n Roll", "Oh Yeah", "Burnin'",
			"Indo Silver Club", "Alive", "Funk Ad");
		
		$discovery = array("One More Time", "Aerodynamic", "Digital Love", "Harder, Better, Faster, Stronger",
			"Crescendolls", "Nightvision", "Superheroes", "High Life", "Something About Us", "Voyager", "Veridis Quo",
			"Short Circuit", "Face To Face", "Too Long" );
		
		$humanAfterAll = array("Human After All", "The Prime Time Of Your Life", "Robot Rock", "Steam Machine", "Make Love",
			"The Brainwasher", "On/Off", "Television Rules The Nation", "Technologic", "Emotion");
		
		$randomAccessMemories = array("Give Life Back To Music", "The Game Of Love", "Giorgio by Moroder", "Within",
			"Instant Crush", "Lose Yourself To Dance", "Touch", "Get Lucky", "Beyond", "Motherboard", "Fragments of Time",
			"Doin' It Right", "Contact", "Horizon");
		
		$alive97 = array("Alive 1997");
		
		$alive07 = array("Robot Rock/Oh Yeah", "Touch It/Technologic", "Television Rules The Nation/Crescendolls",
			"Too Long/Steam Machine", "Around The World/Harder, Better, Faster, Stronger", "Burnin'/Too Long",
			"Face to Face/Short Circuit", "One More Time/Aerodynamic", "Aerodynamic Beats/Forget About the World",
			"The Prime Time Of Your Life/The Brainwasher/Rollin' & Scrathcin'/Alive", "Da Funk/Daftendirekt",
			"Superheroes/Human After All/Rock'n Roll");
		
		$tron = array("Overture", "The Grid", "The Son of Flynn", "Recognizer", "Armory", "Arena", "Rinzler",
			"The Game Has Changed", "Outlands", "Adagio for Tron", "Nocturne", "End of Line", "Derezzed", "Fall",
			"Solar Sailer", "Rectifier", "Disc Wars", "C.L.U.", "Arrival", "Flynn Lives", "Tron Legacy (End Titles)",
			"Finale");
		
		if (array_search($query, $homework)) {
			echo "<h2>$query is in the album Homework</h2>";
			echo "<img src='../../media/Homework/Homework.jpg' alt='Homework Album Cover' width='500' height='500' class='cover-center'/>";
		} elseif (array_search($query, $discovery)) {
			echo "<h2>$query is in the album Discovery</h2>";
			echo "<img src='../../media/Discovery/Discovery.jpg' alt='Homework Album Cover' width='500' height='500' class='cover-center'/>";
		} elseif (array_search($query, $humanAfterAll)) {
			echo "<h2>$query is in the album Human After All</h2>";
			echo "<img src='../../media/HumanAfterAll/HumanAfterAll.jpg' alt='Homework Album Cover' width='500' height='500' class='cover-center'/>";
		} elseif (array_search($query, $randomAccessMemories)) {
			echo "<h2>$query is in the album Random Access Memories</h2>";
			echo "<img src='../../media/RandomAccessMemories/RandomAccessMemories.jpg' alt='Homework Album Cover' width='500' height='500' class='cover-center'/>";
		} elseif (array_search($query, $alive97)) {
			echo "<h2>$query is in the album Alive 1997</h2>";
			echo "<img src='../../media/Live/Alive1997.jpg' alt='Homework Album Cover' width='500' height='500' class='cover-center'/>";
		} elseif (array_search($query, $alive07)) {
			echo "<h2>$query is in the album Alive 2007</h2>";
			echo "<img src='../../media/Live/Alive2007.jpg' alt='Homework Album Cover' width='500' height='500' class='cover-center'/>";
		} elseif (array_search($query, $tron)) {
			echo "<h2>$query is in the album Tron</h2>";
			echo "<img src='../../media/Other/Tron.jpg' alt='Homework Album Cover' width='500' height='500' class='cover-center'/>";
		} else {
			echo "<h2>This song is not in one of Daft Punk's Albums</h2>";
		}
	}