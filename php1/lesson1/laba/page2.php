<html>
   <head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   	<title>Page 2</title>
   </head>
   <body>
     <?php require_once 'header1.php'; ?> 
      <?php include 'menu1.php'; ?>

    <div class="card border-light mb-3" style="max-width: 30rem;">
  <div class="card-header">Login form</div>
  <div class="card-body">
    <div class="form-group">
    <label for="login">Login</label>
    <input type="email" class="form-control" id="login">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password">
  </div>
  <button class="btn btn-primary">Login</button>
  </div>
</div>

 <?php require_once 'footer1.php'; ?>  
   </body>
</html>