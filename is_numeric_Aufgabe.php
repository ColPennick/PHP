<html>
  <body>
    <h2>Bitte geben Sie ihr Geburtsjahr ein:</h2><!-- Hier steht ein HTML Kommentar mit       einer Zeile -->
    <br />
      <form>
        Geburtsjahr: &nbsp;&nbsp;<input type = "text"  name = "gebdat"value="<?php if(isset($_GET['gebdat'])){echo $_GET['gebdat'];} ?>" />
        <br /> 
        <br />
        <input type ="submit"name="abschicken"value="Testen"/> 
      </form>
  </body>
</html>
<?php
if(isset($_GET["abschicken"]))
{                                 //fuer ; immer neue Zeile
    if(empty($_GET["gebdat"]))
    {
        echo "Bitte Geburtsjahr eingeben";
    }
    else
    {
        if(is_numeric($_GET["gebdat"]))
        {
            if(strlen($_GET["gebdat"])==4)
            {
                echo "Vielen Dank. Sie wurden ".$_GET["gebdat"]." geboren.";
            }
            else
            {
                echo "Bitte vier Stellen (JJJJ) eingeben";
            }
        }
        else
        {
            echo "Bitte numerische Jahreszahl (JJJJ) eingeben";
        }
    }
}
?>