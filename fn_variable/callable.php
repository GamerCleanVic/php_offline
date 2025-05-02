<?php
Class Foo{
  static function bar(){
    echo "bar\n<br>";
  }
  function baz(){
    echo "baz\n<br>";
  }
}

$func = array("Foo", "bar");
$func();
$func = array(new Foo, "baz");
$func();
$func = "Foo::bar";
$func();
