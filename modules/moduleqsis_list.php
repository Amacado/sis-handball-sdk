<?php
include_once  ('system/modules/querySIS/classes/querySis.php'); 

class moduleqsis_list extends \ContentElement //\Module
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate ='mod_qsis_list';
 


        
	/**
	 * Compile the current element
	 */
	protected function compile()
	{
      
            /** @var \PageModel $objPage */
            global $objPage;
        
        
        /** @var \Contao\Database\Result $rs */
	$rs = Database::getInstance()
		->prepare('SELECT tl_qsis_query.*  FROM '
                        . 'tl_qsis_query '
                        . ' WHERE  tl_qsis_query.id= '.$this->querysis)
		->execute($queryArgs);

        $theQuery = $rs->fetchAllAssoc();
        
    
	$this->Template->theQuerySis = $theQuery;
       
        if(count($theQuery)>0){
        
            $myclass =  new querySis();
           
            if($theQuery[0]['typeAgent'] == 'Verein'){
               $rs = Database::getInstance()
                    ->prepare('SELECT *  FROM '
                            . 'tl_qsis_verein '
                            . ' WHERE id= '.$theQuery[0]['idVerein'])
                    ->execute($queryArgs);

                 $agent = $rs->fetchAllAssoc();

            } elseif ($theQuery[0]['typeAgent'] == 'Liga') {
                
                $rs = Database::getInstance()
                    ->prepare('SELECT *  FROM '
                            . 'tl_qsis_verein '
                            . ' WHERE id= '.$theQuery[0]['idLiga'])
                    ->execute($queryArgs);

                 $agent = $rs->fetchAllAssoc();
                
            }

            switch ($theQuery[0]['typeQuery']) {
                    case "Last":
                        $listQuery = $myclass->lastGames($agent[0]['code'], $theQuery[0]['nResults']);
                        break;
                    case "Next":
                       $listQuery = $myclass->nextGames($agent[0]['code'], $theQuery[0]['nResults']);
                        break;
                    case "All":
                        $listQuery = $myclass->allGames($agent[0]['code'], $theQuery[0]['nResults']);
                        break;
                    case "TableHeim":
                        $listQuery = $myclass->tabelleHeimGames($agent[0]['code'], $theQuery[0]['nResults']);
                        break;
                    case "TableAus":
                        $listQuery = $myclass->tabelleAusGames($agent[0]['code'], $theQuery[0]['nResults']);
                        break;
            }
        }
        
        $this->Template->resultQuerySis = $listQuery;
        $this->Template->IdQuery = $this->querysis;
              
          
	}
}
