<?php
    $news = array();
    $news[0]['title'] = "Cristiano Ronaldo won the Champions League again";
    $news[0]['content'] = "Cristiano Ronaldo scored 3 goals in final";
    $news[0]['author'] = "John Smith";
    $news[1]['title'] = "Leo Messi won the La Liga";
    $news[1]['content'] = "Leo Messi scored maximum goal in La Liga";
    $news[1]['author'] = "Javier Correa";
    $news[2]['title'] = "Real Madrid won European Super Cup";
    $news[2]['content'] = "Real Madrid won Atletico in Super Cup final";
    $news[2]['author'] = "Alfredo Relano";
    $news[3]['title'] = "Portugal won The World Cup 2018";
    $news[3]['content'] = "Cristiano Ronaldo won The World Cup 2018";
    $news[3]['author'] = "Michele Henry";
 
 for($i=0;$i<count($news);$i++)
{
    ?>


           <h1><?php echo $news[$i]['title']?></h1>
           <p><?php echo $news[$i]['content']?></p>
           <b><?php echo $news[$i]['author']?></b>
           
    <?php
}

?>