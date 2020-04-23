<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<br><br>
<div class="container">
 <form method="POST" action="lab22.php">
  <div class="form-group row">
   <label class="col-sm-2 col-form-label">Name:</label>
    <div class="col-sm-3">
     <input type="text" class="form-control" name="inputname" value="<?php if(isset($_COOKIE['name'])){
         echo $_COOKIE['name'];
    }
    ?>">
    </div>
   </div>

  <div class="form-group row">
   <label class="col-sm-2 col-form-label">Surname:</label>
    <div class="col-sm-3">
     <input type="text" class="form-control" name="inputsurname" value=" <?php if(isset($_COOKIE['surname'])){
         echo $_COOKIE['surname'];
    }
    ?>">
    </div>
   </div>
  <div class="form-group row">
   <label class="col-sm-2 col-form-label">Age:</label>
    <div class="col-sm-2">
     <select class="form-control" name="inputage">
     <?php 
     if(isset($_COOKIE['age'])){
         echo '<option>'.$_COOKIE['age'].'</option>';
    }
    ?>
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
    <label class="col-sm-2 col-form-label">Country:</label>
    <div class="col-sm-2">
      <select class="form-control" name="inputcountry">
        <?php 
      if(isset($_COOKIE['country'])){
         echo '<option>'.$_COOKIE['country'].'</option>';
    }
    ?>
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
    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
    <div class="col-sm-10">  
   
      <div class="form-check">
          <input class="form-check-input" type="radio" name="inputgender"  id="inputgender1" value="<?php 
          if(isset($_COOKIE['gender'])){
         echo $_COOKIE['gender'];
    }
    ?>" checked>
          <label class="form-check-label" for="inputgender1">
            Male
          </label>
      </div>
   
      <div class="form-check">
         <input class="form-check-input" type="radio" name="inputgender" id="inputgender2" value="<?php 
         if(isset($_COOKIE['gender'])){
         echo $_COOKIE['gender'];
    }
    ?>">
          <label class="form-check-label" for="inputgender2">
          Female
          </label>
        </div>

      </div>
  </div> 
</fieldset>

 <div class="form-group row">
    <label class="col-sm-2 col-form-label">Credit Card:</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="inputcard" value=" <?php if(isset($_COOKIE['card'])){
         echo $_COOKIE['card'];
    }
    ?>">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-1">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>
</div>
</body>
<html>