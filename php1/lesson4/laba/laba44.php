<?php

$restaurants = array();
$restaurants[0]['name'] = "Sancak Cosmo";
$restaurants[0]['age_limit'] = 8;
$restaurants[0]['city'] = "Almaty";
$restaurants[1]['name'] = "Madlen";
$restaurants[1]['age_limit'] = 1;
$restaurants[1]['city'] = "Shymkent";
$restaurants[2]['name'] = "Astana Midnight Pub";
$restaurants[2]['age_limit'] = 18;
$restaurants[2]['city'] = "Astana";


$city=$_POST['city'];
$age=$_POST['age'];

$notFound=true;
for($i=0;$i<3;$i++){
    if(($city==$restaurants[$i]['city']) && ($age>=$restaurants[$i]['age_limit']))
    {
        $notFound=false;
        echo $restaurants[$i]['name'];
    }
}
    if($notFound==true)
    {
        echo "NOT FOUND!";
    }

?>