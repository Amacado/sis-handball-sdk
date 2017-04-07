<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2017 Leo Feyer
 *
 * @license LGPL-3.0+
 */

/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
    'qSIS_Saludo'
));

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    // Modules
	'qSIS_Saludo' => 'system/modules/querySIS/modules/ModuleQSIS_Saludo.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_querySIS_saludo' => 'system/modules/querySIS/templates',
));
