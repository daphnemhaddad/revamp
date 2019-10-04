<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Discography Project</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="design.css" type="text/css" media="all">
</head>
<body class="grid">
	<header>Coldplay
		<p>
			London British Rock
		</p>
	</header>
	<div class="topcover"></div>
	<!-- middlepart -->
	<div class="main">  <!-- this is the left half of the div container of the albums -->
		<div class="album"> <!-- first album picture -->
			<a href="parachutes.php"><span></span></a>
			<img src="images/parachutes.jpg" height="200" alt="parachutes">
			<br>
			Parachutes
		</div>
		<div class="album"> <!-- second album picture -->
			<a href="xy.php"><span></span></a>
			<img src="images/xy.jpg" height="200" alt="x&y">
			<br>
			X&Y
		</div>
	</div>
	<div class="secondhalf"> <!-- this is the right half of the div container of the albums -->
		<div class="album"> <!-- third album picture -->
			<a href="MyloXylo.php"><span></span></a>
			<img src="images/mylox.jpg" height="200" alt="Mylox">
			<br>
			Mylo Xyloto
		</div>
		<div class="album rush"> <!-- fourth album picture -->
			<a href="rushhead.php"><span></span></a>
			<img src="images/rushhead.jpg" height="172" alt="A rush to the head">
			<br>
			A Rush of Blood to the Head
		</div>
	</div>
	<!--  -->
	<div class="protrait"><img src="images/chris.jpg" alt="christ martin"><span>song writer chris martin
(born 2 March 1977) is an English singer, songwriter, musician, record producer, and philanthropist. He is the lead singer and co-founder of the rock band Coldplay</span></div> <!-- box holding band member infomation -->

	<div class="protrait2"><img src="images/will.jpg" alt="will champion"><span>drummer/vocalist will champion
Born on July 31, 1978 in Southampton, Hampshire, England. Drummer for the band Coldplay</span>
</div> <!-- box holding band member infomation -->
	<img src="images/concert.jpg" alt="concert" class="backdrop">
<?php include './includes/footer.php'; ?>
</body>
</html>