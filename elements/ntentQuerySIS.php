
<?php
 
namespace esit\querySIS\classes\modules;
 
/**
 * Class easymodul
 * @package esit\querySISmodul\classes\modules
 */
class querySISmodule extends \Module
{
 
 
    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'mod_querySISmodul';
 
 
    /**
     * Generate the frontend output
     */
    protected function compile()
    {
        	$this->import('querySIS');
		$objConfig = new \stdClass();

		
    }
}