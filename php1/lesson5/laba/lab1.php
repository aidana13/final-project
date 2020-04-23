<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	
	<div class="container">
	<?php
        if(isset($_COOKIE["name"])) {
                echo  '<h1>'.$_COOKIE["name"].'</h1>';
            }
        else '<h1>'."Default Site Name".'</h1>';
    ?>	
<form class="form-inline" method="post" action="lab11.php">
  <div class="form-group mx-sm-3 mb-2">
    Name of a Site:<input type="text" class="form-control" name="sitename">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Set Site Name</button>
</form>

</div>
</body>
<html>