<?php
function add_some_extra (&$string) {
  $string .= ' e alguma coisa mais.';
}
$str = 'Isto é uma string, ';

echo add_some_extra($str);
echo $str;
