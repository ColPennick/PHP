<?php
If(isset($_COOKIE['Klausurschnitt']))
{
	echo $_COOKIE['Klausurschnitt'];
}
else
{
	setcookie ('Klausurschnitt',86,time()+3600);
}
?>
