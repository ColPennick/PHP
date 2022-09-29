<form>
<input type = "submit"
       name = "abschicken" value="Absenden">
</form>
<?php
if(isset($_GET['abschicken']))
{
  echo "Formschaltfl&auml;che gedr&uuml;ckt";
}
?>