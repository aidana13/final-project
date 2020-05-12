<?php $result = $_REQUEST['user'];?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>profject</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="App/Views/stylo.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
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
 <div class="container">
<div class="main-content">
<div class="content-wrap">
   <a href="?act=logout">Logout</a>
<h1 >Profile page</h1>

<img src="<?php echo $result['avatar'];?>" width="200" height="250">
<form action="?act=upload" enctype="multipart/form-data" method="post">
            IMAGE : <input type="file" name="ava">
            <button>UPLOAD</button>
</form>
<h5><?php echo $result['full_name'];?> </h5>
      <br><br>
      <a  href="?act=update">Edit your profile</a>
      <br>
      <a  href="?act=delete">Delete</a>

          <div class="form-group">
            <textarea class="form-control" id="tweet" rows="3" style="width: 50%; height:10%" placeholder="new tweet"></textarea>
          </div>
          <button type="submit" class="btn btn-primary" id="saveButton">Post</button>
          <div id='result'></div>

          <script type="text/javascript">    
              $(document).ready(function(){
                loadTweets();

                $('#saveButton').click(function(){

                $.post(
                  '?act=tweet',
                  {
                    tweet:$('#tweet').val(),
                },
                function(result){
                  $('#result').html(result);
                
                }
              );
            });
                function loadTweets(){
                $.get(
                  '?act=blog', {}, 
                  function(result){

                   tweets=JSON.parse(result);
                   
                   foreach($tweets as $tweet){   
html+='<div class="container"><div class="card" style="width: 30rem;"><div class="card-header"><h5 class="card-title">'+ $tweet['user_id']+'</h5>';
htnl+='<h6 class="card-subtitle mb-2 text-muted">'+$tweet['post_date']+'</h6></div>';
html+='<div class="card-body"><p class="card-text">'+$tweet['tweet']+'</p></div>';
html+='<div class="card-footer text-muted"></div></div></div>';
                     }                  
                   $('#result').html(html);
                  });
              }
          });
        </script>

</div>

</div>

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