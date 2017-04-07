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
	// Classes
	'querySIS' => 'system/modules/querySIS/classes/querySIS.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_querySIS_list' => 'system/modules/querySIS/templates',
));
