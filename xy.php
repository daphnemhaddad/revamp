<!DOCTYPE html>
<html lang="en-US">
<head>
  <title>X&Y</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="design.css" type="text/css" media="all">
</head>
<body class="grid">
  <div class="coverdiv">
    <img src="images/xy.jpg" class="cover">
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
        <td>Square One</td>
      </tr>
      <tr>
        <td> 02</td>
        <td>What If</td>
      </tr>
      <tr>
        <td> 03</td>
        <td>White Shadows</td>
      </tr>
      <tr>
        <td> 04</td>
        <td>Fix You</td>
      </tr>
      <tr> 
        <td> 05</td>
        <td>Talk</td>
      </tr>
      <tr>
        <td> 06</td>
        <td>X&Y</td>
      </tr>
      <tr>
        <td> 07</td>
        <td>Speed Of Sound</td>
      </tr>
      <tr>
        <td> 08</td>
        <td>A Message</td>
      </tr>
      <tr>
        <td> 09</td>
        <td>Low</td>
      </tr>
      <tr>
        <td> 10</td>
        <td>the Hardest Part</td>
      </tr>
      <tr>
        <td> 11</td>
        <td>Swallowed In The Sea</td>
      </tr>
      <tr>
        <td>12</td>
        <td>Twisted Logic</td>
      </tr>
      <tr>
        <td> 13</td>
        <td>'Til Kingdom Come</td>
      </tr>
    </table>
</body>
</html>
