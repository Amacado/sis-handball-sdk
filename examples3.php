<?php
// code liga -> 001517418000000000000000000000000022000
// code verein -> 1220403116

include("querySis.php");

echo "<h2>Next</h2>";
$qs = new querySis();
$a1 = $qs->nextGames("001517418000000000000000000000000022000", 15);


echo "<br>NEXT Data in Liga Position 0: ".$a1[0]->getLiga();
echo "<br>NEXT Data in SpielVon Position 0: ".$a1[0]->getSpielVon();


echo "<hr>";
echo "<h2>Last</h2>";
//$last = $qs->lastGamesLiga("001517418000000000000000000000000022000", 15);
$last = $qs->lastGames("1220403116", 15);

echo "<br>LAST Data in Liga Position 0: ".$last[0]->getLiga();
echo "<br>LAST Data in SpielVon Position 0: ".$last[0]->getSpielVon();


echo "<hr>";
echo "<h2>All Games</h2>";
$all = $qs->allGames("1220403116", 15);

echo "<br>All Data in Liga Position 0: ".$all[0]->getLiga();
echo "<br>All Data in SpielVon Position 0: ".$all[0]->getSpielVon();



echo "<hr>";
echo "<h2>Tabelle</h2>";
$tabelle = $qs->tabelleGames("1220403116", 15);

echo "<br>Tabelle Data in Nr Position 0: ".$tabelle[0]->getNr();
echo "<br>Tabelle Data in Verein Position 0: ".$tabelle[0]->getVerein();


echo "<hr>";
echo "<h2>TabelleHeim</h2>";
$tabelleHeim = $qs->tabelleGames("1220403116", 15);

echo "<br>TabelleHeim Data in Nr Position 0: ".$tabelleHeim[0]->getNr();
echo "<br>TabelleHeim Data in Verein Position 0: ".$tabelleHeim[0]->getVerein();


echo "<hr>";
echo "<h2>TabelleAuswärts</h2>";
$tabelleAus = $qs->tabelleGames("1220403116", 15);

echo "<br>TabelleHeim Data in Nr Position 0: ".$tabelleAus[0]->getNr();
echo "<br>TabelleHeim Data in Verein Position 0: ".$tabelleAus[0]->getVerein();

//echo "<pre>";
//print_r($a1);
//echo "</pre>";





