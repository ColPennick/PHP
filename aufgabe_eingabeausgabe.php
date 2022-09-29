<html>
  <body>
    <h2>Bitte tragen Sie Ihren Vor- und Nachnamen ein</h2><!-- Hier steht ein HTML Kommentar mit einer Zeile -->
    <br />
      <form>
        Vorname: &nbsp;&nbsp;<input type = "text"  name = "Vorname"/>
        <br />
        Nachname: <input type = "text" name = "Nachname"/>
        <br /> 
        <br />
        <input type = "submit" name = "abschicken" value="Absenden"/> 
      </form>
  </body>
</html>
<?php

if(isset($_GET["abschicken"]))
{
    $vorname = $_GET["Vorname"];
    $nachname = $_GET["Nachname"];
    echo "$vorname $nachname, bitte an die Klausur denken!";
}
?>