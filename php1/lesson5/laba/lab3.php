
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
  <?php include 'array2.php';?>
  <h2>
<?php
    if(isset($_COOKIE['lang'])){
        echo $data[$_COOKIE['lang']]['site_title'];
    }else
    {echo $data['ru']['site_title'];}
?></h2>
<br><form method="post" action="lab33.php">
            <select name="language">
              <?php 
      if(isset($_COOKIE['lang'])){
         echo '<option>'.$_COOKIE['lang'].'</option>';
    }
    ?>
                <option value ="ru">Русский</option>
                <option value ="en">English</option>
                
            </select>
            <input type="submit" value=" <?php
    if(isset($_COOKIE['lang'])){
        echo $data[$_COOKIE['lang']]['set_label'];
    }else
    {echo $data['ru']['set_label'];}
?>">
        </form><br>
<div class="container">
 <form method="POST" action="lab333.php">
  <div class="form-group row">
   <label class="col-sm-2 col-form-label"><?php
    if(isset($_COOKIE['lang'])){
        echo $data[$_COOKIE['lang']]['name_label'];
    }else
    {echo $data['ru']['name_label'];}
?>
</label>
    <div class="col-sm-3">
     <input type="text" class="form-control" name="inputname" >
    </div>
   </div>

  
  <div class="form-group row">
   <label class="col-sm-2 col-form-label">
     <?php
    if(isset($_COOKIE['lang'])){
        echo $data[$_COOKIE['lang']]['age_label'];
    }else
    {echo $data['ru']['age_label'];}
?>
   </label>
    <div class="col-sm-3">
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
    <label class="col-sm-2 col-form-label">
      <?php
    if(isset($_COOKIE['lang'])){
        echo $data[$_COOKIE['lang']]['country_label'];
    }else
    {echo $data['ru']['country_label'];}
?>
    </label>
    <div class="col-sm-3">
      <select class="form-control" name="inputcountry">
        <option>Kazakhstan</option>
        <option>Russia</option>
        <option>Italy</option>
        <option>China</option>
        <option>The USA</option>

      </select>
    </div>
  </div>
  
<fieldset class="form-group">
  <div class="row">
    <legend class="col-form-label col-sm-2 pt-0">
      <?php
    if(isset($_COOKIE['lang'])){
        echo $data[$_COOKIE['lang']]['gender_label'];
    }else
    {echo $data['ru']['gender_label'];}
?>
    </legend>
    <div class="col-sm-10">  
   
      <div class="form-check">
          <input class="form-check-input" type="radio" name="inputgender"  id="inputgender1" checked>
          <label class="form-check-label" for="inputgender1">
            <?php
    if(isset($_COOKIE['lang'])){
        echo $data[$_COOKIE['lang']]['m_label'];
    }else
    {echo $data['ru']['m_label'];}
?>
          </label>
      </div>
   
      <div class="form-check">
         <input class="form-check-input" type="radio" name="inputgender" id="inputgender2">
          <label class="form-check-label" for="inputgender2">
          <?php
    if(isset($_COOKIE['lang'])){
        echo $data[$_COOKIE['lang']]['w_label'];
    }else
    {echo $data['ru']['w_label'];}
?>
          </label>
        </div>

      </div>
  </div> 
</fieldset>

 <div class="form-group row">
    <label class="col-sm-2 col-form-label"><?php
    if(isset($_COOKIE['lang'])){
        echo $data[$_COOKIE['lang']]['number_label'];
    }else
    {echo $data['ru']['number_label'];}
?></label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="inputnumber">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-2">
      <button type="submit" class="btn btn-primary"><?php
    if(isset($_COOKIE['lang'])){
        echo $data[$_COOKIE['lang']]['button_label'];
    }else
    {echo $data['ru']['button_label'];}
?></button>
    </div>
  </div>
</form>
</div>
</body>
<html>