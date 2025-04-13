<?php
function fazeriogurte($recipiente = "tigela", $sabor = "framboesa",
  $estilo = "Grego"){
  return "Fazendo um(ª) <b>$recipiente</b> de iogurte <b>$estilo</b> de <font>$sabor</font>.<br>";
}
echo fazeriogurte(estilo: 'italiano');
