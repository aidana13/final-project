<?php
    session_start();
    $_SESSION["name"] = "Ilyas";
    $_SESSION["surname"] = "Zhuanyshev";

    //setcookie(session_name(),session_id(), time() + 86400);
    //session_destroy()
?>