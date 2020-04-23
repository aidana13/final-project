<html>
   <head>
   	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   	<title>Новости Спорта</title>
   </head>
   <body>

   	 <?php require_once 'header2.php'; ?>  
   	<?php include 'menu2.php'; ?>

<?php
    $news = array();
    $news[0]['title'] = "Испанец патриот";
    $news[0]['content'] = "Криштиану Рональду превратил свои отели в больницы, чтобы помочь зараженным";
    $news[0]['author'] = "John Smith";
    $news[1]['title'] = "А Месси?";
    $news[1]['content'] = "Тем временем Месси ничем не пожертвовал";
    $news[1]['author'] = "Javier Correa";
    $news[2]['title'] = "Бою не быть";
    $news[2]['content'] = "Все бои были отменены изза коронавируса";
    $news[2]['author'] = "Alfredo Relano";
 
 for($i=0;$i<count($news);$i++)
{
    ?>


           <h1><?php echo $news[$i]['title']?></h1>
           <p><?php echo $news[$i]['content']?></p>
           <b><?php echo $news[$i]['author']?></b>
           
    <?php
}
?>
<br>
 <?php require_once 'footer2.php'; ?> 
   </body>
</html>