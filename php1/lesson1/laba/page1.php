<html>
   <head>
   	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   	<title>Page 1</title>
   </head>
   <body>
   	 <?php require_once 'header1.php'; ?>  
   	<?php include 'menu1.php'; ?>


        <?php
          $news=
          [
            [
            'title' => 'Lorem ipsum',
            'content'=>'Lorem ipsum doler sit amet'
            ],
            [
            'title'=>'Lorem ipsum',
            'content'=>'Lorem ipsum doler sit amet'
            ],
            [
            'title'=>'Lorem ipsum',
            'content'=>'Lorem ipsum doler sit amet'
            ],
          ];

          for($i=0;$i<3;$i++)
          {
           ?>

           <h1><?php echo $news[$i]['title']?></h1>
           <p><?php echo $news[$i]['content']?></p>
           <?php
          }

        ?>

 <?php require_once 'footer1.php'; ?> 
   </body>
</html>