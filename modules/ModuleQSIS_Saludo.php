<?php


namespace Contao;


/**
 * Class ModuleQSIS_Saludo
 *
 */
class ModuleQSIS_Saludo extends \Module
{

    /**
    * Template
    * @var string
    */

    protected $strTemplate = 'mod_qsis_saludo';

    
    
    /**
	 * Generate the module
	 */
	protected function compile()
	{
           $this->Template->a = 1;
	}
    
}