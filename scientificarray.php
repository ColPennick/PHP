<?php
  foreach (array("1.123e-1","1.2022e-4","3.1337e-002") as $a)
  //$stellen = [$strlen($a)];
  {
    echo nl2br("Wert: $a: Fliesskommazahl: " . ($a + 1) . "\n");
  }
?>