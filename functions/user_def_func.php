<?php
$makefoo = true;

bar();

if($makefoo){
  function foo(){
    echo 'Eu não existo até que o programa passe por aqui!\n<br>';
  }
}

if ($makefoo){
  foo();
}

function bar(){
  echo 'Eu existo imediatamente o começo do programa!\n<br><br>';
}
