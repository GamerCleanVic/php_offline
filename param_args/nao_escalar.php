<?php
function fazercafe($tipos = array("cappuccino"), $cafeteira = NULL){
  $dispositivo = is_null($cafeteira) ? "as <b>mãos</b>" : "<b>".$cafeteira."</b>";
  return "Fazendo uma xícara de ".join(", ", $tipos).
    " com <b>$dispositivo.</b>\n<br>";
}
echo fazercafe();
echo fazercafe(array("cappuccino", "lavazza"), "chaleira");
