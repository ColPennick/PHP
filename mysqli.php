<?php
$verbindung=mysqli_connect("localhost","root","","cbm")OR die("Fehler beim Verbindungsaufbau");
if(mysqli_connect_errno())
{
echo "Fehler beim Verbindungsaufbau: ".mysqli_connect_errno();
exit();
}
$sql="SELECT nummer,vorname FROM teilnehmer";
$rueckgabe=mysqli_query($verbindung,$sql);
while($datensatz=mysqli_fetch_assoc($rueckgabe))
{
  echo $datensatz['nummer'];
  echo " ";
  echo $datensatz['vorname'];
  echo "<br/>";
}
?>
