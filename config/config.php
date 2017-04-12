<?php
/**
 * Back end modules
 */
$GLOBALS['BE_MOD']['querySIS'] = array(
    

     'Liga' => array(
	'tables' => array('tl_qsis_liga'),
	'icon'   => 'system/modules/querySIS/assets/images/icon.png'
        ),
    'Verein' => array(
	'tables' => array('tl_qsis_verein'),
	'icon'   => 'system/modules/querySIS/assets/images/icon.png'
        ),
    
        
);

$GLOBALS['FE_MOD']['querySIS']['myquerySIS'] = 'system/modules/querySIS/classes/querySis';

/**
 * Front end modules
 */
$GLOBALS['FE_MOD']['querySIS'] = array
(
	
       'qsis_list'           => 'moduleqsis_list'
);






/**
 * Content elements
 */
$GLOBALS['TL_CTE']['querySIS'] = array(
    
    'querySIS_List_Spiel' => 'moduleqsis_list'
);

