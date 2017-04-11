<?php


namespace Contao;


/**
 * Reads and writes Verein
 *
 * @property integer $id
 * @property string  $name
 * @property integer $code
 * @property integer $nResults
 * 
 * 
*/

class QsisQueryModel extends \Model
{

	/**
	 * Table name
	 * @var string
	 */
	protected static $strTable = 'tl_qSIS_query';

}