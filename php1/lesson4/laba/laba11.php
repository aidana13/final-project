<html>
    <body>
        <?php
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $food = $_POST['food'];

            echo "<h1> ".$name." ".$surname." ordered ". substr($food,0,7) ." </h1>";
        ?>
    </body>
</html>