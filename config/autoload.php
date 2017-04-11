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
        'moduleqsis_nachste'    => 'system/modules/querySIS/modules/moduleqsis_nachste.php',
    

    
    // Classes
    'myQuerySIS'            => 'system/modules/querySIS/classes/querySis.php',
));





/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_qsis_nachste' => 'system/modules/querySIS/templates',
        'mod_qsis_hallo' => 'system/modules/querySIS/templates',
));
