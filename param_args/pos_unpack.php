<?php
function foo($a, $b, $c = 3, $d = 4){
  return $a + $b + $c + $d;
}

var_dump (foo(...[1, 2], d: 40));
echo'<br>';
var_dump (foo(...['b'=>2, 'a'=>1], d: 40));
