<?php
for($i = 0; $i < count(get_loaded_extensions()); $i++){

  if(($i%2) == 0){
    echo "<b>";
    var_dump(get_loaded_extensions()[$i]);
    echo ", </b><br>";
  }else{
    echo "<font>";
    var_dump(get_loaded_extensions()[$i]);
    echo ", </font><br>";
  }
}

