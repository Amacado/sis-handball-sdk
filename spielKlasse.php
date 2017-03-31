<?php

class spielKlasse{
    
    private $liga;
    private $name;
    private $dv;
    private $aufstiegsplaetze;
    private $abstiegsplaetze;
    private $mannSchaften;
    private $apareoId;
    private $apareoSeason;
    
    private $games = array();
    
    function getGames(){
        return $games;
    }
    
    function setGames($game){
        $this->game[] = $game;
        
    }
    
    
    function getLiga() {
        return $this->liga;
    }

    function getName() {
        return $this->name;
    }

    function getDv() {
        return $this->dv;
    }

    function getAufstiegsplaetze() {
        return $this->aufstiegsplaetze;
    }

    function getAbstiegsplaetze() {
        return $this->abstiegsplaetze;
    }

    function getMannSchaften() {
        return $this->mannSchaften;
    }

    function getApareoId() {
        return $this->apareoId;
    }

    function getApareoSeason() {
        return $this->apareoSeason;
    }

    function setLiga($liga) {
        $this->liga = $liga;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setDv($dv) {
        $this->dv = $dv;
    }

    function setAufstiegsplaetze($aufstiegsplaetze) {
        $this->aufstiegsplaetze = $aufstiegsplaetze;
    }

    function setAbstiegsplaetze($abstiegsplaetze) {
        $this->abstiegsplaetze = $abstiegsplaetze;
    }

    function setMannSchaften($mannSchaften) {
        $this->mannSchaften = $mannSchaften;
    }

    function setApareoId($apareoId) {
        $this->apareoId = $apareoId;
    }

    function setApareoSeason($apareoSeason) {
        $this->apareoSeason = $apareoSeason;
    }


    
}

