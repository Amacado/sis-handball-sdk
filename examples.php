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
$b->getXmlArray();
print_r($b->getXmlArray());


