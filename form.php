<?php
$currentPage = '/revamp/form.php';
if ($currentPage !== $_SERVER['PHP_SELF']) {
    header('Location: http://localhost/revamp/missing.php');
    exit;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP_SELF XSS</title>
</head>

<body>
<h1>Prevent XSS with Form</h1>
	<?php
	if (isset($_POST['name'])) {
		echo '<p>Hi, ' . htmlentities($_POST['name']) . '!</p>';
	}
	?>
<form method="post"  action="<?= $currentPage ?>">
    
        <label for="name">Full Name</label>
       <input type="text" name="name" placeholder="Your Name here">
		<br>
   
        <button>Submit</button>
  
</form>
</body>
</html>