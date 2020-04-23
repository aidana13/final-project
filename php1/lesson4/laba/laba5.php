<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<title></title>
</head>
    <body>
        <br><br><br>
        <form action="laba55.php" method="post">
            <div class="container">
  <div class="form-group row">
    <label for="inputEmail3" class="col-md-2 col-form-label">Student's Id:</label>
    <div class="col-md-2">
      <input type="text" class="form-control" name="studentId">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-md-2 col-form-label">Subject's Name:</label>
    <div class="col-md-2">
        <select class="form-control"  name="subjectname">
        <option>UML</option>
        <option>СУБД</option>
        <option>Data mining</option>
         <option>ООП</option>
      </select>  
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-md-2 col-form-label">Points:</label>
    <div class="col-md-2">
      <input type="text" class="form-control" name="points">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-md-2">
      <button type="submit" class="btn btn-primary">ENTER</button>
    </div>
  </div>
</div>
</form>
    </body>
</html>