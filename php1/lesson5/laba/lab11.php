<?php
    if(isset($_POST['sitename'])){
        setcookie('name', $_POST['sitename'], time() + 86400);
    }
    header('Location:lab1.php');
?>