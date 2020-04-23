<?php
    session_start();
    $_SESSION["university"] = $_POST['inputuniversity'];
    $_SESSION["faculty"] = $_POST['inputfaculty'];
    $_SESSION["group"] = $_POST['inputgroup'];
	header("Location:finish.php");
?>