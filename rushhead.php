<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>A Rush of Blood To The Head</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="design.css" type="text/css" media="all">
</head>
<body class="grid">
	<div class="coverdiv">
		<img src="images/rushhead.jpg" class="cover">
	</div>

   <?php
   $file = './includes/nav.php';
   if (file_exists($file) && is_readable($file)) {
       require $file;
   } else {
       throw new Exception("$file can't be found");
   }
   ?>
	
	<table class="SongList">
      <caption>
      Track List
      </caption>
      <tr>
        <th scope="col">Track</th>
        <th scope="col">Song</th>
      </tr>
      <tr>
        <td>01</td>
        <td>Politik</td>
      </tr>
      <tr>
        <td>02</td>
        <td>In My Place</td>
      </tr>
      <tr>
        <td>03</td>
        <td>God Put A Smile Upon Your Face</td>
      </tr>
      <tr>
        <td>04</td>
        <td>The Scientist</td>
      </tr>
      <tr> 
        <td>05</td>
        <td>Clocks</td>
      </tr>
      <tr>
        <td>06</td>
        <td>Daylight</td>
      </tr>
      <tr>
        <td>07</td>
        <td>Green Eyes</td>
      </tr>
      <tr>
        <td>08</td>
        <td>Warning Sign</td>
      </tr>
      <tr>
        <td>09</td>
        <td>A Whisper</td>
      </tr>
      <tr>
        <td>10</td>
        <td>A Rush Of Blood To The Head</td>
      </tr>
      <tr>
        <td>11</td>
        <td>Amsterdam</td>
      </tr>
    </table>
</body>
</html>