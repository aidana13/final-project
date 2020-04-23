<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<title></title>
</head>
    <body>
        <br><br><br>
        <div class="container">
         <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Team name</th>
      <th scope="col">Team country</th>
      <th scope="col">Team city</th>
    </tr>
  </thead>
  <tbody>
<?php 
       try {
        $conn = new PDO('mysql:host=localhost;dbname=bitlab','root','');
        $sql = "
              SELECT id, name, country, city 
              FROM teams 
        ";
        $query=$conn->prepare($sql);
        $query->execute();
        $result = $query->fetchAll();
        
        foreach($result as $team)
        {
            echo  '<tr>'.'<th scope="row">'. $team['id'] .'</th>'.'<td>'. $team['name'] .'</td>'.'<td>'. $team['country'] .'</td>'.'<td>'. $team['city'] .'</td>'.'</tr>';
        }
    } catch (PDOException $e) {
        echo $e->getMessage() . "<br/>";
    }
?>
  </tbody>
</table>
</div>
    </body>
</html>