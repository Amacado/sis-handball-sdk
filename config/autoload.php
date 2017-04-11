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
    

    
    // Classes
    'myQuerySIS'            => 'system/modules/querySIS/classes/querySis.php',
));





/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_qsis_list' => 'system/modules/querySIS/templates',
        'mod_qsis_hallo' => 'system/modules/querySIS/templates',
));
