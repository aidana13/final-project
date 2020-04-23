<html>
   <head>
   	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   	<title>Новости Культуры</title>
   </head>
   <body>

   	 <?php require_once 'header2.php'; ?>  
   	<?php include 'menu2.php'; ?>

<?php
    $news = array();
    $news[0]['title'] = "Кража в музее";
    $news[0]['content'] = "Знаменитая картина была украдена с Лувра";
    $news[0]['author'] = "John Smith";
    $news[1]['title'] = "Мечты не сбудутся";
    $news[1]['content'] = "Все концерты были отменены изза коронавируса";
    $news[1]['author'] = "Javier Correa";
    $news[2]['title'] = "ВанГог онлайн";
    $news[2]['content'] = "Теперь вы можете просматривать картины знаменитого художника сидя дома";
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