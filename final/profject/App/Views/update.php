</body>
</html>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>profject</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="App/Views/stylo.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      </head>
<body>
 <header>
   <div class="topnav">
    <a href="?act=home">Home</a>
  <a href="?act=prof">Professions</a>
 <a href="?act=contact">Contact</a>
  <a href="?act=about">About</a>
  <a class="active" href="?act=profile">Profile</a>
</div>
</header>
<br><br><br>
<div class="container" align="center">
<h3>Update</h3>

<form method="post" action="?act=update1">
  <div class="form-group">
  <label >Полное имя</label>
    <div class="col-sm-5"><input type="text" class="form-control" name="full_name"></div>
  </div>
  <div class="form-group">
    <label >Старый пароль</label>
    <div class="col-sm-5"><input type="password" class="form-control" name="password1"></div>
  </div>
   <div class="form-group">
    <label >Новый пароль</label>
    <div class="col-sm-5"><input type="password" class="form-control" name="password2"></div>
  </div>
  <div class="form-group">
    <label>Повторить новый пароль</label>
    <div class="col-sm-5"><input type="password" class="form-control" name="password3"></div>
  </div>
  
  

  <div class="col-sm-3">
  <button type="submit" class="btn btn-dark">Update</button>
</div>
</form>
    </div>
<footer>
        <div class="container">
          <div class="pull-right hidden-xs">
            Developed by <b>Profject TEAM</b>
          </div>
          <strong>Copyright © 2020 ImpactHUB.</strong> All rights reserved.
        </div>
      </footer>
</body>
</html>