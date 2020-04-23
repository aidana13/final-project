<html>
<head>
</head>
    <body><div><p><?php

 $students = array();
   $students[0]['studentId']="111";
   $students[0]['name']="Айдана";
   $students[0]['surname']="Сагатова";
   $students[0]['group']="ВТиПО17-1A";
   $students[1]['studentId']="222";
   $students[1]['name']="Динара";
   $students[1]['surname']="Базаргалиева";
   $students[1]['group']="ВТиПО17-2Б";
   $students[2]['studentId']="333";
   $students[2]['name']="Аягуль";
   $students[2]['surname']="Исаева";
   $students[2]['group']="ВТиПО17-1A";
   $students[3]['studentId']="444";
   $students[3]['name']="Дария";
   $students[3]['surname']="Курбан";
   $students[3]['group']="ВТиПО17-1A";
   $students[4]['studentId']="555";
   $students[4]['name']="Абильмансур";
   $students[4]['surname']="Сейлхан";
   $students[4]['group']="ВТиПО17-1A";

 $subjects = array();
   $subjects[0]['subjectId']="100";
   $subjects[0]['subjectname']="UML";
   $subjects[0]['credits']="3";
   $subjects[0]['cost']="60.000 KZT";
   $subjects[1]['subjectId']="200";
   $subjects[1]['subjectname']="СУБД";
   $subjects[1]['credits']="3";
   $subjects[1]['cost']="60.000 KZT";
   $subjects[2]['subjectId']="300";
   $subjects[2]['subjectname']="Data mining";
   $subjects[2]['credits']="2";
   $subjects[2]['cost']="40.000 KZT";
   $subjects[3]['subjectId']="400";
   $subjects[3]['subjectname']="ООП";
   $subjects[3]['credits']="4";
   $subjects[3]['cost']="80.000 KZT";

$studentId=$_POST['studentId'];
$subjectname=$_POST['subjectname'];
$points=$_POST['points'];

$notFound=true;
for($i=0;$i<count($students);$i++){

    if($studentId==$students[$i]['studentId'])
    {
        $notFound=false;
        echo $students[$i]['surname'].' '.$students[$i]['name'].' '.$students[$i]['group'];
    } 
}
    if($notFound==true)
    {
        echo "NOT FOUND!";
    }
for($i=0;$i<count($subjects);$i++)
{	
    if($subjectname==$subjects[$i]['subjectname'])
    {
        $notFound=false;
        echo '<br>'.$subjects[$i]['subjectname'].'-'.$subjects[$i]['credits'].'-credits';
        if($points>=90)
        {
          	echo '<br>'.'Ваша оценка = A';
        }
        else if($points>=70)
        {
          	echo '<br>'.'Ваша оценка = B';
        }
        else if($points>=60)
        {
         	echo '<br>'.'Ваша оценка = C';
        }
        else if($points>=50)
        {
         	echo '<br>'.'Ваша оценка = D';
        }
        else 
        {
            echo '<br>'.'Ваша оценка = F';
          	echo '<br>'.'Ваш долг для пересдачи предмета = '. $subjects[$i]['cost']; 
        }       
    } 
}
    if($notFound==true)
    {
        echo "NOT FOUND!";
    }
?>
</p>
</div>
    </body>
</html>


