<?php

require('functions.php');
home();


$file = fopen("tekst.txt", "a") or die("Ei saanud hakkama");
$txt = "Esimene tekst\n";
fwrite($file, $txt);
$txt = "teine tekst\n";
fwrite($file, $txt);
$txt = "kolmas tekst\n";
fwrite($file, $txt);
$txt = "neljas tekst\n";
fwrite($file, $txt);
fclose($file);


$file = fopen("tekst.txt", "r") or die("Ei saanud hakkama");
echo fread($file, filesize("tekst.txt"));
fclose($file);



 ?>
