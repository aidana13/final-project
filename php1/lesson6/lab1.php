<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
            if(isset($_SESSION["name"])&&isset($_SESSION["surname"])) {
                echo "User data:".$_SESSION["name"]."-".$_SESSION["surname"].".";
            }
        ?>
    </body>
</html>