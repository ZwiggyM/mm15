<?php
// require ('functions.php');



function menu() {
  $menu_arr = array("index", "array", "components", "hint", "file");

  for ($i=0; $i < count($menu_arr); $i++) {
    echo '<li><a href="'.$menu_arr[$i].'.php">'.$menu_arr[$i].'</a></li><br>';
  }
}


?>
