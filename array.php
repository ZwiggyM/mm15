<?php

require 'functions.php';
home();
 $massiiv = array("päev",11, 12,"izi pizi",15);

 print_r($massiiv);
 echo $massiiv[0]."<br>";


//massiivi sisu list
 foreach ($massiiv as $element) {
   echo $element."<br>";
 }
//massiivi sisu listina, for tsükkel
 for ($i=0; $i < count($massiiv); $i++) {
   echo $massiiv[$i]."<br>";
 }


 //siumismassiiv ehk assotsiatiivne massiiv
 $var_assoc = array('esimene' => "Rene", "teine" => "Artur", "kolmas" => "Paul", "neljas" => 1,"viies" => "1");

 print_r($var_assoc);

 var_dump($var_assoc);
 //massiivi võtimed
 print_r(array_keys($var_assoc));
 //massiivi väärtused
 echo "<br>";
 print_r(array_values($var_assoc));
echo "<br>";
//mitmemõõteline massiiv
$est = "eesti keel";
$matem = "matemaatika";
$füsa = "füüsika";

$grades = array ('Peeter' => array($est => 4, $matem => 3, $füsa => 4),
                 'Juhan' => array($est => 4, $matem => 5, $füsa => 4),
                 'Mari' => array($est => 5, $matem => 4, $füsa => 5),
                 'Jüri' => array($est => 3, $matem => 3, $füsa => 2)
               );
//print_r($grades);
var_dump($grades);

echo "Peeteri" .$est. "hinne on: ".$grades["Peeter"][$est];

/* NII EI SAA SIDUSMASSIIVI VÄLJA TÜKKIDA
foreach ($grades as $item) {
    echo $item."<br>";
}*/

$grades_id = array_keys($grades);
for ($i=0; $i < count($grades); $i++) {
  echo "<br><br>".$grades_id[$i]."<br>";
  foreach ($grades[$grades_id[$i]] as $subject => $grades) {
    echo $subject." : " .$grades;
      echo "<br>";
  }
}



 ?>
