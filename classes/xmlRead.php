<?php

include ("spiel.php");
include ("platzierung.php");
include ("MyExceptions.php");

class xmlRead{

    private $urlXml;
    private $xmlArray;
    protected $configuration = array();
    private $exceptions;

    // Types of listings available
    private $optionsList = array(
        "All_Spielene" => 1,
        "Letzten_15_Spielen" => 2,
        "Nachsten_15_Spielen" => 3,
        "Letzten_30_Spielen" => 10,
        "Nachsten_30_Spielen" => 11,
        "Tabelle" => 4,
        "Tabelle_Heim" => 6,
        "Tabelle_Auswarts" => 7
    );


    function __construct(){

        // Access and configuration of access data to the api.
        $nameFile = "system/modules/querysis/classes/config.json";

        // Check Excepctions.
        $this->exceptions = new myExceptions("Upps!");

        $this->exceptions->findFile($nameFile);

        $data = file_get_contents($nameFile);
        $conecction = json_decode($data, true);

        // Check Data
        $this->exceptions->checkUserPass($conecction["conection"]);

        $this->setConfiguration($conecction["conection"]["user"]);
        $this->setConfiguration($conecction["conection"]["password"]);



    }



    function getConfiguration($position) {
        return $this->configuration[$position];
    }



    function setConfiguration($configuration) {
        $this->configuration[] = $configuration;
    }



    function showNextGames($nGames){

        $listType = "";
        if($nGames>15){
            $listType = "Nachsten_30_Spielen";
        } else {
            $listType = "Nachsten_15_Spielen";
        }
        $this->setUrlXml($listType);
        $resultXmlArray = $this->getXmlArray();

        $res =  $this->storeGames(array_slice($resultXmlArray["Spiel"], 0, $nGames),"spiel");
        return $res;
    }



    function showLastGames($nGames){

        $listType = "";
        if($nGames>15){
            $listType = "Letzten_30_Spielen";
        } else {
            $listType = "Letzten_15_Spielen";
        }
        $this->setUrlXml($listType);
        $resultXmlArray = $this->getXmlArray();

        $res =  $this->storeGames(array_slice($resultXmlArray["Spiel"], 0, $nGames),"spiel");
        return $res;
    }



    function showAllGames(){

        $this->setUrlXml("All_Spielene");
        $resultXmlArray = $this->getXmlArray();
        $res =  $this->storeGames($resultXmlArray["Spiel"],"spiel");
        return $res;

    }



    function showTabelle(){

        $this->setUrlXml("Tabelle");
        $resultXmlArray = $this->getXmlArray();
        $res =  $this->storeGames($resultXmlArray["Platzierung"],"platzierung");
        return $res;
    }



    function showTabelleHeim(){

        $this->setUrlXml("Tabelle_Heim");
        $resultXmlArray = $this->getXmlArray();
        $res =  $this->storeGames($resultXmlArray["Platzierung"],"platzierung");
        return $res;
    }



    function showTabelleAus(){

        $this->setUrlXml("Tabelle_Auswarts");
        $resultXmlArray = $this->getXmlArray();
        $res =  $this->storeGames($resultXmlArray["Platzierung"],"platzierung");
        return $res;
    }



    function storeGames($arrayGames, $needClass){

       $groupGames = array();
       for($x=0; $x<count($arrayGames);$x++){
           if($needClass == "spiel"){
             $myClass = new spiel();
           } elseif ($needClass == "platzierung"){
                $myClass = new platzierung();
           }

            foreach ($arrayGames[$x] as $key => $value){

                $pro = "set".ucfirst ($key);
                call_user_func(array($myClass,$pro), $value);

             }
          $groupGames[$x] = $myClass;

       }

       return $groupGames;
   }



   /*
     * The Seter for the construction of the url.
     * The seter needs the parameters obtained in the constructor plus another.
     * The parameter directly obtained by the seter is used to select the type
     * of listing.
     * STRING
     */
    function setUrlXml($data){

        $this->urlXml = "https://www.sis-handball.de/xmlexport/xml_dyn.aspx?"
                ."user=".$this->getConfiguration(0)
                ."&pass=".$this->getConfiguration(1)
                ."&art=".$this->optionsList[$data]
                ."&auf=".$this->getConfiguration(2);

        // check Url.
        $this->exceptions->findURL($this->urlXml);

        $this->setXmlArray($this->urlXml);

     }


    function getXmlArray(){

             return $this->xmlArray;
     }


    /*
     * Make url in an array.
     */
    function setXmlArray(){

        $xmlData = simplexml_load_file($this->urlXml);
        $this->xmlArray = (array)$xmlData;

    }


    function readYaml(){
        $cache = sfProjectConfiguration::getActive()->getConfigCache();
        $cache->registerConfigHandler('config.yaml','sfSimpleYamlConfigHandler');
        $path = $cache->CheckConfig('config.yaml');
        $data = include $path;
        return $data;
   }


}
