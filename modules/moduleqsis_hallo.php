<?php
include_once  ('system/modules/querySIS/classes/querySis.php'); 
//require_once(dirname(__FILE__).'/../../querySIS/classes/querySis.php');
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
            
         //$m =  $this->import('myQuerySIS');  
        $myclass =  new querySis();
           // $myclass =  new querySis();
        $a1 = $myclass->nextGames("001517418000000000000000000000000022000", 15);
       
        $this->Template->a = $a1;
        //echo "IN moduleqsis_HALLO um: ". strftime(" %H:%M")."<br>";  
            
	}
}
