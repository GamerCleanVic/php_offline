<?php
function makecoffee($type = 'capuccino'){
  return 'Fazendo uma xícara de café <b>'.$type.'</b>.<br>';
}

echo makecoffee();
echo makecoffee(null);
echo makecoffee('expresso');
