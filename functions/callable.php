<?php
Class Foo{
  static function bar(){
    echo "<font>bar</font>\n<br>";
  }
  function baz(){
    echo "<b>baz</b>\n<br>";
  }
}

$func = array("Foo", "bar");
$func();
$func = array(new Foo, "baz");
$func();
$func = "Foo::bar";
$func();
