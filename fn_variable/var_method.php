<?php
class Foo{
  function MetodoVariavel(){
    $name = 'Bar';
    $this->$name();
  }
  function Bar(){
    echo "Bar foi chamada!";
  }
}
$foo = new Foo();
$funcname = "MetodoVariavel";
$foo->$funcname();
