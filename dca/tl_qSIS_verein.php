<?php
 

 
/**
 * Table tl_qSIS_verein
 */
$GLOBALS['TL_DCA']['tl_qsis_verein'] = array
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
				'id' => 'primary'
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
			'fields' => array('name'),
			'format' => '%s',
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
				'label' => &$GLOBALS['TL_LANG']['tl_qsis_verein']['edit'],
				'href'  => 'act=edit',
				'icon'  => 'edit.gif'
			),
			'delete' => array
			(
				'label'      => &$GLOBALS['TL_LANG']['tl_qsis_verein']['delete'],
				'href'       => 'act=delete',
				'icon'       => 'delete.gif',
				'attributes' => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
			),
			'show'   => array
			(
				'label'      => &$GLOBALS['TL_LANG']['tl_qsis_verein']['show'],
				'href'       => 'act=show',
				'icon'       => 'show.gif',
				'attributes' => 'style="margin-right:3px"'
			),
		)
	),  

// Palettes
    'palettes' => array
                (
                    'default'       => '{name_legend},name,code'
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
			'label'     => &$GLOBALS['TL_LANG']['tl_qsis_verein']['name'],
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
                'tstamp' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
                'code'    => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_qsis_verein']['code'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'sql'                     => "int(60) unsigned NOT NULL default '0'"
		)
       )
);
 