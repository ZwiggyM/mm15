<?php

//võtame aja functiooni teisest php failist
require ('functions.php');
require ('components.php');


aeg();
menu();
//muutujad
$web = "http://www.tptlive.ee";
$web_name = "Kodukas";
$number1 = 12;
$number2 = 3.13;
$string = "Minu esimene string";
//kirjutame välja Kodulehe teksti
echo "<br><br><b>Mina olen koduleht!</b><br><br>";
//kirjutame välja muutujate $web ja $web_name välja html atribuudiga <a>
echo '<a href="'.$web.'"> '.$web_name.' </a><br><br>';


$sum = $number1 + $number2;
// kirjutame välja muutujate summa ja muutuja $string
echo $sum;
echo "<br>" .$string."<br>";

GetIp();

 ?>
