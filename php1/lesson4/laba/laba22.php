<html>
    <body>
        <?php
            $login = $_POST['login'];
            $password = $_POST['password'];
            if($login=='user' && $password=='qwerty')
            {
            	
            echo header("Location:profile.php"); 
         
        }
        else{
        
            echo header("Location:laba2.php"); 
        }
        ?>
    </body>
</html>