<?php
/**
 * Back end modules
 */
$GLOBALS['BE_MOD']['querySIS'] = array(
    
    'Query' => array(
	'tables' => array('tl_qsis_query'), 
	'icon'   => 'system/modules/querySIS/assets/images/icon.png'
        ),
     'Liga' => array(
	'tables' => array('tl_qsis_liga'),
	'icon'   => 'system/modules/querySIS/assets/images/icon.png'
        ),
    'Verein' => array(
	'tables' => array('tl_qsis_verein'),
	'icon'   => 'system/modules/querySIS/assets/images/icon.png'
        ),
    
        
);



/**
 * Front end modules
 */
$GLOBALS['FE_MOD']['querySIS'] = array
(
	
       'qsis_hallo_welt'        => 'moduleqsis_hallo',
       'qsis_nachste'           => 'moduleqsis_nachste'
);






/**
 * Content elements
 */
$GLOBALS['TL_CTE']['querySIS'] = array(
    'querySIS Hallo Welt' => 'moduleqsis_hallo',
    'querySIS_List_Spiel' => 'moduleqsis_nachste'
);

