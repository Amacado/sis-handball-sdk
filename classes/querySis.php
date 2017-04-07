<?php

include ("xmlRead.php");

class querySis extends xmlRead{
    
    
    function __construct(){
        
        parent::__construct();
        
    }
    
    function nextGames($ligaOrVerein,$nGames = 1){
        
       $nGames = $this->castingNGames($nGames);
       $this->setConfiguration($ligaOrVerein);
       return $this->showNextGames($nGames);
    }
 
    function lastGames($ligaOrVerein,$nGames = 1){
        
       $nGames = $this->castingNGames($nGames);
       $this->setConfiguration($ligaOrVerein);
       return $this->showLastGames($nGames);
    }    
    
    function allGames($ligaOrVerein){
        
       $this->setConfiguration($ligaOrVerein);
       return $this->showAllGames();
    }
    
    function tabelleGames($liga){
        
       $this->setConfiguration($liga);
       return $this->showTabelle();
    }
    
    
    function tabelleHeimGames($liga){
        
       $this->setConfiguration($liga);
       return $this->showTabelleHeim();
    }
    
    function tabelleAusGames($liga){
        
       $this->setConfiguration($liga);
       return $this->showTabelleAus();
    }   

    function castingNGames($nGames){
        
        $nGames = (int)$nGames;
        
         if ($nGames<1){ 
            $nGames = 1;
        } elseif ($nGames>30){
            $nGames = 30;
        }
        
        return $nGames;
        
    }    

    
}
