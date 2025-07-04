<?php
$message = 'hello';

//Sem use
$example = function(){
  var_dump($message);
};
$example();

//inherit $message
$example = function () use ($message){
  var_dump($message);
};
$example();

$message = 'world';
$example()

$message = 'hello';

$example = function () use (&$message){
  var_dum($message);
};
$example();

$message = 'world';
$example();

$example = function ($arg) use ($message){
  var_dump($args . '' . $message);
};
$example();

$example = function () use ($message): string {
  return "hello $message";
}

var_dump($example());
