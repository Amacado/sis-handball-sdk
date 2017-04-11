<?php
include_once  ('system/modules/querySIS/classes/querySis.php'); 

class moduleqsis_nachste extends \ContentElement //\Module
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate ='mod_qsis_nachste';
 


        
	/**
	 * Compile the current element
	 */
	protected function compile()
	{
      
            /** @var \PageModel $objPage */
            global $objPage;
        
        
        /** @var \Contao\Database\Result $rs */
	$rs = Database::getInstance()
		->prepare('SELECT tl_qsis_query.*, tl_qsis_verein.*, tl_qsis_liga.* FROM '
                        . 'tl_qsis_query , tl_qsis_verein, tl_qsis_liga '
                        . ' WHERE  tl_qsis_query.id= '.$this->querysis.''
                        .' AND  tl_qsis_query.idVerein = tl_qsis_verein.id'
                        . ' AND  tl_qsis_query.idLiga = tl_qsis_liga.id'
                        . ' ')
		->execute($queryArgs);

        $theQuery = $rs->fetchAllAssoc();
        
       
        foreach ($theQuery as $res){
               
//        $codeVerein = $res['tl_qsis_verein']['code'];
//         $codeLiga = $res['tl_qsis_liga']['code'];
//         $nResults = $res['tl_qsis_query']['nResults'];
         
       //  echo "Verein: ".$codeVerein." - Liga: ". $codeLiga." - Nresultados:".$nResults."<br>";
        }
        
        $myclass =  new querySis();
        $listQuery = $myclass->nextGames($idLiga, $nResults);
        
        //echo "La liga= ".$listQuery[0]->getLiga();
	$this->Template->theQuerySis = $theQuery;
        $this->Template->resultQuerySis = $listQuery;
        
        $this->Template->IdQuery = $this->querysis;
              
          
	}
}
