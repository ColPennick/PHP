<?php
Anzahl max = 500;
i:=0;
Anzahl = readline("Eingabe");
while (SOLANGE i < Anzahl TUE)
{
    Werte [i] = Tabelle unsortiert Speicherung;
    i := i+1;
}
echo Anzeige Tabelle unsortiert;
i := 0;
while (SOLANGE i < Anzahl TUE)
{
    if (Wert[i] > i +1)
    {
        Wert[i] = Zwischenspeicher;
        Wert[i+1] := Wert[i];
        Zwischensspeicher := Wert [i];
    }
    i := i+1;
}
?>