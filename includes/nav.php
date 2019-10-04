	<nav class="navi">
<?php
	$t = '/';
	$fp = strstr($_SERVER['PHP_SELF'], $t);
	$name = stripos($fp, 'source');
	if (!$name) {
		echo '<a href="Disco.php">Home</a>';
		$name = stripos($fp, 'parachute');
			if (!$name) {
			echo '<a href="parachutes.php">Parachutes</a>';
		}
		$name = stripos($fp, 'xy.php');
			if (!$name) {
			echo '<a href="xy.php">X&amp;Y</a>';
		}
		$name = stripos($fp, 'rushhead');
			if (!$name) {
			echo '<a href="rushhead.php">A Rush of Blood To The Head</a>';
		}
		$name = stripos($fp, 'MyloXylo');
		if (!$name) {
		echo '<a href="MyloXylo.php">Mylo Xyloto</a>';
		}
	} else {
		echo '<a href="Disco.php">Home</a>';
	}
 ?>
		</nav>