<html>
   <head>
   	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   	<title>Новости Кино</title>
   </head>
   <body>

   	 <?php require_once 'header2.php'; ?>  
   	<?php include 'menu2.php'; ?>

<?php
    $news = array();
    $news[0]['title'] = "Что смотреть?";
    $news[0]['content'] = "Съемки многих сериалов были отложены изза коронавируса";
    $news[0]['author'] = "John Smith";
    $news[1]['title'] = "Куда сходить?";
    $news[1]['content'] = "Все кинотеатры страны закрылись";
    $news[1]['author'] = "Javier Correa";
    $news[2]['title'] = "Кризис в киностудиях";
    $news[2]['content'] = "Все премьеры фильмов были отменены изза коронавируса";
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