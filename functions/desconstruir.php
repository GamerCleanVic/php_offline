<?php
function primeiros_numeros(){
  return [0, 1, 2];
}

print_r([$zero, $um, $dois] = primeiros_numeros());
echo '<br>';
print_r(list($zero, $um, $dois) = primeiros_numeros());
