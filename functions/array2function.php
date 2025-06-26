<?php
function takes_array($input){
  echo "$input[0] + $input[1] = ", $input[0] + $input[1];
}
$arr = [1, 2];
echo (takes_array($arr));
