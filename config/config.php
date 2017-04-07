<?php
/**
 * Back end modules
 */
$GLOBALS['BE_MOD']['querySIS'] = array(
    
    'Query' => array(
	'tables' => array('tl_qSIS_query'), //'tables'      => array('tl_article', 'tl_content'),
	'icon'   => 'system/modules/querySIS/assets/images/icon.png'
        ),
     'Liga' => array(
	'tables' => array('tl_qSIS_liga'), //'tables'      => array('tl_article', 'tl_content'),
	'icon'   => 'system/modules/querySIS/assets/images/icon.png'
        ),
    'Verein' => array(
	'tables' => array('tl_qSIS_verein'), //'tables'      => array('tl_article', 'tl_content'),
	'icon'   => 'system/modules/querySIS/assets/images/icon.png'
        ),
    
        
);

/**
 * Front end modules
 */
$GLOBALS['FE_MOD']['querysis'] = array
(
	
        'qSISquery_list'     => 'ModuleQuerySISListQuery',
        'qSIS_verein_list'     => 'ModuleQuerySISListVerein',
);