<?php


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
       // echo "IN moduleqsis_NACHSTE um: ". strftime(" %H:%M")."<br>";
        $datainV = "Data in Variable";
        
        $this->Template->b = $datainV;
              
          
	}
}
