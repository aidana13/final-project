<?php
    session_start();
    $_SESSION["name"] = $_POST['inputname'];
    $_SESSION["surname"] = $_POST['inputsurname'];
    $_SESSION["age"] = $_POST['inputage'];
    
	header("Location:step2.php");
?>