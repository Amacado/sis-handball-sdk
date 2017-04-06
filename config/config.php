<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Add content element
 */
$GLOBALS['TL_CTE']['includes']['querySIS'] = 'ContentQuerySIS';


/**
 * Front end modules
 */
$GLOBALS['FE_MOD']['application']['querySIS'] = array('querySIS_list' => 'ModuleQuerySISList');


/**
 * Back end modules
 */
array_insert($GLOBALS['BE_MOD']['ElementSystem'], 0, array
(
	'querySIS' => array
	(
		'file'     => array('querySISmodul'),
		'icon'       => 'system/modules/querySIS/assets/images/icon.png',
		'stylesheet' => 'system/modules/querySIS/assets/css/style.css'
	)
));
