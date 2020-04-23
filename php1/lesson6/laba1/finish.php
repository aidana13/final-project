<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
            if(isset($_SESSION["name"])&&isset($_SESSION["surname"])&&isset($_SESSION["age"])
              &&isset($_SESSION["city"])&&isset($_SESSION["address"])&&isset($_SESSION["phone"])
              &&isset($_SESSION["university"])&&isset($_SESSION["faculty"])&&isset($_SESSION["group"])
            ) {
                echo "Name:"."  ".$_SESSION["name"]."<br>"."Surname:"."  " .$_SESSION["surname"]."<br>"."Age:"."  ".$_SESSION["age"]."<br>"."City:"."  ".$_SESSION["city"]."<br>"."Address:"."  ".$_SESSION["address"]."<br>"."Phone:"."  ".$_SESSION["phone"]."<br>"."University:"."  ".$_SESSION["university"]."<br>"."Faculty:"."  ".$_SESSION["faculty"]."<br>"."Group:"."  ".$_SESSION["group"]."<br>";
            }
        ?>
    </body>
</html>