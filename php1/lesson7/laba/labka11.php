<?php
 try {
        $conn = new PDO('mysql:host=localhost;dbname=bitlab','root','');
        $sql="INSERT INTO teams(name,country,city)".
             "VALUES (:name, :country, :city)";

        $query=$conn->prepare($sql);
        $query->execute([
        'name'=> $_POST['name'],
        'country'=> $_POST['country'],
        'city'=> $_POST['city'],
        ]);

    } catch (PDOException $e) {
        echo $e->getMessage() . "<br/>";
    }
    header("Location:labka111.php");
?>