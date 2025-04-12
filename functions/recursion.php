<?php
function recursion($a) {
  if ($a < 20) {
    echo "$a \n<br>";
    recursion($a + 1);
  }
}
recursion(0);
