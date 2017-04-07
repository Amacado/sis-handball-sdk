<?php

class platzierung {
    
    private $nr;
    private $verein;
    private $spiele;
    private $spieleInsgesamt;
    private $gewonnen;
    private $unentschieden;
    private $verloren;
    private $torePlus;
    private $toreMinus;
    private $d;
    private $punktePlus;
    private $punkteMinus;
    private $name;
    private $toreAuswaertsPlus;
    private $vereinsNr;
    private $dVPlatz;
    
    function getDVPlatz() {
        return $this->dVPlatz;
    }

    function setDVPlatz($dVPlatz) {
        $this->dVPlatz = $dVPlatz;
    }

        
    function getNr() {
        return $this->nr;
    }

    function getVerein() {
        return $this->verein;
    }

    function getSpiele() {
        return $this->spiele;
    }

    function getSpieleInsgesamt() {
        return $this->spieleInsgesamt;
    }

    function getGewonnen() {
        return $this->gewonnen;
    }

    function getUnentschieden() {
        return $this->unentschieden;
    }

    function getVerloren() {
        return $this->verloren;
    }

    function getTorePlus() {
        return $this->torePlus;
    }

    function getToreMinus() {
        return $this->toreMinus;
    }

    function getD() {
        return $this->d;
    }

    function getPunktePlus() {
        return $this->punktePlus;
    }

    function getPunkteMinus() {
        return $this->punkteMinus;
    }

    function getName() {
        return $this->name;
    }

    function getToreAuswaertsPlus() {
        return $this->toreAuswaertsPlus;
    }

    function getVereinsNr() {
        return $this->vereinsNr;
    }

    function setNr($nr) {
        $this->nr = $nr;
    }

    function setVerein($verein) {
        $this->verein = $verein;
    }

    function setSpiele($spiele) {
        $this->spiele = $spiele;
    }

    function setSpieleInsgesamt($spieleInsgesamt) {
        $this->spieleInsgesamt = $spieleInsgesamt;
    }

    function setGewonnen($gewonnen) {
        $this->gewonnen = $gewonnen;
    }

    function setUnentschieden($unentschieden) {
        $this->unentschieden = $unentschieden;
    }

    function setVerloren($verloren) {
        $this->verloren = $verloren;
    }

    function setTorePlus($torePlus) {
        $this->torePlus = $torePlus;
    }

    function setToreMinus($toreMinus) {
        $this->toreMinus = $toreMinus;
    }

    function setD($d) {
        $this->d = $d;
    }

    function setPunktePlus($punktePlus) {
        $this->punktePlus = $punktePlus;
    }

    function setPunkteMinus($punkteMinus) {
        $this->punkteMinus = $punkteMinus;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setToreAuswaertsPlus($toreAuswaertsPlus) {
        $this->toreAuswaertsPlus = $toreAuswaertsPlus;
    }

    function setVereinsNr($vereinsNr) {
        $this->vereinsNr = $vereinsNr;
    }




    
}

