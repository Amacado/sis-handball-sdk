<?php
include ("xmlRead.php");

/* Options List:
    "Alle_Spielen"
    "Letzten_15_Spielen"
    "Nachsten_15_Spielen"
    "Letzten_30_Spielen"
    "Nachsten_30_Spielen"
    "Tabelle"
    "Tabelle_Heim"
    "Tabelle_Auswarts"
 */
 


$b = new xmlRead("1220403116", "361992", "001517418000000000000000000000000022000" );
$b->setUrlXml("Nachsten_30_Spielen");
$b->setXmlArray();


$p = $b->getXmlArray();
echo "Liga: ". $p->Spielklasse->Liga." </br>";
echo "Name: ". $p->Spielklasse->Name." </br>*******************</br>";
echo "Heim Position 0: ". $p->Spiel[0]->Heim." </br>*******************</br>";
echo "Heim Position 1: ". $p->Spiel[1]->Heim." </br>*******************</br>";
echo "Heim Position 2: ". $p->Spiel[2]->Heim." </br>*******************</br>";


print_r($b->getXmlArray());


