<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2017 Leo Feyer
 *
 * @license LGPL-3.0+
 */



/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    // Modules
	'moduleqsis_hallo'      => 'system/modules/querySIS/modules/moduleqsis_hallo.php',
  'moduleqsis_list'    => 'system/modules/querySIS/modules/moduleqsis_list.php',

	//classes
	'querySis' => 'system/modules/querysis/classes/querySis.php',

	

));





/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_qsis_list' => 'system/modules/querySIS/templates',
        'mod_qsis_list_tabelle' => 'system/modules/querySIS/templates',
        'mod_qsis_list_next' => 'system/modules/querySIS/templates',
        'mod_qsis_list_nexthaus' => 'system/modules/querySIS/templates',
        'mod_qsis_list_all' => 'system/modules/querySIS/templates',
        'mod_qsis_hallo' => 'system/modules/querySIS/templates',
));
