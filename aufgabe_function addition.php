<?php
function addieren(int $zahl0=0, int $zahl1=0, int $zahl2=0) {

    $endzahl = $zahl0+$zahl1+$zahl2;
  return $endzahl;
}

echo "10 = " . addieren(10) . "<br>";
echo "10 + 20 = " . addieren(10,20) . "<br>";
echo "10 + 20 + 30 = " . addieren(10,20,30). "<br>"
?>
