<?php
    session_start();
    $_SESSION["city"] = $_POST['inputcity'];
    $_SESSION["address"] = $_POST['inputaddress'];
    $_SESSION["phone"] = $_POST['inputphone'];
	header("Location:step3.php");
?>