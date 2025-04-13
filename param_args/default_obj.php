<?php
class CafeteiraPadrao{
  public function preparar(){
    return 'Fazendo <b>café</b>.\n<br>';
  }
}
class CafeteiraChique{
  public function preparar(){
    return 'Preparando um <b>belo café</b> pra você.\n<br>';
  }
}
function fazercafe($cafeteira = new CafeteiraPadrao()){
  return $cafeteira->preparar();
}
echo fazercafe();
echo fazercafe(new CafeteiraChique());
