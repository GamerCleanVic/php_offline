<?php
echo 'Helo Refencia<br><br>';
function &retorna_referencia(){
  return $alguma_refencia;
}
$nova_referencia =& retorna_referencia();
