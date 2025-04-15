<?php
function total_interval($unit, DateInterval ...$intervals) {
  $time = 0;
  foreach($intervals as $interval){
    $time += $interval->$unit;
  }
  return '<b>'.$time.'</b>';
}

$a = new DateInterval('P1D');
$b = new DateInterval('P2D');

echo total_interval('d', $a, $b).'<font> days</font>';

