<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<br><br>
<div class="container">
 <form method="POST" action="step11.php">
  <div class="form-group row">
   <label class="col-sm-2 col-form-label">Name:</label>
    <div class="col-sm-3">
     <input type="text" class="form-control" name="inputname">
    </div>
   </div>

  <div class="form-group row">
   <label class="col-sm-2 col-form-label">Surname:</label>
    <div class="col-sm-3">
     <input type="text" class="form-control" name="inputsurname">
    </div>
   </div>
  <div class="form-group row">
   <label class="col-sm-2 col-form-label">Age:</label>
    <div class="col-sm-2">
     <select class="form-control" name="inputage">
      <?php 
       for($i=1;$i<100;$i++)
       {
        echo '<option>'.$i.'</option>';
       }
      ?>
     </select>  
    </div>
   </div>
  <div class="form-group row">
    <div class="col-sm-1">
      <button type="submit" class="btn btn-success">Next</button>
    </div>
  </div>
</form>
</div>
</body>
<html>