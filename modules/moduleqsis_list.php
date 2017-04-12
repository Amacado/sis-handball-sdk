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
                    ->prepare('SELECT tl_qsis_verein.name, tl_qsis_verein.code, tl_qsis_verein.image, tl_qsis_liga.code as codeLiga FROM '
                            . 'tl_qsis_verein INNER JOIN  tl_qsis_liga ON tl_qsis_liga.id = tl_qsis_verein.idLiga'
                            . ' WHERE tl_qsis_verein.id= ? ')
                    ->execute($this->querysisTeam);
                $agent = $rs->fetchAllAssoc();
  



//            $objFiles = FilesModel::findMultipleByIds(deserialize($agent[0]['image']));  
//            $strImage = $this->getImage($objFiles->path, 235, 130, 'center_center');  
//             echo "/".$strImage; 
                $valorUrlImageRival = "";
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
                        case "NextHaus":
                            $this->strTemplate='mod_qsis_list_nexthaus';
                            
                            
                            
                            $listQuery = $myclass->nextGames($agent[0]['codeLiga'], 30);
                          
                            
                            $nextInHaus = array();
                            $n=0;
                            foreach($listQuery as $value){
                                
                                if($value->getHeimNr()==$agent[0]['code']){
                                    
                                    $nextInHaus[$n]['Gast'] = $value->getGast();
                                    $nextInHaus[$n]['GastNr'] = $value->getGastNr();
                                    $nextInHaus[$n]['SpielDatum'] = $value->getSpielDatum();
                                    $nextInHaus[$n]['HallenName'] = $value->getHallenName();
                                    $nextInHaus[$n]['HallenStrasse'] = $value->getHallenStrasse();
                                    $nextInHaus[$n]['HallenOrt'] = $value->getHallenOrt();
                                    $n++;
                                }
                                
                            }
                            
                             $rsImg = Database::getInstance()
                                        ->prepare('SELECT tl_qsis_verein.id, tl_qsis_verein.code, tl_qsis_verein.image FROM '
                                                . 'tl_qsis_verein '
                                                . ' WHERE tl_qsis_verein.code=  '.$nextInHaus[0]['GastNr'])
                                        ->execute();
                             
                            $imgGast = $rsImg->fetchAllAssoc();
                            
                            $objFiles = FilesModel::findMultipleByIds(deserialize($imgGast[0]['image']));  
                            $strImage = $this->getImage($objFiles->path, 100, 100, 'center_center');  
                           
                            $valorUrlImageRival =   "./".$strImage; 
                
                
                            $nextInHaus[0]['GastImage'] = $valorUrlImageRival;
                            $listQuery = $nextInHaus;
                            break;
                }
            }
        $this->Template = new FrontendTemplate($this->strTemplate);  
 
        $this->Template->urlImageRival =  $valorUrlImageRival;
        $this->Template->resultsQuery =  $listQuery; 
        $this->Template->nOurVerein = $agent[0]['code'];
        $this->Template->typeQuery = $this->querysis;
              
        }
	
}
