<?php
function add($a, $b){
  return "<font>$a + $b</font> = <b>".$a + $b.'</b>';
}
echo add(...[1, 2]).'<br>';

$a = [2, 2];
echo add(...$a);
