<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
	<?php 
		// Check if username is set
		if (isset($_GET['username'])) {
			$username = $_GET['username'];
	?>
		<h1>Welcome, <?php echo $username; ?>!</h1>
	<?php 
		} else {
			echo "<h1>Please go back and enter your username.</h1>";
		}
	?>
</body>
</html>
