<?php
class xmlRead{
    
    private $urlXml;
    private $xmlArray;
    private $configuration = array(
        "user"     => null,
        "password" => null,
        "option"   => null
    );
    
    // Types of listings available
    private $optionsList = array(
        "Alle_Spielen" => 1,
        "Letzten_15_Spielen" => 2,
        "Nachsten_15_Spielen" => 3,
        "Letzten_30_Spielen" => 10,
        "Nachsten_30_Spielen" => 11,
        "Tabelle" => 4,
        "Tabelle_Heim" => 6,
        "Tabelle_Auswarts" => 7
    );
    
    
    /*
     * The constructor uses parameters for the configuration 
     * of the url of call to the api
     */
    function __construct($user, $password, $option) {
       $this->configuration[0] = $user;
       $this->configuration[1] = $password;
       $this->configuration[2] = $option;
   }
   
   
   /*
     * The Seter for the construction of the url. 
     * The seter needs the parameters obtained in the constructor plus another.
     * The parameter directly obtained by the seter is used to select the type 
     * of listing.   
     */
    function setUrlXml($data){
        if (array_key_exists($data, $this->optionsList)) {
        $this->urlXml = "https://www.sis-handball.de/xmlexport/xml_dyn.aspx?"
                ."user=".$this->configuration[0]
                ."&pass=".$this->configuration[1]
                ."&art=".$this->optionsList[$data]
                ."&auf=".$this->configuration[2]; 
        } else {
            echo "Index does not exist. ";
            exit;
        }
     }
    
     
     
    /*
     * Make url in an array.
     */
    function setXmlArray(){
       
       $xmlData = simplexml_load_file($this->urlXml);
       $this->xmlArray = $xmlData;
   
    }    
    
    
    /*
     * We get the object.
     */
    function getXmlArray(){
        
       return $this->arrayToObject($this->xmlArray);
       
    }
    
    
    
    /*
     * Make array in an Object.
     */
    function arrayToObject($array) {
       if (!is_array($array)) {
           return $array;
       }

       $object = new stdClass();
       if (is_array($array) && count($array) > 0) {
           foreach ($array as $name=>$value) {
               $name = strtolower(trim($name));
               if (!empty($name)) {
                   $object->$name = arrayToObject($value);
               }
           }
           return $object;
       }
       else {
           return FALSE;
       }
   }
    
    
}





