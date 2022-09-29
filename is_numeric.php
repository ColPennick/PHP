<?php
  $var = 325;           //g&uuml;ltige Zahl
  if(is_numeric($var))
  {echo "wahr";
  }
?>
<br></br>
<?php
  $var = "325";         //numerischer String
  if(is_numeric($var))
  {echo "wahr";
  }
?>