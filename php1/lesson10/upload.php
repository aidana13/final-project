<?php
	// print_r($_FILES);
	$uri = "?error=1";
	if($_SERVER['REQUEST_METHOD']=='POST'){
		if($_FILES['my_avatarka']['size']<=1024*1024&&($_FILES['my_avatarka']['type']=='image/jpeg'||$_FILES['my_avatarka']['type']=='image/png')){
			$dir = "uploads/";
			move_uploaded_file($_FILES['my_avatarka']['tmp_name'], $dir."1.jpg");
			$uri = "?success=1";
		}
	}
	header("Location:index.php$uri");
?>