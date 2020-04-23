<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <br><br><br>
        
    <div class="container">
        <?php 
       try {
        $conn = new PDO('mysql:host=localhost;dbname=bitlab','root','');
        $sql = "
              SELECT id, name, price 
              FROM items
        ";
        $query=$conn->prepare($sql);
        $query->execute();
        $result = $query->fetchAll();
        
        foreach($result as $item)
        {?>
             <div class="row">   
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><?php echo $item['name'];?></h5>
                <p class="card-text"><?php echo $item['price'];?></p>
                    <button class="btn btn-info">Add to cart</button>
                
              </div>
            </div>
        </div>
           
           <?php
        }
    } catch (PDOException $e) {
        echo $e->getMessage() . "<br/>";
    }
?>
    </div>
</body>
</html>
