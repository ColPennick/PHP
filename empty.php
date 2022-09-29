<?php
//$var = "0";     // true
//$var = 0.0;     // true
//$var = "0.0";   // false
//$var = 00;      // true
//$var = "";      // true
//$var = '';      // true
//$var = " ";     // false
//$var = ' ';     // false
//$var = null;    // true
//$var = "null";  // false
//COMMENT         // true
if(empty($var))
{
echo "true";
}
else
{
echo "false";
}
?>
