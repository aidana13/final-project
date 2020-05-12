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
  <a class="active" href="?act=login">Log in</a>
</div>
</header>
<br><br><br>
<div class="container" align="center">


<h3>Войти</h3>

<form method="post" action="?act=login1">
  <div class="form-group">
    <label >Адрес электронной почты</label>
    <div class="col-sm-5"><input type="email" class="form-control" name="email"></div>
  </div>
  <div class="form-group">
    <label >Пароль</label>
    <div class="col-sm-5"><input type="password" class="form-control" name="password"></div>
  </div>

  <div class="col-sm-3">
  <button type="submit" class="btn btn-dark">Войти</button>
  
</div>
  <a href="?act=reg" style="color:black">Зарегистрироваться</a>
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