<?php
include ("xmlRead.php");
//include ("spiel.php");
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
 


//$b = new xmlRead("1220403116", "361992", "001517418000000000000000000000000022000" );
$b = new xmlRead("1220403116", "361992", "1220403116" );
$b->setUrlXml("Nachsten_15_Spielen");
$p = $b->getXmlObect();


echo "<h1>Next Play</h1>";
echo "Variable Type: ".gettype($p)." </br>*******************</br>";

echo "Liga: ". $p->Spielklasse->Liga." </br>*******************</br>";
echo "Next Play: ". $p->Spiel[0]->SpielDatum." </br>*******************</br>";
echo "Heim : ". $p->Spiel[0]->Heim." </br>*******************</br>";
echo "Gast: ". $p->Spiel[0]->Gast." </br>*******************</br>";


$b->setUrlXml("Letzten_15_Spielen");
$a = $b->getXmlArray();

echo "<h1>Last Play</h1>";
echo "Variable Type: ".gettype($a)." </br>*******************</br>";
echo "Next Play: ". $a->Spiel[0]->SpielDatum." </br>*******************</br>";
echo "Heim : ". $a->Spiel[0]->Heim." </br>*******************</br>";
echo "Gast: ". $a->Spiel[0]->Gast." </br>*******************</br>";
echo "Gol Heim: ". $a->Spiel[0]->Punkte1." </br>*******************</br>";
echo "Gol Gast: ". $a->Spiel[0]->Punkte2." </br>*******************</br>";

echo "<h1>Next Play</h1>";
echo "Variable Type: ".gettype($p)." </br>*******************</br>";

echo "Next Play: ". $p->Spiel[0]->SpielDatum." </br>*******************</br>";
echo "Heim : ". $p->Spiel[0]->Heim." </br>*******************</br>";
echo "Gast: ". $p->Spiel[0]->Gast." </br>*******************</br>";
//print_r("Tabelle / Liga ");
//print_r("\n\n");




//print_r($b->getXmlArray());

