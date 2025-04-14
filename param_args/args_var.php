<?php
function sum(...$numbers){
  $acc = 0;
  foreach($numbers as $n){
    $acc += $n; 
  }
  return $acc;
}
echo '<b>Soma</b> = <font>'.sum(1, 2, 3, 4);
