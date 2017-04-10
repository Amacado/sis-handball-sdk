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
	'moduleqsis_hallo' => 'system/modules/querySIS/modules/moduleqsis_hallo.php',
        'myQuerySIS' => 'system/modules/querySIS/classes/querySis.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_querysis_hallo' => 'system/modules/querySIS/templates',
));
