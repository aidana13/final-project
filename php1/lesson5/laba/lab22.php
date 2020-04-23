<?php
    if(isset($_POST['inputname'])){
        setcookie('name', $_POST['inputname'], time() +10);
    }
    if(isset($_POST['inputsurname'])){
        setcookie('surname', $_POST['inputsurname'], time() +10);
    }
    if(isset($_POST['inputage'])){
        setcookie('age', $_POST['inputage'], time() +10);
    }
    if(isset($_POST['inputcountry'])){
        setcookie('country', $_POST['inputcountry'], time() +10);
    }
    if(isset($_POST['inputgender'])){
        setcookie('gender', $_POST['inputgender'], time() +10);
    }
    if(isset($_POST['inputcard'])){
        setcookie('card', $_POST['inputcard'], time() +10);
    }
    header("Location:lab2.php");
?>