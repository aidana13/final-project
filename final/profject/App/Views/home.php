<!DOCTYPE html>
<html lang="ru">
<head>
    <title>profject</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="App/Views/stylo.css">
     
</head>
<body>
  <header>
<div class="topnav">
  <a class="active" href="?act=home">Home</a>
  <a href="?act=prof">Professions</a>
 <a href="?act=contact">Contact</a>
  <a href="?act=about">About</a>
<?php if(isset($_SESSION['USER_DATA'])){?>
   <a href="?act=profile">Profile</a>
   <a href="?act=logout">Logout</a>
<?php } else{?>
  <a href="?act=login">Log in</a>
<?php } ?>
</div>
</header>



 <div class="containerr">
  <img src="App\Views\fon.png" style="width:100%;">
  <div class="centered"></div>
</div>
<div class="container">

<div class="main-content">

<div class="content-wrap">
<h1 >Основной контент</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consectetur enim a mi varius viverra. Quisque imperdiet nec purus in condimentum. Suspendisse laoreet, sem eu aliquam porttitor, risus augue viverra mauris, id vestibulum eros massa quis mauris. Vestibulum gravida ut nisl vitae pulvinar. Nulla volutpat magna lectus, in ornare dolor maximus sit amet. Phasellus aliquet fringilla nunc sit amet faucibus. Duis non elementum tortor.</p>
</div>
</div>
</div>
<footer>
        <div class="containerr">
          <div class="pull-right hidden-xs">
            Developed by <b>Profject TEAM</b>
          </div>
          <strong>Copyright © 2020 ImpactHUB.</strong> All rights reserved.
        </div>
      </footer>
</body>
</html>