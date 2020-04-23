<?php
try {
        $conn = new PDO('mysql:host=localhost;dbname=bitlab','root','');
         $sql = "
            INSERT INTO items(name, price)".
            "VALUES ('Puma P44','34$')
        ";
        //'Adidas F50','50$'
        //'Reebok R30','35$'
        //'Nike Total 90','45$'
        //'Puma P44','34$'
        $query=$conn->prepare($sql);
        $query->execute();
        $result = $query->fetchAll();

    } catch (PDOException $e) {
        echo $e->getMessage() . "<br/>";
    }
?>


      