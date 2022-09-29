<?php
//TESTS PHP > Bool: Alle Werte ungleich 0 sind WAHR!

//$bool=325;     // true 
//$bool=true;    // true
//$bool=false;   // false
//$bool=0;       // false
//$bool=0.0;     // false
//$bool="";      // false
//$bool="0";     // false
//$bool="0.0";   // wahr
//$bool=" ";     // true
//$bool=array(); // false
if($bool)
{
echo "wahr";
}
else
{
echo"falsch";
}
?>

