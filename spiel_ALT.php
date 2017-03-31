<?php
include_once 'xmlRead.php';

class spiel extends xmlRead{
    
    private $liga;
    private $aktualisierungsDatum;
    private $spielDatum;
    private $mannSchaft1;
    private $mannSchaft2;
    private $tore01;
    private $tore02;
    private $tore1;
    private $tore2;
    private $punkte1;
    private $punkte2;
    private $halle;
    private $schiri;
    private $anmerkung;
    private $spielBericht;
    private $spielVon;
    private $spielBis;
    private $zsGespann;
    private $sbGespann;
    private $heim;
    private $heimNr;
    private $gast;
    private $gastNr;
    private $hallenName;
    private $halleStrasse;
    private $hallenOrt;
    private $ligaName;
    private $gespanName;
    
    function __construct($user, $password, $option) {
       parent::__construct($user, $password, $option);
       
      
    }
    
    function selectList($list, $position){
        parent::setUrlXml($list);
        //$cleanArray = parent::getXmlArray(); //parent::$xmlArray["Spiel"][$position];
      // print_r($cleanArray);
         $cleanArray = parent::getXmlArray();
        echo "Damelo: ".$cleanArray->Spiel[$position]->Heim." <--";
        
        //echo $i->Spiel[$position]->Heim;
    }
    
    
    function getLiga() {
        return $this->liga;
    }

    function getAktualisierungsDatum() {
        return $this->aktualisierungsDatum;
    }

    function getSpielDatum() {
        return $this->spielDatum;
    }

    function getMannSchaft1() {
        return $this->mannSchaft1;
    }

    function getMannSchaft2() {
        return $this->mannSchaft2;
    }

    function getTore01() {
        return $this->tore01;
    }

    function getTore02() {
        return $this->tore02;
    }

    function getTore1() {
        return $this->tore1;
    }

    function getTore2() {
        return $this->tore2;
    }

    function getPunkte1() {
        return $this->punkte1;
    }

    function getPunkte2() {
        return $this->punkte2;
    }

    function getHalle() {
        return $this->halle;
    }

    function getSchiri() {
        return $this->schiri;
    }

    function getAnmerkung() {
        return $this->anmerkung;
    }

    function getSpielBericht() {
        return $this->spielBericht;
    }

    function getSpielVon() {
        return $this->spielVon;
    }

    function getSpielBis() {
        return $this->spielBis;
    }

    function getZsGespann() {
        return $this->zsGespann;
    }

    function getSbGespann() {
        return $this->sbGespann;
    }

    function getHeim() {
        return $this->heim;
    }

    function getHeimNr() {
        return $this->heimNr;
    }

    function getGast() {
        return $this->gast;
    }

    function getGastNr() {
        return $this->gastNr;
    }

    function getHallenName() {
        return $this->hallenName;
    }

    function getHalleStrasse() {
        return $this->halleStrasse;
    }

    function getHallenOrt() {
        return $this->hallenOrt;
    }

    function getLigaName() {
        return $this->ligaName;
    }

    function getGespanName() {
        return $this->gespanName;
    }




    
    
}
