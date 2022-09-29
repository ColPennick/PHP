<h1>E-Mailversand</h1>

  <form>
  Betreff: <input type="text" name="betreff">
  <br>
  Text: <input type="text" name="nachricht">
  <br>
  <input type="submit" name="absenden" value="Absenden">
  </form>

<?php
if(isset($_GET['absenden']))
{
  mail("benutzer@test.de",$_GET['betreff'],$_GET['nachricht']);
}
?>