<?php
function my_media($nota1, $nota2, $nota3, $nota4, ) {
  $soma = ($nota1 + $nota2 + $nota3 + $nota4);
  echo 'Soma das notas = '.$soma.'<br><br>';
  $dividendo = 4;
  $media = $soma / $dividendo;
  return 'Média = '.$media;
}
echo my_media(7, 7.0, 7, 7);
