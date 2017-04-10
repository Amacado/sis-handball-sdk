<?php

include ('system/modules/querySIS/classes/querySis.php'); 
class moduleqsis_hallo extends \Module
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_qsis_hallo';
 
	/**
	 * Compile the current element
	 */
	protected function compile()
	{
        //$myclass = $this->import('myQuerySIS');    
       // $m = new a(); 
        $myclass =  new querySis();
         $a1 = $myclass->nextGames("001517418000000000000000000000000022000", 15);
       
       $datainV = "Data in Variable";
       // $datainV = $myclass->hallo();
        $this->Template->a = $a1;
              
            
	}
}
