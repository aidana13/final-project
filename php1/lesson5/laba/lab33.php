<?php
    if(isset($_POST['language'])){
        setcookie('lang', $_POST['language'], time() + 10);
    }
    header("Location:lab3.php");
?>