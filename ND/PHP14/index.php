<?php
  function data($metai) {
      if ($metai >= date('Y')) 
      {
        echo '&copy '.date('Y');
      }
      else {
        echo '&copy '. $metai . '-' . date('Y');
      }
    }
  data(2067);
?>
