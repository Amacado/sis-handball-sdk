<?php
//require_once  ('system/modules/querysis/classes/querySis.php');  
require_once  ('c:/xampp/htdocs/contaotest/system/modules/querysis/classes/querySis.php');  
//namespace Contao;

class moduleqsis_list extends \ContentElement //\Module
{
	/**
	 * Template
	 * @var string
	 */
        protected $strTemplate ='';
 


        
	/**
	 * Compile the current element
	 */
	protected function compile()
	{
      
            /** @var \PageModel $objPage */
            global $objPage;
        
        
        
       
            if($this->querysis){
            $myclass =  new querySis();
            
                $rs = Database::getInstance()
                    ->prepare('SELECT tl_qsis_verein.name, tl_qsis_verein.code, tl_qsis_liga.code as codeLiga FROM '
                            . 'tl_qsis_verein INNER JOIN  tl_qsis_liga ON tl_qsis_liga.id = tl_qsis_verein.idLiga'
                            . ' WHERE tl_qsis_verein.id= ? ')
                    ->execute($this->querysisTeam);
                $agent = $rs->fetchAllAssoc();
  

                switch ($this->querysis) {
                        case "Tabelle":
                          
                            $this->strTemplate='mod_qsis_list_tabelle'; 
                        
                            $listQuery = $myclass->tabelleGames($agent[0]['codeLiga']);
                            break;
                        case "Next":
                           $this->strTemplate='mod_qsis_list_next';
                           $listQuery = $myclass->nextGames($agent[0]['code'], 1);
                            break;
                        case "All":
                            $this->strTemplate='mod_qsis_list_all';
                            $listQuery = $myclass->allGames($agent[0]['codeLiga']);
                            break;
                }
            }
        $this->Template = new FrontendTemplate($this->strTemplate);  
 
        $this->Template->resultsQuery =  $listQuery;    
        $this->Template->typeQuery = $this->querysis;
              
        }
	
}
