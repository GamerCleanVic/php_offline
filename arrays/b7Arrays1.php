<?php
//Próxima aula: Módulo 1: Manipulação de dados com Arrays no PHP
$nomes = array('Alessandro', 'João');

$codes = [200, 300, 400];

$carros = [
  "Alessandro" => 1,
  "Maria" => 2,
  "João" => 30
];

foreach ($codes as $code) {
  echo "<b>$code</b> <br /><br />";
}

$auxCount = 0;
foreach ($carros as $carro) {
  $auxCount++;
  if(($auxCount % 2) == 0){
    echo '<ul><b><li>'.$carro.' carro(s).<li></b></ul>';
  }else{
    echo '<ul><font><li>'.$carro.' carro(s).<li></font></ul>';
  }
}

$informacoes = [
  "Alessandro" => [
    "carros" => 1,
    "idade" => 32,
    "altura" => 174,
    "cidade" => "Rio de Janeiro"
  ],
  "Joao" => [
    "carros" => 2,
    "idade" => 35,
    "altura" => 160,
    "cidade" => "São Paulo"
  ],
];

echo '<pre>';
var_dump($informacoes["Alessandro"]["cidade"]);
echo '</pre>';
