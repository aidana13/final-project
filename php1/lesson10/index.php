<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			if(isset($_GET['error'])){
		?>
			<b style="color: red;">ERROR ON UPLOADING</b>
		<?php
			}
		?>
		<?php
			if(isset($_GET['success'])){
		?>
			<b style="color: green;">IMAGE UPLOADED</b>
		<?php
			}
		?>
		<br>
		<img src="uploads/1.jpg" width="200px">
		<form action="upload.php" method="post" enctype="multipart/form-data">
			<input type="file" name="my_avatarka">
			<button>UPLOAD</button>
		</form>
	</body>
</html>