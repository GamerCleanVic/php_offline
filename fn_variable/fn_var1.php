<?php
function foo(){
  echo "Chamou foo(); <br>\n";
}
function bar($arg = ''){
  echo "Chamou bar(); com argumento ".$arg.".<br /> \n";
}

function echoit($string){
  echo $string;
}

$func = 'foo';
$func();

$func = 'bar';
$func('test');

$func = 'echoit';
$func('test');
