<html>
<head>
	<title></title>
</head>
    <body>
        <form action="laba44.php" method="post">
<div>
    <table>
        <tr>
            <td>
            Name:</td><td> <input type="text" name="name"></td>
        </tr>
            <br>
        <tr>
            <td>
            Surname:</td> <td><input type="text" name="surname"></td>
        </tr>
            <br>
        <tr>
            <td>
            Age:</td> <td><select name="age">
        <?php 
         for($i=1;$i<100;$i++)
         {
            echo "<option>".$i."</option>";
         }
        ?>
</select>
        </tr>
        <br>
        <tr>
            <tr>
            <td>
            City:</td> <td><select name="city">

        <option>Almaty</option>
        <option>Astana</option>
        <option>Shymkent</option>

</select>
            </td>
        </tr>
        <br>
        	<td>
            <input type="submit" value="SEARCH">
        </td>
        </tr>
    </table>
</div>
        </form>
    </body>
</html>