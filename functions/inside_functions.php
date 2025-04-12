<?php
function foo(){
  function bar(){
    echo 'Eu não exito até foo() ser chamada!\n<br>';
  }
}

foo();

bar();
