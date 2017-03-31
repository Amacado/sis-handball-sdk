<?php

class platzierung {
    
    private $liga;
    private $name;
    private $dv;
    private $aufsteigsplaetze;
    private $absteigsplaetze;
    private $mannSchaften;
    private $apareoId;
    private $apareoSeason;
    
    function getLiga() {
        return $this->liga;
    }

    function getName() {
        return $this->name;
    }

    function getDv() {
        return $this->dv;
    }

    function getAufsteigsplaetze() {
        return $this->aufsteigsplaetze;
    }

    function getAbsteigsplaetze() {
        return $this->absteigsplaetze;
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

    function setAufsteigsplaetze($aufsteigsplaetze) {
        $this->aufsteigsplaetze = $aufsteigsplaetze;
    }

    function setAbsteigsplaetze($absteigsplaetze) {
        $this->absteigsplaetze = $absteigsplaetze;
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

