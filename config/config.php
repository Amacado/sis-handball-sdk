<?php
/**
 * Back end modules
 */
$GLOBALS['BE_MOD']['querySIS'] = array(
    
    'Query' => array(
	'tables' => array('tl_qSIS_query'), 
	'icon'   => 'system/modules/querySIS/assets/images/icon.png'
        ),
     'Liga' => array(
	'tables' => array('tl_qSIS_liga'),
	'icon'   => 'system/modules/querySIS/assets/images/icon.png'
        ),
    'Verein' => array(
	'tables' => array('tl_qSIS_verein'),
	'icon'   => 'system/modules/querySIS/assets/images/icon.png'
        ),
    
        
);

/**
 * Front end modules
 */
$GLOBALS['FE_MOD']['querysis'] = array
(
	
       // 'qSISquery_list'     => 'ModuleQuerySISListQuery',
       // 'qSIS_verein_list'     => 'ModuleQuerySISListVerein',
);