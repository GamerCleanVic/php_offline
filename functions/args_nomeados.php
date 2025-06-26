<?php
class Nomeados{
  public function array_fill($start_index, $count, $value){
    return "<b>Início: </b><font>".$start_index
      ."</font>, <b>Contador:</b> <font>".$count
      ."</font>, <b>Valor:</b> <font>".$value."</font><br><br>";
  }
}

$startFora = 0;
$countFora = 100;
$valueFora = 50;

$nomeadosFora = new Nomeados();

echo $nomeadosFora->array_fill($startFora, $countFora, $valueFora);

echo $nomeadosFora->array_fill(start_index: 0, count: 80, value: 70);
