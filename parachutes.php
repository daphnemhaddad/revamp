<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Parachutes</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="design.css" type="text/css" media="all">
</head>
<body class="grid">
	<div class="coverdiv">
		<img src="images/parachutes.jpg" class="cover">
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
        <td> 01</td>
        <td> Don't Panic</td>
      </tr>
      <tr>
        <td> 02</td>
        <td> Shiver</td>
      </tr>
      <tr>
        <td> 03</td>
        <td> Spies</td>
      </tr>
      <tr>
        <td> 04</td>
        <td> Sparks</td>
      </tr>
      <tr> 
        <td> 05</td>
        <td> Yellow</td>
      </tr>
      <tr>
        <td> 06</td>
        <td> Trouble</td>
      </tr>
      <tr>
        <td> 07</td>
        <td> Parachutes</td>
      </tr>
      <tr>
        <td> 08</td>
        <td> High Speed</td>
      </tr>
      <tr>
        <td> 09</td>
        <td> We Never Change</td>
      </tr>
      <tr>
        <td> 10</td>
        <td> Everything's Not Lost</td>
      </tr>
      <tr>
        <td> 11</td>
        <td> Life is For Living</td>
      </tr>
    </table>
</body>
</html>
