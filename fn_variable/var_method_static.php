<?php
class Foo{
  static $variable = '<font>propriedade estática</font><br><hr>';
  static function Variable(){
    echo '<b>Método chamado</b>';
  }
}

echo Foo::$variable;
$variable = "Variable";
Foo::$variable();
