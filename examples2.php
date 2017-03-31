<?php

include ("xmlRead.php");
include ("spielKlasse.php");
include ("spiel.php");


$b = new xmlRead("1220403116", "361992", "1220403116" );
$b->setUrlXml("Nachsten_15_Spielen");
$p = $b->getXmlArray();


$sk = new spielKlasse();
$s = new spiel();
echo "<h1>Conversion to Object</h1>";
echo "<br>OUT object liga:  ".$p->Spielklasse->Liga;
$sk->setLiga($p->Spielklasse->Liga);
$sk->setName($p->Spielklasse->Name);
$sk->setDv($p->Spielklasse->DV);

echo "<br>IN object liga: ".$sk->getLiga()." <-- end.";


