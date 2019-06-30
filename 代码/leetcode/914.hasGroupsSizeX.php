<?php
function a($deck) {
     $desk = array_count_values($deck);
     $b=min($desk);
     foreach($desk as $a){
       while ($a != $b) {
              if($a > $b) $a -= $b;
              else $b -= $a;
          }
          if($a==1){
                 return false;
          }
     }
     return true;
}
// $deck = [1,2,3,4,4,3,2,1];
$deck = [1,1,2,2,2,2];
var_dump(hasGroupsSizeX($deck));


?>