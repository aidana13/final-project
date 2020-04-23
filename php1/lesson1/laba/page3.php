<html>
   <head>
   	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   	<title>Page 3</title>
   </head>
   <body>
   	 <?php require_once 'header1.php'; ?> 
   	 	<?php include 'menu1.php'; ?>


        <div class="card border-light mb-3" style="max-width: 40rem;">
  <div class="card-header">Registration form</div>
  <div class="card-body">
    <div class="form-group">
    <label for="login">Email</label>
    <input type="email" class="form-control" id="login">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password">
  </div>
  <div class="form-group">
    <label for="name">Full name</label>
    <input type="text" class="form-control" id="name">
  </div>
  <button class="btn btn-primary">Login</button>
  </div>
</div>

 <?php require_once 'footer1.php'; ?>  
   </body>
</html>