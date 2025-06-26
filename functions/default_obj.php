<?php
class CafeteiraPadrao{
  public function preparar(){
    return 'Fazendo <font><strong>café</strong></font>.<br>';
  }
}
class CafeteiraChique{
  public function preparar(){
    return 'Preparando um <b>belo café</b> pra você.<br>';
  }
}
function fazercafe($cafeteira = new CafeteiraPadrao()){
  return $cafeteira->preparar();
}
echo fazercafe();
echo fazercafe(new CafeteiraChique());
