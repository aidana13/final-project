<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<br><br>
<div class="container">
 <form method="POST" action="step22.php">
  
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">City:</label>
    <div class="col-sm-3">
      <select class="form-control" name="inputcity">
        <option>Almaty</option>
        <option>Astana</option>
        <option>Uralsk</option>
        <option>Aksay</option>
      </select>
    </div>
  </div>

 <div class="form-group row">
    <label class="col-sm-2 col-form-label">Address:</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="inputaddress">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Phone:</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="inputphone">
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