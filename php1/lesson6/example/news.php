<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			if(isset($_SESSION['USER_DATA'])){
		?>
			<h1>Welcome <?php echo $_SESSION['USER_DATA']['full_name']; ?></h1>
		<?php
			}
		?>
		<h1>ALL NEWS</h1>
		<a href="index.php">HOME </a>
	</body>
</html>