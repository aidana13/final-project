<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<title></title>
</head>
    <body>
        <br><br><br>
        <form action="labka11.php" method="post">
            <div class="container">
  <div class="form-group row">
    <label class="col-md-2 col-form-label">Team name</label>
    <div class="col-md-3">
      <input type="text" class="form-control" name="name">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-md-2 col-form-label">Team country</label>
    <div class="col-md-3">
        <select class="form-control"  name="country">
        <option>Spain</option>
        <option>French</option>
        <option>Italy</option>
      </select>  
    </div>
  </div>
<div class="form-group row">
    <label class="col-md-2 col-form-label">Team city</label>
    <div class="col-md-3">
        <select class="form-control"  name="city">
        <option>Madrid</option>
        <option>Paris</option>
        <option>Rome</option>
      </select>  
    </div>
  </div>
  <div class="form-group row">
    <div class="col-md-2">
      <button type="submit" class="btn btn-primary">ADD TEAM</button>
    </div>
  </div>
</div>
</form>
    </body>
</html>