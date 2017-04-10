<?php


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
       // $m = $this->import('myQuerySIS'); 
        //$querys = new querySis();
        // $querys = $m->querySis();
	// $qs = new $m();
        // $a1 = $qs->nextGames("001517418000000000000000000000000022000", 15);
       
        $datainV = "Data in Variable";
        $this->Template->a = $datainV;
              
            
	}
}