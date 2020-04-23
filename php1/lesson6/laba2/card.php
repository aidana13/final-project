<?php
    session_start();
?>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <br><br>
     <a href="laba1.php">Магазин</a>
    <br>
        
    <div class="container">
        <?php 
           include 'db.php';
       for($i=0;$i<sizeof($items);$i++){

          if(isset(session_id()))
          {
             
          ?>  
  <h5 class="card-title"><?php echo $item[session_id()]['name'];?></h5>
      <?php
      }
    }
  ?>
</form>
    </div>
</body>
</html>
