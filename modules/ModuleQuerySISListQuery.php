<?php

class ModuleQuerySISListVerein extends Module
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_querysis_list_query';

	/**
	 * Compile the current element
	 */
	protected function compile()
	{
		$this->loadLanguageFile('tl_qsis_query');
	}
}
