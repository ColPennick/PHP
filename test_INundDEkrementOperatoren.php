<?php
//TEST: Was wird ausgegeben?
$i=1;
echo "1:".$i++."<br/>";		//1:1
echo "1:".++$i."<br/>";		//1:3
echo "1:".$i--."<br/>";		//1:3
echo "1:".--$i."<br/>";		//1:1
?>