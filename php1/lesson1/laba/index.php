<!DOCTYPE html>
<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
    <body>
        <?php
        //1
        /*for($i=0;$i<100;$i++)
        {
            echo '<h1>Hello BITLAB</h1>';
            //echo '<h1>.($i+1).'Hello BITLAB</h1>';
        }*/
        //2
       
        for($i=0;$i<15;$i++)
        {
        	for($j=0;$j<15;$j++)
        	{
        		//echo '1'.'0';
        		echo '<span class="badge badge-warning">1</span>'.'<span class="badge badge-dark">0</span>';
        	}
        	echo '<br>';
        }


        //3
        ?>
    </body>
</html>