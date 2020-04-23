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
			<a href="logout.php">
				LOGOUT
			</a>
		<?php
			}else{
		?>
			<form action="auth.php" method="post">
				LOGIN <input type="text" name="login">
				PASSWORD <input type="password" name="password">
				<button>SIGN IN</button>			
			</form>
		<?php
			}
		?>
		<br>
		<a href="news.php">NEWS </a>
	</body>
</html>