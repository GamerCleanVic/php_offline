<?php
$greet = function($name){
  printf("Hello %s\r\n", $name.'<br>');
};

$greet('<b>World</b>');
$greet('<font>PHP</font>');
