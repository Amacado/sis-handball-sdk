<?php
 
 
/**
 * Table tl_qSIS_liga
 */
$GLOBALS['TL_DCA']['tl_qSIS_query'] = array
(
 
	// Config
	'config'   => array
	(
		'dataContainer'    => 'Table',
		'enableVersioning' => true,
		'sql'              => array
		(
			'keys' => array
			(
				'id' => 'primary',
				'idVerein,idLiga' => 'index'
			)
		),
	),

// List
	'list'     => array
	(
		'sorting'           => array
		(
			'mode'        => 2,
			'fields'      => array('name'),
			'flag'        => 1,
			'panelLayout' => 'filter;sort,search,limit'
		),
            
        'label'             => array
                        (
                                'fields' => array('name','nResults','idVerein:tl_qsis_verein.name','idLiga:tl_qsis_liga.name'),
                                'format' => '<b>%s: %s</b> - %s [ %s ]',
                        ),  
            
            
            
'global_operations' => array
		(
			'all' => array
			(
				'label'      => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'       => 'act=select',
				'class'      => 'header_edit_all',
				'attributes' => 'onclick="Backend.getScrollOffset()" accesskey="e"'
			)
		),

'operations'        => array
		(
			'edit'   => array
			(
				'label' => &$GLOBALS['TL_LANG']['tl_qsis_query']['edit'],
				'href'  => 'act=edit',
				'icon'  => 'edit.gif'
			),
			'delete' => array
			(
				'label'      => &$GLOBALS['TL_LANG']['tl_qsis_query']['delete'],
				'href'       => 'act=delete',
				'icon'       => 'delete.gif',
				'attributes' => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
			),
			'show'   => array
			(
				'label'      => &$GLOBALS['TL_LANG']['tl_qsis_query']['show'],
				'href'       => 'act=show',
				'icon'       => 'show.gif',
				'attributes' => 'style="margin-right:3px"'
			),
		)
	),  

        // Palettes
                'palettes' => array
                (
                        'default'       => '{name_legend},type,name,{code_legend},code'
        ),    
    
    // Fields
	'fields'   => array
	(
		'id'     => array
		(
			'sql' => "int(10) unsigned NOT NULL auto_increment"
		),
		
		'name'  => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_qsis_query']['name'],
			'inputType' => 'text',
			'exclude'   => true,
			'sorting'   => true,
			'flag'      => 1,
                        'search'    => true,
			'eval'      => array(
				'mandatory'   => true,
                                'unique'         => true,
                                'maxlength'   => 255,
				'tl_class'        => 'w50',
 
			),
			'sql'       => "varchar(255) NOT NULL default ''"
		),
		'idVerein' => array
		(
			'foreignKey'              => 'tl_qsis_verein.name',
			'sql'                     => "int(10) unsigned NOT NULL default '0'",
			'relation'                => array('type'=>'belongsTo', 'load'=>'eager')
		),
            	'idLiga' => array
		(
			'foreignKey'              => 'tl_qsis_liga.name',
			'sql'                     => "int(10) unsigned NOT NULL default '0'",
			'relation'                => array('type'=>'belongsTo', 'load'=>'eager')
		),
                'nResults' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_qsis_query']['nResults'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'sql'                     => "int(4) unsigned NOT NULL default '0'"
		)
                
       )
);
 